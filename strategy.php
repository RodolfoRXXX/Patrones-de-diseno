<?php

        require "layouts/header.php";
        require "layouts/footer.php";
        /* Este patrón de diseño "STRATEGY" permite modificar dinámicamente el comportamiento de un objeto, 
        creando subobjetos de métodos iguales pero diferente implementación que ejecutarán su tarea de
        acuerdo al subobjeto elegido en el objeto principal(contexto). El objeto contexto, desconoce su
        implementación interna. Esto evita tener condicionales y también modificar el código cada vez que
        se agregue una nueva funcionalidad. */

        interface ruta{
            public function crearRuta($inicio, $llegada);
        }

        class Avion implements ruta{
            public function crearRuta($inicio, $llegada){
                return $inicio * $llegada;
            }
        }

        class Auto implements ruta{
            public function crearRuta($inicio, $llegada){
                return $inicio + $llegada;
            }
        }

        class Bici implements ruta{
            public function crearRuta($inicio, $llegada){
                return $inicio - $llegada;
            }
        }

        class Context{
            private $ruta_medio;

            public function __construct(ruta $ruta){
                $this->ruta_medio = $ruta;
            }

            public function ejecutarRuta($inicio, $llegada){
                return $this->ruta_medio->crearRuta($inicio, $llegada);
            }
        }

$context = new Context(new Avion);		
echo "10 * 5 = " . $context->ejecutarRuta(10, 5);
echo '<br>';
$context = new Context(new Auto);		
echo "10 + 5 = " . $context->ejecutarRuta(10, 5);
echo '<br>';
$context = new Context(new Bici);		
echo "10 - 5 = " . $context->ejecutarRuta(10, 5);
