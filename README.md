Библиотека книг. Проводить операции (CRUD) для сущностей "Book", "Genre", "Author" можно только с ролью "admin" 

Для начала работы:

php artisan migrate --seed

Для создания админа
php artisan tinker
\App\Models\User::create(['name' => 'Admin', 'email' => 'admin@admin.com', 'role' => 'admin', 'password' => bcrypt('password')]);
