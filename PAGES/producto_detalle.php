<?php
    require_once '../PHP/producto.php';
    if (isset($_GET['id'])) {
        $productoObj = new Producto();
        $producto = $productoObj->obtenerProductoPorId($_GET['id']);
    }
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda en Línea de Nik</title>
    <link rel="icon" type="image/png" href="https://metroio.vtexassets.com/assets/vtex/assets-builder/metroio.store-theme/13.0.86/svg/logo-metro___19ecf64e9f98f0564f96d3856f640d6c.svg">
    <link rel="stylesheet" href="../CSS/styles1.css">
    <link rel="stylesheet" href="../CSS/styles3.css">
    <script src="../JS/script.js" defer></script>
    <script src="../JS/busqueda1.js" defer></script>
</head>
<body>
<header>
    <div class="container header-container">
        <div class="logo">
            <a href="../public_html/index.php">
                <img src="https://metroio.vtexassets.com/assets/vtex/assets-builder/metroio.store-theme/13.0.86/svg/logo-metro___19ecf64e9f98f0564f96d3856f640d6c.svg" alt="Logo de la tienda">
            </a>
        </div>
        <div class="categories">
            <button id="category-button">CATEGORIAS <div class="arrow"></div></button>
            <ul id="category-list" class="category-list">
                <li data-category="tecnologia"><a href="categoria_producto.php?categoria=tecnologia">Tecnologia</a></li>
                <li data-category="bebidas"><a href="categoria_producto.php?categoria=bebidas">Bebidas</a></li>
                <li data-category="frutas-verduras"><a href="categoria_producto.php?categoria=frutas-verduras">Frutas y Verduras</a></li>
                <li data-category="cuidado-del-hogar"><a href="categoria_producto.php?categoria=cuidado-del-hogar">Cuidado del Hogar</a></li>
                <li data-category="lacteos-huevos"><a href="categoria_producto.php?categoria=lacteos-huevos">Lacteos y Huevos</a></li>
                <li data-category="panaderia"><a href="categoria_producto.php?categoria=panaderia">Panaderia</a></li>
                <li data-category="despensa"><a href="categoria_producto.php?categoria=despensa">Despensa</a></li>
                <li data-category="congelados"><a href="categoria_producto.php?categoria=congelados">Congelados</a></li>
                <li data-category="carnes-chorizos"><a href="categoria_producto.php?categoria=carnes-chorizos">Carnes y Chorizos</a></li>
            </ul>
        </div>
        <div class="search-bar">
            <input type="text" class="form-control" id="search" placeholder="¿Qué buscas hoy?">
        </div>
        <ul class="search-results" id="results"></ul>
        <div class="menu-icons">
            <a href="#">
                <img src="https://metroio.vtexassets.com/assets/vtex/assets-builder/metroio.store-theme/13.0.86/svg/icon-user___96d7dae669fac691df63eb8b90948c44.svg" alt="Cuenta">
                Mi cuenta
            </a>
            <a href="#">
                <img src="https://metroio.vtexassets.com/assets/vtex/assets-builder/metroio.store-theme/13.0.86/svg/cart___b7e6615d22a77e6df4369c9af938b56c.svg" alt="Carrito">
                Carrito
            </a>
        </div>
    </div>
</header>

<div class="container products-prin">
    <?php if ($producto): ?>
        <div class="product-detail">
            <img class="product-image" src="<?php echo $producto['imagen']; ?>" alt="<?php echo $producto['nombre']; ?>" width="400">
            <div class="product-info">
                <h1><?php echo $producto['nombre']; ?></h1>
                <?php $precio_con_descuento = $producto['precio'] * 0.9;
                $precio_redondeado = number_format($precio_con_descuento, 2);
                echo '<p>Precio Online: S/ <span>' . $precio_redondeado . '</span></p><br>';?>
                <p>Precio Regular: S/ <?php echo $producto['precio']; ?></p>
                <div class="action-buttons">
                    <button class="button-quantity" id="restar">-</button>
                    <span class="quantity" id="numero">1</span>
                    <button class="button-quantity" id="aumentar">+</button>
                    <a href="#" class="button-primary">Agregar</a>
                </div>
            </div>
        </div>
    <?php else: ?>
        <p>Producto no encontrado.</p>
    <?php endif; ?>
</div>

<footer>
    <div class="container">
        <p>&copy; 2024 Tienda en Línea. Todos los derechos reservados por Nik.</p>
    </div>
</footer>
</body>
</html>
