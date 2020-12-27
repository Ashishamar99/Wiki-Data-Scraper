import pandas as pd
import requests
import logging
import sys
import os


# test_url = "https://en.wikipedia.org/wiki/List_of_areas_of_London"
# invalid_url="https://duckduckgo.com/?q=using+pandas+to+generate+csv+with+multiple+sheets&ia=web"

# Accept wiki pedia page URL as an argument. 
url = sys.argv[1]
wiki_url = requests.get(url)

try:
    # Using pandas to read any tables on the page, and storing them in wiki_data.
    # read_html returns a list of dataframes.
    wiki_data = pd.read_html(wiki_url.text)
    n = len(wiki_data)
    print(n)
    
    if n==0:
        print('Looks like there\'s no info to scrape, please try another page.')
        sys.exit(2) #No error, but page has no info which we can scrape.
    
    # Forming the csv files.
    for i in range(n):
        dataframe_name = f'Scraped Data {i+1}.csv'
        dataframe = wiki_data[i]
        dataframe.to_csv(dataframe_name)
    
    # move_csv() -> function to move the csvs to a particular folder, and combine them into one file.
    
except Exception as e:
    print("Oops! Looks like there's an error.")
    logging.error(f'{e.args} | {e.with_traceback}')
    sys.exit(1)