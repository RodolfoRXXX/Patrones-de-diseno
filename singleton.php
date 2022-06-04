<?php
        //Genero un archivo que contiene la información de bd, host, usuario y password en constantes
        require "admin/config.php";
        require "layouts/header.php";
        require "layouts/footer.php";
        /*Este patrón de diseño se utiliza para conectarse a bases de datos. Funciona declarando como
         privado el constructor y también a la función __clone() y se genera una función getInstance(), 
         de tipo static y que contiene una instancia a PDO. Este método se encuentra a nivel de clase y 
         es el único modo de generar la conexión a las base de datos.  */

         class Conexion{
            protected static $instance;
            protected static $motor = MOTOR;
            protected static $host = HOST;
            protected static $db = DB;
            protected static $user = USER;
            protected static $pass = PASS;

                private function __construct(){}
                private function __clone(){}

                public static function getInstance(){
                    if(!isset(self::$instance)){
                        self::$instance = new PDO(self::$motor.":host=".self::$host.";dbname=".self::$db, self::$user, self::$pass);
                    }
                    return self::$instance;
                }
         }

        echo "Este es el objeto devuelto del método estático de la clase -Conexion-".var_dump(Conexion::getInstance());