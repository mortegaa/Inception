#!/bin/sh

mkdir /var/run/php

#service php7.3-fpm restart

/usr/sbin/php-fpm7.3 -F
