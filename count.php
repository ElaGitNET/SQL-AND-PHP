<?php
    #Create the link to our config file
    require_once "FormHandling.php";

    #Create a function to records in an existing table
    function show_records($link) {
        $q = 'SELECT * FROM towels';
        $r = mysqli_query($link, $q);
        $num = mysqli_num_rows($r);

        if($num > 0) {
            echo'<h1>Records in Towels Table</h1>';

            while($row = mysqli_fetch_array($r, MYSQLI_ASSOC)){
                echo'<br>'.$row['name'].' | '.$row['colour'].' @ '.$row['price'];
            }
            echo"<br>$num Records";
        }
        else {
            echo'<p>'.mysqli_error($link).'</p>';
        }
    }

    #Now, call the function
    show_records($link);

    #Create another query to add rows to the table
    $q = 'INSERT INTO towels (name, colour, price) VALUES ("Sunset", "Orange", 9.99)';
    $r = mysqli_query($link, $q);

    #Call the function again, show an error if changes failed
    if($r) {
        show_records($link);
    }
    else {
        echo'<p>'.mysqli_error($link).'</p>';
    }

?>