<?php
class estu_mate
{
    private $pdo;

    public $idEstMat;
    public $idEstudiante;
    public $idMateria;

    public function __CONSTRUCT()
    {
        try {
            $this->pdo = conexion::StartUp();
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function Listar()
    {
        try {
            $result = array();

            $stm = $this->pdo->prepare("SELECT * FROM estu_mate");
            $stm->execute();

            return $stm->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function Obtener($id)
    {
        try {
            $stm = $this->pdo
                ->prepare("SELECT * FROM estu_mate WHERE idEstMat = ?");


            $stm->execute(array($id));
            return $stm->fetch(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function Eliminar($id)
    {
        try {
            $stm = $this->pdo
                ->prepare("DELETE FROM estu_mate WHERE idEstMat = ?");

            $stm->execute(array($id));
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function Actualizar($data)
    {
        try {
            $sql = "UPDATE estu_mate SET 
						idEstudiante          = ?, 
                        idMateria        = ?
				    WHERE idEstMat = ?";

            $this->pdo->prepare($sql)
                ->execute(
                    array(
                        $data->idEstMat,
                        $data->idEstudiante,
                        $data->idMateria
                    )
                );
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function Registrar(estu_mate $data)
    {
        try {
            $sql = "INSERT INTO estu_mate (idEstudiante,idMateria) 
		        VALUES (?, ?)";

            $this->pdo->prepare($sql)
                ->execute(
                    array(
                        $data->idEstudiante,
                        $data->idPrograma
                    )
                );
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
}
