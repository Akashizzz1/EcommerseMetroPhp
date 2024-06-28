<?php 
include 'BD/conexion_bd.php';

class ProductoSearch {
    private $conn;

    public function __construct() {
        $conexion = new ConexionBD();
        $this->conn = $conexion->conn;
    }

    public function buscarProductos($searchQuery) {
        $search = $this->conn->real_escape_string($searchQuery);
        $sql = "SELECT id, nombre FROM productos WHERE nombre LIKE '%$search%'";
        $result = $this->conn->query($sql);

        $productos = array();
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $productos[] = $row;
            }
        }

        return json_encode($productos);
    }

    public function __destruct() {
        $this->conn->close();
    }
}

$searchQuery = isset($_GET['query']) ? $_GET['query'] : '';
$productoSearch = new ProductoSearch();
echo $productoSearch->buscarProductos($searchQuery);
?>