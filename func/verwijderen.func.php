<?php

    include_once 'database.func.php';

    $_SESSION['Message'] = "";


    function verwijderen($id)
    {
        global $conn;
        $escapedId = $conn->real_escape_string($id);

        $query = $conn->query("DELETE FROM reserveringen WHERE id = {$escapedId}");

        return ($query) ? true : false;
    }

    if(isset($_GET['id']) && $_GET['id'] !== '')
    {
        if(verwijderen($_GET['id']))
        {
            $_SESSION['Message'] = "Reservering Verwijderd";

        }
        else
        {
            $_SESSION['Message'] = "Er is iets fout gegaan";
        }

        header('location: ./reserveringenverwijderen.php?message='. $_SESSION['Message'] .'');
        exit;
    }

?>
