<?php

    include_once 'database.func.php';

    $_SESSION['Message'] = "";


    //De function wordt hier gemaakt
    function verwijderen($id)
    {
        //Er is hiervoor een Global $conn nodig
        global $conn;
        //De real escape string zorgt voor de sql injections
        $escapedId = $conn->real_escape_string($id);
        //De query waar aangegeven wordt wat en uit waar iets verwijderd moet worden
        $query = $conn->query("DELETE FROM bestellingdrinken WHERE id = {$escapedId}");

        return ($query) ? true : false;
    }

    //Wanneer de function Succesvol afgerond is zal deze message dit aangeven in de URL.
    if(isset($_GET['id']) && $_GET['id'] !== '')
    {
        if(verwijderen($_GET['id']))
        {
            $_SESSION['Message'] = "Bestelling Verwijderd";

        }
        else
        {
            $_SESSION['Message'] = "Er is iets fout gegaan";
        }

        //Het ID wordt niet meegeven voor wat extra beveiliging
        header('location: ./barmanbestelling.php?message='. $_SESSION['Message'] .'');
        exit;
    }

?>

