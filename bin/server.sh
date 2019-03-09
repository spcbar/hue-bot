#!/bin/bash

if [[ -f server.pid ]]; then
	pid=$(cat server.pid)
	kill $pid
        rm server.pid
	exit
fi

php -S 0.0.0.0:9080 -t web/ >/dev/null 2>&1 &
echo $! > server.pid
