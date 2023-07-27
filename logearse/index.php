<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="sesion_estilos.css">
    <title>Inicio de Sesion</title>
    <script src="https://kit.fontawesome.com/36984e868d.js" crossorigin="anonymous"></script>

</head>
<body>
<form action="validar.php" method="post">
    <header>
        <h1 class="Logo">Logo</h1>
        <nav class="Navigation">
            <a href="#">About</a>
            <a href="#">Service</a>
            <a href="#">Contact</a>
            <button class="btnLogin-popup">Home</button>
        </nav>
    </header>

    <div class="wrapper">

</span>

        <div class="form-box login">
            <h2>Iniciar Sesion</h2>
            <form action="#">
                <div class="input-box">
                    <span class="icon"><i class="fa-solid fa-envelope"></i></span>
                    <input type="email" required, name="usuario">
                    <label>Email</label>
                </div>
                <div class="input-box">
                    <span class="icon"><i class="fa-solid fa-lock"></i></span>
                    <input type="password" required, name="contraseña">
                    <label>Contraseña</label>
                </div>
                <div class="remember-forgot">
                    <label><input type="checkbox">Recuerdame</label>
                    <a href="#">Forgot Password?</a>
                </div>
                <button type="submit" class="btn", value="Ingresar">Login
                </button>

                <div class="login-register">
                    <p>¿No tienes una cuenta?<a href="#" 
                    class="register-link"> Registrate</a></p>
                </div>
            </form>
        </div>
        <div class="form-box register">
            <h2>Registración</h2>
            <form action="#">
                <div class="input-box">
                    <span class="icon"><i class="fa-solid fa-user-tie"></i></span>
                    <input type="text" required>
                    <label>Usuario</label>
                </div>
                <div class="input-box">
                    <span class="icon"><i class="fa-solid fa-envelope"></i></span>
                    <input type="email" required>
                    <label>Email</label>
                </div>
                <div class="input-box">
                    <span class="icon"><i class="fa-solid fa-lock"></i></span>
                    <input type="password" required>
                    <label>Contraseña</label>
                </div>
                <div class="remember-forgot">
                    <label><input type="checkbox">¿Aceptas nuestros terminos y condiciones?</label>
                </div>
                <button type="submit" class="btn">Registrar
                </button>

                <div class="login-register">
                    <p>¿Ya tienes una cuenta?<a href="#" 
                    class="login-link">Login</a></p>
                </div>
            </form>
        </div>
    </div>

    <script src="script.js"></script>
</form>
</body>
</html>

<!--##### Minuto 5:59 #####-->