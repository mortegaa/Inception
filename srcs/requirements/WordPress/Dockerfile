# **************************************************************************** #
#                                                                              #
#                                                         :::      ::::::::    #
#    Dockerfile                                         :+:      :+:    :+:    #
#                                                     +:+ +:+         +:+      #
#    By: mortega- <mortega-@student.42Madrid.com>   +#+  +:+       +#+         #
#                                                 +#+#+#+#+#+   +#+            #
#    Created: 2023/12/29 23:18:55 by mortega-          #+#    #+#              #
#    Updated: 2024/01/05 15:48:47 by mortega-         ###   ########.fr        #
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

RUN apt-get -y install php-fpm;

RUN mkdir /home/www
RUN mkdir /home/www/html

RUN wget https://es.wordpress.org/latest-es_ES.tar.gz \
	&& tar -xzvf latest-es_ES.tar.gz \
	&& mv wordpress /home/www/html

RUN wget https://files.phpmyadmin.net/phpMyAdmin/5.1.0/phpMyAdmin-5.1.0-english.tar.gz \
	&& tar -xvzf phpMyAdmin-5.1.0-english.tar.gz \
	&& mv phpMyAdmin-5.1.0-english /home/www/html/phpMyAdmin
	#&& chown --recursive mortega:users /var/www/html/phpMyAdmin

RUN rm -rf latest-es_ES.tar.gz phpMyAdmin-5.1.0-english.tar.gz

#COPY tools/index.html /home/www/html
#COPY tools/wp-config.php /home/www/html/wordpress

CMD service php7.3-fpm start \
	&& bash

