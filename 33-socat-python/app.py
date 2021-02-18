#!/usr/bin/env python2
import random
import sys
import os

flag = os.environ["FLAG"]

print "Help me solve my math homework, then I'll give you the flag :)"
for _ in range(1):
	a = random.randint(-0xff,0xff)
	b = random.randint(-0xff,0xff)
	op = random.choice(["*","+","-"])
	try:
		eq = str(a)+op+str(b)
		user = input(eq+"\n")
		if int(user) == eval(eq):
			continue
		else:
			raise BaseException("Wrong anwser")
	except Exception as e:
		print "Wrong. Bye!"
		sys.exit()

print "Your flag is: {}".format(flag)
