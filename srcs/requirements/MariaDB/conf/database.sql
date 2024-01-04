# **************************************************************************** #
#                                                                              #
#                                                         :::      ::::::::    #
#    database.sql                                       :+:      :+:    :+:    #
#                                                     +:+ +:+         +:+      #
#    By: mortega- <mortega-@student.42Madrid.com>   +#+  +:+       +#+         #
#                                                 +#+#+#+#+#+   +#+            #
#    Created: 2024/01/03 12:04:33 by mortega-          #+#    #+#              #
#    Updated: 2024/01/03 14:10:18 by mortega-         ###   ########.fr        #
#                                                                              #
# **************************************************************************** #

CREATE DATABASE IF NOT EXISTS `wordpress`;
CREATE USER $(MYSQL_USER)@$(DOMAIN_NAME) IDENTIFIED BY $(MYSQL_PASSWORD);
GRANT ALL PRIVILEGES ON *.* TO $(MYSQL_USER)@$(DOMAIN_NAME);
FLUSH PRIVILEGES;
