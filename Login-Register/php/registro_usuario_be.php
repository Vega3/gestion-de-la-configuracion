<?php

    include 'conexion_be.php';

    $nombre_completo = $_POST['nombre_completo'];
    $correo = $_POST['correo'];
    $usuario = $_POST['usuario'];
    $clave = $_POST['clave'];

    $query = "INSERT INTO usuarios(nombre_completo, correo, usuario, clave)
              VALUES ('$nombre_completo', '$correo', '$usuario', '$clave')";

    //Verificar que el correo y el usuario no se repitan
    $verificar_correo = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo  = '$correo' ");
    $verificar_uruario = mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario  = '$usuario' ");

    if((mysqli_num_rows($verificar_correo) or mysqli_num_rows($verificar_uruario)) > 0 ){
        echo '
            <script>
                alert("Este correo y/ o usuario ya se encuentra registrado, intente con otro(s) diferente(s)");
                window.location = "../indexx.php";
            </script>
        ';
        exit();   
    }

    $ejecutar = mysqli_query($conexion, $query);

    if($ejecutar){
        echo '
            <script>
                alert("Usuario almacenado exitosamente");
                window.location = "../indexx.php";
            </script>
        ';
    }else{
        echo '
            <script>
                alert("Usuario no registrado correctamente, intente de nuevo");
                window.location = "../indexx.php";
            </script>
        ';
    }

    mysqli_close($conexion);
?>