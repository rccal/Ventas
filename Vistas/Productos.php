<?php 
    include_once '../Controladores/CRUD.php';
    include_once '../Vistas/Layout.php'; 
    $Productos=new Acciones();
    $Mostrar=$Productos-> Mostrar();
    
 ?>
  <div class="container">
              <div align="center">
              <h2 class="text-center"></h2>
              <div class="row">;
            <?php foreach($Mostrar as $item){ ?>
            	<div class="col-4">
                <form action="">
                    <div id="imgPro" class="col-lg-4 col-md-6 col-sm-12"> 
                        <p>Nombre:<?php echo $item['id']?> </p> 
                        <p>Detalle: <?php echo $item['Nombre']?> </p> 
                        <p>Precio: $<?php echo $item['Precio'] ?> </p> 
                        <input type="submit" class="btn btn-dark" value="Agregar">
                    </div>

                </form>
            </div>
            <?php } ?>
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
