<?php
    #Create the link to our config file
    require_once "FormHandling.php";

    #Initialise a variable with an SQL query
    $q = 'SHOW TABLES';

    #Initialise another variable with the result of a query
    #to the database on the MySQL server
    $r = mysqli_query($link, $q);

    #Test if the query is successful
    if ($r) {
        echo '<h1>Tables stored in database:</h1>';
        while ($row = mysqli_fetch_array($r, MYSQLI_NUM)) {
            echo '<br>'.$row[0];
        }
         #Free the result set resource
        mysqli_free_result($r);
    }
    else {
        echo'<p>'.mysqli_error($link).'</p>';
    }
?>