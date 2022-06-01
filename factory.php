    <?php
        require "layouts/header.php";
        require "layouts/footer.php";
        /* La interface genera un método sin código pero público, donde las clases que la implementen deben
         escribir el código de este método para su clase.
        Luego generamos una clase Factory, que tiene un método que genera instancias de acuerdo al valor que
        se le pasa como parámetro */

        interface vehiculo{
            public function getNombre();
        }

        class Auto implements vehiculo{
            public function getNombre(){
                return "Soy un automovil<br>";
            }
        }
        class Avion implements vehiculo{
            public function getNombre(){
                return "Soy un avión<br>";
            }
        }
        class Bicicleta implements vehiculo{
            public function getNombre(){
                return "Soy una bicicleta<br>";
            }
        }

        class VehiculoFactory{
            public function getNombre($vehiculo){
                switch ($vehiculo) {
                    case "auto":
                        return new Auto;
                        break;
                    
                    case "avion":
                        return new Avion;
                        break;
                    case "bicicleta":
                        return new Bicicleta;
                        break;
                }
            }
        }

            $vehiculoFactory = new VehiculoFactory();
            $auto = $vehiculoFactory->getNombre("auto");
            echo $auto->getNombre();

            $avion = $vehiculoFactory->getNombre("avion");
            echo $avion->getNombre();

            $bici = $vehiculoFactory->getNombre("bicicleta");
            echo $bici->getNombre();

    ?>
</body>
</html>