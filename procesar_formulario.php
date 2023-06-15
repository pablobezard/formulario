<!DOCTYPE html>
<html>
<head>
    <title>Empresa XYZ</title>
    <link rel="stylesheet" href="estilos.css">
    <script src="funciones.js"></script>
    <style>
    /* Agrega aquí tus estilos personalizados si es necesario */
    </style>
</head>
<body>
    <header>
        <h1>Bienvenidos a Empresa XYZ</h1>
            <nav>
                <ul>
                    <li><a href="#">Inicio</a></li>
                    <li><a href="#">Servicios</a></li>
                    <li><a href="#">Contacto</a></li>
                </ul>
            </nav>
    </header>

    <button onclick="saludar()">Saludar</button>
  

    <main>
        <section id="presentacion" class="container">
            <h2>Presentación</h2>
            <p>Una breve descripción de la empresa.</p>
            <img src="https://concepto.de/wp-content/uploads/2014/08/empresa-2-e1551381652195.jpg" alt="Imagen de la empresa">
        </section>

    <section id="formularioNumerico" class="container">
        <h2>Formulario de Operaciones Numéricas</h2>
        <form onsubmit="return calcular();" id="miFormularioNumerico">
            <label for="num1">Número 1:</label>
            <input type="number" name="num1" id="num1">
            <br>
            <label for="num2">Número 2:</label>
            <input type="number" name="num2" id="num2">
            <br>
            <label for="operacion">Operación:</label>
                <select name="operacion" id="operacion">
                <option value="suma">Suma</option>
                <option value="resta">Resta</option>
                <option value="multiplicacion">Multiplicación</option>
                    <option value="division">División</option>
                </select>
                <br>
                <input type="checkbox" name="guardar" id="guardar" checked>
                <label for="guardar">Guardar resultado</label>
                <br>
                <input type="submit" value="Calcular">
                </form>
            <p>Resultado: <span id="resultado"></span></p>
        </section>

    <section id="formularioDatosPersonales" class="container">
        <h2>Formulario de Datos Personales</h2>
        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nombre = $_POST['nombre'];
            $email = $_POST['email'];
            $telefono = $_POST['telefono'];
            $intereses = $_POST['intereses'];
            $suscripcion = isset($_POST['suscripcion']) ? 1 : 0;

            $conexion = mysqli_connect("localhost", "root", "123456", "formulario");

            if (!$conexion) {
            die("Error al conectar con la base de datos: " . mysqli_connect_error());
            }

            $query = "INSERT INTO solicitante (nombre, email, telefono, intereses, suscripcion) VALUES ('$nombre', '$email', '$telefono', '$intereses', $suscripcion)";

            if (mysqli_query($conexion, $query)) {
            echo "<p>Gracias por enviar tus datos. Hemos registrado la información en nuestra base de datos.</p>";
            } else {
            echo "Error al insertar los datos: " . mysqli_error($conexion);
            } 

            mysqli_close($conexion);
        }
        ?>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" onsubmit="return validarFormulario();" id="miFormularioDatosPersonales">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre">
        <br>
        <label for="email">Email:</label>
        <input type="email" name="email" id="email">
        <br>
        <label for="telefono">Teléfono:</label>
        <input type="tel" name="telefono" id="telefono">
        <br>
        <label for="intereses">Intereses:</label>
        <select name="intereses" id="intereses">
            <option value="opcion1">Bacante para algun puesto</option>
            <option value="opcion2">Quiero adquirir servcios</option>
            <option value="opcion3">Otros..</option>
        </select>
        <br>
        <input type="checkbox" name="suscripcion" id="suscripcion">
        <label for="suscripcion">Suscribirse al boletín</label>
        <br>
        <input type="submit" value="Enviar">
        </form>
    </section>
    </main>

    <footer>
    <p>Derechos de Autor © 2023 Empresa XYZ. Todos los derechos reservados.</p>
    </footer>

    <script>
   // Función para mostrar un mensaje de saludo
function saludar() {
    var nombre = prompt("Ingresa tu nombre");
    if (nombre) {
    alert("¡Hola, " + nombre + "!");
    }
}



    </script>
</body>
</html>
