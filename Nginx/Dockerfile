# **************************************************************************** #
#                                                                              #
#                                                         :::      ::::::::    #
#    Dockerfile                                         :+:      :+:    :+:    #
#                                                     +:+ +:+         +:+      #
#    By: mortega- <marvin@42.fr>                    +#+  +:+       +#+         #
#                                                 +#+#+#+#+#+   +#+            #
#    Created: 2023/12/21 17:06:46 by mortega-          #+#    #+#              #
#    Updated: 2023/12/29 16:50:01 by mortega-         ###   ########.fr        #
#                                                                              #
# **************************************************************************** #

FROM debian:buster

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
	-keyout /etc/ssl/private/nginx_server.key \
	-out /etc/ssl/private/nginx_server.crt

#RUN rm -f /var/www/html/index.nginx-debian.html

COPY srcs/nginx.conf /etc/nginx

CMD service nginx start
