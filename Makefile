# **************************************************************************** #
#                                                                              #
#                                                         :::      ::::::::    #
#    Makefile                                           :+:      :+:    :+:    #
#                                                     +:+ +:+         +:+      #
#    By: mortega- <mortega-@student.42Madrid.com>   +#+  +:+       +#+         #
#                                                 +#+#+#+#+#+   +#+            #
#    Created: 2023/12/31 22:51:42 by mortega-          #+#    #+#              #
#    Updated: 2024/01/03 01:01:36 by mortega-         ###   ########.fr        #
#                                                                              #
# **************************************************************************** #

THIS_FILE := $(lastword $(MAKEFILE_LIST))
.PHONY: help build up start down destroy stop restart logs logs-api \
	ps login-timescale login-api db-shell

help:
	make -pRrq -f $(THIS_FILE) : 2>/dev/null | awk -v RS= -F: '/^# File/,/^# Finished Make data base/ {if ($$1 !~ "^[#.]") {print $$1}}' | sort | egrep -v -e '^[^[:alnum:]]' -e '^$@$$'

build:
	docker-compose -f srcs/docker-compose.yml build $(c)

up:
	docker-compose -f srcs/docker-compose.yml up --build

start:
	docker-compose -f srcs/docker-compose.yml start $(c)

down:
	docker-compose -f srcs/docker-compose.yml down $(c)

destroy:
	docker-compose -f srcs/docker-compose.yml down -v $(c)

stop:
	docker-compose -f srcs/docker-compose.yml stop $(c)

restart:
	docker-compose -f srcs/docker-compose.yml stop $(c)
	docker-compose -f srcs/docker-compose.yml up -d $(c)

logs:
	docker-compose -f srcs/docker-compose.yml logs --tail=100 -f $(c)

logs-api:
	docker-compose -f srcs/docker-compose.yml logs --tail=100 -f api

ps:
	docker-compose -f srcs/docker-compose.yml ps

login-timescale:
	docker-compose -f srcs/docker-compose.yml exec timescale /bin/bash

login-api:
	docker-compose -f srcs/docker-compose.yml logs exec api /bin/bash

db-shell:
	docker-compose -f srcs/docker-compose.yml exec timescale psql - Upostgres

