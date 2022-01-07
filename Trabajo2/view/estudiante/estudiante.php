<!DOCTYPE html>
<!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]> <html class="lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]> <html class="lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <link rel="stylesheet" href="lib/css/css_est.css">
</head>
<body>
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Registro de Estudiantes</title>
    <link rel="stylesheet" href="css/css_listaestudiante.css">

    </head>
    <body>	
        <section>
        <!--for demo wrap-->
            <h1 class="page-header">estudiantes</h1>

            <div class="register-title">
                <a class="btn btn-primary" href="?c=estudiante&a=Crud">Nueva estudiante</a>
                <a class="btn btn-primary" href="?c=principal&a=Index">Volver</a>
            </div>

            <table class="table">
                <thead>
                    <tr>
                        <td style="width:180px;">Nombre</td>
                        <td>Apellido</td>
                        <td>Edad</td>
                        <td>Genero</td>
                        <td>Id Programa</td>
                        <td>Edición</td>
                        <td>Eliminación</td>
                    </tr>
                </thead>
                <tbody>
                <?php foreach($this->model->Listar() as $r): ?>
                    <tr>
                        <td><?php echo $r->Nombre; ?></td>
                        <td><?php echo $r->Apellido; ?></td>
                        <td><?php echo $r->Edad; ?></td>
                        <td><?php echo $r->Genero; ?></td>
                        <td><?php echo $r->idPrograma; ?></td>
                        <td>
                            <a href="?c=estudiante&a=Crud&idEstudiante=<?php echo $r->idEstudiante; ?>">Editar</a>
                        </td>
                        <td>
                            <a onclick="javascript:return confirm('¿Seguro de eliminar este registro?');" href="?c=estudiante&a=Eliminar&idEstudiante=<?php echo $r->idEstudiante; ?>">Eliminar</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table> 
    </body>
</html>