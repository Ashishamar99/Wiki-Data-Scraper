import pandas as pd
import requests
import logging
import sys
import os
from zipfile import ZipFile
import sqlite3

def status_write(message):
    status_file = open('status.log', 'w+')
    status_file.write(message)
    status_file.close()
    
def zip_all_csvs():
    mypath = os.getcwd()
    print(mypath)
    for (dirpath, dirnames, filenames) in os.walk(mypath):
        for myfile in filenames:
            if myfile.endswith('csv'):
                with ZipFile('Scraped_Data.zip', 'a') as zip_file:
                    zip_file.write(myfile)

def write_to_db(urlparam, statusparam):
    db_connection = sqlite3.connect('queries.db')
    my_cursor = db_connection.cursor()
    query_count = []
    try:
        for count,row in enumerate(my_cursor.execute("SELECT * FROM info")):
            query_count.append(count)
        if max(query_count) == 2:
            for count,row in enumerate(my_cursor.execute("SELECT * FROM info")):
                if count==0:
                    delete_stmt = f'DELETE FROM info where url="{row[0]}"'
                    my_cursor.execute(delete_stmt)
                    db_connection.commit()
        
        insert_stmt = f'INSERT INTO info VALUES ("{urlparam}","{statusparam}")'
        my_cursor.execute(insert_stmt)
        db_connection.commit()

    except Exception as e:
        print(e)

    finally:
        db_connection.close()
# test_url = "https://en.wikipedia.org/wiki/List_of_areas_of_London"
# invalid_url="https://duckduckgo.com/?q=using+pandas+to+generate+csv+with+multiple+sheets&ia=web"

# Read page URL from file, if it exists. 
if 'urlinput.log' in os.listdir():
    my_file = open('urlinput.log', 'r')

else:
    print('URL Input File Not Found')
    sys.exit(0)

url = my_file.read()
print(url)
my_file.close()

try:
    # Using pandas to read any tables on the page, and storing them in wiki_data.
    # read_html returns a list of dataframes.
    wiki_url = requests.get(url)
    wiki_data = pd.read_html(wiki_url.text)
    n = len(wiki_data)
    print(n)
    
    if n==0:
        print('Looks like there\'s no info to scrape, please try another page.')
        write_to_db(url, 'Error')
        status_write('Error')
        sys.exit(2) #No error, but page has no info which we can scrape.
    
    # Forming the csv files.
    for i in range(n):
        dataframe_name = f'Scraped Data {i+1}.csv'
        dataframe = wiki_data[i]
        dataframe.to_csv(dataframe_name)
    
    zip_all_csvs() # Function to move the csvs to a particular folder, and combine them into one file.
    write_to_db(url, 'Success')
    status_write('Success')
    
except Exception as e:
    print("Oops! Looks like there's an error.\n")
    logging.error(f'{e.args} | {e.with_traceback}')
    write_to_db(url, 'Error')
    status_write('Error')
    sys.exit(1)