## Descripción

En todos los proyecto que he realizado me he tomado la molestia de de realizar siempre la implementación de localidades en proyectos como administración de proveedores, control de personal, módulos de clientes y etc. en muchos de estos casos se necesitaba seleccionar las ubicaciones, lugares. por ese motivo realice un paquete aprovechando la potencialidad de laravel, ahora simplemente lo importo a mis proyectos y ya no tengo que empezar a implementarlo de nuevo, simplemente mejorarlo y esas mejoras se actualizaran en todos mis proyectos. 

## Ecuad location

Paquete que contiene País, Provincias, cantones y parroquias de Ecuador. 
1. (País - Ecuador).
2. (Provincias - Provincias con sus códigos provinciales).
3. (Cantones - Cantones con sus códigos y postales).
4. (Parroquias - Parroquias con sus códigos y postales).
En todas estas tablas se puede ingresar la ubicación de esos lugares como longitud y latitud.

La tabla esta relacionadas.

## Requisitos
Realizado en Laravel 5.5

## Instalación

Instalación por composer.
```composer require andres/ecuadlocation
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

```
php artisan vendor:publish
```

```
Verificar que el namespace de sus modelos sea el correcto cambiar 
namespace Ecuadlocation; por namespace App;
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

