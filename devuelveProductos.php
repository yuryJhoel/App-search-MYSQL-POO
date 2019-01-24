<?php
    require('conexion.php');
    class DevuelveProductos extends Conexion {
        public function DevuelveProductos(){
            parent::__construct(); /// llamamos al contructor del padre
        }
        public function getProductos(){
            $resultado = $this->conexion_db->query('SELECT * FROM alumnos');
            $alumnos = $resultado->fetch_all(MYSQLI_ASSOC);
            return $alumnos;
        }
    }
?>