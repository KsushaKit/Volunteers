<?php
// // Подключение к базе данных
require 'db.php';
// Получение данных из HTML-формы
$name = $_POST['name'];
$surname = $_POST['surname'];
$phone = $_POST['phone'];
$type_of_assistance = $_POST['type_of_assistance'];
$comment = $_POST['comment'];
$result;

// echo "<br> данные из формы: ", "<br>" , $name, "<br>", $surname,"<br>",  $phone, "<br>", $type_of_assistance,"<br>", $comment ;

//sql-запрос
try {
    $sql = "INSERT INTO applications (name, surname, phone, type_of_assistance, comment)
            VALUES ('$name', '$surname', '$phone', '$type_of_assistance', '$comment')";
    $conn->exec($sql);
  
    //header('Location: ../index.php');
    echo '<script>alert("Сообщение отправлено")</script>';

} catch(PDOException $e) {

}

$conn = null;


die();
?>