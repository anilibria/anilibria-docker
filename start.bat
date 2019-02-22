@echo off

docker-compose down
docker-compose -f docker-compose.yml -f docker-compose.windows.yml up -d --build
