<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quinautos</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="shortcut icon" href="assets/img/logo.png" type="image/x-icon">
</head>

<body>

    <div id="main">
        <header>
            <div class="logo"><img src="assets/img/logo.png" alt="engranaje"></div>
            <div class="nombre">
                <h2>Quinautos</h2>
            </div>
            <div class="perfil"></div>
        </header>

        <section>
            <aside>
                <form action="controlador/UsuarioControlador.php" method="post">
                    <h2>Ingresar</h2>
                    <div class="input__field">
                        <i class="fa-solid fa-user"></i>
                        <input type="text" name="txtUsuario" placeholder="Usuario">
                    </div>
                    <div class="input__field">
                        <i class="fa-solid fa-key"></i>
                        <input type="password" name="txtContraseña" placeholder="Contraseña">
                    </div>
                    <input type="submit" value="Ingresar">
                    <p>¿Aún no tienes cuenta? registrate <a href="#">aquí</a>.</p>
                </form>
            </aside>

            <main>
                <figure>
                    <!-- <img src="assets/img/index.gif" alt="Coche"> -->
                </figure>
            </main>
        </section>

        <footer>
            <h3>Creado por: Mateo López &copy; 2022</h3>
        </footer>
    </div>

    <script src="https://kit.fontawesome.com/a22bc65f86.js" crossorigin="anonymous"></script>
</body>

</html>