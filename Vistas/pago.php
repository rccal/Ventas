<?php 
include_once 'Layout2.php'; 
include_once '../Controladores/Carrito.php'; 
include_once '../Controladores/config.php'; 
include_once '../Controladores/conexion.php'; 
include_once '../Controladores/CRUD.php';
   $correo=$_POST["email"]; 
   
    


if ($_POST) {
    $sid=session_id();
    $total=0;
    foreach($_SESSION['Carrito'] as $indice=>$produc){
        $total=$total + ($produc['precio']*$produc['cantidad']);
    }
    echo $total;
    $Productos=new Acciones();
    $Mostrar=$Productos-> Insertar($sid,$correo,$total);
}

?>