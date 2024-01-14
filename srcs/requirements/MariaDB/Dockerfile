# **************************************************************************** #
#                                                                              #
#                                                         :::      ::::::::    #
#    Dockerfile                                         :+:      :+:    :+:    #
#                                                     +:+ +:+         +:+      #
#    By: mortega- <mortega-@student.42Madrid.com>   +#+  +:+       +#+         #
#                                                 +#+#+#+#+#+   +#+            #
#    Created: 2023/12/29 23:42:27 by mortega-          #+#    #+#              #
#    Updated: 2024/01/05 15:43:29 by mortega-         ###   ########.fr        #
#                                                                              #
# **************************************************************************** #

FROM debian:buster

MAINTAINER mortega-

RUN apt-get -y update \
	&& apt-get -y upgrade \
	&& apt-get -y install apt-utils \
	vim \
	htop \
	wget;

RUN apt-get -y install mariadb-server;

#COPY srcs/database.sql ./
#COPY srcs/wordpress.sql ./

CMD service mysql start \
	#&& mysql -u root < ./wordpress.sql \
	#&& mysql -u root < ./database.sql \
	&& bash
