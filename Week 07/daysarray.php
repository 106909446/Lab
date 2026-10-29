<!DOCTYPE html>


<html lang="en">

    <head>
        <meta charset="utf-8"/>
        <title>Use PHP vars, arrays, operators</title>
    </head>


    <body>
        <h1>PHP Variables, arrays and operators</h1>

    <?php

        $days = array ("Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday");
        
        echo "<p>The days of the week in English are: </p>";
        for ($i = 0; $i < count($days); $i++) {
            echo "$days[$i], ";
        }

        $frenchdays = array ("Dimanche", "Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi");
        echo "<p>The days of the week in French are: </p>";
        for ($i = 0; $i < count($frenchdays); $i++) {
            echo "$frenchdays[$i], ";
        }

    ?>


    </body>


</html>