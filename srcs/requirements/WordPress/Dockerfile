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

RUN apt-get -y install php7.3-fpm

RUN mkdir /var/www

RUN wget https://es.wordpress.org/latest-es_ES.tar.gz \
	&& tar -xzvf latest-es_ES.tar.gz \
	&& mv wordpress /var/www

#RUN wget https://files.phpmyadmin.net/phpMyAdmin/5.1.0/phpMyAdmin-5.1.0-english.tar.gz \
#	&& tar -xvzf phpMyAdmin-5.1.0-english.tar.gz \
#	&& mv phpMyAdmin-5.1.0-english /var/www/phpMyAdmini
#	&& chown --recursive mortega:users /var/www/phpMyAdmin

RUN rm -rf latest-es_ES.tar.gz #phpMyAdmin-5.1.0-english.tar.gz

COPY tools/setup.sh /home
#COPY tools/index.html /var/www/
COPY conf/wp-config.php /var/www/wordpress

ENTRYPOINT ["bash", "/home/setup.sh"]
