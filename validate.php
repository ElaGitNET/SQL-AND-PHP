<?php
    #Create the link to our config file
    require_once "FormHandling.php";

    $q = 'SELECT price from pens WHERE maker = "Bexley"';
    $r = mysqli_query($link, $q);

    #A while loop to retireve a single piece of data from the pens
    #table, to be used for validation purposes
    while($row = mysqli_fetch_array($r, MYSQLI_NUM)) {
        $var = $row[0];
    }

    #Statements to test the retrieved data type, and display an
    #appropriate response
    $result = is_numeric($var) ? 'numeric' : 'not numeric';
    echo "$var is $result<br>";

    $result = is_int($var) ? 'an integer' : 'not an integer';
    echo "$var is $result<br>";

    $result = is_array($var) ? 'an array' : 'not an array';
    echo "$var is $result<br>";

    $result = is_float($var) ? 'a float' : 'not a float';
    echo "$var is $result<br>";

    $result = is_string($var) ? 'a string' : 'not a string';
    echo "$var is $result<br>";

    $result = is_null($var) ? 'NULL' : 'not NULL';
    echo "$var is $result<br>";

    $result = is_scalar($var) ? 'a variable' : 'not a variable';
    echo "$var is $result<br>";

    $result = is_bool($var) ? 'a boolean' : 'not a boolean';
    echo "$var is $result<br>";

    $result = is_resource($var) ? 'a resource' : 'not a resource';
    echo "$var is $result<br>";

    #Close the connection to the database
    mysqli_close($link);
?>

