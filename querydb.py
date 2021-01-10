import os
import sqlite3
import json

if 'resultset.json' in os.listdir():
    os.remove('resultset.json')

# Creating db file if it doesn't exist.
if 'queries.db' in os.listdir():
    pass
else:
    db_connection = sqlite3.connect('queries.db')
    my_cursor = db_connection.cursor()
    my_cursor.execute("CREATE TABLE info (url text, status text)")
    db_connection.commit()
    my_cursor.execute('INSERT INTO info VALUES ("urlparam","statusparam")')
    db_connection.commit()
    db_connection.close()

db_connection = sqlite3.connect('queries.db')
my_cursor = db_connection.cursor()
# Since our database exists, let's fetch the records and dump them into a file called resultset.txt.
try:
    result_dict = {"id":("url", "status")}
    url_id = 1
    for row in my_cursor.execute("SELECT * FROM info"):
        result_dict[url_id] = row
        url_id += 1
    print(result_dict)
    
    result_file = open('resultset.json', 'w+')
    result_json = json.dumps(result_dict)
    result_file.write(result_json)
    
except Exception as e:
    print('Error Occured.')
    print(e)

finally:
    result_file.close()
    db_connection.close()
#os.system('"echo newer db records >> resultset.txt"')