.PHONY: high-low-start
high-low-start:
	touch high-low.lock
	./test/high-low-loop.sh high-low.lock &

.PHONY: high-low-stop
high-low-stop:
	rm -f high-low.lock