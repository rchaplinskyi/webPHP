<?php
$servername = "localhost";
$username = "root";
$password = "12345";
$dbname = "sitedb";

$connect = mysqli_connect($servername, $username, $password, $dbname);
if (mysqli_connect_error()){
    die('Зєднання з базобю даних не встановлено:' . mysqli_connect_errno(). mysqli_connect_error());
}
echo 'Зєднання з базою даних встановлено успішно';