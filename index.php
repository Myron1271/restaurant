<?php

    //Dit start de session van de ingelogde user
    session_start();

?>


<!doctype html>
<html lang="en">
<head>

    <link rel="stylesheet" as="style" type="text/css" href="css/style.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Excellent Taste</title>

</head>

<body background="img/Restaurant-Backround1.png" style="background-size: cover" class="d-flex flex-column h-100">

<header>
    <!--Dit zorgt ervoor dat de navbar op elke pagina komt te staan-->
    <?php
        include_once 'func/header.php';
    ?>
</header>


<main>
    <br>
    <br>
    <div class="container">
        <h1 style="text-align: center; color: white;">Welkom bij Excellent Taste!</h1>
        <br>
        <div class="row">
            <div class="col-sm-4">
                <div class="card">
                    <img class="card-img-top" src="./img/food1.jpg" alt="Card image cap">
                    <div class="card-body text-center">
                        <h5 class="card-title">Klik op de knop voor ons menukaart</h5>
                        <a href="menukaart.php" class="btn btn-primary">Menukaart</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card">
                    <img class="card-img-top" src="./img/food2.jpg" alt="Card image cap">
                    <div class="card-body text-center">
                        <h5 class="card-title">Klik op de knop om te reserveren</h5>
                        <a href="reseveren.php" class="btn btn-primary">Reserveren</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card">
                    <img class="card-img-top" src="./img/food3.jpg" alt="Card image cap">
                    <div class="card-body text-center">
                        <h5 class="card-title">Klik op de knop voor contact info</h5>
                        <a href="#" class="btn btn-primary">Contact</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>


</main>


<footer>
    <!--Dit zorgt ervoor dat de footer op elke pagina komt te staan-->
    <?php
    include_once 'func/footer.php';
    ?>
</footer>

<script src="js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>