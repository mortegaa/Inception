#!/bin/bash

mysql -u root < /home/wordpress.sql
mysql -u root < /home/database.sql

/usr/bin/mysqld_safe
