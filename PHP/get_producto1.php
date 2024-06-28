<?php
include 'BD/conexion_bd.php';

class Producto extends ConexionBD {
    public function obtenerProductos() {
        $sql = "SELECT * FROM productos";
        $result = $this->conn->query($sql);

        $productos = [];
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $productos[] = $row;
            }
        }
        return $productos;
    }

}
?>
