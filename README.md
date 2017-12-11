## Ecuad location

Paquete que contiene País, Provincias, cantones y parroquias de Ecuador. 
1. (País - Ecuador).
2. (Provincias - Provincias con sus códigos provinciales).
3. (Cantones - Cantones con sus códigos y postales).
4. (Parroquias - Parroquias con sus códigos y postales).

La tabla esta relacionadas.

## Requisitos
Realizado en Laravel 5.5

## Instalación

    ```
    composer require andres/ecuadlocation
    ```

## Provider

Pueden probar 
```
 php artisan package:discover
 ```

 y si tienen errores hacer lo manual.

 el Provider es: Ecuadlocation\\EcuadServiceProvider

```
\Ecuadlocation\EcuadServiceProvider::class,
```

## Migrations
```
php artisan migrate:install
php artisan migrate:fresh
```

## Poblado DB
```
php artisan poblar_acuad
```

## Recomendaciones
Verificar que en el composer.json de sus proyecto se modifique en el autoload de esta forma,
lo que nos interesa es que es psr-4 quede de esa forma.
```
 "autoload": {
        "classmap": [
            "database/seeds",
            "database/factories"
        ],
        "psr-4": {
            "Ecuadlocation\\": "packages/ecuad/ecuadlocation"
        }
    },
```

## Contribución

Gracias por considerar contribuir en este paquete, para implementarlo en tu proyecto y mejorar la versión del mismo. su contribución sea bienvenida escribirme a [andrescondo17@gmail.com](mailto:andrescondo17@gmail.com).

## Security Vulnerabilities

Si descubres de alguna vulnerabilidad en este paquete no dudes en notificar para poder corregirlo.

## License

Este paquete es open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).

