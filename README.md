## Ecuad location

Paquete que contiene Pais, Provincias, cantones y parroquias de Ecuador. 
Pais - Ecuador
Provincias- Provincias con sus codigos provinciales
Cantones - Cantones con sus codigos y postales
Parroquias - Parroquias con ss codigos y postales

La tabla esta relacionadas.

## Requisitos
Realizado en Laravel 5.5

##Instalación

composer require andres/ecuadlocation

## Provider
\Ecuadlocation\EcuadServiceProvider::class,

## Migrations
php artisan migrate:install
php artisan migrate:fresh

## Poblado DB
php artisan poblar_acuad

## Recomendaciones
Verificar que en el composer.json de sus proyecto se modifique en el autoload de esta forma,
lo que nos interesa es que es psr-4 quede de esa forma.

 "autoload": {
        "classmap": [
            "database/seeds",
            "database/factories"
        ],
        "psr-4": {
            "Ecuadlocation\\": "packages/ecuad/ecuadlocation"
        }
    },

## Contribución

Gracias por conciderar contribuir en este paquete, para implementarlo en tu proyecto y mejorar la version del mismo. su contribucion sea bienvenida escribirme a [andrescondo17@gmail.com](mailto:andrescondo17@gmail.com).

## Security Vulnerabilities

Si descubres de alguna bulnerabilidad en este paquete no dudes en cotifiacrme para poder corregirlo.

## License

Este paquete es open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).

