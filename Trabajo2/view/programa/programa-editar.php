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
    <?php echo $prg->IdPrograma != null ? $prg->Programa : 'Nuevo Registro'; ?>
</h1>

<ol class="breadcrumb">
  <li><a href="?c=programa">Programas</a></li>
  <li class="active"><?php echo $prg->IdPrograma != null ? $prg->Programa : 'Nuevo Registro'; ?></li>
</ol>

<form id="frm-programa" action="?c=programa&a=Guardar" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?php echo $prg->IdPrograma; ?>" />
    
    <div class="form-group">
        <label>Programa</label>
        <input type="text" name="Programa" value="<?php echo $prg->Programa; ?>" class="form-control" />
    </div>
    
    <div class="form-group">
        <label>Activo</label>
        <input type="text" name="Activo" value="<?php echo $prg->Activo; ?>" class="form-control" />
    </div>
            
    <hr />
    
    <div class="text-right">
        <button class="btn btn-success">Guardar</button>
    </div>
</form>

<script>
    $(document).ready(function(){
        $("#frm-programa").submit(function(){
            return $(this).validate();
        });
    })
</script>
</body>
</html>