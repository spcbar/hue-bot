.PHONY: on
on:
	./bin/hue.sh on

.PHONY: off
off:
	./bin/hue.sh off

.PHONY: high-low-start
high-low-start:
	touch high-low.lock
	./bin/high-low-loop.sh high-low.lock &

.PHONY: high-low-stop
high-low-stop:
	rm -f high-low.lock

.PHONY: server
server:
	./bin/server.sh

