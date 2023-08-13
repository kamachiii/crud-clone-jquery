<?php
    require_once 'parse.php';

    use Config\Parse;

    (new Parse('.env'))->load();

    $dbHost = getenv('DB_HOST');
    $dbUser = getenv('DB_USER');
    $dbPassword = getenv('DB_PASSWORD');
    $dbName = getenv('DB_NAME');

    $conn = mysqli_connect($dbHost, $dbUser, $dbPassword, $dbName);

?>
