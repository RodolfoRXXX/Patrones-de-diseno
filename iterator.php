<?php

        require "layouts/header.php";
        require "layouts/footer.php";
        /* Este patrón de diseño "Iterator" define una interfaz con un conjunto de métodos que permiten
        acceder secuencialmente a un conjunto de objetos. Este patrón de diseño permite recorrer un conjunto
        de datos sin necesidad de conocer la estructura interna de dicho conjunto */
        
        class Movie{
            private $title;
            private $year;

            public function __construct($title_passed, $year_passed){
                $this->title = $title_passed;
                $this->year = $year_passed;
            }

            public function show_movie_info(){
                return $this->title;
            }
        }

        class MovieList{
            private $movies = array();
            private $total_movies = 0;
            
            public function add_movie(Movie $movie){
                $this->movies[] = $movie;
                $this->total_movies += 1;
            }

            public function get_total_count(){
                return $this->total_movies;
            }

            public function get_list(){
                return $this->movies;
            }

            public function set_list(array $listPassed){
                $this->movies = $listPassed;
            }
        }

        class IteratorMovie{
            protected $movie_list;
            protected $current_movie_index = 0;
            protected $total_movie_in_list = 0;

            function __construct(MovieList $listPassed){
                $this->movie_list = $listPassed;
                $this->total_movie_in_list = $listPassed->get_total_count();
            }

            public function has_next(){
                if($this->current_movie_index < $this->total_movie_in_list){
                    return true;
                } else{
                    return false;
                }
            }

            public function next(){
                $movies = $this->movie_list->get_list();
                $movie  = $movies[$this->current_movie_index];
                $this->current_movie_index += 1;
                return $movie;
            }
        }

            $movie1=new Movie('Inception',2010);
            $movie2=new Movie('Avatar',2009);
            $movie3=new Movie('Man of Steel',2013);
            $movie4=new Movie('Up',2009);
            $movie5=new Movie('Bee Movie',2007);

            $movie_list=new MovieList();

            $movie_list->add_movie($movie1);
            $movie_list->add_movie($movie2);
            $movie_list->add_movie($movie3);
            $movie_list->add_movie($movie4);
            $movie_list->add_movie($movie5);

            $movie_iterator=new IteratorMovie($movie_list);

            while($movie_iterator->has_next()){
                $movie=$movie_iterator->next();
                echo $movie->show_movie_info();
                echo "<br>";
            }