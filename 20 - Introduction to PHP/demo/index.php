<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Link to my own stylesheet used-->
    <link href="index.css" rel="stylesheet">
    <meta charset="UTF-8">
    <title>Week 20 DEMO</title>
</head>
<body>
<div class="form">
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <div class="firstName">
        <p>First Name : </p>
        <input type="text" name="firstname" placeholder="Enter your Name">
    </div>
    <div class="lastName">
        <p>Last Name : </p>
        <input type="text" name="lastname" placeholder="Enter your Last Name">
    </div>
    <div class="emailAddress">
        <p>Email Address : </p>
        <input type="email" name="email" placeholder="Enter your Last Name">
    </div>
    <div class="button">
        <input type="submit" name="button" value="SUBMIT">
    </div>
</form>
</div>
</body>
</html>
<?php

//if the button is clicked then create two new lines containing what was in the fields
if (isset($_POST['button']))
{
    echo '<p>Hello </p>'.' '.$_POST['firstname'].' '.$_POST['lastname'];
    echo '<br/>';
    echo '<p>Your email address is</p>'.' '.$_POST['email'];
}

?>