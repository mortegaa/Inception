#!/bin/sh

echo "127.0.0.1	animeflv.net" >> /etc/hosts

nginx -g "daemon off;"
