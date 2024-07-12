<?php
    include_once('../clases/Ventas.php');
    $ventas = new Ventas();
    //atributos de la clase Ventas
    $ventas->tipoContratacion=$_GET['txtTipoContr'];
    $ventas->comisionVenta=$_GET['txtComision'];
    //atributos de la clase empleado y persona
    //empleado
    $ventas->codigo=$_GET['txtCodigo'];
    $ventas->nivelAcademico=$_GET['txtNivelAcad'];
    $ventas->sueldoBase=$_GET['txtSueldoBase'];
    //persona
    $ventas->asignarNombre($_GET['txtNombre']);
    $ventas->apellido=$_GET['txtApellido'];
    $ventas->telefono=$_GET['txtTel'];
    $ventas->direccion=$_GET['txtDir'];

    echo "Sueldo Liquido: Q.". $ventas->calcularSueldoLiquido();
    echo $ventas->verDatos();
?>