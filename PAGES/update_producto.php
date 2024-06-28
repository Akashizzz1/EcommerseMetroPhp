<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar Producto</title>
    <link rel="stylesheet" href="../CSS/styles1.css">
    <link rel="stylesheet" href="../CSS/styles2.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="../JS/scripts1.js" defer></script>
    <script>
        $(document).ready(function() {
            $('#categoria').change(function() {
                const categoria = $(this).val();
                $.ajax({
                    url: '../PHP/obtener_productos.php',
                    method: 'GET',
                    data: { categoria: categoria },
                    success: function(data) {
                        $('#nombre').html(data);
                    }
                });
            });
        });
    </script>
</head>
<body>
    <header>
        <div class="container header-container">
            <h1>Actualizar Producto</h1>
        </div>
    </header>
    <div class="container">
        <section class="add-product">
            <form action="../PHP/crud_producto.php" method="post">
                <label for="categoria">Categoría:</label>
                <select id="categoria" name="categoria" required>
                    <option value="">Seleccione una categoría</option>
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
                <label for="nombre">Nombre del Producto:</label>
                <select id="nombre" name="nombre" required>
                    <option value="">Seleccione un producto</option>
                </select>
                <label for="precio">Precio:</label>
                <input type="number" id="precio" name="precio" required>
                <label for="imagen">Imagen:</label>
                <input type="text" id="imagen" name="imagen" required>
                <input type="hidden" name="accion" value="actualizar">
                <button type="submit">Actualizar Producto</button>
            </form>
        </section>
    </div>
</body>
</html>
