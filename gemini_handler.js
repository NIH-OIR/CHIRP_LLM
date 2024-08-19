import {
    getGenerativeModel,
    fileToGenerativePart,
    updateUI,
} from "./geminiutils/shared.js";

async function run(prompt, files) {
    const imageParts = await Promise.all(
        [...files].map(fileToGenerativePart),
    );

    const model = await getGenerativeModel({
        model: "gemini-1.5-flash",
    });

    return model.generateContentStream([...imageParts, prompt]);
}

window.getResultFromGemini = async function(prompt, files) {
    // console.log("getResultFromGemini prompt: "+prompt);
    const result = await run(prompt, files);
    // console.log("getResultFromGemini result: "+result);
    return result;
};

window.updateUIFromGemini = async function(resultEl, getResult, streaming) {
    //console.log("updateUIFromGemini");
    const result = await updateUI (resultEl, getResult, streaming);
    //console.log("updateUIFromGemini result: "+result);
    return result;
};
