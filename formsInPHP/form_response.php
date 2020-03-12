<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Submit Notification</title>
    <link rel="stylesheet" href="./main.css">
</head>

<body>

    <main>
        <h1>Response</h1>
        <?php

        //*if the submit btn is pressed
        if (isset($_POST['submit'])) {
            //* users in our 'database'
            $names = ["Edwin", "Stefan", "Peter", "Maria", "Jane", "Tom"];

            //assign variables for username & password
            $username = htmlentities($_POST['username']); //only html can be passed

            $email = "";
            if(filter_input(INPUT_POST,'userEmail',FILTER_VALIDATE_EMAIL)){
                global $email;
                $email = filter_var($_POST['userEmail'], FILTER_SANITIZE_EMAIL);
            }

            $password = $_POST['password'];

            //assign variable for min 
            $min = 5;

            //if username is too short, don't sign up
            if (strlen($username) < $min) {
                echo "ERROR! Your username too short <br>";
            }

            //if username isn't in the database, display error
            if (!in_array($username, $names)) {
                echo "Username not recognised <br>";
            }

            //if username is in the database
            if (in_array($username, $names)) {
                // display username and password
                echo "<h2>Your username is $username, your email is $email & your password is $password </h2><br>";
            }
        }

        ?>
    </main>

</body>

</html>