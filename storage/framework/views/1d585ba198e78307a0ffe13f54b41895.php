<!DOCTYPE html>
<html>
<head>
    <title>Iniciar Sesión</title>
    <style>
        body {
            background-size: cover;
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }


        .container {
            background-color: rgba(104, 99, 99, 0.8);
            padding: 20px;
            border-radius: 0px;
            text-align: center;
        }

        h1 {
            color: #333;
        }

        .form-group {
            margin: 20px 0;
        }

        .form-group input {
            width: 85%;
            padding: 10px;
            margin: 5px 0;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        .buttons {
            display: flex;
            justify-content: space-between;
        }
        .item {
      width: 100px;
      margin: 50px;
      border: 0px solid #70707a;
      padding: 10px;
      text-align: center;
      font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    }

    .item img {
      max-width: 150%;
      width: 400%;
      margin: -20%;
      text-align: center;  
    }

        .buttons button {
            background-color: #6a6d70;
            color: #fff;
            border: none;
            border-radius: 3px;
            padding: 10px 20px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Iniciar Sesión</h1>

        <div class="form-group">
            <input type="text" placeholder="Usuario" required>
        </div>
        <div class="form-group">
            <input type="password" placeholder="Contraseña" required>
        </div>

        <div class="buttons">
            <a href="menu"><button type="submit">Iniciar Sesión</button></a>
            <a href="todo"><button type="button">Alta Cuenta</button></a>
        </div>
        <div class="item">
            <img src="uno.jpg" alt="Catalogo de hombre">
    </div>
</body>
</html>
<?php /**PATH /home/luis/Descargas/Ingeneria/inge-app/resources/views/app.blade.php ENDPATH**/ ?>