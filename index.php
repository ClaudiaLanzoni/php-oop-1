<?php 
    
    class Movies {
        public $id;
        public $title;
        public $director;
        public $year;
        public $mediaCompany;
        public $plot;

        public function __construct($id, $title, $director, $year, $mediaCompany, $plot) {
            $this -> id = $id;
            $this -> title = $title;
            $this -> director = $director;
            $this -> year = $year;
            $this -> mediaCompany = $mediaCompany;
            $this -> plot = $plot;
        }

        public function setPlotLength($plot) {
            if (strlen($plot) < 200) {
                echo 'La trama riportata è da considerarsi parziale poichè possiede solo ' . strlen($plot) . ' caratteri.';
            } else {
                echo 'La trama riportata è da considerarsi integrale poichè possiede ' . strlen($plot) . ' caratteri.';
            }
        }


    }

; ?>

<?php 
    
    $movies = [
        new Movies(1, 'Taxi driver', 'Martin Scorsese', '1976', 'Columbia Pictures', 'Un tassista di New York dal carattere sensibile e solitario scivola lentamente in una spirale di follia che lo spinge a ribellarsi in maniera violenta alle ingiustizie di una società corrotta e alienante.'),
        new Movies(2, 'Memento', 'Christopher Nolan', '2000', 'Newmarket Films', 'Leonard è affetto da amnesia a breve termine che non gli consente di trattenere i ricordi per lungo tempo. Quando deve cercare l\'uomo che ha violentato e ucciso la moglie dovrà fare uso di ogni mezzo per arrivare alla verità.')

    ]
    

    //var_dump($taxiDriver, $memento);

    //$taxiDriver->setPlotLength('Un tassista di New York dal carattere sensibile e solitario scivola lentamente in una spirale di follia che lo spinge a ribellarsi in maniera violenta alle ingiustizie di una società corrotta e alienante.');

; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php foreach($movies as $movie) { ?>
        
    <h1><?= $movie->title ; ?></h1>
    <h3><?= $movie->director ; ?></h3>
    <p><?= $movie->year ; ?></p>
    <h5><?= $movie->mediaCompany ; ?></h5>
    <p><?= $movie->plot ; ?></p>
    
    <?php }; ?>
    
    
    


</body>
</html>

