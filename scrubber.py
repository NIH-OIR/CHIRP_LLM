import scrubadub
import scrubadub.detectors
import argparse
import sys

def scrub_prompt(prompt):
    scrubber = scrubadub.Scrubber()
    scrubbed_prompt = scrubber.clean(prompt)
    return scrubbed_prompt

def main():
    parser = argparse.ArgumentParser(description="Scrub PII from a given prompt.")
    parser.add_argument("prompt", type=str, help="The prompt containing potential PII to be scrubbed.")
    
    args = parser.parse_args()

    scrubbed_prompt = scrub_prompt(args.prompt)
    print(scrubbed_prompt)

if __name__ == "__main__":
    main()

