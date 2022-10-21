<!DOCTYPE HTML>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Secure</title>
    </head>

    <body>

        <form action = "secure.php" method = "POST">
            <p>New Name: <input type = "text" name = "name">
                         <input type="submit">
            </p>
        </form>

        <!--All PHP scripts need to go inside these tags-->
        <?php
            require_once "FormHandling.php";

            #Validation to check that the user has entered a valid string.
            #then update the existing record
            if(!empty($_POST['name']) && !is_numeric($_POST['name'])) {
                $name = $_POST['name'];
                #The following statements make the inputted data safe for use
                #in SQL queries and removes any HTML tags
                $name = mysqli_real_escape_string($link, $name);
                $name = strip_tags($name);

                $q = 'UPDATE towels SET name = "'.$name.'" WHERE id = 1';
                mysqli_query($link, $q);
            }
            else {
                echo 'No valid name submitted';
            }

            #Display an item from an existing table
            $q = 'SELECT * FROM towels WHERE id = 1';
            $r = mysqli_query($link, $q);

            while($row = mysqli_fetch_array($r, MYSQLI_NUM)) {
                echo "<p>Name: $row[1]</p>";
            }
        ?>
    </body>

</html>