# VisionTIR

VisionTIR es un proyecto de visión y análisis de imágenes térmicas infrarrojas.

## Tecnologías

- **Frontend**: JavaScript/Node.js (opcional)
- **Backend**: PHP/Laravel (opcional)

## Estructura del Proyecto

```
visiontir/
├── frontend/              # Aplicación frontend (JavaScript/Node.js)
│   ├── src/              # Código fuente
│   ├── public/           # Archivos públicos
│   └── package.json      # Dependencias Node.js
├── backend/              # Aplicación backend (PHP/Laravel)
│   ├── app/             # Lógica de la aplicación
│   ├── routes/          # Rutas de la API
│   ├── config/          # Configuración
│   ├── public/          # Punto de entrada público
│   └── composer.json    # Dependencias PHP
├── tests/               # Tests
├── docs/                # Documentación
├── scripts/             # Scripts de utilidad
└── data/                # Datos del proyecto
```

## Instalación

### Frontend (Node.js)

```bash
cd frontend
npm install
npm run dev
```

### Backend (PHP/Laravel)

```bash
cd backend
composer install
php artisan serve
```

## Desarrollo

### Frontend
```bash
cd frontend
npm run dev      # Servidor de desarrollo
npm run build    # Build para producción
npm test         # Ejecutar tests
```

### Backend
```bash
cd backend
composer install           # Instalar dependencias
php artisan migrate       # Ejecutar migraciones
php artisan test          # Ejecutar tests
```

## Características

- Procesamiento y análisis de imágenes
- Manejo de datos térmicos infrarrojos
- Utilidades de visión por computadora
- Herramientas de visualización

## Contribuir

Lee [CONTRIBUTING.md](CONTRIBUTING.md) para detalles sobre cómo contribuir al proyecto.

## Licencia

Este proyecto está bajo la Licencia MIT - ver el archivo [LICENSE](LICENSE) para más detalles.

## Autor

Jorge Soler

## Contacto

Para preguntas o soporte, abre un issue en GitHub.