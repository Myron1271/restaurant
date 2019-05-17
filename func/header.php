
<link rel="stylesheet" as="style" type="text/css" href="/css/style.css">

<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" id="HomeText" href="index.php">Home</a>
        <button class="navbar-toggler" type="button"data-toggle="collapse" data-target="#navbarText"
                aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav mr-auto" id="NavBarText">
                <li class="nav-item">
                    <a class="nav-link" id="NavBarTextMenukaart" href="./menukaart">Menukaart</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="NavBarTextReseveren" href="./reseveren.php">Reseveren</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="NavBarTextBestellen" href="./bestellen.php">Bestellen</a>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right" id="NavBarText">
                <li class="nav-item">
                    <a class="nav-link" id="Username" href="./Account.php"></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="NavBarTextAccount" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Account
                    </a>
                    <div style="padding-right: 150px">
                        <div style="text-align: center" class="dropdown-menu animate rotateInDownRight" aria-labelledby="NavBarTextAccount">
                            <a class="dropdown-item" id="NavBarTextDropDown" href="./Inloggen.php">Inloggen</a>
                            <hr class="FooterLine " style="margin: 0 20%;">
                            <a class="dropdown-item" id="NavBarTextDropDown" href="./Uitloggen.php">Uitloggen</a>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
    <script type="text/javascript">
        var Username = '<?php echo $_SESSION['user'];?>';
        document.getElementById('Username').innerHTML= Username;
    </script>
</header>
