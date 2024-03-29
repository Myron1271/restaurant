<?php

    //Dit start de session van de ingelogde user
    session_start();
    if (isset($_SESSION['user']))
    {

    }
    else
    {
        header("location: inloggen.php");
    }

    include_once './func/reserveringen.wijzigen.func.php';

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

    <title>Restaurant</title>

</head>

<body style="background-color: darkslategray">

<header>
    <!--Dit zorgt ervoor dat de navbar op elke pagina komt te staan-->
    <?php
    include_once 'func/header.php';
    ?>
</header>


<main>

    <br>

    <div class="container offset-md-1">
        <h1 style="text-align: center; color: white;">Reserveringen wijzigen</h1>
        <br>
        <!--De Table waar de data in moet komen te staan-->
        <table class="table table-bordered text-white text-center">
            <thead class="thead-light">
            <tr>
                <th scope="col">Datum</th>
                <th scope="col">Tijd</th>
                <th scope="col">Tafelnummer</th>
                <th scope="col">Klantnaam</th>
                <th scope="col">Telefoonnummer</th>
                <th scope="col">Aatal Personen</th>
                <th scope="col">Straat</th>
                <th scope="col">Huisnummer</th>
                <th scope="col">Toevoeging Huisnummer</th>
                <th scope="col">Postcode</th>
                <th scope="col">Woonplaats</th>
                <th scope="col">Land</th>
                <th scope="col">Wijzig Reserveringen</th>
            </tr>
            </thead>

            <?php

            //Query die de data uit de database select
            $sql = "SELECT id, datum, tijd, tafel, klantnaam, telefoonnummer, aantalpersonen, straat, huisnummer, huisnummertoevoeging, postcode, woonplaats, land FROM reserveringen";
            $result = $conn->query($sql);
            if ($result->num_rows > 0)
            {
                ////De geselecteerde data op de pagina laten zien
                while($row = $result->fetch_assoc()) {
                    echo "<tr><td>" .$row["datum"].                 "<input type='date' name='datum' class='form-control' required></td>
                              <td>" .$row["tijd"].                  "<input type='time' name='tijd' class='form-control' required></td>
                              <td>" .$row["tafel"].                 "<input type='number' name='tafel' class='form-control' max=\"10\" onkeyup=\"if (this.value > 10) this.value = 10;\"  required></td>
                              <td>" .$row["klantnaam"].             "<input type='text' name='klantnaam' class='form-control' required></td>
                              <td>" .$row["telefoonnummer"].        "<input type='tel' name='telefoonnummer' minlength='10' maxlength='10' class='form-control' required></td>
                              <td>" .$row["aantalpersonen"].        "<input type='number' name='aantalpersonen' class='form-control' max=\"50\" onkeyup=\"if (this.value > 50) this.value = 50;\" required></td>
                              <td>" .$row["straat"].                "<input type='text' name='straat' class='form-control' required </td>
                              <td>" .$row["huisnummer"].            "<input type='number' name='huisnummer' class='form-control' required </td>
                              <td>" .$row["huisnummertoevoeging"].  "<input type='text' name='huisnummertoevoeging' class='form-control'</td>
                              <td>" .$row["postcode"].              "<input type='text' name='postcode' class='form-control' required </td>
                              <td>" .$row["woonplaats"].            "<input type='text' name='woonplaats' class='form-control' required </td>
                              <td>" .$row["land"].                  "<input type='text' name='land' class='form-control' required </td>
                              <td><a href='./reserveringenwijzigen.php?id=". $row['id'] ."' class='btn btn-info'>Wijzig Reservering</a></td></tr>";
                }
                echo "</table>";
            }
            else
            {
                echo "<h3 style='text-align: center; color: red;'>Helaas zijn er op dit moment geen reserveringen!</h3>";
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