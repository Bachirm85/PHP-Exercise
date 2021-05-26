<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

if (isset($_POST["login"])) {

    // get log in data
    $username_log = $_POST["uname"];
    $password_log = $_POST["psw"];

    // Validate Data
    if (!empty($username_log) && !empty($password_log)) {
        if ($username_log == "Bachir" && $password_log == "Bmouawad") {
            echo "Welcome Bachir";
        } else {
            echo "Please enter your correct username and password";
        }

    } else {
        echo "Please enter your Username and Password";
    }
} elseif (isset($_POST["register"])) {

    // Get register data
    $username = $_POST["username"];
    $password = $_POST["password"];
    $cnfpass = $_POST["cnfpass"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $birthday = $_POST["birthday"];
    $ssn = $_POST["ssn"];

    // validate data
    if (!empty($username) && !empty($password) && !empty($cnfpass) && !empty($email) && !empty($phone) && !empty($birthday) && !empty($ssn)) {
        if ($password && $cnfpass) {
            if (is_numeric($phone) && is_numeric($ssn)) {
                echo "Welcome";
            } else {
                echo "your phone and SSN should be numeric fields";
            } 
            
        } else {
            echo "Your passwords do not match";
        }
    } else {
        echo "Please enter all fields";
    }
} else {
    echo "Internal Error, please contact Support";
} 

?>

</body>
</html>