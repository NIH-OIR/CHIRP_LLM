#!/home/azureuser/anaconda3/bin/python3
import fitz  # PyMuPDF
import sys

def parse_pdf(file):
    try:
        doc = fitz.open(file)
        text = ""
        for page_num in range(len(doc)):
            page = doc.load_page(page_num)
            text += page.get_text()
    except Exception as e:
        return f"Error extracting text from PDF: {str(e)}"

    if text.strip() == "":
        return "The file returned no content"
    else:
        return text

if __name__ == '__main__':
    if len(sys.argv) < 2:
        print("Usage: python3 basic_pdf_parser.py <file_path>")
        sys.exit(1)
    text = parse_pdf(sys.argv[1])
    print(text)

