<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login and Register</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <main>
        <div class="contenedor__todo">
            <div class="caja__trasera">
                <div class="caja__trasera_login">
                    <h3>¿Ya tienes una cuenta?</h3>
                    <p>Inicia sesion para entrar a nuestra calculadora</p>
                    <button  id="btn__iniciar-sesion">Iniciar sesion</button>
                </div>
                <div class="caja__trasera_register">
                    <h3>¿Aun no tienes una cuenta?</h3>
                    <p>Registrate para disfrutar de nuestra calculadora</p>
                    <button  id="btn__registrarse">Registrarse</button>
                </div>
            </div>

            
            <div class="contenedor__login-register">
                <form action="php/login_usuario_be.php" method = "POST" class="formulario__login">
                    <h2>Iniciar sesion</h2>
                    <input type="text" placeholder="Correo Electronico" name = 'correo'>
                    <input type="password" placeholder="Contraseña" name = 'clave'>
                    <button>Entrar</button>
                </form>

                <form action="php/registro_usuario_be.php" method = "POST" class="formulario__register">
                    <h2>Registrarse</h2>
                    <input type="text" placeholder="Nombre completo" name="nombre_completo">
                    <input type="text" placeholder="Correo Electronico" name="correo">
                    <input type="text" placeholder="Usuario" name="usuario">
                    <input type="password" placeholder="Contraseña" name="clave">
                    <button>Registrarse</button>
                </form>
            </div>
        </div>
    </main>
    <script src="assets/javascript/script.js"></script>
</body>
</html>