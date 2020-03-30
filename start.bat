@echo off

rem Генерация .env файла
if not exist .env (
    copy example.env .env
)

docker-compose down
docker-compose -f docker-compose.yml -f docker-compose.windows.yml up -d --build
