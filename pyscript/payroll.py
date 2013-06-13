import string
import random
from random import randrange
from datetime import date, timedelta, datetime
import calendar

empid=[477721747, 876187902, 721744962, 624105338, 651824497, 631451360, 284607404, 947933730, 592388711, 114757504, 246510794, 107062109, 563169988, 854948139, 898964958, 231211474, 805043827, 396672651, 288131656, 458818496]


for i in range(20):

	print empid[i], 
	print "|",

	sal=randrange(10000, 100000)
	print sal,
	print "|",
	
	print randrange(10000, sal),
	print "|",

	print randrange(1, 12),
	print "|",
	
	print randrange(10000, 20000)
