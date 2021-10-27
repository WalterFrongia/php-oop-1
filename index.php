<?php
    

    class Movie {
        public $name;
        public $genre;
        public $price;

        function __construct($_name,$_genre,$_price){
            //associo valori classe a parametri funzione construct.
            $this->name = $_name;
            $this->genre = $_genre;
            $this->price = $_price;
        }
        
    }

    //creo un istanza dell'oggetto(classe).

    $film = new Movie("Avatar","Action",9);

    var_dump($film);


?>