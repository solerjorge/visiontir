# Backend

Esta carpeta contiene la aplicación backend de VisionTIR.

## Tecnología

- **PHP 8.1+**
- **Laravel 10** (opcional)
- **Composer** - Gestor de dependencias

## Instalación

```bash
composer install
```

## Configuración

1. Copia el archivo de configuración:
```bash
cp .env.example .env
```

2. Genera la clave de la aplicación (si usas Laravel):
```bash
php artisan key:generate
```

3. Configura tu base de datos en `.env`

## Comandos Disponibles

### Laravel

```bash
php artisan serve           # Iniciar servidor de desarrollo
php artisan migrate         # Ejecutar migraciones
php artisan test            # Ejecutar tests
composer format             # Formatear código con Pint
```

### PHP Vanilla

```bash
php -S localhost:8000 -t public/   # Servidor de desarrollo
composer test                       # Ejecutar tests
```

## Estructura

```
backend/
├── app/              # Lógica de la aplicación
├── routes/           # Definición de rutas
├── config/           # Archivos de configuración
├── public/           # Punto de entrada público
├── tests/            # Tests
└── composer.json     # Dependencias PHP
```

## API Endpoints

Documentación de endpoints disponibles:

- `GET /api/health` - Health check
- Agrega tus propios endpoints aquí

## Desarrollo

1. Instala las dependencias: `composer install`
2. Configura tu `.env`
3. Inicia el servidor: `php artisan serve` o `php -S localhost:8000 -t public/`
4. La API estará disponible en `http://localhost:8000`

## Testing

```bash
composer test
```

o con PHPUnit:

```bash
./vendor/bin/phpunit
```
