<?php

    include_once 'database.func.php';

    $_SESSION['SuccesMessage'] = "";
    $_SESSION['FailMessage'] = "";


    if($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        //Dit voorkomt dat er geen reserveringen gemaakt kunnen worden op de zelfde naam
        $Drank = $conn->real_escape_string($_POST['dranknaam']);
        $query = "SELECT * FROM dranken WHERE dranknaam= '".$Drank."'";
        $check = mysqli_query($conn, $query);

        //Als de naam in de database staat zal die deze fail message laten zien
        if (mysqli_num_rows($check) >= 1)
        {
            $_SESSION['FailMessage'] = "$Drank is al eens toegevoegd";
        }

        else
        {
            $Drank = $conn->real_escape_string($_POST['dranknaam']);
            $Prijs = $conn->real_escape_string($_POST['prijs']);

            $sql = "INSERT INTO dranken(dranknaam, prijs) " . "VALUE('$Drank', '$Prijs')";

            if ($conn->query($sql) == true) {
                $_SESSION['SuccesMessage'] = "$Drank is toegevoegd";
            }
            else
            {
                $_SESSION['FailMessage'] = "$Drank is niet toegevoegd";
            }
        }
    }

?>


