<?php
// Подключение к базе данных
require 'db.php';

//get all data
try {
    $str = $conn->prepare("SELECT * FROM applications");
    $str->execute();
    $result = $str->fetchAll();
} catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}

//get Address application
try {
    $stmt = $conn->prepare("SELECT * FROM applications WHERE type_of_assistance LIKE 'Адресная'");
    $stmt->execute();
    $resultAddress = $stmt->fetchAll();
} catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}

//get Humanitarian application
try {
    $str = $conn->prepare("SELECT * FROM applications WHERE type_of_assistance LIKE 'Гуманитарная'");
    $str->execute();
    $resultHumanitarian = $str->fetchAll();
} catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}

//get Psychological  application
try {
    $str = $conn->prepare("SELECT * FROM applications WHERE type_of_assistance LIKE 'Психологическая'");
    $str->execute();
    $resultPsychological = $str->fetchAll();
} catch(PDOException $e) { 
    echo "Error: " . $e->getMessage();
}

$conn = null;
?>