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
        echo' <div class="container">
              <div align="center">
              <h2 class="text-center"></h2>
              <div class="row">';
            foreach($data as $item){ 
            	echo '<div class="col-4">
                <form action="">
                    <div id="imgPro" class="col-lg-4 col-md-6 col-sm-12"> 
                        <p>Nombre:'.$item['id'] .'</p> 
                        <p>Detalle:'.$item['Nombre'].'</p> 
                        <p>Precio: $'.$item['Precio'] .'</p> 
                        <input type="submit" class="btn btn-dark" value="Agregar">
                    </div>

                </form>
            </div>';
            }
            echo '

        </div>
    </div>
</div>


<style>
    .col-lg-4,
    .col-md-6,
    .col-sm-12 {
        margin: 0;
        padding: 25px;
    }

    #imgPro img {
        width: 150%;
        height: 150px;
    }

    #imgPro img:hover {
        border: 3px solid rgb(255, 255, 255);
    }
</style>';
	}


	

}






 ?>