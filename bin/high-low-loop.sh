#!/bin/bash

while :
do
    if [[ ! -f $1 ]]; then
        break
    fi
	./bin/hue.sh brightness 200 5
	sleep 1
	./bin/hue.sh brightness 50 10
	sleep 1
done
