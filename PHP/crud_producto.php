<?php
    include 'BD/conexion_bd.php';

    class Producto extends ConexionBD {

        public function agregarProducto($nombre, $precio, $imagen, $categoria) {
            $stmt = $this->conn->prepare("INSERT INTO productos (nombre, precio, imagen, categoria) VALUES (?, ?, ?, ?)");
            $stmt->bind_param("sdss", $nombre, $precio, $imagen, $categoria);
            if ($stmt->execute()) {
                header('Location: ../PAGES/index.php');
            } else {
                echo "Error al agregar el producto: " . $stmt->error;
            }
            $stmt->close();
        }
        
        public function actualizarProducto($nombre, $precio, $imagen, $categoria) {
            $stmt = $this->conn->prepare("UPDATE productos SET precio = ?, imagen = ?, categoria = ? WHERE nombre = ?");
            $stmt->bind_param("dsss", $precio, $imagen, $categoria, $nombre);
            if ($stmt->execute()) {
                echo "Producto actualizado correctamente";
            } else {
                echo "Error al actualizar el producto";
            }
            $stmt->close();
        }

        
    }

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $conexion = new Producto();
        $nombre = $_POST['nombre'];
        $precio = $_POST['precio'];
        $imagen = $_POST['imagen'];
        $categoria = $_POST['categoria'];

        if (isset($_POST['agregar'])) {
            $conexion->agregarProducto($nombre, $precio, $imagen, $categoria);
        }
        if (isset($_POST['actualizar'])) {
            $conexion->actualizarProducto($nombre, $precio, $imagen, $categoria);
        }

        $conexion->cerrarConexion();
    }
?>