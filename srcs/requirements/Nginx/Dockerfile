# **************************************************************************** #
#                                                                              #
#                                                         :::      ::::::::    #
#    Dockerfile                                         :+:      :+:    :+:    #
#                                                     +:+ +:+         +:+      #
#    By: mortega- <marvin@42.fr>                    +#+  +:+       +#+         #
#                                                 +#+#+#+#+#+   +#+            #
#    Created: 2023/12/21 17:06:46 by mortega-          #+#    #+#              #
#    Updated: 2024/01/05 15:47:25 by mortega-         ###   ########.fr        #
#                                                                              #
# **************************************************************************** #

FROM debian:bullseye

MAINTAINER mortega-

RUN apt-get -y update; \
	apt-get -y upgrade; \
	apt-get -y install apt-utils \
	vim \
	htop \
	wget;

RUN apt-get -y install nginx;

RUN chmod 700 /etc/ssl/private \
	&& openssl req -x509 -nodes -days 365 -newkey rsa:2048 -subj "/C=SP/ST=Spain/L=Madrid/O=42/CN=127.0.0.1" \
	-keyout /etc/ssl/private/mortega.key \
	-out /etc/ssl/private/mortega.crt

COPY conf/nginx.conf /etc/nginx/conf.d
COPY conf/setup.sh /home

ENTRYPOINT ["bash", "/home/setup.sh"]
