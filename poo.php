<?php 

    class Conexion{

        #atributos
        private static $host = 'localhost';
        private static $user = 'root';
        private static $password = 'superman1';
        protected $db_name = 'COEDIN';
        protected $query;
        protected $rows = array();
        protected $conn;

        #metodos

        public function conn_stable(){
            $this->conn = new mysqli( self::$host , self::$user , self::$password , $this->db_name);

            if($this->conn == mysqli_connect_error()){
                echo 'Fallo la conexion: ' . mysqli_connect_error();
            }else{
                echo 'Conexion hecha';
                return $conn;
            }
        }

        public function closeConexion(){
            $this->conn->close();
            echo 'Se cerro la base';
        }


    }


?>