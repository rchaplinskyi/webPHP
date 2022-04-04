<?php
    $servername = "localhost";
    $username = "root";
    $password = "12345";
    $dbname = "sitedb";

    global $connect;
    $connect = new mysqli($servername, $username, $password, $dbname);
    if ($connect-> connect_error){
        die('Зєднання з базобю даних не встановлено:' .$connect->connect_error);
    }
    echo 'Зєднання з базою даних встановлено успішно';