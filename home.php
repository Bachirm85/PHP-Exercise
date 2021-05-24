<link rel="stylesheet" href="reg.css">

<body>
<div class="flx">
<div class="container">
<form class="reg_field" action="safe.php" method="post">
<h2>Registration Form</h2>
    
        <label for="name">Full Name</label>
        <input type="text" name="name" id="name"><br>
        <label for="usrname">Username</label>
        <input type="text" name="Username" id="Username"><br>
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
        <button type="submit">Submit</button>
        <label>
    
</form>
</div>

<div class="container">
    <form action="safe.php" action="safe.php" method="post">
    <h2>Login Form</h2>
 
    <label for="uname"><b>Username</b></label>
    <input type="text" name="uname" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" name="psw" required>
        
    <button type="submit">Login</button>
    <label>
</form>

</div>
</div>
</body>





