import pandas as pd
import requests


# url_london = "https://en.wikipedia.org/wiki/List_of_areas_of_London"

# Accept wiki pedia page URL. 
url = input('Enter Wiki URL: ')
wiki_url = requests.get(url)

# Using pandas to read any tables on the page, and storing them in wiki_data.
# read_html returns a list of dataframes.
wiki_data = pd.read_html(wiki_url.text)
print(len(wiki_data))

dic = {}
lengths = []
for i in range(len(wiki_data)):
    lengths.append(len(wiki_data[i]))
table_pos = lengths.index(max(lengths))

for i in range(len(wiki_data)): 
    if i==table_pos:
        dic['Scraped Data'] = wiki_data[i]

# print(dic)
# df = pd.DataFrame.from_dict(dic, index=[0])
# df.to_csv('demo.csv')

df = wiki_data[table_pos]
df.to_csv('demo.csv')
# print(type(wiki_data[table_pos]), len(wiki_data[table_pos]))
# print('-----------------')
# df = pd.DataFrame.from_dict(dic)
print(type(df), df.shape)
print('-----------------')
print(df)