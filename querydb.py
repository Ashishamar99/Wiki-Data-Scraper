import os
import sqlite3

if 'resultset.txt' in os.listdir():
    os.remove('resultset.txt')

# Creating db file if it doesn't exist.
if 'queries.db' in os.listdir():
    pass
else:
    db_connection = sqlite3.connect('queries.db')
    my_cursor = db_connection.cursor()
    my_cursor.execute("CREATE TABLE info (url text, status text)")
    db_connection.commit()
    db_connection.close()

db_connection = sqlite3.connect('queries.db')
my_cursor = db_connection.cursor()
# Since our database exists, let's fetch the records and dump them into a file called resultset.txt.
for row in my_cursor.execute("SELECT * FROM info"):
    print(row)
#os.system('"echo newer db records >> resultset.txt"')