import os

if 'queries.txt' in os.listdir():
    pass
    
else:
    os.system('"echo new db records >> queries.txt"')