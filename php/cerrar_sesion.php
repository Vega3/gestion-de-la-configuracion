<?php
    session_start();
    session_unset();
    session_destroy();

    /*header("location: ../indexx.php")
    exit();
    
    */
    echo'
        <script>
            alert("Se ha cerrado la sesion correctamente");
            window.locate = "../indexx.php";
        </script>
    ';
    
    
?>

