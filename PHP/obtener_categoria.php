<?php
include 'BD/conexion_bd.php';
class Producto {
    private $conn;

    public function __construct() {
        $conexion = new ConexionBD();
        $this->conn = $conexion->conn;
    }

    public function obtenerCategoria($id) {
        $sql = "SELECT * FROM productos WHERE categorias = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $resultado = $stmt->get_result();
        $producto = $resultado->fetch_assoc();
        $stmt->close();

        return $producto;
    }

    public function __destruct() {
        $this->conn->close();
    }
}
?>
