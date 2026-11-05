<?php

    session_start();

    include 'header.inc';

    if (isset($_SESSION['user'])) {
        echo "Welcome, " .$_SESSION['user'];
        echo "<p>Hihi HEheh Hehu Heuhu</p>";
        echo "TOKEN: ".$_SESSION['token'];
    } else {
        header('Location: login.html');
    }

    include 'footer.inc';

?>