<?php
    include_once('../clases/Administracion.php');
    $admin = new Administracion();
    //atributos de la clase Administracion
    $admin->bonificacion=$_POST['txtBonificacion'];
    //atributos de la clase empleado y persona
    //empleado
    $admin->codigo=$_POST['txtCodigo'];
    $admin->nivelAcademico=$_POST['txtNivelAcad'];
    $admin->sueldoBase=$_POST['txtSueldoBase'];
    //persona
    $admin->asignarNombre($_POST['txtNombre']);
    $admin->apellido=$_POST['txtApellido'];
    $admin->telefono=$_POST['txtTel'];
    $admin->direccion=$_POST['txtDir'];

    echo "Sueldo Liquido: Q.". $admin->calcularSueldoLiquido();
    echo $admin->verDatos();
?>