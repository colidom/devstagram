# devstagram

## Con Docker

### Descargar Laravel

Desde el wsl ejecutaremos

```
curl -s https://laravel.build/devstagram | bash
```

## Sin Docker

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
