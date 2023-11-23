docker build -t app-php-blocks . | Для создания изображения
docker run -p 8888:80 app-php-blocks | Для запуска контейнера
docker run -v C:\Users\Aleck\Docker\phpStyle\style:/var/www/html/style -p 8889:80 app-php-blocks | Для монтирования контейнера через локальный каталог C:\Users\Aleck\Docker\phpStyle\style
docker volume create funny-style | Для создания volume, то есть хранилищая с наименованием funny-style
docker run -v funny-style:/var/www/html/style -p 8899:80 app-php-blocks | Для запуска контейнера с редактируемым хранилищем
docker cp . 8314cafdb80b9d5eee9b863547daae532bb13f328299625dbcd404ce47c76a13:/var/www/html/style | Для копирования volume в указанный контейнером