<?php
    

    class Movie {
        public $name;
        public $genre;
        public $price;
        public $eta;

        function __construct($_name,$_genre,$_price,$_eta){
            //associo valori classe a parametri funzione construct.
            $this->name = $_name;
            $this->genre = $_genre;
            $this->price = $_price;
            $this->eta = $_eta;
        }
        
        public function isMaggiorenne(){
            if($this->eta >= 18){
                return true;
            }else {
                return false;
            }
        }
    }

    //creo un istanza dell'oggetto(classe).

    $film = new Movie("Avatar","Action",9,18);
    $film_2 = new Movie("wow","Action",9,16);

    //la funzione va chiamata sull'istanza.
    var_dump($film);
    var_dump ($film -> isMaggiorenne());
    if($film -> isMaggiorenne()){
        echo "Maggiorenne";
    }

    var_dump($film_2);
    var_dump ($film_2 -> isMaggiorenne());

    if($film_2 -> isMaggiorenne()){
        echo "Maggiorenne";
    }else {
        echo "Minorenne";
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

</body>
</html>