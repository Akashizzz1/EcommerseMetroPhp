<?php
    include 'BD/conexion_bd.php';

    class ObtenerProductos {
        private $conexionBD;

        public function __construct($conexionBD) {
            $this->conexionBD = $conexionBD;
        }

        public function getProductos($categoria) {
            $sql = "SELECT id, nombre FROM productos WHERE categoria = ? ORDER BY nombre ASC";
            $stmt = $this->conexionBD->conn->prepare($sql);
            $stmt->bind_param('s', $categoria);
            $stmt->execute();
            $result = $stmt->get_result();

            $productos = array();
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    $productos[] = $row;
                }
            }
            $stmt->close();
            return $productos;
        }
    }
    
    $conexionBD = new ConexionBD();
    $categoria = isset($_GET['categoria']) ? $_GET['categoria'] : '';
    $obtenerProductos = new ObtenerProductos($conexionBD);
    $productos = $obtenerProductos->getProductos($categoria);
    $conexionBD->cerrarConexion();

    $options = '<option value="">Seleccione un producto</option>';
    foreach ($productos as $producto) {
        $options .= '<option value="' . $producto["id"] . '">' . $producto["nombre"] . '</option>';
    }

    echo $options;
?>
