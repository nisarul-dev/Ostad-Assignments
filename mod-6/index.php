<?php

if ( isset( $_COOKIE['user_name'] ) ) {
    header('Location: users.php');
}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registration</title>
</head>
<body>

    <h2>User Registration Fields</h2>
    <form action="process.php" method="post" enctype="multipart/form-data">
        <label for="name">Name:</label>
        <input type="text" name="name" required>
        <br><br>
        <label for="email">Email:</label>
        <input type="email" name="email" required>
        <br><br>
        <label for="password">Password:</label>
        <input type="password" name="password" required>
        <br><br>
        <label for="profile_pic">Profile Picture:</label>
        <input type="file" name="profile_pic" required>
        <br><br>
        <input type="submit" name="submit" value="Submit">
    </form>


</body>
</html>