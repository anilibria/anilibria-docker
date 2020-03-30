#!/bin/bash

# Генерация .env файла
if [ ! -f .env ]; then
    cp example.env .env
fi

docker-compose down
docker-compose up -d --build
