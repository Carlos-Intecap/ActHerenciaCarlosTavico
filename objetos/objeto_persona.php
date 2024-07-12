<?php
    //referencia al archivo donde esta la clase
    include_once('../clases/Persona.php');
    //instanciar al clase = crear un objeto
    $persona = new Persona();
    //asingne valor al atributo nombre el cual es publico
    $persona->apellido=$_GET['txtApellido'];
    //mostrando el contenido del atributo apellido el cual es public
    echo "<br>Apellido: ". $persona->apellido;

    //asignado nombre por medio de un método porque el atributo es privado
    $persona->asignarNombre($_GET['txtNombre']);
    //mostrar el contenido del atributo nombre, es privado, por eso uso un método
    $persona->telefono=$_GET['txtTel'];
    $persona->direccion=$_GET['txtDir'];
    echo "<br>Nombre: ". $persona->verNombre();
    echo "<br>".$persona->nombreCompleto();
    echo "<br>".$persona->verDatos();
?>