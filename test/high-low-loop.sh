#!/bin/bash

while :
do
	./hue.sh brightness 200 5
	sleep 1
	./hue.sh brightness 50 10
	sleep 1
done
