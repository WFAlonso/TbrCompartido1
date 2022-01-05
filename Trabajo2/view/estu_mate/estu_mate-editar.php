<h1 class="page-header">
    <?php echo $estu_mate->idEstMat != null ? $estu_mate->idEstudiante : 'Nuevo Registro'; ?>
</h1>

<ol class="breadcrumb">
  <li><a href="?c=estu_mate">Inscripciones</a></li>
  <li class="active"><?php echo $estu_mate->idEstMat != null ? $estu_mate->idEstudiante : 'Nuevo Registro'; ?></li>
</ol>

<form id="frm-estu_mate" action="?c=estu_mate&a=Guardar" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?php echo $estu_mate->idEstMat; ?>" />
    
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
        $("#frm-materia").submit(function(){
            return $(this).validate();
        });
    })
</script>