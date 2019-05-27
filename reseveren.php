<?php

    session_start();
    include_once './func/reserveringen.toevoegen.func.php';

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

    <title>Reseveren</title>

</head>

<body background="img/Restaurant-Backround3.png" style="background-size: cover">

<header>
    <?php
    include_once 'func/header.php';
    ?>
</header>


<main>
    <br>
    <br>
    <form class="text-center p-5 col-md-4 offset-md-4 bg-light rounded position-relative" action="reseveren.php" method="post">
        <p class="FormText mb-4">Vul de gegevens in en klik Reserveren</p>
        <div class="ReserveringSuccesMessage"><?= $_SESSION['SuccesMessage'] ?></div>
        <div class="ReserveringFailMessage"><?= $_SESSION['FailMessage'] ?></div>
        <div class="row">
            <div class="col-md-6 offset-md-3 text-center">
                <div class="ReserverenText">Datum</div>
                <input type="date" name="datum" class="form-control" required>
            </div>
            <div class="col-md-4 offset-md-4" style="margin-top: 10px">
                <div class="ReserverenText">Tijd</div>
                <input type="time" name="tijd" class="form-control" required>
            </div>
            <div class="col-md-4 offset-md-4" style="margin-top: 10px">
                <div class="ReserverenText">Tafel (1 van de 10)</div>
                <input style="text-align: center" type="number" name="tafel" class="form-control" max="10" onkeyup="if (this.value > 10) this.value = 10;" required>
            </div>
            <div class="col-md-6 offset-md-3" style="margin-top: 10px">
                <div class="ReserverenText">Klant Naam</div>
                <input type="text" name="klantnaam" class="form-control" required>
            </div>
            <div class="col-md-6 offset-md-3" style="margin-top: 10px">
                <div class="ReserverenText">Telefoonnummer</div>
                <input type="tel" name="telefoonnummer"  class="form-control" minlength="10" maxlength="10" required>
            </div>
            <div class="col-md-4 offset-md-4" style="margin-top: 10px">
                 <div class="ReserverenText">Aantal Personen (Max 50)</div>
                <input style="text-align: center" type="number" name="aantalpersonen" class="form-control" max="50" onkeyup="if (this.value > 50) this.value = 50;" required>
            </div>
        </div>
        <button class="btn btn-info my-4 btn-block col-md-8 offset-md-2" type="Submit" name="Submit_Reserveren">Reserveren</button>
    </form>


    <br>
    <br>
    <br>
    <br>
    <br>

</main>


<footer>
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