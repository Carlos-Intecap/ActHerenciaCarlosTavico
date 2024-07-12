<?php
    include_once('../clases/Empleado.php');
    $emple = new Empleado();
    //atributos de la clase Empleado
    $emple->codigo=$_GET['txtCodigo'];
    $emple->nivelAcademico=$_GET['txtNivelAcad'];
    $emple->sueldoBase=$_GET['txtSueldoBase'];

    //atributos que heredad de la clase Persona
    $emple->asignarNombre($_GET['txtNombre']);
    $emple->apellido=$_GET['txtApellido'];
    $emple->telefono=$_GET['txtTel'];
    $emple->direccion=$_GET['txtDir'];

    echo "Sueldo Liquido: Q.".  $emple->calcularSueldoLiquido();
    echo $emple->verDatos();
?>