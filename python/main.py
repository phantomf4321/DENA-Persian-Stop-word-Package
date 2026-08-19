import requests

API_URL = "https://sajjadranjbaryazdi.me/Dena_stopwords_API/V3/api/stopwords.php"
TOKEN = "YOUR_TOKEN"

response = requests.get(API_URL, params={"token": TOKEN}, timeout=20)
response.raise_for_status()
result = response.json()
stopwords = result["data"]
print("Number of stopwords:", len(stopwords))
print(stopwords)
