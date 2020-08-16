# blog of Backpack Laravel 
In this blog i use Backpack laravel with PermissionManager and using seeder to fill the data.
Create two post in this blog and create two admin : first one just can Add post , and the second one just can edit post.

Here the expliation how i create the all project and in the end i will write how run this project.

## Laravel Installation and create project
```bash
composer global require laravel/installer
```
```bash
laravel new blog
```
## Backpack Installation 
```bash
cd your-laravel-project-name
```
```bash
composer require backpack/crud:"4.1.*"
```

```bash
composer require backpack/generators --dev
```
```bash
composer require laracasts/generators --dev
```
```bash
php artisan backpack:install
```

create post table and migrate

```bash
php artisan migrate
```

after that create the seeder 
```bash
php artisan make:seeder UserTableSeeder
```
```bash
php artisan make:seeder PostTableSeeder
```
and use it in the DataBaseSeeder

$this->call(PostsTableSeeder::class);
$this->call(UserTableSeeder::class);

then Run 

php artisan db:seed

Use this to install and confige the Backpack permission manager 
https://github.com/Laravel-Backpack/PermissionManager#backpackpermissionmanager

Now login to the dashboard http://127.0.0.1:8000/admin/ 
assign role and permmision to the first admin(writer) and the second admin (editor)
the informaton of admins(name,emile,password) asigned befor in the UserTableSeeder.

To control what each admin can do and cannot do, using simple way by controll of the buttons:

in the blog\vendor\backpack\crud\src\resources\views\crud\buttons\create.blade.php
add if condition :
@if(backpack_user()->hasRole('writer'))
...
@endif

and in the in the blog\vendor\backpack\crud\src\resources\views\crud\buttons\update.blade.php
add if condition :
@if(backpack_user()->hasRole('editor'))
...
@endif

# Run This Project 
1. clone the repositories
2. cd to the project path
3. You should run the serve Xampp for example and setup the database
   in the .evn file and put the name of your data
4. php artisan migrate
5. composer dump-autoload
6. php artisan db:seed
7. login to the dashboard 

may you need to run composer global require laravel/installer first and then clone the project in the same place.


# Refrence 
https://laravel.com/docs/7.x/installation

https://laravelguy.com/create-admin-panel-with-laravel-backpack-part-1/
https://laravelguy.com/create-admin-panel-with-laravel-backpack-part-2/
https://laravelguy.com/create-admin-panel-with-laravel-backpack-part-3/
https://laravelguy.com/create-admin-panel-with-laravel-backpack-part-4/

https://github.com/Laravel-Backpack/PermissionManager#backpackpermissionmanager

https://stackoverflow.com/questions/55424337/how-to-personnalize-backpack-content-by-user-role






 
