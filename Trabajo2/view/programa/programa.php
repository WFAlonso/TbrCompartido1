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
</br><h1 class="page-header">Lista de Programas</h1>

<div class="well well-sm text-right">
    <a class="btn btn-primary" href="?c=programa&a=Crud">Nueva programa</a>
    <a class="btn btn-primary" href="?c=principal&a=Index">Volver</a>
</div>

<table class="table table-striped">
   
        <tr>
            <th style="width:180px;">Programa</th>
            <th>Activo</th>
        </tr>
    
    
    <?php foreach($this->model->Listar() as $r): ?>
        <tr>
            <td><?php echo $r->Programa; ?></td>
            <td><?php echo $r->Activo; ?></td>
            <td>
                <a href="?c=programa&a=Crud&id=<?php echo $r->IdPrograma; ?>">Editar</a>
            </td>
            <td>
                <a onclick="javascript:return confirm('¿Seguro de eliminar este registro?');" href="?c=programa&a=Eliminar&id=<?php echo $r->IdPrograma; ?>">Eliminar</a>
            </td>
        </tr>
    <?php endforeach; ?>
  
</table>
</body>
</html> 
