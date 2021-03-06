<?php 

class Movie{
    public $movieName;
    public $actors;
    public $yearOfPubblication;

    function __construct($movieName, $actors, $yearOfPubblication)
    {
        $this-> movieName = $movieName;
        $this-> actors = $actors;
        $this-> yearOfPubblication = $yearOfPubblication;
    }

    function get_movieName($movieName){
        return $this->$movieName;
    }

    function get_actors($actors){
        return $this->$actors;
    }

    function get_yearOFPubblication($yearOfPubblication){
        return $this->$yearOfPubblication;
    }
};

$BatmanBegins = new Movie('Batman Begins', "Christian Bale", 2005);
$BatmanDarkKnight = new Movie('Batman - The Dark Knight', "Christian Bale", 2008);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <main>
        <div class="film-container">
            <div>
                <h1>
                    Film:  <?php echo($BatmanBegins->get_movieName("movieName")) ?>
                </h1>
                <h1>
                    Attore protagonista:  <?php echo($BatmanBegins->get_actors("actors")) ?>
                </h1>
                <h1>
                    Anno di uscita:  <?php echo($BatmanBegins->get_yearOFPubblication("yearOfPubblication")) ?>
                </h1>
            </div>
            <div>
                <img src="https://pad.mymovies.it/filmclub/2004/08/003/locandina.jpg" alt="">
            </div>
        </div>

        <br>

        <div class="film-container">
            <div>
                <h1>
                    Film:  <?php echo($BatmanDarkKnight->get_movieName("movieName")) ?>
                </h1>
                <h1>
                    Attore protagonista:  <?php echo($BatmanDarkKnight->get_actors("actors")) ?>
                </h1>
                <h1>
                    Anno di uscita:  <?php echo($BatmanDarkKnight->get_yearOFPubblication("yearOfPubblication")) ?>
                </h1>
            </div>
            <div>
                <img src="https://pad.mymovies.it/filmclub/2007/02/131/locandina.jpg" alt="">
            </div>
        </div>

        <!-- <div>
            <?php var_dump($BatmanBegins);?>
        </div>

        <div>
            <?php var_dump($BatmanDarkKnight);?>
        </div> -->
    </main>
    
</body>
</html>