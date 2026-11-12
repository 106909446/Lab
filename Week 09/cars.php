<!DOCTYPE html>

<html lang="en">

    <head>
        <meta charset="UTF-8">
        <title>CARS!!!</title>
    </head>

    <body>

        <?php
        
            require_once "settings.php";
            $dbconn = @mysqli_connect($host, $user, $pwd, $sql_db);

            if ($dbconn) {

                $query = "SELECT * FROM cars";
                $sql = "SELECT * FROM cars WHERE price > 20000";
                $result = mysqli_query($dbconn, $sql);

                if ($result and mysqli_num_rows($result) > 0) {

                    echo "<h1>CARS!! 💀💀💀💀🧪🧪🧪🧪🤣🤣🤣🤣</h1>";

                    echo "<table border = '1' style = 'text-align: center; width: 30rem;' >";
                    echo "<tr>";
                    echo "<td>Id</td>";
                    echo "<td>Make</td>";
                    echo "<td>Model</td>";
                    echo "<td>Price</td>";
                    echo "<td>Year of Manufacture</td>";
                    echo "</tr>";

                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        echo "<td>" . $row['car_id'] . "</td>";
                        echo "<td>" . $row['make'] . "</td>";
                        echo "<td>" . $row['model'] . "</td>";
                        echo "<td>" . $row['price'] . "</td>";
                        echo "<td>" . $row['yom'] . "</td>";
                        echo "</tr>";
                    }

                    echo "</table>";

                }
                else {
                    echo "<h2>There are no cars to display.</h2>";
                }


                mysqli_close($dbconn);

            }
            
            else {
                echo "<h2>Unable to connect to the database.</h2>";
            }

        ?>


        <a href="search_form.php"><h2>Form</h2></a>

        
    </body>

</html>