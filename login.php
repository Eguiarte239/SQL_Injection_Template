<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SQLI</title>
</head>
<body>
    <form method="POST" action="connection.php">
        <label for="username">Username</label><br>
        <input type="text" name="username"><br>
        <label for="pass">Password</label><br>
        <input type="password" name="pass"><br>
        <input type="submit" value="Ingresar">
    </form>
</body>
</html>