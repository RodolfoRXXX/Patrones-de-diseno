<?php

        require "layouts/header.php";
        require "layouts/footer.php";
        /*Este patrón de diseño nos permite añadir dinamicamente funcionalidades a un objeto sin necesidad de 
        crear clases que extiendan de una padre sino implementando funcionalidades que ampliarían la
        funcionalidad de sus métodos */

        interface EmailBody{
            public function loadBody();
        }

        class Email implements EmailBody{
            public function loadBody(){
                echo "This is main Email body<br>";
            }
        }

        abstract EmailBodyDecorator implements EmailBody{
            protected $email;
            public function __construct(Email $email){
                $this->email = $email;
            }
            abstract function loadBody();
        }

        