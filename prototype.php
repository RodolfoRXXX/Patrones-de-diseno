<?php
        require "layouts/header.php";
        require "layouts/footer.php";
        /* El patrón de diseño Prototype genera una instancia de una clase y luego clona dicho objeto 
        tantas veces como se requiera, clonando así cada objeto los atributos y propiedades del primero. 
        En este caso, los clones se basan en el objeto principal que pasa a ser un prototipo de objetos.*/

        abstract class BookPrototype{
            protected $title;
            protected $category;

            abstract public function __clone();

            public function getTitle(): string{
                return $this->title;
            }

            public function setTitle($title){
                $this->title = $title;
            }

            public function getCategory(){
                return $this->category;
            }
        }

        class ScienceBook extends BookPrototype{
            protected $category = "Science";

            public function __clone(){}

        }

        class LanguageBook extends BookPrototype{
            protected $category = "Language";

            public function __clone(){}
        }

        $Science  = new ScienceBook;
        $Language = new LanguageBook;

        for ($i=0; $i < 10; $i++) { 
            $book = clone $Science;
            $book->setTitle('Science book nº'.$i);
            echo $book->getTitle().' - '.$book->getCategory().',<br>';
        }
        echo '<br>-------------<br>';
        for ($i=0; $i < 10; $i++) { 
            $book = clone $Language;
            $book->setTitle('Language book nº'.$i);
            echo $book->getTitle().' - '.$book->getCategory().',<br>';
        }