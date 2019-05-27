<?php

    include_once 'database.func.php';
    $_SESSION['SuccesMessage'] = "";
    $_SESSION['FailMessage'] = "";
    $_SESSION['Username'] = "";


    if ($_SERVER['REQUEST_METHOD']== 'POST')
    {
        //Dit voorkomt dat er geen gebruiker met de zelfde naam toegevoegd kunnen worden
        $Username = $_POST['Username_Register'];
        $query = "SELECT * FROM users WHERE username= '".$Username."'";
        $check = mysqli_query($conn, $query);

        //Als de naam in de database staat zal die alleen deze fail message laten zien
        if (mysqli_num_rows($check) >= 1)
        {
            $_SESSION['FailMessage'] = "$Username heeft al een account!";
        }
        else if ($_POST['Password_Register'] == $_POST['Password_Register2'])
        {
            $Username = $conn->real_escape_string($_POST['Username_Register']);
            $Password = password_hash($_POST['Password_Register'], PASSWORD_DEFAULT);

            $_SESSION['Username'] = $Username;

            $sql ="INSERT INTO users(username, password)" . "VALUES ('$Username', '$Password')";

            if ($conn ->query($sql) === true)
            {

                $_SESSION['SuccesMessage'] = "$Username is toegevoegd!";
            }
        }
        else
        {
            $_SESSION['FailMessage'] = "Het wachtwoord klopt niet!";
        }
    }

?>