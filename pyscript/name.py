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

empid=[477721747, 876187902, 721744962, 624105338, 651824497, 631451360, 284607404, 947933730, 592388711, 114757504, 246510794, 107062109, 563169988, 854948139, 898964958, 231211474, 805043827, 396672651, 288131656, 458818496]

client=["vfzpycjz" , "drbatmgg" , "jaanvmee" , "ceahwvjb" , "rgpvrrfh" , "qtzcmclz" , "llztenfp" , "fxwekcnk" , "cxgeltkp" , "uiihtjvw", "irakbblp", "xstcsjso" , "orlpnjrt" , "qxjjcbnf" , "rtfxfije" , "komlrqnl" , "zabrrgex" , "qiczvwzg" , "lxflkvfk" , "jnoobivz"]

for i in range(20):

	empid =''.join(random.choice(string.digits) for x in range(9))
	
	print empid,
	print "|",
	hours =''.join(random.choice(string.digits) for x in range(1))
	print hours,
	print "|",

	d=random_date(d1, d2)
	print d.date(),
	print "|",


	fname =''.join(random.choice(string.ascii_lowercase) for x in range(N))
	print fname,
	print "|",
	
	mname =''.join(random.choice(string.ascii_lowercase) for x in range(N))
	print mname,
	print "|",
	lname =''.join(random.choice(string.ascii_lowercase) for x in range(N))
	print lname,
	print "|",

	if randrange(0,2) ==0:
		print "M",  
	else:
		print "F", 
	
	print "|",
	print fname+"."+lname+"@gmail.com",
	print "|",
	
	phone =''.join(random.choice(string.digits) for x in range(10))
	print phone,
	print "|",
	
	d=random_date(d1, d2)
	print d.date(),
	print "|",

	d=random_date(d3, d2)
	print d.date(),
	print "|",

	print "B+",
	print "|",

	print randrange(0, 5),
	print "|",

	if randrange(0,2) ==0:
		print "H",  
	else:
		print "L",
	print "|",

	
	if randrange(0,2) ==0:
		print "Single",  
	else:
		print "Married",
	print "|",

	n=randrange(0, 4)
	if(n==0):
		print "Scheduling"
	if(n==1):
		print "Editorial"
	if(n==2):
		print "Circulation"
	if(n==3):
		print "Operational" 
