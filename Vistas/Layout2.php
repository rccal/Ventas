<?php include_once '../Controladores/Carrito.php';  ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>Grupo1</title>
</head>
<body>
    
    <ul class="nav nav-tabs">
        <li class="nav-item">
            <a href="#" class="nav-link active">Inicio</a>
        </li>
        <li class="nav-item">
            <a href="../Vistas/Productos.php" class="nav-link ">Productos</a>
        </li>
        <li class="nav-item">
            <a href="" class="nav-link ">Nosotros</a>
        </li>
        <li class="nav-item">
            <a href="Carrito.php" class="nav-link ">Carrito de compras(<?php
            echo(empty($_SESSION['Carrito']))?0:count($_SESSION['Carrito']);
             ?>)</a>
        </li>
    </ul>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    
</body>
</html>