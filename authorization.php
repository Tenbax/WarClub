<?php
require_once ('db.php');

$email = $_POST["email"];
$pass = $_POST["pass"];

if (empty($email) || empty($pass))
{
    echo "Заполените все поля";
}  else{
    $sql = "SELECT * FROM user WHERE email = '$email' AND pass = '$pass'";
    $result = connect()->query($sql);

    if ($result->num_rows > 0)
    {
        while ($row = $result->fetch_assoc()){
           // echo "Добро пожаловать, " . $row["name"];
            header('Location:..\html\PP.html');
        }
    }else {
        echo "Нет такого пользователя";
    }
}