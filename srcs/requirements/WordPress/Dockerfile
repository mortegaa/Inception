# **************************************************************************** #
#                                                                              #
#                                                         :::      ::::::::    #
#    Dockerfile                                         :+:      :+:    :+:    #
#                                                     +:+ +:+         +:+      #
#    By: mortega- <mortega-@student.42Madrid.com>   +#+  +:+       +#+         #
#                                                 +#+#+#+#+#+   +#+            #
#    Created: 2023/12/29 23:18:55 by mortega-          #+#    #+#              #
#    Updated: 2023/12/29 23:41:51 by mortega-         ###   ########.fr        #
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

RUN wget https://es.wordpress.org/latest-es_ES.tar.gz \
	&& tar -xzvf latest-es_ES.tar.gz \
	&& mv wordpress /var/www/html/wordpress

RUN wget https://files.phpmyadmin.net/phpMyAdmin/5.1.0/phpMyAdmin-5.1.0-english.tar.gz \
	&& tar -xvzf phpMyAdmin-5.1.0-english.tar.gz \
	&& mv phpMyAdmin-5.1.0-english /var/www/html/phpMyAdmin \
	&& chown --recursive www-data:www-data /var/www/html/phpMyAdmin

RUN rm -rf latest-es_ES.tar.gz phpMyAdmin-5.1.0-english.tar.gz

CMD service php7.3-fpm start

