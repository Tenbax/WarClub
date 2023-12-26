<?php /** @noinspection ALL */

require_once ('db.php');
//if (isset($_POST['submit'])){
    $name =  $_POST["name"];
    $email =  $_POST["email"];
    $pass = $_POST["pass"];
    $repeatPass = $_POST["repeat pass"];

//if (empty($name) || empty($email) || empty($pass)) {
//    echo "Заполните поля";
//}else {
//    if ($pass != $repeatPass) {
//        echo die("  Хуйню написал, давай по новой" . mysqli_connect_error());
//    } else
        $sql = ("INSERT INTO user ( `name`, `email`, `pass`) VALUES ('$name','$email','$pass')");
//connect()-> query($sql);
    if (connect()->query($sql) === TRUE) {
        echo "Теперь ты с нами";
    } else {
        "Что то пошло не так" . connect()->error;


    }
//}

//$sql = "DELETE FROM user WHERE id > 5";












