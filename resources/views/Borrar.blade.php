<?php
session_start();

if (isset($_SESSION['user_id'])) {
    header("Location: welcome.php");
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirm_password'];

    $errors = [];

    // Validación de campos
    if (empty($username)) {
        $errors[] = "El campo de usuario es obligatorio.";
    }

    if (empty($password)) {
        $errors[] = "El campo de contraseña es obligatorio.";
    }

    if ($password !== $confirmPassword) {
        $errors[] = "Las contraseñas no coinciden.";
    }

    if (empty($errors)) {
        // En una aplicación real, aquí deberías guardar los datos del usuario en una base de datos.

        // Simplemente almacenaremos los datos en una variable de sesión en este ejemplo.
        $_SESSION['user_id'] = 1;
        header("Location: welcome.php");
        exit;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Borrar cuenta</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
        }

        .container {
            background-color: rgb(134, 134, 134);
            max-width: 300px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #6c6b6b;
            border-radius: 20x;
            box-shadow: 0 0 10px rgb(227, 224, 224);
            margin-top: 50px;
        }

        h1 {
            text-align: center;
        }

        form {
            text-align: center;
        }

        input[type="text"],
        input[type="password"] {
            width: 85%;
            padding: 10px;
            margin: 5px 0;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        button {
            background-color: #6b6d6e;
            color: #fff;
            border: none;
            border-radius: 3px;
            padding: 10px 15px;
            margin-top: 10px;
            cursor: pointer;
        }

        .error {
            color: red;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Borrar cuenta</h1>

        <?php if (isset($errors) && !empty($errors)) : ?>
            <ul class="error">
                <?php foreach ($errors as $error) : ?>
                    <li><?php echo $error; ?></li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>

        <form method="post">
            <input type="text" name="username" placeholder="Correo" required><br>
            <input type="password" name="password" placeholder="Contraseña" required><br>
            <input type="password" name="confirm_password" placeholder="Confirmar Contraseña" required><br>
            <button type="submit">Borrar cuenta</button>
        </form>
    </div>
</body>
</html>
