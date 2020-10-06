<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HOME</title>
</head>
<body>
<form action="" method="post">
    <fieldset>
        <p> nameUser : </p>
        <input type="text" id="user" name="user"><br/>
        <p> Email : </p>
        <input type="text" name="email"><br/>
        <p> PhoneNumber : </p>
        <input type="text" name="phone"><br/><br/>
        <input type="submit" value="submit">
    </fieldset>
</form>
</body>
</html>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = $_POST["user"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    if ($user == "" || $email == "" || $phone == "") {
        echo "please enter user or email or phone";
    } else{
        echo "welcome";
    }
}
