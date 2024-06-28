<?php
    class ConexionBD {
        private $host = 'localhost';
        private $usuario = 'root';
        private $password = '';
        private $nombreBD = 'tienda';
        public $conn;

        public function __construct() {
            $this->conn = new mysqli($this->host, $this->usuario, $this->password, $this->nombreBD);
            if ($this->conn->connect_error) {
                die("Conexión fallida: " . $this->conn->connect_error);
            }
        }

        public function cerrarConexion() {
            $this->conn->close();
        }
    }
?>