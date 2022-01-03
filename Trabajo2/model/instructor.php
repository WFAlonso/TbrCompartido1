<?php
//Requiero el archivo de clase para extenderlo en este script
//require_once("persona.php");
//Clase hija
include("model/persona.php");
class instructor extends persona
{
   
    public $titulo;

    public function __CONSTRUCT()
    {
        try {
            $this->pdo = conexion::StartUp();
            $this->id=0;
            $this->Nombre = "";
            $this->Apellido = "";
            $this->Edad = "";
            $this->Genero = "";
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function Listar()
    {
        try {
            $result = array();

            $stm = $this->pdo->prepare("SELECT * FROM instructor");
            $stm->execute();

            return $stm->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function Obtener($idInstructor)
    {
        try {
            $stm = $this->pdo
                ->prepare("SELECT * FROM instructor WHERE idInstructor = ?");


            $stm->execute(array($idInstructor));
            return $stm->fetch(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function Eliminar($idInstructor)
    {
        try {
            $stm = $this->pdo
                ->prepare("DELETE FROM instructor WHERE idInstructor = ?");

            $stm->execute(array($idInstructor));
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function Actualizar($data)
    {
        try {
            $sql = "UPDATE instructor SET 
						Nombre          = ?, 
						Apellido        = ?,
                        Edad        = ?,
                        Genero        = ?,
                        titulo        = ?
				    WHERE idInstructor = ?";

            $this->pdo->prepare($sql)
                ->execute(
                    array(
                        $data->Nombre,
                        $data->Apellido,
                        $data->Edad,
                        $data->Genero,
                        $data->titulo,
                        $data->id
                    )
                );
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function Registrar(instructor $data)
    {
        try {
            $sql = "INSERT INTO instructor (Nombre,Apellido,Edad,Genero,titulo) 
		        VALUES (?, ?, ?, ?, ?)";

            $this->pdo->prepare($sql)
                ->execute(
                    array(
                        $data->Nombre,
                        $data->Apellido,
                        $data->Edad,
                        $data->Genero,
                        $data->titulo
                    )
                );
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
}
