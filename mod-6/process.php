<?php
// Validate form inputs
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $profile_pic = $_FILES["profile_pic"];

    if (empty($name) || empty($email) || empty($password) || $profile_pic['size'] == 0) {
        echo "All fields are required.";
        exit;
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email format.";
        exit;
    }
}

// Save profile picture to server with a unique filename
$profile_pic_name = $_POST["name"] . '_' . date( "Y-m-d_h:i:sa" ) . '.' . pathinfo($profile_pic["name"], PATHINFO_EXTENSION);
move_uploaded_file( $profile_pic["tmp_name"], "./uploads/$profile_pic_name" );

// Save user's name, email, and profile picture filename to CSV file
$user_data = array($name, $email, $profile_pic_name);
$fp = fopen('users.csv', 'a');
fputcsv($fp, $user_data);
fclose($fp);

// Set cookie with user's name
setcookie("user_name", $name, time() + 3600 * 24 * 7);

// Redirect to Users page
header("Location: users.php");

