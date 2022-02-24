<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="../../css/login.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <title>Iniciar Sesión</title>
</head>
<body>
    <section class="side">
        <img src="./images/img.svg" alt="">
    </section>

    <section class="main">
        <div class="login-container">
            <p class="title">Bienvenido</p>
            <div class="separator"></div>

            <form class="login-form" action="../../controllers/administrador/ControlLoginAdmin.php" method="POST">
                <div class="form-control">
                    <input type="text" placeholder="Rut" name="rut" class="input">
                    <i class="fas fa-user"></i>
                </div>
                <div class="form-control">
                    <input type="password" placeholder="Contraseña" name="clave" class="input">
                    <i class="fas fa-lock"></i>
                </div>

                <button class="submit">Iniciar sesión</button>
                <p class="error">
                    <?php
                        session_start();
                        if(isset($_SESSION['msgError'])){
                            echo($_SESSION['msgError']);
                            unset($_SESSION['msgError']);
                        }
                    ?>
                </p>
            </form>
        </div>
    </section>
</body>
</html>