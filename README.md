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

---

## Sin Docker 🚫🐳

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

### Arrancar servidor

```
php artisan serve
```

### Aplicar migraciones

```
php artisan migrate
```

#### Rollback

```
php artisan migrate:rollback
```
