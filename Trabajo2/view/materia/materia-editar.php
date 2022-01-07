<!--[if IE 8]> <html class="lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <link rel="stylesheet" href="lib/css/css_est.css">
  
</head>
<body>
    <br/><h1 class="title">
        <?php echo $mat->idMateria != null ? $mat->Materia : 'Registro de Materias'; ?>
    </h1>

    <ol class="register-title">
        <li><a href="?c=materia">Materias</a></li>
    </ol>

    <form class="register" id="frm-materia" action="?c=materia&a=Guardar" method="post" enctype="multipart/form-data">
        <input type="hidden" name="idMateria" value="<?php echo $mat->idMateria; ?>" />
        
        <div class="form-group">
            <label>Materia</label>
            <input type="text" name="Materia" value="<?php echo $mat->Materia; ?>" class="register-input" placeholder="Ingrese nombre de materia" data-validacion-tipo="requerido|min:3" />
        </div>
        
        <div class="form-group">
            <label>Semestre</label>
            <input type="text" name="Semestre" value="<?php echo $mat->Semestre; ?>" class="register-input" placeholder="Ingrese semestres" data-validacion-tipo="requerido|min:10" />
        </div>
        
        <div class="form-group">
            <label>Id Programa</label>
            <input type="text" name="idPrograma" value="<?php echo $mat->idPrograma; ?>" class="register-input" placeholder="Código deprograma" data-validacion-tipo="requerido|email" />
        </div>
            
        <hr />
        
        <div class="text-right">
            <button class="btn btn-success">Guardar</button>
        </div>
    </form>

    <script>
        $(document).ready(function(){
            $("#frm-materia").submit(function(){
                return $(this).validate();
            });
        })
    </script>

</body>
</html>