.PHONY : main build-image build-container start test shell stop clean
main: build-image build-container

build-image:
	docker build -t examen .

build-container:
	docker run -dt --name examen -v .:/540/Examen examen
	docker exec examen composer install

start:
	docker start examen

test: start
	docker exec examen ./vendor/bin/phpunit tests/$(target)

shell: start
	docker exec -it examen /bin/bash

stop:
	docker stop examen

clean: stop
	docker rm examen
	rm -rf vendor