<?php
//___________ПАРАМЕТРЫ_ПОДКЛЮЧЕНИЯ_К_ БАЗЕ_ДАННЫХ___________________

$servername = "localhost"; // Имя сервера базы данных
$username = "root"; // Имя пользователя базы данных
$password = ""; // Пароль пользователя базы данных
$dbname = "volunteers"; // Имя базы данных

//_________________СОЗДАНИЕ_ПОДКЛЮЧЕНИЯ_____________________________

try {
    // Подключение к базе данных
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // Устанавливаем атрибут сообщений об ошибках (выбрасывать исключения)
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // Устанавливаем корректную кодировку
    $conn->exec("set names utf8");
    // echo "подключение успешно";
} catch (PDOException $e) {
    // Если есть ошибка соединения, выводим её
    echo "Ошибка!: " . $e->getMessage() . "<br/>";
}



//-----------------------------------------------------------------------------------------------
// // Create database
// $sql = "CREATE DATABASE myDB";
// if ($conn->query($sql) === TRUE) {
//   echo "Database created successfully";
// } else {
//   echo "Error creating database: " . $conn->error;
// }


// // sql to create table
// $sql = "CREATE TABLE MyGuests (
//     id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//     firstname VARCHAR(30) NOT NULL,
//     lastname VARCHAR(30) NOT NULL,
//     email VARCHAR(50),
//     reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
//     )";

?>