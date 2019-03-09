#!/bin/bash

while :
do
	./bin/hue.sh on
	sleep 1
	./bin/hue.sh off
	sleep 1
done
