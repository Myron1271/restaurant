<?php

    //Dit include de database
    include_once 'database.func.php';

    //De messages die gedisplayed worden op de website
    $_SESSION['FailMessage'] = "";
    $_SESSION['SuccesMessage'] = "";

    if ($_SERVER['REQUEST_METHOD'] == 'POST')
    {

        //Dit voorkomt dat er geen reserveringen gemaakt kunnen worden op de zelfde naam
        $Name = $_POST['klantnaam'];
        $query = "SELECT * FROM reserveringen WHERE klantnaam= '".$Name."'";
        $check = mysqli_query($conn, $query);

        //Als de naam in de database staat zal die alleen deze fail message laten zien
        if (mysqli_num_rows($check) >= 1)
        {
            $_SESSION['FailMessage'] = "Op de naam: $Name is al een reservering gemaakt!";
        }

        //Als naam nog niet in de database staat zal deze functie uitgevoerd worden
        else
        {
            //Dit insert de data van de reservering in de database
            $Date = $conn->real_escape_string($_POST['datum']);
            $Time = $conn->real_escape_string($_POST['tijd']);
            $Table = $conn->real_escape_string($_POST['tafel']);
            $Name = $conn->real_escape_string($_POST['klantnaam']);
            $Telefoon = $conn->real_escape_string($_POST['telefoonnummer']);
            $Personen = $conn->real_escape_string($_POST['aantalpersonen']);

            $sql = "INSERT INTO reserveringen (datum, tijd, tafel, klantnaam, telefoonnummer, aantalpersonen)" . "VALUE ('$Date', '$Time', '$Table', '$Name', '$Telefoon', '$Personen')";

            //De messages die de gebruiker laten weten wat de uitkomst is van de functie
            if ($conn->query($sql) === true)
            {
                $_SESSION['SuccesMessage'] = 'Reservering is gemaakt, alvast smakkelijk eten!';
            }
            else
             {
                $_SESSION['FailMessage'] = 'Er is iets fout gegaan';
             }
        }
    }

?>

