Для выполения этого модуля я решил использзовать Laravel последней версии.
Также скачал Fortify для входа и регистрации новых пользователей.
Для назначения ролей я использовал пакет Laravel-Permission от Spatie.

Каждый новый зарегестрированный пользователь получает роль user и не может попасть в админу.
Соответсвенно доступ к админке есть только у пользоваетля с ролью admin.

Счётчик количества просмотров страинцы я реализовал через события.
Для выводи изображений я использовал  Intervention Image.

Для того что-бы запуcтить проект необходимо скачать этот репозиторий
git clone https://github.com/VladimirMusatov/Laravel_Wezom_Modul1

Установаить все зависимости через composer
composer install

Скопировать файл env.exapmle и переиминовать его в .env

Сгенерировать app_key
php artisan key:generate

Изменить в файлке .env строчки
DB_DATABASE=laravel
DB_USERNAME=root
DB_PASSWORD=

Запустить миграции
php artisan migrate

Создать две роли
Первая роль user

php artisan permission:create-role user

и роль admin 

php artisan permission:create-role admin

Каждый новый пользователь получает роль user и не может попасть в админку.
Что-бы дать права амина конкретному пользователю необходимо в таблице models_has_roles изменить запись, где model_id совпадает с id пользователя которому хотим дать права.
Конкретно изменить role_id с 1 на 2.

Если картнка не отображаеться на страниц новости необходимо прописать 

php artisan storage:link