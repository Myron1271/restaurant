
<link rel="stylesheet" as="style" type="text/css" href="/css/style.css">

<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" id="HomeText" href="index.php">Home</a>
        <button class="navbar-toggler" type="button"    data-toggle="collapse" data-target="#navbarText"
                aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav mr-auto" id="NavBarText">
                <li class="nav-item">
                    <a class="nav-link" id="NavBarTextMenukaart" href="./menukaart.php">Menukaart</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="NavBarTextReseveren" href="./reseveren.php">Reseveren</a>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right" id="NavBarText">
                <li class="nav-item">
                    <a class="nav-link" id="AccountName" href="./Account.php"></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="NavBarTextAccount" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Account
                    </a>
                    <div style="padding-right: 150px">
                        <div style="text-align: center; margin-left: -105px" class="dropdown-menu animate rotateInDownRight" aria-labelledby="NavBarTextAccount">
                            <a class="dropdown-item" id="NavBarTextDropDown" href="./inloggen.php">Inloggen</a>
                            <a class="dropdown-item" id="NavBarTextDropDown" href="./reserveringenoverzicht.php">Overzicht Reserveringen</a>
                            <a class="dropdown-item" id="NavBarTextDropDown" href="./reserveringenverwijderen.php">Verwijder Reservering</a>
                            <a class="dropdown-item" id="NavBarTextDropDown" href="./reserveringenwijzigen.php">Wijzig Reservering</a>
                            <a class="dropdown-item" id="NavBarTextDropDown" href="./drankentoevoegen.php">Dranken Toevoegen</a>
                            <a class="dropdown-item" id="NavBarTextDropDown" href="./bon.php">Bon</a>
                            <a class="dropdown-item" id="NavBarTextDropDown" href="./barmanbestelling.php">Barman</a>
                            <hr class="FooterLine " style="margin: 0 20%;">
                            <a class="dropdown-item" id="NavBarTextDropDown" href="./func/uitloggen.func.php">Uitloggen</a>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
    <script class="AccountName" type="text/javascript">
        var Username = '<?php echo $_SESSION['user'];?>';
        document.getElementById('AccountName').innerHTML= Username;
    </script>
</header>
