.PHONY : main build-image build-container start test shell stop clean
main: build-image build-container

build-image:
	docker build -t fizzbuzz-php .

build-container:
	docker run -dt --name fizzbuzz-php -v .:/540/FizzBuzz fizzbuzz-php
	docker exec fizzbuzz-php composer install

start:
	docker start fizzbuzz-php

test: start
	docker exec fizzbuzz-php ./vendor/bin/phpunit tests/$(target)

shell: start
	docker exec -it fizzbuzz-php /bin/bash

stop:
	docker stop fizzbuzz-php

clean: stop
	docker rm fizzbuzz-php
	rm -rf vendor