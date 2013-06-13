import string
import random
from random import randrange
from datetime import date, timedelta, datetime
import calendar
N=5

def random_date(start, end):
    """
    This function will return a random datetime between two datetime 
    objects.
    """
    delta = end - start
    int_delta = (delta.days * 24 * 60 * 60) + delta.seconds
    random_second = randrange(int_delta)
    return (start + timedelta(seconds=random_second))

d1 = datetime.strptime('1/1/1940', '%m/%d/%Y')
d2 = datetime.strptime('1/1/2012', '%m/%d/%Y')
d3 = datetime.strptime('1/1/1990', '%m/%d/%Y')

client=["vfzpycjz" , "drbatmgg" , "jaanvmee" , "ceahwvjb" , "rgpvrrfh" , "qtzcmclz" , "llztenfp" , "fxwekcnk" , "cxgeltkp" , "uiihtjvw", "irakbblp", "xstcsjso" , "orlpnjrt" , "qxjjcbnf" , "rtfxfije" , "komlrqnl" , "zabrrgex" , "qiczvwzg" , "lxflkvfk" , "jnoobivz"]

empid=[477721747, 876187902, 721744962, 624105338, 651824497, 631451360, 284607404, 947933730, 592388711, 114757504, 246510794, 107062109, 563169988, 854948139, 898964958, 231211474, 805043827, 396672651, 288131656, 458818496]

for i in range(20):
	print client[i], 
	print "|", 

	fname =''.join(random.choice(string.ascii_lowercase) for x in range(N))
	print fname,
	print "|",

	print empid[i]
