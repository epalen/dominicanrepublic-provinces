# Dominican Republic - Provinces
Modelos, Migraciones y Seeders de las provincias, municipios y distritos municipales que componen la República Dominicana, para Laravel 5.0 - 5.3.

1 - Copiar los modelos alojados en app y transferirlos a su proyecto.

2 - Copiar las migraciones y los seeder y transferirlos a su proyecto.

3 - Al copiar los archivos en su proyecto, solo se debe ejecutar comando 'php artisan migrate', este creara la estructura de las tablas en la BD.

4 - Al crear las tablas, ejecutar comando 'php artisan db:seed', lo que poblará los campos de las tablas en la BD.

Nota: si ya estructuraste tu BD y solo quieres los seeders de este repositorio, solo se deben correr los siguientes comandos:

1 - php artisan db:seed --class=ProvinceTableSeeder
2 - php artisan db:seed --class=MunicipalityTableSeeder
3 - php artisan db:seed --class=DistrictTableSeeder

Esto es una colaboración y si estas interesado en que lo mejoremos solo comentalo ;). 
