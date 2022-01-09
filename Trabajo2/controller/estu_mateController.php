<?php
require_once 'model/estu_mate.php';

class estu_mateController{
    
    private $model;
    
    public function __CONSTRUCT(){
        $this->model = new estu_mate();
    }
    
    public function Index(){
        require_once 'view/header.php';
        require_once 'view/estu_mate/estu_mate.php';
    }
    
    public function Crud(){
        $estu_mate = new estu_mate();
        
        if(isset($_REQUEST['idEstMat'])){
            $estu_mate = $this->model->Obtener($_REQUEST['idEstMat']);
        }
        
        require_once 'view/header.php';
        require_once 'view/estu_mate/estu_mate-editar.php';
    }
    
    public function Guardar(){
        $estu_mate = new estu_mate();
        
        $estu_mate->idMateria = $_REQUEST['idEstMat'];
        $estu_mate->idEstudiante = $_REQUEST['idEstudiante'];
        $estu_mate->idPrograma = $_REQUEST['idMateria'];

        $estu_mate->id> 0 
            ? $this->model->Actualizar($estu_mate)
            : $this->model->Registrar($estu_mate);
        
        header('Location: index.php');
    }
    
    public function Eliminar(){
        $this->model->Eliminar($_REQUEST['idEstMat']);
        header('Location: index.php');
    }
}