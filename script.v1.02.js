
var chatContainer;

function resetSessionTimer(remainingTime = sessionTimeout) {
    clearTimeout(sessionTimer);
    sessionTimer = setTimeout(logoutUser, remainingTime);
}

function checkSessionStatus() {
    $.ajax({
        url: 'session_status.php',
        type: 'GET',
        dataType: 'json',
        success: function(response) {
            if (!response.session_active) {
                logoutUser();
            } else {
                resetSessionTimer(response.remaining_time * 1000); // Adjust timer based on server's response
            }
        },
        error: function() {
            console.error('Failed to check session status.');
        }
    });
}

function logoutUser() {
    alert("Your session has expired. Please log in again.");
    window.location.href = "logout.php";
}

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
document.getElementById('userMessage').addEventListener('input', (event) => {
    //coonsole.log("Input event for chat ID " + chatId);
    localStorage.setItem('chatDraft_' + chatId, event.target.value);
    //console.log("Saved draft message for chat ID " + chatId + ": ", event.target.value);
});

// $('#messageForm').submit(function(e) {
//     console.log("Form submission for chat ID " + chatId);
//     // Rest of the code...
//     localStorage.removeItem('chatDraft_' + chatId);
//     console.log("Cleared draft message for chat ID " + chatId);
// });

function sanitizeString(str) {
    var div = document.createElement('div');
    div.appendChild(document.createTextNode(str));
    return div.innerHTML;
}

function startNewChat() {
    $.ajax({
        type: "POST",
        url: "new_chat.php",
        dataType: 'json',
        success: function(response) {
            // Reset the session timer on every successful AJAX call
            resetSessionTimer();

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
                // Reset the session timer on every successful AJAX call
                resetSessionTimer();

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
    chatLink.replaceWith('<input class="edit-field" id="edit-input-' + chatId + '" type="text" aria-label="Chat title edit link" value="' + chatLink.text() + '"><img class="edit-confirm-icon" src="images/chat_check.png" alt="Check mark to confirm chat name edit">');

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
            // Reset the session timer on every successful AJAX call
            resetSessionTimer();

            // Reload the page to refresh the list of chats
            location.reload();
        }
    });
}

function fileUpload() {
    var selectedModel = $("#model option:selected").val();
    var fileUpload = $('input[type=file]')[0];
    var filename = fileUpload.files.length ? fileUpload.files[0].name : "";
    var fileSize = fileUpload.files[0].size;
    const fileSizeLimit = 5;

    var isValidFileName = false;
    var isValidFileSize = false;
    if (filename.length > 0 && /\.(pdf|docx|txt|md|json|xml)$/i.test(filename)) {
        isValidFileName = true;
    } 
    if (fileSize / 1024 / 1024 < fileSizeLimit) {//file size less than 5MB
        isValidFileSize = true;
    }
    if (!isValidFileName) {
        if (!isValidFileSize) {
            alert("The accepted document types are as follows: PDF, XML, JSON, Word, Text, and Markdown. And the file size limit is " + fileSizeLimit + "MB. Please check the uploaded file type and size.")
        } else {
            alert("The uploaded file type is not accepted. The accepted document types are as follows: PDF, XML, JSON, Word, Text, and Markdown.");
        }
    } else if (!isValidFileSize) {
        alert("The uploaded file size is too large. The limit size of uploaded file is " + fileSizeLimit + "MB.");
    } else {
        $("#fileUpload").submit();
    }

}

$(document).ready(function(){
    chatContainer = $(".chat-container");
    var userMessage = $("#userMessage");

    // Set focus on the message input
    userMessage.focus();

    /*
    $('#username').hover(function() {
        $('.logout-link').show();
    }, function() {
        $('.logout-link').hide();
    });
    */
    console.log(chatId);
    $.ajax({
        url: "get_messages.php",
        data: { chat_id: chatId, user: user },
        dataType: 'json',
        success: function(chatMessages) {
                resetSessionTimer(); // Reset the session timer on every successful AJAX call

            // Display messages from the selected chat
            chatMessages.forEach(function (message) {
                // Sanitize the received data
                var sanitizedPrompt = sanitizeString(message.prompt).replace(/\n/g, '<br>');
                var sanitizedReply = sanitizeString(message.reply).replace(/\n/g, '<br>');
                
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

                    // Display the assistant message (reply)
                    var assistantMessageElement = $('<div class="message assistant-message"></div>').html(sanitizedReply);
                    assistantMessageElement.prepend('<img src="' + imgSrc + '" alt="' + imgAlt + '" class="openai-icon">');
                    chatContainer.append(assistantMessageElement);
                    

                }
            });

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


        // Clear the textarea and localStorage right after form submission
        userMessage.val("");
        localStorage.removeItem('chatDraft_' + chatId);
        console.log("Form submitted and message cleared for chat ID " + chatId);




        if (messageContent !== "") {
            userMessage.val("");
            $.ajax({
                type: "POST",
                url: "ajax_handler.php",
                data: {
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
                    var deployment = jsonResponse['deployment'];
                    var error = jsonResponse['error'];
                    var userMessage = jsonResponse['userMessage'];
                    //console.log(error)
                    //console.log(deployment)
                    //console.log(gpt_response)


                    // Check if gpt_response is a JSON string, and if so, parse it
                    if (error == true) {
                        console.log("FOUND AN ERROR IN THE RESPONSE");
                        alert('Error: ' + gpt_response);
                        return;
                    }
                    
                    if(gpt_response === null ||gpt_response === undefined ) {
                        gpt_response = "The message could not be processed."
                    } 

                    if (gpt_response.startsWith('```') && gpt_response.endsWith('```')) {
                        gpt_response = gpt_response.slice(3, -3); // remove ```
                        var highlightedCode = hljs.highlightAuto(gpt_response);
                        gpt_response = '<pre><code>' + highlightedCode.value + '</code></pre>';
                    } else {
                        gpt_response = gpt_response.replace(/\n/g, '<br>');
                    }

                    if (jsonResponse.new_chat_id) {
                        //console.log(jsonResponse)
                        window.location.href = "/" + jsonResponse.new_chat_id;
                    }
                    
                    var userMessageDecoded = userMessage;
                    //console.log("this is the user message ")
                    //console.log(userMessageDecoded)
                    var sanitizedPrompt = sanitizeString(userMessageDecoded).replace(/\n/g, '<br>');
                    //console.log("this is the NOW SANITIZED user message ")
                    //console.log(sanitizedPrompt) 

                    // Display the user message (prompt)
                    var userMessageElement = $('<div class="message user-message"></div>').html(sanitizedPrompt);
                    userMessageElement.prepend('<img src="images/user.png" class="user-icon" alt="User icon">'); // Add user icon
                    chatContainer.append(userMessageElement);

                    // Check if the deployment configuration exists
                    if (deployments[deployment]) {
                        var imgSrc = 'images/' + deployments[deployment].image;
                        var imgAlt = deployments[deployment].image_alt;

                        // Display the assistant message (reply)
                        var assistantMessageElement = $('<div class="message assistant-message"></div>');
                        assistantMessageElement.prepend('<img src="' + imgSrc + '" alt="' + imgAlt + '" class="openai-icon">');
                        //chatContainer.append(assistantMessageElement);
                    }

                    // Create a span element to hold the formatted response
                    const responseTextNode = $('<span></span>').html(gpt_response);
                    assistantMessageElement.append(responseTextNode);

                    // Append the assistant message element to the chat container
                    chatContainer.append(assistantMessageElement);

                    // Scroll to the bottom of the chat container
                    chatContainer.scrollTop(chatContainer.prop("scrollHeight"));
                }
            });
        }
    });
});

function isScrolledIntoView(elem)
{
    var docViewTop = $(window).scrollTop();
    var docViewBottom = docViewTop + $(window).height();

    var elemTop = $(elem).offset().top;
    var elemBottom = elemTop + $(elem).height();

    return ((elemBottom <= docViewBottom - $(elem).height()) && (elemTop >= docViewTop));
}

//admin user datatable
$(document).ready(function(){
    $.ajax({
        url: "db.php",
        dataType: "json",
        method: "POST",
        data: {"callGetUsersData": "1"},
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
                        'api_keys':value.pilot_api_keys,
                        'llms_permitted':value.llms_permitted,
                        'accepted_date':value.updated_at
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
                    {   "title": "API Keys",
                        "name": "api_keys",
                        "data": "api_keys" 
                    },
                    {   "title": "LLMs Permitted",
                        "name": "llms_permitted",
                        "data": "llms_permitted" 
                    },
                    {   "title": "Accepted Date",
                        "name": "accepted_date",
                        "data": function (data, type, full, meta) { //get the date only
                            var dateTimeArr = data.accepted_date.split(" ");
                            return dateTimeArr[0];
                        }
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
                /* buttons: [
                    {
                        text: "Edit",
                        className: "editBtn",
                        enableControl: {
                            count: 1,
                            invert:true
                        },
                        action: function(e, dt, node, config) {
                            var oTable = $('#usersTable').DataTable();
                            var selectedRowData = oTable.rows('.selected').data();
                            var selectedRowIdArr = [];
                            var selectedRowIdsStr = "";
                        }

                    }
	            ], */
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
        } // end success function
    }); //end ajax
});

