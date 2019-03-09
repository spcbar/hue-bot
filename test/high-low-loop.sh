#!/bin/bash

echo 'Started'

while :
do
    if [[ ! -f $1 ]]; then
        break
    fi
	./hue.sh brightness 200 5
	sleep 1
	./hue.sh brightness 50 10
	sleep 1
done

echo 'Stopped'