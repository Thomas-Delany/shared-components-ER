import os
import requests
from bs4 import BeautifulSoup
import json

# Base API URL (replace with your WordPress site's URL)
API_BASE_URL = "https://www.englishreservoir.es/wp-json/wp/v2/pages"

# Folder to save JSON files
OUTPUT_FOLDER = "wordpress_pages"

def fetch_pages(api_url):
    """Fetch all pages from the WordPress REST API."""
    pages = []
    while api_url:
        response = requests.get(api_url)
        if response.status_code != 200:
            raise Exception(f"Failed to fetch pages: {response.status_code} - {response.text}")
        data = response.json()
        pages.extend(data)
        # Check for next page in pagination
        api_url = response.links.get('next', {}).get('url')
    return pages

def extract_content(html_content):
    """Extract headers, paragraphs, and lists from HTML content."""
    soup = BeautifulSoup(html_content, 'html.parser')
    extracted_content = []
    for tag in soup.find_all(['h1', 'h2', 'h3', 'h4', 'h5', 'h6', 'p', 'ul', 'ol']):
        if tag.name in ['ul', 'ol']:
            extracted_content.append({tag.name: [li.get_text(strip=True) for li in tag.find_all('li')]})
        else:
            extracted_content.append({tag.name: tag.get_text(strip=True)})
    return extracted_content

def save_to_json(filename, data):
    """Save extracted content to a JSON file."""
    os.makedirs(OUTPUT_FOLDER, exist_ok=True)
    filepath = os.path.join(OUTPUT_FOLDER, filename + ".json")
    with open(filepath, "w", encoding="utf-8") as f:
        json.dump(data, f, indent=4, ensure_ascii=False)

def main():
    print("Fetching pages from WordPress...")
    pages = fetch_pages(API_BASE_URL)

    print(f"Found {len(pages)} pages. Processing...")
    for page in pages:
        slug = page['slug']
        content_html = page['content']['rendered']
        extracted_content = extract_content(content_html)
        save_to_json(slug, extracted_content)
        print(f"Saved: {slug}.json")

    print(f"All pages have been saved in the '{OUTPUT_FOLDER}' folder.")

if __name__ == "__main__":
    main()
