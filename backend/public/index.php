<?php

/**
 * VisionTIR Backend - Public Entry Point
 * 
 * @author Jorge Soler
 */

// Cargar autoloader de Composer si existe
if (file_exists(__DIR__ . '/../vendor/autoload.php')) {
    require_once __DIR__ . '/../vendor/autoload.php';
}

// Simple router
$requestUri = $_SERVER['REQUEST_URI'];
$requestMethod = $_SERVER['REQUEST_METHOD'];

// Establecer headers CORS
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS');
header('Access-Control-Allow-Headers: Content-Type, Authorization');
header('Content-Type: application/json');

// Manejar preflight requests
if ($requestMethod === 'OPTIONS') {
    http_response_code(200);
    exit();
}

// Health check endpoint
if ($requestUri === '/api/health' && $requestMethod === 'GET') {
    echo json_encode([
        'status' => 'ok',
        'message' => 'VisionTIR API is running',
        'version' => '0.1.0'
    ]);
    exit();
}

// Endpoint de ejemplo
if (preg_match('/^\/api\/.*/', $requestUri)) {
    echo json_encode([
        'error' => 'Endpoint not found',
        'message' => 'Please define your API routes'
    ]);
    http_response_code(404);
    exit();
}

// Página de bienvenida
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VisionTIR API</title>
    <style>
        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', 'Roboto', sans-serif;
            max-width: 800px;
            margin: 50px auto;
            padding: 20px;
            line-height: 1.6;
        }
        h1 { color: #333; }
        .endpoint { 
            background: #f4f4f4; 
            padding: 10px; 
            margin: 10px 0; 
            border-radius: 4px; 
        }
        code { 
            background: #e0e0e0; 
            padding: 2px 6px; 
            border-radius: 3px; 
        }
    </style>
</head>
<body>
    <h1>VisionTIR API</h1>
    <p>Welcome to VisionTIR Backend API</p>
    
    <h2>Available Endpoints:</h2>
    <div class="endpoint">
        <strong>GET</strong> <code>/api/health</code> - Health check
    </div>
    
    <p>Add your custom routes in the routes directory.</p>
</body>
</html>
