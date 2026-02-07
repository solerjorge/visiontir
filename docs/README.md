# Documentación

Este directorio contiene la documentación para VisionTIR.

## Generación de Documentación

Puedes usar herramientas como:
- **JSDoc** para documentación de JavaScript
- **PHPDocumentor** para documentación de PHP

### JavaScript (JSDoc)

```bash
npm install -g jsdoc
jsdoc -c jsdoc.json
```

### PHP (PHPDocumentor)

```bash
composer require --dev phpdocumentor/phpdocumentor
vendor/bin/phpdoc -d src -t docs/build
```

## Estructura

- `api/` - Documentación de la API
- `guides/` - Guías de usuario
- `build/` - Documentación generada (gitignored)

## Escribir Documentación

La documentación puede estar en Markdown o generarse automáticamente desde los comentarios del código.

### JavaScript
```javascript
/**
 * Descripción de la función
 * @param {string} param - Descripción del parámetro
 * @returns {boolean} Descripción del retorno
 */
```

### PHP
```php
/**
 * Descripción de la función
 * 
 * @param string $param Descripción del parámetro
 * @return bool Descripción del retorno
 */
```
