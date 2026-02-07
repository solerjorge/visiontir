# Frontend

Esta carpeta contiene la aplicación frontend de VisionTIR.

## Tecnología

- **JavaScript/Node.js**
- **Vite** - Build tool y dev server
- **Jest** - Testing framework
- **ESLint** - Linting
- **Prettier** - Code formatting

## Instalación

```bash
npm install
```

## Comandos Disponibles

```bash
npm run dev      # Iniciar servidor de desarrollo
npm run build    # Build para producción
npm run preview  # Vista previa del build
npm test         # Ejecutar tests
npm run lint     # Ejecutar linter
npm run format   # Formatear código
```

## Estructura

```
frontend/
├── src/              # Código fuente
│   ├── index.js     # Punto de entrada
│   └── styles.css   # Estilos
├── public/          # Archivos públicos estáticos
├── index.html       # HTML principal
├── package.json     # Dependencias y scripts
├── vite.config.js   # Configuración de Vite
├── jest.config.js   # Configuración de Jest
├── .eslintrc.js     # Configuración de ESLint
└── .prettierrc      # Configuración de Prettier
```

## Desarrollo

1. Instala las dependencias: `npm install`
2. Inicia el servidor de desarrollo: `npm run dev`
3. Abre tu navegador en `http://localhost:3000`

## Build

Para crear un build de producción:

```bash
npm run build
```

Los archivos se generarán en la carpeta `dist/`.
