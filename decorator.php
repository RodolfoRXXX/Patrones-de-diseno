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

        abstract class EmailBodyDecorator implements EmailBody{
            protected $email;
            public function __construct(EmailBody $email){
                $this->email = $email;
            }
            abstract function loadBody();
        }

        class navidadBody extends EmailBodyDecorator{
            public function loadBody(){
                echo "Saludo de navidad<br>";
                $this->email->loadBody();
            }
        }

        class anoNuevo extends EmailBodyDecorator{
            public function loadBody(){
                echo "Saludo de año nuevo<br>";
                $this->email->loadBody();
            }
        }

        $email = new Email;
        //echo $email->loadBody();

        $email = new navidadBody($email);
        //echo $email->loadBody();

        $email = new anoNuevo($email);
        echo $email->loadBody();

