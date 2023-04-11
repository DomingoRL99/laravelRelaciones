php artisan make:controller AlumnoController
*crea el controller AlumnoController

php artisan make:middleware ValidateId
*crea el middleware ValidateId

php artisan make:migration create_alumno_table
*crea la migración create_alumno_table

php artisan migrate
*activa las migraciones

php artisan make:seeder AlumnoSeeder
*crea el seeder AlumnoSeeder

php artisan db:seed --class=AlumnoSeeder
*Activa el seeder AlumnoSeeder

php artisan serve
*Inicia el servidor