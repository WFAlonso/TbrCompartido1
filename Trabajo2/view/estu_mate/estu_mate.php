<h1 class="page-header">Inscripcion de Materia</h1>

<div class="well well-sm text-right">
    <a class="btn btn-primary" href="?c=estu_mate&a=Crud">Nueva Inscripcion</a>
    <a class="btn btn-primary" href="?c=principal&a=Index">Volver</a>
</div>

<table class="table table-striped">
    <thead>
        <tr>
            <th style="width:180px;">Inscripcion</th>
            <th>Id Materia</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach($this->model->Listar() as $r): ?>
        <tr>
            <td><?php echo $r->idEstudiante; ?></td>
            <td><?php echo $r->idMateria; ?></td>
            <td>
                <a href="?c=estu_mate&a=Crud&id=<?php echo $r->idEstMat; ?>">Editar</a>
            </td>
            <td>
                <a onclick="javascript:return confirm('¿Seguro de eliminar este registro?');" href="?c=estu_mate&a=Eliminar&id=<?php echo $r->idEstMat; ?>">Eliminar</a>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table> 
