<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Success</title>
</head>
<body>
    <h1>Hi, <?php echo $_COOKIE['user_name']; ?>!</h1> >> <a href="#">Logout</a>
    <h4>Users Table:</h4>
    <?php
    $file = fopen('users.csv', 'r');

    echo '<table border="1">'; ?>
    <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Image</th>
    </tr>
    <?php
    while (($data = fgetcsv($file)) !== FALSE) {
        echo '<tr>';
        $i = 1;
        foreach ($data as $value) {
            echo $i !== 3 ? "<td>$value</td>" : "<td><img src='uploads/{$value}' height='75'></td>";
            $i++;
        }
        echo '</tr>';
    }
    echo '</table>';

    fclose($file);
    ?>

</body>
</html>
