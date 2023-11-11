<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menú</title>
    <style>
        body {
            margin: 0;
            font-family: 'Arial', sans-serif;
        }

        header {
            background-color: #b75247;
            padding: 10px;
            text-align: center;
        }

        nav {
            display: flex;
            justify-content: center;
            background-color: #b74747;
        }

        nav a {
            color: white;
            text-decoration: none;
            padding: 14px 20px;
            display: inline-block;
        }

        nav a:hover {
            background-color: #555;
        }
    </style>
</head>
<body>
    <header>
        <h1>Menu principal</h1>
    </header>

    <nav>
        <a href="todos">Catalogo</a>
        <a href="Borrar">Borrar Cuenta</a>
        <a href="http://127.0.0.1:8000/">Cerrar sesion</a>
        <a href="buscador">Buscar prenda</a>
    </nav>
</body>
</html>
