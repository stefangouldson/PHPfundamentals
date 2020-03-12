<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP using forms</title>
    <link rel="stylesheet" href="./main.css">
</head>

<body>
    <main>
        <h1>Forms page</h1>

        <br>
        <!-- form which submits to a different page -->
        <form action="./form_response.php" method="POST">
            <input type="text" placeholder="Enter Username" name="username">
            <br>
            <input type="password" placeholder="Enter Password" name="password">
            <br>
            <input type="email" placeholder="Enter Email" name="userEmail">
            <br><br>
            <input type="submit" name="submit">
        </form>

    </main>
</body>

</html>