
var chatContainer;

// Modify the event listener for DOMContentLoaded
document.addEventListener('DOMContentLoaded', (event) => {
    console.log("DOMContentLoaded - Current chat ID: ", chatId);
    var savedMessage = localStorage.getItem('chatDraft_' + chatId);
    if (savedMessage) {
        document.getElementById('userMessage').value = savedMessage;
        console.log("Loaded saved message for chat ID " + chatId + ": ", savedMessage);
    } else {
        document.getElementById('userMessage').value = "";
        console.log("No saved message found for chat ID " + chatId);
    }
});

// Modify the event listener for the userMessage input
if (document.getElementById('userMessage') != null) {
    document.getElementById('userMessage').addEventListener('input', (event) => {
        //coonsole.log("Input event for chat ID " + chatId);
        localStorage.setItem('chatDraft_' + chatId, event.target.value);
        //console.log("Saved draft message for chat ID " + chatId + ": ", event.target.value);
    });
}

function sanitizeString(str) {
    var div = document.createElement('div');
    div.appendChild(document.createTextNode(str));
    return div.innerHTML;
}

function startNewChat(selectedModel) {
    $.ajax({
        type: "POST",
        url: "new_chat.php",
        data: {
            model: selectedModel,
        },
        dataType: 'json',
        success: function(response) {
            // The response should contain the new chat's ID
            var newChatId = response.chat_id;
            // Navigate to the new chat page
            window.location.href = "/" + newChatId;
        }
    });
}

function replaceNonAsciiCharacters(str) {
    // Replace certain non-ASCII characters with their ASCII equivalents
    str = str.replace(/[\u2018\u2019]/g, "'"); // Replace curly single quotes
    str = str.replace(/[\u201C\u201D]/g, '"'); // Replace curly double quotes
    str = str.replace(/\u2026/g, '...');      // Replace ellipsis
    // Add more replacements as needed
    
    // Remove any remaining non-ASCII characters
    //str = str.replace(/[^\x00-\x7F]/g, "");
    
    return str;
}

function base64DecodeUnicode(str) {
    // Decode base64, then URI decode to handle Unicode characters
    return decodeURIComponent(Array.prototype.map.call(atob(str), function(c) {
        return '%' + ('00' + c.charCodeAt(0).toString(16)).slice(-2);
    }).join(''));
}

function base64EncodeUnicode(str) {
    // Firstly, escape the string using encodeURIComponent to get the UTF-8 encoding of the character
    // Secondly, we convert the percent encodings into raw bytes, and finally to base64
    return btoa(encodeURIComponent(str).replace(/%([0-9A-F]{2})/g, (match, p1) => {
        return String.fromCharCode('0x' + p1);
    }));
}


function scrollToBottom() {
    const messageList = document.getElementById('messageList');
    messageList.scrollTop = messageList.scrollHeight;
}

function showIcons(chatItem) {
    $(chatItem).find('.chat-icon').css('visibility', 'visible');
}

function hideIcons(chatItem) {
    $(chatItem).find('.chat-icon').css('visibility', 'hidden');
}

function deleteChat(chatId) {
    if(confirm("Are you sure you want to delete this chat?")) {
        // Send an AJAX request to a PHP script to delete the chat
        $.ajax({
            type: "POST",
            url: "delete_chat.php",  // PHP script to delete the chat
            data: {
                chat_id: chatId
            },
            success: function() {

                // Reload the page to refresh the list of chats
                //location.reload();
                window.location.href = "/";
            }
        });
    }
}

function editChat(chatId) {
    // Get the chat item and chat link elements
    var chatItem = $("#chat-" + chatId);
    var chatLink = chatItem.find(".chat-link");

    // Replace the chat link with an input field and a submit button
    chatLink.replaceWith('<input class="edit-field" id="edit-input-' + chatId + '" type="text" aria-label="Chat title edit link" value="' + chatLink.text() 
                        + '"><svg class="edit-confirm-icon" title="Confirm" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="green" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">'
                        + '<polyline points="20 6 9 17 4 12" /></svg>');
    $('.edit-confirm-icon').tooltip({
        html : true,
        placement : "bottom",
    });
    // Add event listener for 'Enter' key on the input
    $("#edit-input-" + chatId).keypress(function(e) {
        if (e.which == 13) { // Check if the key pressed is 'Enter'
            e.preventDefault(); // Prevent default action (submission)
            submitEdit(chatId); // Trigger the submitEdit function
        }
    });
}

function submitEdit(chatId) {
    // Get the input field and its value
    var inputField = $("#edit-input-" + chatId);
    var newTitle = inputField.val();

    // Send an AJAX request to a PHP script to update the chat title
    $.ajax({
        type: "POST",
        url: "edit_chat.php",  // PHP script to edit the chat
        data: {
            chat_id: chatId,
            title: newTitle
        },
        success: function() {

            // Reload the page to refresh the list of chats
            location.reload();
        }
    });
}
const gptTextModelArr = ["azure-gpt4", "azure-gpt4-1"];
function fileUpload() {
    var selectedModel = $("#model option:selected").val();
    var fileUpload = $('input[type=file]')[0];
    var filename = fileUpload.files.length ? fileUpload.files[0].name : "";
    var fileSize = fileUpload.files[0].size;
    const fileSizeLimit = 20;

    var isValidFileName = false;
    var isValidFileSize = false;
    var isImage = false;

    // if (selectedModel == "azure-gpt4" && filename.length > 0 
    //     && /\.(pdf|docx|txt|md|json|xml|png|jpg|jpeg|gif)$/i.test(filename)) {
    if (gptTextModelArr.includes(selectedModel) && filename.length > 0 
        && /\.(pdf|docx|txt|md|json|xml|png|jpg|jpeg|gif)$/i.test(filename)) {
        isValidFileName = true;
    } 
    if (selectedModel == "aws-claude2" && filename.length > 0 
        && /\.(pdf|docx|txt|csv|xlsx)$/i.test(filename)) {
        isValidFileName = true;
    } 
    if (fileSize / 1024 / 1024 < fileSizeLimit) {//file size less than 5MB
        isValidFileSize = true;
    }
    if (filename.length > 0 && /\.(png|jpg|jpeg|gif)$/i.test(filename)) {
        isImage = true;
    }
    $("#uploadedFilename").val(filename);
    if (!isValidFileName) {
        // if (selectedModel == "azure-gpt4"){
        if (gptTextModelArr.includes(selectedModel)){
            if (!isValidFileSize) {
                alert("GPT-4 accepted document types are as follows: PDF, XML, JSON, Word, Text, and Markdown. And the file size limit is " + fileSizeLimit + "MB. Please check the uploaded file type and size.")
            } else {
                alert("The uploaded file type is not accepted. GPT-4 accepted document types are as follows: PDF, XML, JSON, Word, Text, and Markdown.");
            }
        } else if (selectedModel == "aws-claude2"){
            if (!isValidFileSize) {
                alert("Claude 2.1 accepted document types are as follows: PDF, Word, Text, CSV and Excel. And the file size limit is " + fileSizeLimit + "MB. Please check the uploaded file type and size.")
            } else {
                alert("The uploaded file type is not accepted. Claude 2.1 accepted document types are as follows: PDF, Word, Text, CSV and Excel.");
            }
        }
    } else if (!isValidFileSize) {
        alert("The uploaded file size is too large. The limit size of uploaded file is " + fileSizeLimit + "MB.");
    } else {
        // $("#fileUpload").submit();
        var formData = new FormData(); 
        formData.append('chat_id', chatId);
        formData.append('uploadDocument', fileUpload.files[0]);
        formData.append('deployment', selectedModel);

        $.ajax({
            url: "upload.php",
            type: 'POST',
            data: formData,
            contentType: false, 
            processData: false,
            beforeSend: function(){
				$("#loadingDiv").dialog("open");
                startServerPingInterval();
			},
            success: function (response) { 
                console.log('File uploaded successfully!'); 
                if (isImage){
                    var showUpdateImageElem = (`                        
                        <p style="font-size: small; margin-bottom:0;">Uploaded file:                    
                        <img src=`+response+` alt="Uploaded Image Thumbnail" style="max-width: 60px; max-height: 60px;margin-top: -10px;" />
                        <a href="upload.php?remove=1&chat_id=`+chatId+`" style="color: blue">Remove</a>
                        </p> `);
                    $("#fileUpload").append(showUpdateImageElem);  
                } else {
                    var uploadedFileName = $("#uploadedFilename").val();
                    var showUpdateFileElem = (`                        
                        <p style="font-size: small; margin-bottom:0;">Uploaded file: 
                        <span class="uploadFileSpan" title="`+uploadedFileName+`">`
                        +uploadedFileName+`</span>
                        <a href="upload.php?remove=1&chat_id=`+chatId+`" style="color: blue">Remove</a>
                        </p> `);

                    $("#fileUpload").append(showUpdateFileElem);
                }
                $("#loadingDiv").dialog("close");
            },
            error: function (jqXHR, textStatus, errorThrown) { 
                error.log('Error: ' + textStatus + ' - ' + ' - ' + errorThrown);
            }
        });
    }

}

// function removeUploadedFile() {

//     $.ajax({
//         url: "upload.php",
//         data: {"remove": "1", 
//                "chat_id": chatId
//             },
//         type: 'POST',
//         success: function (response) { 
//             console.log('File removed successfully!'); 
//             $("#uploadeFilePElem").remove();
//         },
//         error: function (jqXHR, textStatus, errorThrown) { 
//             error.log('Error: ' + textStatus + ' - ' + ' - ' + errorThrown);
//         }
//     });
// }

$(document).ready(function(){
    chatContainer = $(".chat-container");
    var userMessage = $("#userMessage");

    // Set focus on the message input
    userMessage.focus();

    console.log(chatId);

    $("#loadingDiv").dialog({
		autoOpen: false,
		height: 160,
		width: 240,
		dialogClass: 'no-close',
		closeOnEscape: false,
		position: { my: "center", at: "center", of: window },
		open: function() {
            $(".ui-dialog-titlebar").hide();
			$("#tabs-chat").css('opacity', '0.5');	
            $(".ui-dialog").css('border', 'none');
		},
		close: function() {
			$("#tabs-chat").css('opacity', '');
            $(".ui-dialog").css('border', '');
		}
	});

    var selectedModel = $("#model option:selected").val(); //console.log("selectedModel: " + selectedModel);
    var gpt4AttachmentTooltip ="Document types accepted for GPT-4 include PDF, XML, JSON, Word, Text, JPG, JPEG, PNG, GIF, and Markdown. GPT-4 does not support Excel or CSV files.";
    var claudeAttachmentTooltip ="Document types accepted for Claude 2.1 include CSV, Excel, PDF, Text, Word. Please notes that Claude 2.1 does not support images.";
    if (selectedModel == "azure-dall-e-3") {
        $("#attachmentIcon").hide();
        $("#model").prop("disabled", true);
    } else  {
        $("#attachmentIcon").show();
        if (selectedModel == "aws-claude2") {
            $("#attachmentIcon").attr("data-bs-original-title", claudeAttachmentTooltip)
                                .attr("data-original-title", claudeAttachmentTooltip).tooltip('update');
        } else {
            $("#attachmentIcon").attr("data-bs-original-title", gpt4AttachmentTooltip)
                                .attr("data-original-title", gpt4AttachmentTooltip).tooltip('update');
        }
    } 

    $("#model").change(function(){
        var selectedModel = $(this).val();
        if (selectedModel == "azure-dall-e-3") {
            $("#attachmentIcon").hide();

            var hasPreviousChat = $("#messageList").text();
            if (hasPreviousChat) {
                startNewChat(selectedModel);
            } else {
                $("#model").prop("disabled", true);
            }

        } else {
            $("#attachmentIcon").show();
            if (selectedModel == "aws-claude2") {
                $("#attachmentIcon").attr("data-bs-original-title", claudeAttachmentTooltip)
                                    .attr("data-original-title", claudeAttachmentTooltip).tooltip('update');
                $("#fileUploadInput").prop("accept", ".csv,.pdf,.docx,.txt,.xlsx");
            } else {
                $("#attachmentIcon").attr("data-bs-original-title", gpt4AttachmentTooltip)
                                    .attr("data-original-title", gpt4AttachmentTooltip).tooltip('update');
                $("#fileUploadInput").prop("accept", ".pdf,.docx,.txt,.md,.json,.xml,.png,.jpg,.jpeg,.gif");
            }
        }
    });
    //load message
    $.ajax({
        url: "get_messages.php",
        data: { chat_id: chatId, user: user },
        dataType: 'json',
        success: function(chatMessages) {
            displayMessages(chatMessages);

            // Scroll to bottom after displaying messages
            scrollToBottom();
        }
    });

    // Event delegation
    $(document).on('mouseover', '.chat-item', function () {
        if ($(this).find('.edit-field').length) {
            hideIcons(this);
        } else {
            showIcons(this);
        }
    });

    $(document).on('mouseout', '.chat-item', function () {
        hideIcons(this);
    });

    $(document).on('click', '.edit-icon', function () {
        var chatId = $(this).parent().attr('id').split('-')[1];
        hideIcons($("#"+$(this).parent().attr('id')));
        editChat(chatId);
    });

    $(document).on('click', '.delete-icon', function () {
        var chatId = $(this).parent().attr('id').split('-')[1];
        deleteChat(chatId);
    });

    $(document).on('click', '.edit-confirm-icon', function () {
        var chatId = $(this).prev().attr('id').split('-')[2];
        submitEdit(chatId);
    });



    // Event listener for the Enter key press
    $("#userMessage").on("keydown", function (e) {
        if (e.keyCode == 13 && !e.shiftKey) {
            e.preventDefault();       
            $('#messageForm').submit();          
        }
    });
    // Event listener for form submission
    $('#messageForm').submit(function(e) {
        e.preventDefault();
        var rawMessageContent = userMessage.val().trim();
        var sanitizedMessageContent = replaceNonAsciiCharacters(rawMessageContent);
        
        // Optionally, show a warning if the message was modified
        if (sanitizedMessageContent !== rawMessageContent) {
            if (!confirm("Your message contains some special characters that might cause issues. Click OK to send the modified message or Cancel to edit your message.")) {
                return;
            }
        }

        var messageContent = base64EncodeUnicode(sanitizedMessageContent); // Encode in Base64 UTF-8


        // Display the user message (prompt) immediately after submission
        if (sanitizedMessageContent !== "") {
            var userMessageDecoded = base64DecodeUnicode(messageContent);
            var sanitizedPrompt = sanitizeString(userMessageDecoded).replace(/\n/g, '<br>');
            var userMessageElement = $('<div class="message user-message"></div>').html(sanitizedPrompt);
            userMessageElement.prepend('<img src="images/user.png" class="user-icon" alt="User icon">');
            chatContainer.append(userMessageElement);
            // Scroll to the bottom of the chat container
            chatContainer.scrollTop(chatContainer.prop("scrollHeight"));
            // Clear the textarea and localStorage right after form submission
            userMessage.val("");
            localStorage.removeItem('chatDraft_' + chatId);
        }

        if (messageContent !== "") {
            userMessage.val("");
            $.ajax({
                type: "POST",
                url: "ajax_handler.php",
                data: {
                    model: $("#model option:selected").val(),
                    message: messageContent,
                    chat_id: chatId, // Assuming chatId is defined and holds the correct value
                    user: user // Assuming user is defined and holds the correct value
                },

                beforeSend: function() {
                    $('.waiting-indicator').show();
                },
                error: function() {
                    $('.waiting-indicator').hide();
                },
                success: function (response) {
                    // Hide the waiting indicator
                    $('.waiting-indicator').hide();

                    //console.log("This is the response - ");
                    //console.log(response);

                    var jsonResponse = JSON.parse(response);
                    var gpt_response = jsonResponse['gpt_response'];
                    // Store the raw response
                    var raw_gpt_response = gpt_response;

                    var deployment = jsonResponse['deployment'];
                    var error = jsonResponse['error'];
                    var userMessage = jsonResponse['userMessage'];
                    var chat_title = jsonResponse['chat_title'];
                    //console.log(error);
                    //console.log(deployment);
                    //console.log(gpt_response);
                    //console.log(chat_title);


                    // Check if gpt_response is a JSON string, and if so, parse it
                    if (error == true) {
                        console.log("FOUND AN ERROR IN THE RESPONSE");
                        alert('Error: ' + gpt_response);
                        return;
                    }
                    
                    if(!gpt_response) {
                        gpt_response = "The message could not be processed."
                    } 
                    if (deployment !== "azure-dall-e-3") {
                        gpt_response = formatCodeBlocks(gpt_response);
                    }
                    if (jsonResponse.new_chat_id) {
                        console.log(jsonResponse.new_chat_id)
                        // window.location.href = "/" + jsonResponse.new_chat_id;
                        if ($("#chat-"+jsonResponse.new_chat_id).length) {
                            $("#chat-"+jsonResponse.new_chat_id + " > a").text(chat_title);
                            $("#chat-"+jsonResponse.new_chat_id + " > a").prop("title", chat_title);
                        } else {
                            var newChatElement = $(`<div class="chat-item current-chat" id="chat-`+jsonResponse.new_chat_id+`">
                                <a class="chat-link chat-title" title="`+chat_title+`" href="`+jsonResponse.new_chat_id+`">`+chat_title+`</a>
                                <svg class="chat-icon edit-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" 
                                    aria-label="Rename" data-bs-original-title="Rename" style="visibility: hidden;">
                                    <path fill-rule="evenodd" clip-rule="evenodd" 
                                    d="M13.2929 4.29291C15.0641 2.52167 17.9359 2.52167 19.7071 4.2929C21.4784 6.06414 21.4784 8.93588 19.7071 10.7071L18.7073 11.7069L11.6135 18.8007C10.8766 19.5376 9.92793 20.0258 8.89999 20.1971L4.16441 20.9864C3.84585 21.0395 3.52127 20.9355 3.29291 20.7071C3.06454 20.4788 2.96053 20.1542 3.01362 19.8356L3.80288 15.1C3.9742 14.0721 4.46243 13.1234 5.19932 12.3865L13.2929 4.29291ZM13 7.41422L6.61353 13.8007C6.1714 14.2428 5.87846 14.8121 5.77567 15.4288L5.21656 18.7835L8.57119 18.2244C9.18795 18.1216 9.75719 17.8286 10.1993 17.3865L16.5858 11L13 7.41422ZM18 9.5858L14.4142 6.00001L14.7071 5.70712C15.6973 4.71693 17.3027 4.71693 18.2929 5.70712C19.2831 6.69731 19.2831 8.30272 18.2929 9.29291L18 9.5858Z" fill="currentColor"></path>
                                </svg>
                                <svg class="chat-icon delete-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" aria-label="Delete" data-bs-original-title="Delete" style="visibility: hidden;">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M10.5555 4C10.099 4 9.70052 4.30906 9.58693 4.75114L9.29382 5.8919H14.715L14.4219 4.75114C14.3083 4.30906 13.9098 4 13.4533 4H10.5555ZM16.7799 5.8919L16.3589 4.25342C16.0182 2.92719 14.8226 2 13.4533 2H10.5555C9.18616 2 7.99062 2.92719 7.64985 4.25342L7.22886 5.8919H4C3.44772 5.8919 3 6.33961 3 6.8919C3 7.44418 3.44772 7.8919 4 7.8919H4.10069L5.31544 19.3172C5.47763 20.8427 6.76455 22 8.29863 22H15.7014C17.2354 22 18.5224 20.8427 18.6846 19.3172L19.8993 7.8919H20C20.5523 7.8919 21 7.44418 21 6.8919C21 6.33961 20.5523 5.8919 20 5.8919H16.7799ZM17.888 7.8919H6.11196L7.30423 19.1057C7.3583 19.6142 7.78727 20 8.29863 20H15.7014C16.2127 20 16.6417 19.6142 16.6958 19.1057L17.888 7.8919ZM10 10C10.5523 10 11 10.4477 11 11V16C11 16.5523 10.5523 17 10 17C9.44772 17 9 16.5523 9 16V11C9 10.4477 9.44772 10 10 10ZM14 10C14.5523 10 15 10.4477 15 11V16C15 16.5523 14.5523 17 14 17C13.4477 17 13 16.5523 13 16V11C13 10.4477 13.4477 10 14 10Z" fill="currentColor"></path>
                                </svg>
                            </div>`);

                            $(".left-nav-chat-list").prepend(newChatElement);
                        }
                    }

                    // Check if the deployment configuration exists
                    if (deployments[deployment]) {
                        var imgSrc = 'images/' + deployments[deployment].image;
                        var imgAlt = deployments[deployment].image_alt;

                        // Create the assistant message element
                        var assistantMessageElement = $('<div class="message assistant-message" style="margin-bottom: 30px;"></div>');
                        
                        // Add the assistant's icon
                        assistantMessageElement.prepend('<img src="' + imgSrc + '" alt="' + imgAlt + '" class="openai-icon">');
                    
                        if (deployment == "azure-dall-e-3") {
                            var imgBlob = "data:image/png;base64,"+ raw_gpt_response;
                            var imageDisplayDiv = $('<div class="image-display"><img src="' + imgBlob + '" width="200"></div>')
                            assistantMessageElement.append(imageDisplayDiv);
                            // Append the assistant message to the chat container
                            chatContainer.append(assistantMessageElement);
                            addDownloadIcon(imageDisplayDiv, raw_gpt_response);

                        } else {
                            assistantMessageElement.append('<span>' + gpt_response + '</span>');
                            // Append the assistant message to the chat container
                            chatContainer.append(assistantMessageElement);
                            addCopyButton(assistantMessageElement, raw_gpt_response); 
                        }             
                    }

                    // Scroll to the bottom of the chat container
                    chatContainer.scrollTop(chatContainer.prop("scrollHeight"));

                    // Re-run Highlight.js on the newly added content
                    hljs.highlightAll();
                }
            });
        }
    });
    $('.image-download-button').tooltip({
        html : true,
        placement : "top",
    });
});

function displayMessages(chatMessages) {
    // Display messages from the selected chat
    chatMessages.forEach(function (message) {
        // Sanitize the received data
        var sanitizedPrompt = sanitizeString(message.prompt).replace(/\n/g, '<br>');

        // Format the reply to include code blocks
        var sanitizedReply = formatCodeBlocks(message.reply);
        
        if(sanitizedPrompt.length){
            // Display the user message (prompt)
            var userMessageElement = $('<div class="message user-message"></div>').html(sanitizedPrompt);
            userMessageElement.prepend('<img src="images/user.png" class="user-icon">'); // Add user icon
            chatContainer.append(userMessageElement);
        }

        // Check if the deployment configuration exists
        if (deployments[message.deployment]) {
            var imgSrc = 'images/' + deployments[message.deployment].image;
            var imgAlt = deployments[message.deployment].image_alt;

            var assistantMessageElement = $('<div class="message assistant-message"></div>');
            var openaiIcon = $('<img src="' + imgSrc + '" alt="' + imgAlt + '" class="openai-icon">');
            if (deployment !== "azure-dall-e-3") {
                assistantMessageElement.html(sanitizedReply);
                // Add the assistant's icon
                assistantMessageElement.prepend(openaiIcon);

                // Append the assistant message to the chat container
                chatContainer.append(assistantMessageElement);
                addCopyButton(assistantMessageElement, message.reply);
            } else {
                var imgBlob = "data:image/png;base64,"+ message.reply;
                var imageDisplayDiv = $('<div class="image-display"><img src="' + imgBlob + '" width="200"></div>');
                assistantMessageElement.html(imageDisplayDiv);
                // Add the assistant's icon
                assistantMessageElement.prepend(openaiIcon);

                // Append the assistant message to the chat container
                chatContainer.append(assistantMessageElement);
                addDownloadIcon(imageDisplayDiv, message.reply);
                $('.image-download-button').tooltip({
                    html : true,
                    placement : "right",
                });
            }
        }

        // Re-run Highlight.js on new content
        hljs.highlightAll();
    });
};

function formatCodeBlocks(reply) {
    // Array to hold code blocks temporarily
    let codeBlocks = [];

    // Extract and replace code blocks with placeholders
    reply = reply.replace(/```(\w*)\n([\s\S]*?)```/g, function(match, lang, code) {
        // If language is specified, use it; otherwise default to plaintext
        var languageClass = lang ? `language-${lang}` : 'plaintext';

        // Escape the code content before inserting it
        const sanitizedCode = sanitizeString(code);

        // Save the code block in an array
        codeBlocks.push(`
            <div class="code-block">
                <div class="language-label">${lang || 'code'}</div>
                <button class="copy-button" title="Copy Code" aria-label="Copy code to clipboard" onclick="copyToClipboard(this)">
                    <span style="font-size:12px;">Copy Code</span>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                        <path d="M16 1H4c-1.1 0-2 .9-2 2v14h2V3h12V1zm3 4H8c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h11c1.1 0 2-.9 2-2V7c0-1.1-.9-2-2-2zm0 16H8V7h11v14z"></path>
                    </svg>
                </button>
                <pre><code class="${languageClass}">${sanitizedCode}</code></pre>
            </div>`);

        // Return a placeholder to be replaced later
        return `__CODE_BLOCK_${codeBlocks.length - 1}__`;
    });

    // Use marked.parse to handle markdown parsing on the rest of the content
    reply = marked.parse(reply);

    // Replace placeholders with the original code block HTML
    codeBlocks.forEach((block, index) => {
        reply = reply.replace(`<strong>CODE_BLOCK_${index}</strong>`, block);
    });

    return reply;
};

// Function to add the copy button
function addCopyButton(messageElement, rawMessageContent) {
    // Create the copy button without the onclick attribute
    var copyButton = $(`
        <button class="copy-chat-button" title="Copy Raw Reply" aria-label="Copy the current reply to clipboard">
            <span style="font-size:12px;">Copy Raw Reply</span>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                <path d="M16 1H4c-1.1 0-2 .9-2 2v14h2V3h12V1zm3 4H8c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h11c1.1 0 2-.9 2-2V7c0-1.1-.9-2-2-2zm0 16H8V7h11v14z"></path>
            </svg>
        </button>
    `);

    // Append the copy button to the message element
    messageElement.append(copyButton);

    // Set the position of the message element to relative
    messageElement.css('position', 'relative');

    // Copy the raw content to clipboard on click
    copyButton.on('click', function() {
        if (navigator.clipboard && window.isSecureContext) {
            navigator.clipboard.writeText(rawMessageContent);
        } else {
            // Use the 'out of viewport hidden text area' trick
            const textArea = document.createElement("textarea");
            textArea.value = rawMessageContent;
                
            // Move textarea out of the viewport so it's not visible
            textArea.style.position = "absolute";
            textArea.style.left = "-999999px";
                
            document.body.prepend(textArea);
            textArea.select();
    
            try {
                document.execCommand('copy');
            } catch (error) {
                console.error(error);
            } finally {
                textArea.remove();
            }
        }
        // Create a subtle popup message
        var popup = $('<span class="copied-chat-popup show">Copied!</span>');
            
        // Style the popup (adjust positioning as needed)
        popup.css({
            position: 'absolute',
            top: copyButton.position().top, // Adjust this value as needed
            left: copyButton.position().left + 140,
        });

        // Append the popup to the message element
        messageElement.append(popup);

        // Remove the popup after 2 seconds
        setTimeout(function() {
            popup.remove();
        }, 2000);
    });
}

function addDownloadIcon(imgElement, imgBlob){
    var downloadIcon = $(`
        <button class="image-download-button" title="Download" aria-label="Download">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" 
                stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M3 15v4c0 1.1.9 2 2 2h14a2 2 0 0 0 2-2v-4M17 9l-5 5-5-5M12 12.8V2.5"/>
            </svg>
        </button>
    `);
    imgElement.append(downloadIcon);
    downloadIcon.on('click', function() {
    //     fetch(imgUrl)
    //     .then(resp => resp.blob())
    //     .then(blob => {
    //         const url = window.URL.createObjectURL(blob);
        imgBlob = "data:image/png;base64,"+ imgBlob;
        var a = document.createElement('a');
        a.style.display = 'none';
        a.href = imgBlob;
        // the filename you want
        a.download = 'myDalleImage.png';
        document.body.appendChild(a);
        a.click();
        document.body.removeChild(a);
        // })
        // .catch(() => alert('An error in getting image blob'));
    });
}

// Copy code to clipboard function
function copyToClipboard(button) {
    var code = button.parentNode.querySelector('pre code').textContent;
    // navigator.clipboard.writeText(code).then(() => {
    //     var popup = document.createElement('span');
    //     popup.className = 'copied-popup show';
    //     popup.textContent = 'Copied!';
    //     button.parentNode.appendChild(popup);
    //     setTimeout(() => {
    //         popup.remove();
    //     }, 2000);
    // });
    if (navigator.clipboard && window.isSecureContext) {
        navigator.clipboard.writeText(code);
    } else {
        // Use the 'out of viewport hidden text area' trick
        const textArea = document.createElement("textarea");
        textArea.value = code;
            
        // Move textarea out of the viewport so it's not visible
        textArea.style.position = "absolute";
        textArea.style.left = "-999999px";
            
        document.body.prepend(textArea);
        textArea.select();

        try {
            document.execCommand('copy');
        } catch (error) {
            console.error(error);
        } finally {
            textArea.remove();
        }
    }
    var popup = document.createElement('span');
    popup.className = 'copied-popup show';
    popup.textContent = 'Copied!';
    button.parentNode.appendChild(popup);
    setTimeout(() => {
        popup.remove();
    }, 2000);
}

function isScrolledIntoView(elem)
{
    var docViewTop = $(window).scrollTop();
    var docViewBottom = docViewTop + $(window).height();

    var elemTop = $(elem).offset().top;
    var elemBottom = elemTop + $(elem).height();

    return ((elemBottom <= docViewBottom - $(elem).height()) && (elemTop >= docViewTop));
}

//admin user datatable
//$(document).ready(function(){



function loadUsers() {
    $.ajax({
        url: "db.php",
        dataType: "json",
        method: "POST",
        data: {"callGetUsersData": "1"},
        beforeSend: function(){
            $("#loadingDiv").dialog("open");
        },
        success: function(response){

            var return_data = new Array();
            $.each(response, function() {
                $.each(this, function(key, value){
                    return_data.push({
                        'id': value.id,
                        'userid': value.userid,
                        'first_name': value.first_name,
                        'last_name': value.last_name,
                        'email':value.email,
                        'role': value.role,
                        'ic':value.ic,
                        'isAdmin':value.is_admin ? 'Yes' : 'No',
                       // 'api_keys':value.pilot_api_keys,
                       // 'llms_permitted':value.llms_permitted,
                        'lastLogonDate':value.last_logon,
                        'accepted_date':value.updated_at,
                        'isActive':value.is_active ? 'Yes' : 'No',
                        'isInWhitelist':value.is_in_whitelist ? 'Yes' : 'No',
                    });
                });
            });
            //console.log("return_data: "+JSON.stringify(return_data));

            var oTable = $('#usersTable').DataTable({
                data: return_data,
                // rowId: "id",
                columns: [
                    { "data": function (data, type, full, meta) { 
                        return "";
                    }
                    },
                    {  "title": "Name",
                        "name": "userFullName",
                        "data": function (data, type, full, meta) { //full name = lastname, firstname
                            return data.last_name + ", "+ data.first_name;
                        }
                    },
                    {   "title": "Email",
                        "name": "email",
                        "data": "email"
                    },
                    {   "title": "Role",
                        "name": "role",
                        "data": "role"
                    },
                    {   "title": "IC",
                        "name": "ic",
                        "data": "ic" 
                    },
                    {   "title": "Is Admin",
                        "name": "isAdmin",
                        "data": "isAdmin" 
                    },
                    // {   "title": "API Keys",
                    //     "name": "api_keys",
                    //     "data": "api_keys" 
                    // },
                    // {   "title": "LLMs Permitted",
                    //     "name": "llms_permitted",
                    //     "data": "llms_permitted" 
                    // },
                    {   "title": "Accepted Date",
                        "name": "accepted_date",
                        "data": function (data, type, full, meta) { //get the date only
                            var dateTimeArr = data.accepted_date.split(" ");
                            return dateTimeArr[0];
                        }
                    },
                    {   "title": "Last Logon Date",
                        "name": "lastLogonDate",
                        "data": function (data, type, full, meta) { //get the date only
                            var dateTimeArr = data.lastLogonDate.split(" ");
                            return dateTimeArr[0];
                        }
                    },
                    {   "title": "Is Active",
                        "name": "isActive",
                        "data": "isActive" 
                    },
                    {   "title": "In Whitelist",
                        "name": "isInWhitelist",
                        "data": "isInWhitelist" 
                    }
                ],
                dom: 'Bfrtip',
                //pageLength: 10,
                paging: false,
                scrollCollapse: true,
                scrollY: '50vh',
                scrollX: false,
                order: [[1, 'asc']],
                select: {
                    style: 'os',
                    selector: 'td:first-child',
                    headerCheckbox: false
                },
                columnDefs: [
                    {
                        targets: 0,
                        orderable: false,
                        className: 'select-checkbox'
                        
                    }
                ],
                buttons: [
                    {
                        text: "Export to CSV",
                        className: "exportToCsvBtn",
                        title: "ChIRP_userlist",
                        extend: 'csv',
                        extension: '.csv',
                        enabled: true,
                        exportOptions: {
                            columns: 'th:not(:first-child)'
                        },
                    }
	            ],
                initComplete : function(settings, json) {
                    $("#usersTable_paginate > span > a").removeClass("paginate_button");
                    var api = this.api();
                    count = 0;
                    $('.filterhead', api.table().header()).each( function (i) {
                        var column = api.column(i);
                        var title = column.title();

                        //replace spaces with dashes
                        title = title.replace(/[\W]/g, '-');
                        if(title.length > 0) { 
                        var select = $('<select id="' + title + '" class="select2" multiple="true" ></select>')
                            .appendTo( $(this).empty() )
                            .on( 'change', function () {
                            var data = $.map( $(this).select2('data'), function( value, key ) {
                                return value.text ? '^' + $.fn.dataTable.util.escapeRegex(value.text) + '$' : null;
                            });
                            
                            //if no data selected use ""
                            if (data.length === 0) {
                                data = [""];
                            }
                            
                            //join array into string with regex or (|)
                            var val = data.join('|');
                            
                            //search for the option(s) selected
                            column.search( val ? val : '', true, false ).draw();
                        });


                        column.data().unique().sort().each( function ( d, j ) {
                            select.append( '<option value="'+d+'">'+d+'</option>' );
                        } );
                    
                        //use column title as selector and placeholder
                        $('#' + title).select2({
                            placeholder: "Select a " + title
                        });

                        $('.select2').val(null).trigger('change');
                        }
                    } );

                    var oTable = $('#usersTable').DataTable();

                    oTable.on('select', function(e, dt, type, indexes) {
                        var selectedRowData = oTable.rows('.selected').data()[0];
                        var selectedUserId = selectedRowData.userid;
                        var selectedUserFullName = selectedRowData.first_name + " " + selectedRowData.last_name;
                        var selectedIsAdmin = selectedRowData.isAdmin;
                        //console.log("selectedRowData: "+JSON.stringify(selectedRowData));
                        //console.log("selectedUserFullName: "+selectedUserFullName+" selectedIsAdmin: "+selectedIsAdmin);

                        $("#userFullNameInput").text(selectedUserFullName);
                        $("#selectedUserId").val(selectedUserId);
                        if (selectedIsAdmin == "Yes") {
                            $("input[name=isAdminUser][value='1']").prop('checked', true);
                        } else {
                            $("input[name=isAdminUser][value='0']").prop('checked', true);
                        }
                        $("#userInfoForm").show();
                    });
                    oTable.on('deselect', function(e, dt, type, indexes) {
                        $("#selectedUserId").val("");
                        $("#userFullNameInput").text("");
                        $("input[name=isAdminUser]").prop('checked', false);
                        $("#userInfoForm").hide();
                    });
                }
            }); //end DataTable
            $("#loadingDiv").dialog("close");
        } // end success function
    }); //end ajax
}
//}); //end $(document).ready
