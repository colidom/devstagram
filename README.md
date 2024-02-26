# devstagram

## Con Docker 🐳

### Descargar Laravel

Desde el wsl ejecutaremos

```
curl -s https://laravel.build/devstagram | bash
```

**Problemas comunes**

Si ya tenemos mysql instalado en la máquina, el contenedor nos va a dar problemas con el puerto 3306, debemos cambiarlo en el docker-compose.yml por 3307 por ejemplo y eliminar el contenedor de mysql, parar el servicio y volver a crearlo, mediante los comanos:

```
docker-compose down
```

Iniciamos nuevamente el contenedor y debería pillarnos la nueva configuración de puertos.

```
docker-compose up -d
```

#### Arrancar servicios desde WSL

`cd` a /devstagram y ejecutaremos el comando:

```
./vendor/bin/sail up
```

#### Parar servicios desde WSL

`cd` a /devstagram y ejecutaremos el comando:

```
./vendor/bin/sail down
```

A partir de ahora podremos acceder desde Windows a http://localhost para acceder al servidor web de desarrollo con nuestra app Laravel.

---

## Sin Docker 🚫🐳

### Crear app Laravel

```
composer create-project laravel/laravel devstagram
```

### Extensiones necesarias

```
extension=curl
extension=fileinfo
extension=gd
extension=mbstring
extension=mysqli
extension=openssl
extension=pdo_mysql
```

### Descargar dependencias (vendor)

```
composer install
```

### Arrancar servidor

```
php artisan serve
```

### Arrancar Vite

Asset Bundling de Laravel, es necesario ejecutarlo para que construya nuestro front

```
npm run dev
```

### Aplicar migraciones

```
php artisan migrate
```

#### Rollback

```
php artisan migrate:rollback
```

#### Para hacer uso de los factory

```
php artisan tinker
```

##### Crear la factoria para insertar registros en Base de Datos

```
App\Models\Post::factory()->times(50)->create();
```

##### Creación de Policy

`Permite al usuario, ver, actualizar, modificar un registro de DB.`
_--model=Post Asocia el policy al modelo Post_

```
php artisan make:policy PostPolicy --model=Post
```

#### Mostrar las rutas del proyecto

```
php artisan route:list
```

#### Limpiar cache de las rutas del proyecto

```
php artisan route:cache
```

#### Crear un componente

-   Se utilizan para reutilizar componentes HTML.

```
php artisan make:component ListarPost
```
