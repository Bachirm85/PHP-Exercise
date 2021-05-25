


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="reg.css">
    <title>Home php</title>
</head>
<body>
<div class="flx">
    <div class="container">
        <form class="reg_field" action="safe.php" method="POST">
        <h2>Registration Form</h2>
    
            <label for="name">Full Name</label>
            <input type="text" name="name" id="name"><br>
            <label for="usrname">Username</label>
            <input type="text" name="username" id="Username"><br>
            <label for="password">Password</label>
            <input type="password" id="password" name="password" minlength="8" ><br>
            <label for="cnfpass">Confirm Password</label>
            <input type="password" name="cnfpass" id="confirm_password" ><br>
            <label for="email">Email</label>
            <input type="email" name="email" id="email"><br>
            <label for="phone">Phone</label>
            <input type="tel" id="phone" name="phone"><br>
            <label for="birthday">Date of Birth</label>
            <input type="date" id="birthday" name="birthday"><br>
            <label for="ssn">Social Security Number</label>
            <input type="text" id="ssn" name="ssn"><br>
            <button type="submit" name="register">Submit</button>
            <label>
    
        </form>
    </div>

    <div class="container">
        <form action="safe.php" method="POST">
        <h2>Login Form</h2>
 
            <label for="uname"><b>Username</b></label>
            <input type="text" name="uname">

            <label for="psw"><b>Password</b></label>
            <input type="password" name="psw">
                
            <button type="submit" name="login">Login</button>
            <label>
        </form>

    </div>
</div>
</body>





