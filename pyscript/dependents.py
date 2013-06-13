import string
import random
from random import randrange
from datetime import date, timedelta, datetime
import calendar

empid=[477721747, 876187902, 721744962, 624105338, 651824497, 631451360, 284607404, 947933730, 592388711, 114757504, 246510794, 107062109, 563169988, 854948139, 898964958, 231211474, 805043827, 396672651, 288131656, 458818496]

N=6

for i in range(20):

	fname =''.join(random.choice(string.ascii_lowercase) for x in range(N))
	print fname,
	print "|",

	print randrange(20, 60),
	print "|",

	if randrange(0,2) ==0:
		print "M",  
	else:
		print "F",

	print "|",

	print empid[i]


