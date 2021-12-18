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


Для выполения этого модуля я решил использзовать Laravel последней версии.
Также скачал Fortify для входа и регистрации новых пользователей.
Для назначения ролей я использовал пакет Laravel-Permission от Spatie.

Каждый новый зарегестрированный пользователь получает роль user и не может попасть в админу.
Соответсвенно доступ к админке есть только у пользоваетля с ролью admin.

Счётчик количества просмотров страинцы я реализовал через события.
Для выводи изображений я использовал  Intervention Image.

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

Запрустить Сиды
php artisan db:seed

Почта и пароль от админки
Почта: admin@admin.com
Пароль: admin

Если картнка не отображаеться на страниц новости необходимо прописать 
php artisan storage:link
