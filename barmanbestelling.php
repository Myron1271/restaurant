<?php

    session_start();
    if (isset($_SESSION['user']))
    {

    }
    else
    {
        header("location: inloggen.php");
    }

    include_once './func/database.func.php';
    include_once './func/barman.bestelling.verwijderen.func.php';

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

    <title>Barman Bestellingen</title>

</head>

<body style="background-color: darkslategray">

<header>
    <?php
    include_once 'func/header.php';
    ?>
</header>

<main>

    <br>

    <div class="container offset-md-2">
        <h1 style="text-align: center; color: white;">Alle Bestellingen</h1>
        <br>
        <table class="table table-bordered text-white text-center">
            <thead class="thead-light">
            <tr>
                <th scope="col">Tafel</th>
                <th scope="col">Naam Drinken</th>
                <th scope="col">Verwijder Bestelling</th>
            </tr>
            </thead>

            <?php

            $sql = "SELECT id, tafel, naamdrinken FROM bestellingdrinken";


            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                //De geselecteerde data op de pagina laten zien
                while($row = $result->fetch_assoc())
                {
                    echo "<tr><td>" .$row["tafel"] ."</td>
                                <td>" .$row["naamdrinken"]."</td>
                                <td><a href='./barmanbestelling.php?id=". $row['id'] ."' class='btn btn-danger'>Verwijder Bestelling</a></td></tr>";
                }
                echo "</table>";
            }
            else
            {
                echo "<h3 style='text-align: center; color: red;'>Helaas zijn er op dit moment geen Bestellingen!</h3>";
            }
            ?>
        </table>
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