<?php
    #Create the link to our config file
    require_once "FormHandling.php";

    #Create a function to records in an existing table
    function show_records($link) {
        $q = 'SELECT * FROM prints';
        $r = mysqli_query($link, $q);

        if($r) {
            echo'<h1>Records in Prints Table</h1>';

            while($row = mysqli_fetch_array($r, MYSQLI_ASSOC)){
                echo'<br>'.$row['id'].' | '.$row['name'].' @ '.$row['price'];
            }
        }
        else {
            echo'<p>'.mysqli_error($link).'</p>';
        }
    }

    #Now, call the function
    show_records($link);

    #Create another qyery to add rows to the table
    $q = 'INSERT INTO prints (name, price) VALUES ("One Centre", 32.99), ("Yellow Red Blue", 36.99)';
    $r = mysqli_query($link, $q);

    #Call the function again, show an error if changes failed
    if($r) {
        show_records($link);
    }
    else {
        echo'<p>'.mysqli_error($link).'</p>';
    }

?>