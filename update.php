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
        }
        else {
            echo'<p>'.mysqli_error($link).'</p>';
        }
    }

    #Now, call the function
    show_records($link);

    #Create another query to update data in the table
    $q = 'UPDATE towels SET colour = "Purple" WHERE colour = "Orange"';
    $r = mysqli_query($link, $q);

    #Call the function to display all records again, if the expected number of rows 
    #have been affected
    if(mysqli_affected_rows($link)==1) {
        echo'<hr>'.mysqli_affected_rows($link).' Record(s) Updated...';
        show_records($link);
    }
    else {
        echo'<p>'.mysqli_error($link).'</p>';
    }

?>