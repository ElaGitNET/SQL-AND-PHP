<?php
# Starts the connection to the database
define("DB_HOST", "localhost");
define("DB_USER", "root");
define("DB_PASS", "");
define("DB_NAME", "T-Level-Lab-03");

# Ensures that the required tables exist
#Here we are are creating a connection to the MySQL database
$link = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

#Validation to check if connection is succesfull - an error is returned if not.
if($link === false){
    die("ERROR: Connection could not be established. " . mysqli_connect_error());
}
?>


<!DOCTYPE HTML>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Comments Form - Response</title>
    </head>

    <body>
        <!-- PHP Script--> 
        <?php
            $name = $_POST['name'];
            $mail = $_POST['mail'];
            $Address = $_POST['address'];
            $Number = $_POST['number'];
            $comment = $_POST['comment'];

            if (!empty($_POST['name'])) {
               $name = $_POST['name'];
               if (!is_string($name)) {
                $name = NULL;
                echo 'Please fill in your name<br>';
               }
            }
            
            else {
                $name = NULL;
                echo 'You must fill in your name<br>';
            }

            if (!empty($_POST['mail'])) {
                $mail = $_POST['mail'];

                $pattern = '/\b[\w.-]+@[\w.-]+\.[A-Za-z]{2,6}\b/';
                if (!preg_match($pattern, $mail)) {
                    $mail = NULL;
                    echo 'Please enter a valid email address in the correct format';
                }
            }

            else {
                $mail = NULL;
                echo 'You must enter a valid email address<br>';
            }

            echo "<p>Hi $name, thank you for you comment: </p>";

            if (!empty($_POST['number'])) {
               $Number = $_POST['number'];
               if (!is_numeric($Number)) {
                $number = NULL;
                echo 'The value you enter must be number<br>';
               }

            }

            else {
                $Number = NULL;
                echo 'Please enter a number<br>';
            }
            

           if (isset($_POST['definition'])) {
            $definition = $_POST['definition'];
           }
           else {
            $definition = NULL;
           }
           if ($definition == NULL) {
            echo 'Please choose course skillset and course';
           }

           if (!empty ($_POST['comment'])) {
            $comment = $_POST['comment'];
        }
        else {
            $comment = NULL;
            echo 'Please enter a comment...';
        }
        
        #Statements to initialise variables if the
        #hidden form field values have been set
        $time = (!isset ($_POST['time'])) ? NULL: $_POST['time'];
        $user = (!isset ($_POST['user'])) ? NULL: $_POST['user'];

        #Statements to output valid data:
        if (($comment != NULL) && ($time != NULL) && ($user != NULL)) {
            echo "<p>Comment received: \"$comment\"<br> From $user at $time</p>";
        }
        ?>
    </body>
</html>