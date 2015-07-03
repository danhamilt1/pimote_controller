#!/usr/bin/env python

import sys
import RPi.GPIO as GPIO
from time import sleep
#from energenie import switch_on, switch_off

def send():
    sleep(0.1)
    GPIO.output(22, True)
    sleep(0.5)
    GPIO.output(22, False)

# print 'Number of arguments:', len(sys.argv), 'arguments.'
# print 'Argument List:', str(sys.argv)

# set the pins numbering mode
GPIO.setmode(GPIO.BOARD)

# Select the GPIO pins used for the encoder K0-K3 data inputs
GPIO.setup(11, GPIO.OUT)
GPIO.setup(15, GPIO.OUT)
GPIO.setup(16, GPIO.OUT)
GPIO.setup(13, GPIO.OUT)

# Select the signal to select ASK/FSK
GPIO.setup(18, GPIO.OUT)

# Select the signal used to enable/disable the modulator
GPIO.setup(22, GPIO.OUT)

# Disable the modulator by setting CE pin lo
GPIO.output (22, False)

# Set the modulator to ASK for On Off Keying 
# by setting MODSEL pin lo
GPIO.output (18, False)

# Initialise K0-K3 inputs of the encoder to 0000
GPIO.output (11, False)
GPIO.output (15, False)
GPIO.output (16, False)
GPIO.output (13, False)

if 'l1_on' in sys.argv:
    print 'location 1 on'
    GPIO.output (11, True)
    GPIO.output (15, True)
    GPIO.output (16, True)
    GPIO.output (13, True)
    send()
elif 'l1_off' in sys.argv:
    print 'location 1 off' 
    GPIO.output (11, True)
    GPIO.output (15, True)
    GPIO.output (16, True)
    GPIO.output (13, False) #0111
    send()
elif 'l2_on' in sys.argv:
    print 'location 2 on'
    GPIO.output (11, False)
    GPIO.output (15, True)
    GPIO.output (16, True)
    GPIO.output (13, True)
    send()
elif 'l2_off' in sys.argv:
    print 'location 2 off'
    GPIO.output (11, False)
    GPIO.output (15, True)
    GPIO.output (16, True)
    GPIO.output (13, False)
    send()
elif 'l3_on' in sys.argv:
    print 'location 3 on'
    GPIO.output (11, True)
    GPIO.output (15, False)
    GPIO.output (16, True)
    GPIO.output (13, True)
    send()
elif 'l3_off' in sys.argv:
    print 'location 3 off'
    GPIO.output (11, True)
    GPIO.output (15, False)
    GPIO.output (16, True)
    GPIO.output (13, False)
    send()
elif 'l4_on' in sys.argv:
    print 'location 4 on'
    GPIO.output (11, False)
    GPIO.output (15, False)
    GPIO.output (16, True)
    GPIO.output (13, True)
    send()
elif 'l4_off' in sys.argv:
    print 'location 4 off'
    GPIO.output (11, False)
    GPIO.output (15, True)
    GPIO.output (16, False)
    GPIO.output (13, False)
    send()
elif 'all_off' in sys.argv:
    print 'all off'
    GPIO.output (11, True)
    GPIO.output (15, True)
    GPIO.output (16, False)
    GPIO.output (13, False)
    send()
elif 'all_on' in sys.argv:
    print 'all on'
    GPIO.output (11, True)
    GPIO.output (15, True)
    GPIO.output (16, False)
    GPIO.output (13, True)
    send()
else:
    print 'no location exists'
