<?php

    session_start();
    include_once './func/registeren.func.php';

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

    <title>Account</title>

</head>

<body style="background-color: darkslategray">

<header>
    <?php
    include_once'./func/Header.php';
    ?>
</header>

<main>
    <div style="text-align: center; margin-top: 50px; color: white;">
    <h1>Welkom <?= $_SESSION['Username'] ?></h1>
    </div>
    <form class="text-center p-5 col-md-4 offset-md-4 bg-light rounded position-relative" action="account.php" method="post" enctype="multipart/form-data">
        <h2>Voeg een nieuwe werknemer toe</h2>
        <div class="ReserveringSuccesMessage"><?= $_SESSION['SuccesMessage'] ?></div>
        <div class="ReserveringFailMessage"><?= $_SESSION['FailMessage'] ?></div>
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <input type="text" name="Username_Register" class="form-control" placeholder="Gebruikersnaam" required>
            </div>
            <div class="col-md-8 offset-md-2" style="margin-top: 10px">
                <input type="password" name="Password_Register" class="form-control" placeholder="Wachtwoord" required>
            </div>
            <div class="col-md-8 offset-md-2" style="margin-top: 10px">
                <input type="password" name="Password_Register2" class="form-control" placeholder="Wachtwoord Herhalen" required>
            </div>
        </div>
        <button class="btn btn-info my-4 btn-block col-md-8 offset-md-2" type="submit" name="Submit_Registeren">Registreer nieuwe werknemer</button>
    </form>

    <div style="text-align: center; margin-top: 100px; color: white;">

    </div>
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <div class="card">
                    <div class="card-body text-center">
                        <h5 class="card-title">Klik op de knop voor een overzicht van de reserveringen</h5>
                        <a href="reserveringenoverzicht.php" class="btn btn-primary">Overzicht Reserveringen</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card">
                    <div class="card-body text-center">
                        <h5 class="card-title">Klik op de knop om reserveringen te verwijderen</h5>
                        <a href="reserveringenverwijderen.php" class="btn btn-primary">Verwijder Reserveringen</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card">
                    <div class="card-body text-center">
                        <h5 class="card-title">Klik hier op de knop om reserveringen te wijzigen</h5>
                        <a href="reserveringenwijzigen.php" class="btn btn-primary">Wijzig Reserveringen</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card">
                    <div class="card-body text-center">
                        <h5 class="card-title">Klik hier op de knop om Nieuwe Dranken toe te voegen</h5>
                        <a href="drankentoevoegen.php" class="btn btn-primary">Dranken Toevoegen</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <br>
    <br>

</main>







<footer>
    <?php
    include_once './func/Footer.php';
    ?>
</footer>

<script src="js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
