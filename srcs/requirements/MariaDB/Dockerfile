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

FROM debian:bullseye

MAINTAINER mortega-

RUN apt-get -y update \
	&& apt-get -y upgrade \
	&& apt-get -y install apt-utils \
	vim \
	htop \
	wget;

RUN apt-get -y install mariadb-server;

COPY conf/database.sql /home
COPY conf/wordpress.sql /home
COPY tools/setup.sh /home/setup.sh

ENTRYPOINT ["bash", "/home/setup.sh"]
