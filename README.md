Разработать модуль «Новости»:
Админпанель:
- Добавление новости с возможностью прикрепить изображение
- Удаление новости
- Вывод списка новостей
- статус новости "опубликована / не опубликована"
Пользовательская часть:
- Просмотр списка новостей с разбивкой по страницам
- Просмотр одной новости
- Выводить только опубликованные новости, добавить счетчик количества просмотров, сортировка списка новостей по дает и по рейтингу (количествам просмотров)

Для того что-бы запуcтить проект необходимо скачать этот репозиторий
git clone https://github.com/VladimirMusatov/Laravel_Wezom_Modul1

Установить все зависимости через composer
composer install

Скопировать файл env.example и переименовать его в .env

Сгенерировать app_key
php artisan key:generate

Изменить в файлке .env строчки
DB_DATABASE=laravel
DB_USERNAME=root
DB_PASSWORD=

Запустить миграции
php artisan migrate

Запустить Сиды
php artisan db:seed

Почта и пароль от админки
Почта: admin@admin.com
Пароль: admin
