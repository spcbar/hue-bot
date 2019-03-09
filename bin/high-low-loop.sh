#!/bin/bash

./bin/hue.sh sat 254

while :
do
    if [[ ! -f $1 ]]; then
        break
    fi
	./bin/hue.sh brightness 254 3
	sleep 1
	./bin/hue.sh brightness 50 8
	sleep 1
done

./bin/hue.sh brightness 1 0
./bin/hue.sh sat 0