<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php require 'signup.php'?>
    <form action="signup.php" method="post">
        username: <input type="text" name="username" autocomplete="off"><br>
        email  : <input type="email" name="email" autocomplete="off"><br>
        password: <input type="password" name="password"><br>
    <button type="submit" name="submit">Submit</button>
    </form>
    

</body>
</html>
