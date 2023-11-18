<?php
// Подключение к базе данных
require 'db.php';

//выбираем все не обраюотанные заявки
try {
    $str = $conn->prepare("SELECT * FROM applications WHERE status = 0  ORDER BY date DESC");
    $str->execute();
    $result = $str->fetchAll();
} catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}

//get Address application
try {
    $stmt = $conn->prepare("SELECT * FROM applications WHERE type_of_assistance LIKE 'Адресная' AND status = 0 ORDER BY date DESC");
    $stmt->execute();
    $resultAddress = $stmt->fetchAll();
} catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}

//get Humanitarian application
try {
    $str = $conn->prepare("SELECT * FROM applications WHERE type_of_assistance LIKE 'Гуманитарная' AND status = 0 ORDER BY date DESC");
    $str->execute();
    $resultHumanitarian = $str->fetchAll();
} catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}

//get Psychological  application
try {
    $str = $conn->prepare("SELECT * FROM applications WHERE type_of_assistance LIKE 'Психологическая' AND status = 0 ORDER BY date DESC");
    $str->execute();
    $resultPsychological = $str->fetchAll();
} catch(PDOException $e) { 
    echo "Error: " . $e->getMessage();
}

//только выполненные заявки
try {
    $str = $conn->prepare("SELECT * FROM applications WHERE  status = 1 ORDER BY date DESC");
    $str->execute();
    $resultAllDone = $str->fetchAll();
} catch(PDOException $e) { 
    echo "Error: " . $e->getMessage();
}

$conn = null;
?>