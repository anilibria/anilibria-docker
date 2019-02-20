#!/bin/bash 

docker down $(docker ps -q)
docker-compose up -d --build
