<?php
    #Create the link to our config file
    require_once "FormHandling.php";

    #Initialise a variable with an SQL query
    $q = 'SHOW TABLES';

    #Initialise a second variable with the result of the query
    $r = mysqli_query($link, $q);

    #Validation to check if the query succeded or not
    if ($r) {
        echo '<h2>Query Successful!</h2>';
    }
    else {
        echo '<p>'.mysqli_error($link).'</p>';
    };
?>