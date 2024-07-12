<?php
    include_once('../clases/Cobros.php');
    //crear un objeto
    $cobros = new Cobros();
    //atributos heredados de persona
    $cobros->asignarNombre($_POST['txtNombre']);
    $cobros->apellido=$_POST['txtApellido'];
    $cobros->telefono=$_POST['txtTel'];
    $cobros->direccion=$_POST['txtDir'];
    //atributos heredados de empleado
    $cobros->codigo=$_POST['txtCodigo'];
    $cobros->nivelAcademico=$_POST['txtNivelAcad'];
    $cobros->sueldoBase=$_POST['txtSueldoBase'];
    //atributos de la clase
    $cobros->bonificacion=$_POST['txtBonificacion'];
    $cobros->comisionCobro=$_POST['txtComisionCobro'];
    
    echo "Sueldo Liquido: Q.". $cobros->calcularSueldoLiquido();
    echo $cobros->verDatos();
?>