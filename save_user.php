<?php
    if (isset($_POST['name'])) {
        $name = $_POST['name'];
    }
if (isset($_POST['surname'])) {
    $surname = $_POST['surname'];
}
if (isset($_POST['login'])) {
    $login = $_POST['login'];
}
if (isset($_POST['password'])) {
    $password = $_POST['password'];
}
if (empty($name) or empty($surname)) {
    exit ("Ви заповнили не всі поля!");
}
$name = htmlspecialchars($name);
$surname = htmlspecialchars($surname);
$login = htmlspecialchars($login);
$password = htmlspecialchars($password);
$password = md5($password);
require_once "configDB/ProcedureConf.php";
global $connect;
$sql = "INSERT INTO user (login, password, first_name, last_name) 
VALUES ('$login', '$password', '$name', '$surname')";
$result = mysqli_query($connect, $sql);
if ($result==true){
    echo '"<div class="alert alert-success" role="alert">" Реєстрація пройшла успішно"</div>"';
}
else {
    echo '"<div class="alert alert-warning" role="alert">" Помилка реєстрації"</div>"';
}