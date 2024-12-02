import os
import openai
import sys
#from azure.identity import AzureCliCredential, ChainedTokenCredential, ManagedIdentityCredential, EnvironmentCredential
from azure.identity import DefaultAzureCredential, get_bearer_token_provider
from openai import AzureOpenAI
# Define strategy which potential authentication methods should be tried to gain an access token

def main():
    token_credential = DefaultAzureCredential()
    token = token_credential.get_token('https://cognitiveservices.azure.com/.default')
    print(token.token)

if __name__ == "__main__":
    main()