#!/bin/bash 

docker kill $(docker ps -q)
docker-compose up -d
