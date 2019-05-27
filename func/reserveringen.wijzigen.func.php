<?php

    include_once 'database.func.php';
    $_SESSION['Message'] = "";


    //De function wordt hier gemaakt
    function wijzigen($id)
    {

        //Er is een global $conn nodig voor in de function te werken
        global $conn;

        //De waardes van de input fields
        $Date = $conn->real_escape_string($_POST['datum']);
        $Time = $conn->real_escape_string($_POST['tijd']);
        $Table = $conn->real_escape_string($_POST['tafel']);
        $Name = $conn->real_escape_string($_POST['klantnaam']);
        $Telefoon = $conn->real_escape_string($_POST['telefoonnummer']);
        $Personen = $conn->real_escape_string($_POST['aantalpersonen']);

        //De real escape string zorgt voor de sql injections
        $escapedId = $conn->real_escape_string($id);
        //De query waar aangegeven wordt wat en uit waar iets geupdate moet worden
        $query = $conn->query("UPDATE reserveringen SET datum= '$Date' , tijd= '$Time' , tafel= '$Table' , klantnaam= '$Name' , telefoonnummer= '$Telefoon' , aantalpersonen= '$Personen' WHERE id= {$escapedId}");

        return ($query) ? true : false;
    }

    //Wanneer de function Succesvol afgerond is zal deze message dit aangeven in de URL.
    if(isset($_GET['id']) && $_GET['id'] !== '')
    {
        if(wijzigen($_GET['id']))
        {
            $_SESSION['Message'] = "Reservering Gewijzigd";

        }
        else
        {
            $_SESSION['Message'] = "Er is iets fout gegaan";
        }

        //Het ID word niet meegegeven voor wat extra beveiliging
        header('location: ./reserveringenwijzigen.php?message='. $_SESSION['Message'] .'');
        exit;
    }

?>

