.PHONY: high-low-start
high-low-start:
	touch high-low.lock
	./bin/high-low-loop.sh high-low.lock &

.PHONY: high-low-stop
high-low-stop:
	rm -f high-low.lock

.PHONY: web
web:
	php -S localhost:9080 -t web/