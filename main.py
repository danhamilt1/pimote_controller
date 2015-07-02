#!/usr/bin/env python

import sys
import RPi.GPIO as GPIO

# print 'Number of arguments:', len(sys.argv), 'arguments.'
# print 'Argument List:', str(sys.argv)

GPIO.setmode(GPIO.BOARD)
GPIO.setup(7,GPIO.OUT)
GPIO.setup(22,GPIO.OUT)
GPIO.setup(23,GPIO.OUT)

if 'l1_on' in sys.argv:
	print 'location 1 on'
	GPIO.output(7,True)
elif 'l1_off' in sys.argv:
	print 'location 1 off' 
	GPIO.output(7,False)
elif 'l2_on' in sys.argv:
	print 'location 2 on'
	GPIO.output(22,True)
elif 'l2_off' in sys.argv:
	print 'location 2 off'
	GPIO.output(22,False)
elif 'l3_on' in sys.argv:
	print 'location 3 on'
	GPIO.output(23,True)
elif 'l3_off' in sys.argv:
	print 'location 3 off'
	GPIO.output(23,False)
else:
	print 'no location exists'
