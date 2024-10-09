<?php
class Movie {
    public $title;
    public $year;
    public $genre;

    function __construct($_title, $_year , $_genre)
    {
        $this->title = $_title;
        $this->year = $_year;
        $this->genre = $_genre;
    }
    function getSciFiTitle(){
        if($this->genre==="fantascienza"){
            return "Questo è un film di fantascienza!";
        }else {
            return "Questo non è un film di fantascienza!";
        };
    }
}
$eraserhead = new Movie("Eraserhead", "1977","grottesco");



$alien = new Movie("Alien","1979","fantascienza");


$her = new Movie("Her", "2013","fantascienza");

$movies=[$eraserhead , $alien , $her];


//var_dump($eraserhead-> getSciFiTitle());
//var_dump($alien-> getSciFiTitle());
//var_dump($her-> getSciFiTitle());
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <?php foreach($movies as $movie): ?>


            <div class="col-4">

                <h3><?php echo $movie->title ?></h3>
                <p><?php echo $movie->year ?></p>
                <p><?php echo $movie->genre ?></p>

            </div>
            <?php endforeach; ?>
        </div>
    </div>
</body>

</html>