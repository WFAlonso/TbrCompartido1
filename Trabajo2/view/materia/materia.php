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
    <h1 class="page-header">Lista de Materias</h1>

    <div class="register-title">
        <a class="btn btn-primary" href="?c=materia&a=Crud">Nueva Materia</a>
        <a class="btn btn-primary" href="?c=principal&a=Index">Volver</a>
    </div>

    <table class="table">
        <thead>
            <tr>
                <td style="width:180px;">Materia</td>
                <td>Semestre</td>
                <td>Id Programa</td>
                <td>Edisión</td>
                <td>Eliminación</td>
            </tr>
        </thead>
        <tbody>
        <?php foreach($this->model->Listar() as $r): ?>
            <tr>
                <td><?php echo $r->Materia; ?></td>
                <td><?php echo $r->Semestre; ?></td>
                <td><?php echo $r->idPrograma; ?></td>
                <td>
                    <a href="?c=materia&a=Crud&idMateria=<?php echo $r->idMateria; ?>">Editar</a>
                </td>
                <td>
                    <a onclick="javascript:return confirm('¿Seguro de eliminar este registro?');" href="?c=materia&a=Eliminar&idMateria=<?php echo $r->idMateria; ?>">Eliminar</a>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table> 
</body>
</html>