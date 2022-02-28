import csv
import re 
#class for fun colors 
class bcolors:
    HEADER = '\033[95m'
    OKBLUE = '\033[94m'
    OKCYAN = '\033[96m'
    OKGREEN = '\033[92m'
    WARNING = '\033[93m'
    FAIL = '\033[91m'
    ENDC = '\033[0m'
    BOLD = '\033[1m'
    UNDERLINE = '\033[4m'

with open("/home/hugo/Documents/programs/laton/tt1.txt", newline='') as csvfile: 
    ll = []  
    readObject = csv.reader(csvfile, delimiter=' ')

    for mac in readObject:
        ll.append(mac)
    #now we have ll[0][0] as a list. [0-x][3] will be all mac addresses. ll[x] will provide full value. 
    i=0;j=0
    print(ll[0][0][0]+ "hello")
    while i < len(ll):
        while j < (len(ll)-i):
            print(ll[0][i][3] == ll[0][j][3] and (ll[0][i][0] != ll[0][j][0] and ll[0][i][1] != ll[0][i][1]))
            print('found one!')
            j=j+1
        i=i+1