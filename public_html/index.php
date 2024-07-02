<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda en Línea de Nik</title>
    <link rel="icon" type="image/png" href="https://metroio.vtexassets.com/assets/vtex/assets-builder/metroio.store-theme/13.0.86/svg/logo-metro___19ecf64e9f98f0564f96d3856f640d6c.svg">
    <link rel="stylesheet" href="../CSS/styles1.css">
    <link rel="stylesheet" href="../CSS/slider1.css">
    <script src="../JS/script.js" defer></script>
    <script src="../JS/busqueda1.js" defer></script>
</head>
<body>
<header>
    <div class="container header-container">
            <a href="../public_html/index.php">
                <img src="https://metroio.vtexassets.com/assets/vtex/assets-builder/metroio.store-theme/13.0.86/svg/logo-metro___19ecf64e9f98f0564f96d3856f640d6c.svg" alt="Logo de la tienda">
            </a>
        <div class="categories">
            <button id="category-button">CATEGORIAS <div class="arrow"></div></button>
                <ul id="category-list" class="category-list">
                <li data-category="tecnologia"><a href="../PAGES/categoria_producto.php?categoria=tecnologia">Tecnologia</a></li>
                <li data-category="bebidas"><a href="../PAGES/categoria_producto.php?categoria=bebidas">Bebidas</a></li>
                <li data-category="frutas-verduras"><a href="../PAGES/categoria_producto.php?categoria=frutas-verduras">Frutas y Verduras</a></li>
                <li data-category="cuidado-del-hogar"><a href="../PAGES/categoria_producto.php?categoria=cuidado-del-hogar">Cuidado del Hogar</a></li>
                <li data-category="lacteos-huevos"><a href="../PAGES/categoria_producto.php?categoria=lacteos-huevos">Lacteos y Huevos</a></li>
                <li data-category="panaderia"><a href="../PAGES/categoria_producto.php?categoria=panaderia">Panaderia</a></li>
                <li data-category="despensa"><a href="../PAGES/categoria_producto.php?categoria=despensa">Despensa</a></li>
                <li data-category="congelados"><a href="../PAGES/categoria_producto.php?categoria=congelados">Congelados</a></li>
                <li data-category="carnes-chorizos"><a href="../PAGES/categoria_producto.php?categoria=carnes-chorizos">Carnes y Chorizos</a></li>
            </ul>
        </div>
        <div class="search-bar">
            <input type="text" class="form-control" id="search" placeholder="¿Qué buscas hoy?">
        </div>
       <ul class="search-results" id="results"></ul></a>
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

<div class="center">
  <div class="carousel-wrapper">
    <input id="slide1" type="radio" name="controls" checked="checked" />
    <input id="slide2" type="radio" name="controls" />
    <input id="slide3" type="radio" name="controls" />
    <input id="slide4" type="radio" name="controls" />
    <input id="slide5" type="radio" name="controls" />

    <label for="slide1" class="nav-dot"></label>
    <label for="slide2" class="nav-dot"></label>
    <label for="slide3" class="nav-dot"></label>
    <label for="slide4" class="nav-dot"></label>
    <label for="slide5" class="nav-dot"></label>

    <label for="slide1" class="left-arrow"> < </label>
    <label for="slide2" class="left-arrow"> < </label>
    <label for="slide3" class="left-arrow"> < </label>
    <label for="slide4" class="left-arrow"> < </label>
    <label for="slide5" class="left-arrow"> < </label>

    <label for="slide1" class="right-arrow"> > </label>
    <label for="slide2" class="right-arrow"> > </label>
    <label for="slide3" class="right-arrow"> > </label>
    <label for="slide4" class="right-arrow"> > </label>
    <label for="slide5" class="right-arrow"> > </label>

    <div class="carousel">
      <ul>
        <li>
          <img src="https://metroio.vtexassets.com/assets/vtex.file-manager-graphql/images/ebba1fbb-cb41-4e62-9294-3ecbc5509106___9e15c738707cd7779ff89a916527792d.jpg" />
          <a href="URL_PARA_SLIDE_1" class="view-more">Ver más</a>
        </li>
        <li>
          <img src="https://metroio.vtexassets.com/assets/vtex.file-manager-graphql/images/f0f9223d-7d87-40d4-a7fa-556d9a0ae2ed___18b172ad8ca62ca94fd8e47975c07a34.jpg" alt="">
          <a href="URL_PARA_SLIDE_2" class="view-more">Ver más</a>
        </li>
        <li>
          <img src="https://metroio.vtexassets.com/assets/vtex.file-manager-graphql/images/9d794b0e-a329-4418-8a34-275981b2405f___a2a891657cbd9a2b4172010a6182c265.jpg" />
          <a href="URL_PARA_SLIDE_3" class="view-more">Ver más</a>
        </li>
        <li>
          <img src="https://metroio.vtexassets.com/assets/vtex.file-manager-graphql/images/7389c101-5616-4fc9-aaf4-0091152efba4___d3e5bb48f9a30a9e83d00483797719ab.jpg">
          <a href="URL_PARA_SLIDE_4" class="view-more">Ver más</a>
        </li>
        <li>
          <img src="https://metroio.vtexassets.com/assets/vtex.file-manager-graphql/images/4ae83619-5a62-41c6-8bcd-23d41ca0c3c1___bec03803455272183aaf6cd9db06b6ec.jpg" alt="">
          <a href="URL_PARA_SLIDE_5" class="view-more">Ver más</a>
        </li>
      </ul>
    </div>
  </div>
</div>

<div class="container list-category-link">
        <a href="categoria_producto.php?categoria=tecnologia">
            <div class="category" id="tecnologia">
                <img src="../IMG/ICON-SOLO_TECNOLOGIA.png">
                <p>Tecnología</p>
            </div>
        </a>
        <a href="categoria_producto.php?categoria=bebidas">
            <div class="category" id="bebidas">
                <img src="../IMG/ICON-SOLO_BEBIDAS.png">
                <p>Bebidas</p>
            </div>
        </a>
        <a href="categoria_producto.php?categoria=frutas-verdura"s>
            <div class="category" id="frutas">
                <img src="../IMG/ICON-SOLO-Y-VERDURAS copia.png">
                <p>Frutas y Verduras</p>
            </div>
        </a>
        <a href="categoria_producto.php?categoria=cuidado-del-hogar">
            <div class="category" id="hogar">
                <img src="../IMG/ICON-SOLO_CUIDADO-DEL-HOGAR.png">
                <p>Cuidado del Hogar</p>
            </div>
        </a>
        <a href="categoria_producto.php?categoria=lacteos-huevos">
            <div class="category" id="lacteos">
                <img src="../IMG/ICON-SOLO_LACTEOS-Y-HUEVOS.png">
                <p>Lácteos y huevos</p>
            </div>
        </a>
        <a href="categoria_producto.php?categoria=panaderia">
            <div class="category" id="panaderia">
                <img src="../IMG/ICON-SOLO_PANADERIA.png">
                <p>Panadería</p>
            </div>
        </a>
        <a href="categoria_producto.php?categoria=despensa">
            <div class="category" id="despensa">
                <img src="../IMG/ICON-SOLO_DESPENSA.png">
                <p>Despensa</p>
            </div>
        </a>
        <a href="categoria_producto.php?categoria=congelados">
            <div class="category" id="congelados">
                <img src="../IMG/ICON-SOLO_CONGELADOS.png">
                <p>Congelados</p>
            </div>
        </a>
        <a href="categoria_producto.php?categoria=carnes-chorizos">
            <div class="category" id="carnes">
                <img src="../IMG/ICON-SOLO_CARNES-Y-CHORIZOS.png">
                <p>Carnes y chorizos</p>
            </div>
        </a>
    </div>

<div class="container">
    <section class="products" id="products-container">
        <?php
            include '../PHP/get_producto1.php';
            $productoObj = new Producto();
            $productos = $productoObj->obtenerProductos();
            foreach ($productos as $producto) {
                echo '<div class="product" data-category="' . $producto['categoria'] . '">';
                echo '<a class="no-links" href="../PAGES/producto_detalle.php?id=' . $producto['id'] . '">'; 
                echo '<img src="' . ($producto['imagen']) . '" alt="' . ($producto['nombre']) . '" width="100">';
                echo '<p>' . ($producto['nombre']) . '</p>';
                $precio_con_descuento = $producto['precio'] * 0.9;
                $precio_redondeado = number_format($precio_con_descuento, 2);
                echo '<p>Precio Online: S/ <span>' . $precio_redondeado . '</span></p>';
                echo '<p>Precio Regular: <del>S/ <span>' . ($producto['precio']) . '</del></span></p>';
                echo '<a href="#" class="button-primary">Agregar</a>';
                echo '</a>';
                echo '</div>';
            }
        ?>
    </section>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="../JS/busqueda.js"></script>
<footer>
    <div class="container">
        <p>&copy; 2024 Tienda en Línea. Todos los derechos reservados por Nik.</p>
    </div>
</footer>
</body>
</html>
