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
<h1 class="page-header">
    <?php echo $estu_mate->idEstMat != null ? $estu_mate->idEstudiante : 'Nuevo Registro'; ?>
</h1>

<ol class="breadcrumb">
  <li><a href="?c=estu_mate">Inscripciones</a></li>
  <li class="active"><?php echo $estu_mate->idEstMat != null ? $estu_mate->idEstudiante : 'Nuevo Registro'; ?></li>
</ol>

<form idEstMat="frm-estu_mate" action="?c=estu_mate&a=Guardar" method="post" enctype="multipart/form-data">
    <input type="hidden" name="idEstMat" value="<?php echo $estu_mate->idEstMat; ?>" />
    
    <div class="form-group">
        <label>Estudiante</label>
        <input type="text" name="idEstudiante" value="<?php echo $estu_mate->idEstudiante; ?>" class="form-control" placeholder="Ingrese su identificacion" data-validacion-tipo="requerido|min:1" />
    </div>
    
    <div class="form-group">
        <label>Materia</label>
        <input type="text" name="idMateria" value="<?php echo $estu_mate->idMateria; ?>" class="form-control" placeholder="Ingrese id de la materia" data-validacion-tipo="requerido|min:1" />
    </div>
        
    <hr />
    
    <div class="text-right">
        <button class="btn btn-success">Guardar</button>
    </div>
</form>

<script>
    $(document).ready(function(){
        $("#frm-estu_mate").submit(function(){
            return $(this).validate();
        });
    })
</script>
</body>
</html>