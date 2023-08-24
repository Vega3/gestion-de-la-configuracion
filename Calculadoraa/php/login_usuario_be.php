<?php

    session_start();

    include 'conexion_be.php';

    $correo = $_POST['correo'];
    $clave = $_POST['clave'];

    $validar_login = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo = '$correo' and clave = '$clave' ");

    if(mysqli_num_rows($validar_login) > 0){
        $_SESSION['usuario'] = $correo;
        echo'
            <script>
                alert("Sesion iniciada correctamente!!");
                window.location = "../Calculadora/index_calculator.php";
            </script>
        ';
        exit;

    }else{
        echo '
            <script>
                alert("Usuario no existe, por favor verifique los datos introducidos");
                window.location = "../indexx.php";
            </script>
        ';
        exit();
    }
?>


