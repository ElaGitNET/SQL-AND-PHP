<!DOCTYPE HTML>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>PHP Lab 3 task</title>
        <!-- CSS only -->
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
    </head>
    <style>
    body {
    background-image: url('https://i.pinimg.com/originals/6f/2d/34/6f2d34fe6c8746c56c14fbc55308ef99.jpg');
    /* Full height */
    height: 100%;
    

    /* Center and scale the image nicely */
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    }
    </style>
    <body>


    <div class="container text-center">
        <div class="row">
            <div class="col">

            </div>
            <div class="col">
            <div class="card text-bg-dark mb-3" style="max-width: 18rem;">
        <div class="card-header">Course Application</div>
        <div class="card-body">
            <h5 class="card-title">Pick your course!</h5>
            <form action = "FormHandling.php" method = "POST">
        <dl>
            <dt>Name:</dt>
                <dd><input type = "text" name = "name"></dd>
            <dt>Email Address:</dt>
                <dd><input type = "text" name = "mail"></dd>
            <dt>Address:</dt>
                <dd><input type = "text" name = "address"></dd>
            <dt>Phone Number:</dt>
                <dd><input type = "text" name = "number"></dd>
        </dl>

        <!-- DROP DOWN Skillset -->
        <fieldset>
            <legend>Choose the skillset of your Computing Courses</legend>
            Beginner<input type = "radio" name="definition" value="Beginner"><br>
            Intermediate<input type = "radio" name="definition" value="Intermediate"><br>
            Advanced<input type = "radio" name="definition" value="Advanced"><br>
        </fieldset>
        
        <!-- DROP DOWN COURSE-->
        <fieldset>
            <legend>Choose your course</legend>
            Networking<input type = "radio" name="definition" value="Networking"><br>
            Web Design<input type = "radio" name="definition" value="Web Design"><br>
            Programming<input type = "radio" name="definition" value="Programming"><br>
        </fieldset>
        
        <?php
        date_default_timezone_set('UTC');
        $time = date('H:i, F j, Y');
        $user = 'User';
        
        echo '
        <form action = "FormHandling.php" method = "POST">
            <fieldset>
                <legend>Please leave a comment in the area below</legend>
                <textarea rows = "5" cols="20" name="comment"></textarea>

                <input type = "hidden" name = "user" value = "'.$user.'">
                <input type = "hidden" name = "time" value = "'.$time.'">
            </fieldset>
            
            <p><input type = "submit"></p>
        </form>';
        ?>
        </div>
    </div>
        </div>
    </div>
            </div>
            <div class="col">

            </div>
        </div>
    </div>
    

    </form>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

    </body>
</html>
