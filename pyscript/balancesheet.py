import string
import random
from random import randrange
from datetime import date, timedelta, datetime
import calendar
N=8

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

for i in range(20):


	
	fname =''.join(random.choice(string.ascii_lowercase) for x in range(N))
	print fname,
	print "|",

	d=random_date(d1, d2)
	print d.date(),
	print "|",

	
	if randrange(0,2) ==0:
		print "I",  
	else:
		print "O", 
	
	print "|",

	print randrange(1000, 10000),
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

