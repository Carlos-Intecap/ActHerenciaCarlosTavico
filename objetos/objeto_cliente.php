<?php
    //incluir el archivo Cliente.php para poder utilizar
    //el código que contiene
    include_once('../clases/Cliente.php');
    //crear un objeto de tipo cliente = instanciar la clase
    $cliente = new Cliente();
    $cliente->nit=$_GET['txtNit'];
    $cliente->telefono=$_GET['txtTel'];
    $cliente->apellido=$_GET['txtApellido'];
    $cliente->asignarNombre($_GET['txtNombre']);
    $cliente->direccion=$_GET['txtDir'];
    echo $cliente->verDatos();
    //echo "<br>".$cliente->nombreCompleto();
?>