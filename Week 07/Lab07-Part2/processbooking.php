<!DOCTYPE html>
<html lang="en">
<head>
	<title>Booking Confirmation</title>
	<meta charset="utf-8">
	<meta name="description" content="Rohirrim Booking Confirmation" >
	<meta name="keywords"    content="MiddleEarth, Tours, Rohan" >
	<meta name="author"      content="Grima Wormtongue" />
    <!-- Place the general style sheet before specific CSS so the specific overides the general formatting-->
	<link rel="stylesheet" type="text/css" href="style/style.css" >
	<link rel="stylesheet" type="text/css" href="style/register.css" >	
</head>

<body>


	<header><h1>Rohirrim Tour Booking Confirmation</h1></header>

<?php

    $FUH_NAME = $_POST['firstname'];

    $LAH_NAME = $_POST['lastname'];

    $AGE = $_POST['age'];

    $SPECIES = $_POST['species'];

    $ACCOM = $_POST['accom'];

    $FOUR_DAY_TOUR = $_POST['4day'];

    $TEN_DAY_TOUR = $_POST['10day'];

    $FOOD = $_POST['food'];

    $BOOK_DAY = $_POST['bookday'];

    $PARTY_SIZE = $_POST['partysize'];

    

    

    if (isset($_POST['firstname']))
        echo "<p>First Name: $FUH_NAME</p>";
    else
        echo "<p>First Name: Missing Data</p>";

    if (isset($_POST['lastname']))
        echo "<p>Last Name: $LAH_NAME</p>";
    else
        echo "<p>Last Name: Missing Data</p>";


    if (isset($_POST['age']))
        echo "<p>Age: $AGE</p>";
    else
        echo "<p>Age: Missing Data</p>";


    if (isset($_POST['species']))
        echo "<p>Species: $SPECIES</p>";
    else
        echo "<p>Species: Missing Data</p>";


    if (isset($_POST['accom']))
        echo "<p>Accomodation: $ACCOM</p>";
    else
        echo "<p>Accomodation: Missing Data</p>";


    if (isset($_POST['4day']))
        echo "<p>Four-day Tour: $FOUR_DAY_TOUR</p>";
    else
        echo "<p>Four-day Tour: Missing Data</p>";


    if (isset($_POST['10day']))
        echo "<p>Ten-day Tour: $TEN_DAY_TOUR</p>";
    else
        echo "<p>Ten-day Tour: Missing Data</p>";


    if (isset($_POST['food']))
        echo "<p>Food: $FOOD</p>";
    else
        echo "<p>Food: Missing Data</p>";


    if (isset($_POST['bookday']))
        echo "<p>Book day: $BOOK_DAY</p>";
    else
        echo "<p>book day: Missing Data</p>";


    if (isset($_POST['partysize']))
        echo "<p>Party size: $PARTY_SIZE</p>";
    else
        echo "<p>Party Size: Missing Data</p>";



?>

</body>
</html>
