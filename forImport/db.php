<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MySQL</title>
</head>

<body>
    <?php
    define('HOST', 'localhost');
    define('USER', 'root');
    define('PW', '');
    define('DB', 'eshop');

    $db = mysqli_connect(HOST, USER, PW, DB);
    if (!$db) {
        echo '<br>Could not connect to db</br>';
        var_dump($db);
    }
    ?>

</body>

</html>