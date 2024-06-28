<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda en Línea de Nik</title>
    <link rel="icon" type="image/png" href="https://metroio.vtexassets.com/assets/vtex/assets-builder/metroio.store-theme/13.0.86/svg/logo-metro___19ecf64e9f98f0564f96d3856f640d6c.svg">
    <link rel="stylesheet" href="../CSS/styles0.css">
    <script src="../JS/script.js" defer></script>
    <script src="../JS/busqueda.js" defer></script>
</head>
<body>
<header>
    <div class="container header-container">
        <div class="logo">
            <a href="index.php">
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
    <div class="product-list" id="product-list">
        <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "tienda";

        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $categoria = $_GET['categoria'];

        // Obtener productos de la categoría seleccionada
        $sql = "SELECT * FROM productos WHERE categoria='$categoria'";
        $result = $conn->query($sql);?>

        <div class="container">
        <section class="products" id="products-container">
        <?php
        if ($result->num_rows > 0) {    
            while($row = $result->fetch_assoc()) {
                echo '<div class="product" data-category="' . $row['categoria'] . '">';
                echo '<a class="no-links" href="../PAGES/producto_detalle.php?id=' . $row['id'] . '">'; 
                echo '<img src="' . ($row['imagen']) . '" alt="' . ($row['nombre']) . '" width="100">';
                echo '<p>' . ($row['nombre']) . '</p>';
                $precio_con_descuento = $row['precio'] * 0.9;
                $precio_redondeado = number_format($precio_con_descuento, 2);
                echo '<p>Precio Online: S/ <span>' . $precio_redondeado . '</span></p>';
                echo '<p>Precio Regular: <del>S/ <span>' . $row['precio'] . '</del></span></p>';
                echo '<a href="#" class="button-primary">Agregar</a>';
                echo '</a>';
                echo "</div>";
            }
        } else {
            echo "No hay productos disponibles en esta categoría.";
        }

        $conn->close();
        ?>
        </section>
        </div>
    </div>
</body>
</html>
