<?php

    include_once 'database.func.php';


    session_start();
    if ($_SERVER['REQUEST_METHOD']== 'POST')
    {
        if ($_POST['Password_Register'] == $_POST['Password_Register2'])
        {
            $Username = $conn->real_escape_string($_POST['Username_Register']);
            $Password = password_hash($_POST['Password_Register'], PASSWORD_DEFAULT);

            $sql ="INSERT INTO users(username, password)" . "VALUES ('$Username', '$Password')";

            if ($conn ->query($sql) === true)
            {
                $_SESSION['message'] = "Nieuwe werknemer is toegevoegd";
            }
        }
        else
        {
            $_SESSION['message'] = "Je wachtwoord is niet gelijk!";
        }
    }

?>