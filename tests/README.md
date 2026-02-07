# Tests

Este directorio contiene los tests del proyecto.

## Estructura

```
tests/
├── frontend/     # Tests del frontend (Jest)
└── backend/      # Tests del backend (PHPUnit)
```

## Ejecutar Tests

### Frontend
```bash
cd frontend
npm test
```

### Backend
```bash
cd backend
composer test
```

## Escribir Tests

### JavaScript (Jest)
```javascript
describe('MiComponente', () => {
  test('debe hacer algo', () => {
    expect(true).toBe(true);
  });
});
```

### PHP (PHPUnit)
```php
<?php

use PHPUnit\Framework\TestCase;

class MiTest extends TestCase
{
    public function testAlgo(): void
    {
        $this->assertTrue(true);
    }
}
```

## Cobertura de Código

Los tests generan reportes de cobertura en:
- Frontend: `frontend/coverage/`
- Backend: `backend/coverage/`

## Convenciones

- Nombra los tests descriptivamente
- Un test por funcionalidad
- Mantén los tests simples y legibles
- Mockea dependencias externas
