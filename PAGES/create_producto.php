<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Producto</title>
    <link rel="icon" type="image/png" href="https://metroio.vtexassets.com/assets/vtex/assets-builder/metroio.store-theme/13.0.86/svg/logo-metro___19ecf64e9f98f0564f96d3856f640d6c.svg">
    <link rel="stylesheet" href="../CSS/styles1.css">
    <link rel="stylesheet" href="../CSS/styles2.css">
    <script src="../JS/scripts.js" defer></script>
</head>
<body>
<header>
    <div class="container header-container">
        <div class="logo">
            <img src="https://metroio.vtexassets.com/assets/vtex/assets-builder/metroio.store-theme/13.0.86/svg/logo-metro___19ecf64e9f98f0564f96d3856f640d6c.svg" alt="Logo de la tienda">
        </div>
        <div class="search-results" id="results"></div>
        <div class="menu-icons">
            <a href="../PAGES/create_producto.php">Principal</a>
            <a href="../PAGES/create_producto.php">Agregar</a>
            <a href="../PAGES/update_producto.php">Actualizar</a>
        </div>
    </div>
</header>

    <div class="container">
        <section class="add-product">
            <form action="../PHP/crud_producto.php" method="POST">
                <label for="nombre">Nombre del Producto:</label>
                <input type="text" id="nombre" name="nombre" required>
                <label for="precio">Precio:</label>
                <input type="number" id="precio" name="precio" required>
                <label for="categoria">Categoría:</label>
                <select id="categoria" name="categoria" required>
                    <option value="Frutas y Verduras">Frutas y Verduras</option>
                    <option value="Carnes, Pollos y Pescados">Carnes, Pollos y Pescados</option>
                    <option value="Desayuno">Desayuno</option>
                    <option value="Lácteos y Huevos">Lácteos y Huevos</option>
                    <option value="Embutidos y Fiambres">Embutidos y Fiambres</option>
                    <option value="Abarrotes">Abarrotes</option>
                    <option value="Panadería y Pastelería">Panadería y Pastelería</option>
                    <option value="Comidas y Rostizados">Comidas y Rostizados</option>
                    <option value="Congelados">Congelados</option>
                    <option value="Bebidas">Bebidas</option>
                    <option value="Cervezas, Vinos y Licores">Cervezas, Vinos y Licores</option>
                    <option value="Limpieza">Limpieza</option>
                    <option value="Higiene, Salud y Belleza">Higiene, Salud y Belleza</option>
                </select>
                <label for="imagen">Imagen:</label>
                <input type="text" id="imagen" name="imagen" required>
                <input type="hidden" name="agregar" value="agregar">
                <button type="submit">Agregar Producto</button>
            </form>
        </section>
    </div>

    <!-- <footer>
        <div class="container">
            <p>&copy; 2024 Tienda en Línea. Todos los derechos reservados.</p>
        </div>
    </footer> -->
</body>
</html>