<!--[if IE 8]> <html class="lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <link rel="stylesheet" href="lib/css/css_est.css">
  
</head>
<body>
    <h1 class="title"> Registro de Estudiantes
        <?php //echo $est->idEstudiante!= null ? $est->Nombre : 'Nuevo Registro'; ?>
    </h1>

    <ol class="register-title">
        <li><a href="?c=estudiante">Estudiantes</a></li>
    </ol>

    <form class="register" idEstudiante="frm-estudiante" action="?c=estudiante&a=Guardar" method="post" enctype="multipart/form-data">
        <!--<input type="hidden" name="idEstudiante" value="<?php //echo $est->id; ?>" />-->
        
        <div class="form-group">
            <label>Nombre</label>
            <input type="text" name="Nombre" value="<?php echo $est->Nombre; ?>" class="register-input" placeholder="Ingrese su nombre" data-validacion-tipo="requerido|min:10" />
        </div>
        
        <div class="form-group">
            <label>Apellido</label>
            <input type="text" name="Apellido" value="<?php echo $est->Apellido; ?>" class="register-input" placeholder="Ingrese su apellido" data-validacion-tipo="requerido|min:10" />
        </div>

        <div class="form-group">
            <label>Edad</label>
            <input type="text" name="Edad" value="<?php echo $est->Edad; ?>" class="register-input" placeholder="Ingrese su edad" data-validacion-tipo="requerido|min:10" />
        </div>

        <div class="form-group">
            <label>Genero</label>
            <input type="text" name="Genero" value="<?php echo $est->Genero; ?>" class="register-input" placeholder="Ingrese su genero" data-validacion-tipo="requerido|min:1|max:2" />
        </div>
        
        <div class="form-group">
            <label>Id Programa</label>
            <input type="text" name="idPrograma" value="<?php echo $est->idPrograma; ?>" class="register-input" placeholder="Ingrese su programa" data-validacion-tipo="requerido|min:1" />
        </div>
            
        <hr />
        
        <div class="text-right">
            <button class="btn btn-success">Guardar</button>
        </div>
    </form>

    <script>
        $(document).ready(function(){
            $("#frm-estudiante").submit(function(){
                return $(this).validate();
            });
        })
    </script>