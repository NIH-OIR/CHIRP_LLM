import os
from google.cloud import aiplatform

# Set the environment variable to the path of your service account JSON key file
os.environ["GOOGLE_APPLICATION_CREDENTIALS"] = "/var/lib/chat/gemini_vertex-ai.key.json"

# Initialize Vertex AI with your project and location
project_id = "nih-od-oir-crispi-llm-gcp"
location = "us-central1"
aiplatform.init(project=project_id, location=location)

# Now, you can use the Vertex AI client to interact with the Gemini API

import base64
import vertexai
from vertexai.generative_models import GenerativeModel, Part, SafetySetting, FinishReason
import vertexai.preview.generative_models as generative_models


def generate():
    vertexai.init(project="nih-od-oir-crispi-llm-gcp", location="us-central1")
    
    # Initialize the model
    model = GenerativeModel("gemini-1.5-pro-001")
    
    # Define the prompt here
    prompt = "What's a good name for a flower shop that specializes in selling bouquets of dried flowers?"
    
    # Call generate_content with the prompt
    responses = model.generate_content(
        prompt,  # Pass the prompt here instead of an empty list
        generation_config=generation_config,
        safety_settings=safety_settings,
        stream=True,
    )

    # Print the generated responses
    for response in responses:
        print(response.text, end="")


generation_config = {
    "max_output_tokens": 8192,
    "temperature": 1,
    "top_p": 0.95,
}

safety_settings = [
    SafetySetting(
        category=SafetySetting.HarmCategory.HARM_CATEGORY_HATE_SPEECH,
        threshold=SafetySetting.HarmBlockThreshold.BLOCK_MEDIUM_AND_ABOVE
    ),
    SafetySetting(
        category=SafetySetting.HarmCategory.HARM_CATEGORY_DANGEROUS_CONTENT,
        threshold=SafetySetting.HarmBlockThreshold.BLOCK_MEDIUM_AND_ABOVE
    ),
    SafetySetting(
        category=SafetySetting.HarmCategory.HARM_CATEGORY_SEXUALLY_EXPLICIT,
        threshold=SafetySetting.HarmBlockThreshold.BLOCK_MEDIUM_AND_ABOVE
    ),
    SafetySetting(
        category=SafetySetting.HarmCategory.HARM_CATEGORY_HARASSMENT,
        threshold=SafetySetting.HarmBlockThreshold.BLOCK_MEDIUM_AND_ABOVE
    ),
]

generate()

