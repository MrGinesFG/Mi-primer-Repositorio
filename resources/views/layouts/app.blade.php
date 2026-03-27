<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora Laravel</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        body, html {
            height: 100%;
            margin: 0;
        }
        .main-container {
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            background: black;
            color: black;
        }
        .nav-links {
            position: absolute;
            top: 20px;
        }
        .nav-links a {
            color: white;
            text-decoration: none;
            margin: 0 10px;
            font-weight: bold;
        }
        .nav-links a:hover {
            color: white;
        }
        .content-card {
            background: white;
            backdrop-filter: blur(10px);
            padding: 2rem; 
            border-radius: 20px;
            box-shadow: 0 8px 32px 0 rgba(255, 255, 255, 1);
            border: 1px solid rgba(255, 255, 255, 0.11);
            text-align: center;
        }
    </style>
</head>
<body>

    <div class="main-container">
        <nav class="nav-links">
            <a href="/">Inicio</a> | 
            <a href="/calculadora">Calculadora</a> | 
            <a href="/productos">Lista de productos</a>
        </nav>

        <div class="content-card">
            @yield('content') 
        </div>
    </div>
    
</body>
</html>