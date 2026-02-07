# Contribuyendo a VisionTIR

¡Gracias por tu interés en contribuir a VisionTIR! Aceptamos contribuciones de la comunidad.

## Cómo Contribuir

### Reportar Bugs

Si encuentras un bug, por favor abre un issue en GitHub con:
- Un título claro y descripción
- Pasos para reproducir el issue
- Comportamiento esperado
- Comportamiento actual
- Tu entorno (OS, versión de Node.js/PHP, etc.)

### Sugerir Funcionalidades

Las sugerencias de funcionalidades son bienvenidas. Por favor abre un issue con:
- Una descripción clara de la funcionalidad
- Casos de uso para la funcionalidad
- Ideas de implementación que tengas

### Pull Requests

1. Haz fork del repositorio
2. Crea una nueva rama para tu funcionalidad (`git checkout -b feature/nueva-funcionalidad`)
3. Haz tus cambios
4. Agrega tests para tus cambios
5. Ejecuta la suite de tests para asegurar que todo pasa
6. Formatea tu código
7. Haz commit de tus cambios (`git commit -m 'Agregar nueva funcionalidad'`)
8. Haz push a la rama (`git push origin feature/nueva-funcionalidad`)
9. Abre un Pull Request

## Configuración de Desarrollo

### Frontend (JavaScript/Node.js)

1. Clona el repositorio:
```bash
git clone https://github.com/solerjorge/visiontir.git
cd visiontir/frontend
```

2. Instala dependencias:
```bash
npm install
```

3. Ejecuta tests:
```bash
npm test
```

4. Formatea código:
```bash
npm run format
```

5. Lint código:
```bash
npm run lint
```

### Backend (PHP/Laravel)

1. Clona el repositorio:
```bash
git clone https://github.com/solerjorge/visiontir.git
cd visiontir/backend
```

2. Instala dependencias:
```bash
composer install
```

3. Ejecuta tests:
```bash
composer test
```

4. Formatea código:
```bash
composer format
```

## Estilo de Código

### JavaScript
- Usa ESLint y Prettier
- Sigue las convenciones del proyecto
- Usa nombres de variables y funciones descriptivos
- Mantén las funciones enfocadas y pequeñas
- Escribe tests para nueva funcionalidad

### PHP
- Sigue PSR-12
- Usa Laravel Pint para formatear
- Usa nombres descriptivos
- Documenta con PHPDoc
- Escribe tests para nueva funcionalidad

## Testing

- Escribe tests unitarios para nuevas funcionalidades
- Asegúrate de que todos los tests pasen antes de enviar un PR
- Busca alta cobertura de código

## Documentación

- Actualiza la documentación para nuevas funcionalidades
- Agrega docstrings/PHPDoc siguiendo el estilo NumPy/Google
- Actualiza README.md si es necesario

## ¿Preguntas?

Siéntete libre de abrir un issue para cualquier pregunta sobre cómo contribuir.

¡Gracias por contribuir a VisionTIR!
