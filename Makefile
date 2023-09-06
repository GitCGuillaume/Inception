up:
	docker compose -f ./srcs/docker-compose.yml up -d
build:
	docker compose -f ./srcs/docker-compose.yml build
down:
	docker compose -f ./srcs/docker-compose.yml down
stop:
	docker compose -f ./srcs/docker-compose.yml stop
all:
	make build
	make up
nocache:
	docker compose -f ./srcs/docker-compose.yml build --no-cache
dir:
	mkdir -p /home/gchopin/data
.PHONY: up build down all dir
