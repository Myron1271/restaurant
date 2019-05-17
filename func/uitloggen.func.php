<?php

    session_start();
    session_destroy();
    header("Location: http://localhost/restaurant/inloggen.php");
    exit;