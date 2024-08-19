# CREDENCIALES
### admin@admin.com:admin


# CONCEPTOS
### Migraciones: Gestionar cambios en la estructura de la ddbb
### Seeders: Llenar la ddbb con datos de prueba 

# COMANDOS UTILIZADOS
Ejecutar las migraciones de la ddbb y los seeders:
`php artisan migrate:fresh --seed`

Dar mas memoria a php para achivos grandes del seeder de laravel-world:
`php -d memory_limit=350M artisan world:seeder`

Revertir una migracion:
`php artisan migrate:rollback`


