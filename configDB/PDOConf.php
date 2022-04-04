<?php
    $servername = "localhost";
    $username = "root";
    $password = "12345";
    $dbname = "sitedb";

    try {
        $connect = new PDO("mysql:host=$servername; dbname=$dbname", $username, $password);
        echo "Зєднання з БД успішно встановлено";
    }
    catch (PDOException $exception){
        echo "Зєдання з БД не встановлено" .$exception->getMessage();
    }