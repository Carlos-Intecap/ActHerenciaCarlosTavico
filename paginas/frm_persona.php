<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Personas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body class="bg-primary-subtle text-primary-emphasis">

    <div class="container">
        <header>
            <ul class="nav nav-tabs justify-content-center">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="frm_persona.php">Personas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="frm_cliente.php">Clientes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="frm_empleado.php">Empleados</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="frm_ventas.php">Ventas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="frm_administracion.php">Administración</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="frm_cobros.php">Cobros</a>
                </li>
            </ul>
        </header>
        <div class="row justify-content-center">
            <div class="col col-4 border roundeds m-4">
                <h1 class="text-center">Personas</h1>
                <form action="../objetos/objeto_persona.php" method="get">
                    <div class="mb-3">
                        <label for="txtNombre" class="form-label">Nombre</label>
                        <input type="text" id="txtNombre" name="txtNombre" class="form-control" placeholder="Ingrese su nombre">
                    </div>
                    <div class="mb-3">
                        <label for="txtApellido" class="form-label">Apellido</label>
                        <input type="text" id="txtApellido" name="txtApellido" class="form-control" placeholder="Ingrese su apellido">
                    </div>
                    <div class="mb-3">
                        <label for="txtTel" class="form-label">Teléfono</label>
                        <input type="number" id="txtTel" name="txtTel" class="form-control" placeholder="Ingrese su teléfono">
                    </div>
                    <div class="mb-3">
                        <label for="txtDir" class="form-label">Dirección</label>
                        <input type="text" id="txtDir" name="txtDir" class="form-control" placeholder="Ingrese su dirección">
                    </div>
                    <div class="mb-3">
                        <input type="submit" value="Enviar" class="form-control btn btn-primary" name="btnEnviar">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>