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

<h1 class="title"> Registro de Instructor
        <?php //echo $inst->idInstructor!= null ? $inst->Nombre : 'Registro de Instructor'; ?>
</h1>

<ol class="register-title">
  <li><a href="?c=instructor">instructores</a></li>
  
</ol>

<form idInstructor="frm-instructor" action="?c=instructor&a=Guardar" method="post" enctype="multipart/form-data">
    <input type="hidden" name="idInstructor" value="<?php echo $inst->idInstructor; ?>" />
    
    <div class="form-group">
        <label>Nombre</label>
        <input type="text" name="Nombre" value="<?php echo $inst->Nombre; ?>" class="form-control" placeholder="Ingrese su nombre" data-validacion-tipo="requerido|min:10" />
    </div>
    
    <div class="form-group">
        <label>Apellido</label>
        <input type="text" name="Apellido" value="<?php echo $inst->Apellido; ?>" class="form-control" placeholder="Ingrese su apellido" data-validacion-tipo="requerido|min:10" />
    </div>

    <div class="form-group">
        <label>Edad</label>
        <input type="text" name="Edad" value="<?php echo $inst->Edad; ?>" class="form-control" placeholder="Ingrese su edad" data-validacion-tipo="requerido|min:3" />
    </div>

    <div class="form-group">
        <label>Genero</label>
        <input type="text" name="Genero" value="<?php echo $inst->Genero; ?>" class="form-control" placeholder="Ingrese su genero" data-validacion-tipo="requerido|min:1|max:2" />
    </div>
    
    <div class="form-group">
        <label>Titulo</label>
        <input type="text" name="titulo" value="<?php echo $inst->titulo; ?>" class="form-control" placeholder="Ingrese su titulo" data-validacion-tipo="requerido|min:20" />
    </div>
        
    <hr />
    
    <div class="text-right">
        <button class="btn btn-success">Guardar</button>
    </div>
</form>

<script>
    $(document).ready(function(){
        $("#frm-instructor").submit(function(){
            return $(this).validate();
        });
    })
</script>
</body>
</html>