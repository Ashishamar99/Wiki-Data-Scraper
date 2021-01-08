import os

if 'queries.txt' in os.listdir():
    pass
    
else:
    os.system('"echo db records >> queries.txt"')