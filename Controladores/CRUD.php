<?php 
include_once 'conexion.php';

	
class Acciones 
{
	public function Mostrar(){
		$date=new Conexion();
		$conexion=$date->Conectar();
		$consulta = "SELECT * FROM tproductos";
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        $data = $resultado->fetchAll(PDO::FETCH_ASSOC);
        return $data;
	}
	


	

}






 ?>