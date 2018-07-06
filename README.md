Данный документ предназначен для разворачивания новостного сайта KALAGUR-NEWS.

№1 Устанавливаем XAMMP для Linux Mint с версией php не ниже 7.2. Скачать можно по данной ссылке. (https://www.apachefriends.org/ru/index.html)

№1.2 Запускаем панель управления XAMPP в терминале командой 

sudo /opt/lampp/share/xampp-control-panel/xampp-control-panel.

В ПУ нажимаем START XAMPP.

№2 Клонируем репозиторий в папку lampp/htdocs командой 
git clone https://github.com/KalagurAndrey/news-aND.git

№3 Получить доступ к phpmyadmin можно по ссылке localhost/phpmyadmin

№3.1 Cоздаем базу данных с именем kalagur_news и импоритруем туда файл kalagur_news.sql

№4  Доступ к сайту можно будет получить по ссылке localhost/news-aND/ . 

База данных содержит 2 таблицы с именами users и news. 

ФАЙЛОВАЯ СТРУКТРА:
В директории includes содержатся подключаемые файлы с внешними блоками.
В директории settings содержится файл, в котором устанавливается подключение к БД.
В корневом каталоге содержатся страницы сайта и подключаемый файл со стилями style.css
