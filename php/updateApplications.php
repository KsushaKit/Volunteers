<?php
    // Подключение к базе данных
    require 'db.php';

    try {
        // Получение данных из AJAX-запроса
        $id = $_POST['id'];
        $status = $_POST['status'];
    
        // Обновление записи в базе данных
        $sql = "UPDATE applications SET status = :status WHERE application_id = :id";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':status', $status);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
    
        echo "Запись успешно обновлена";
    } catch(PDOException $e) {
        echo "Ошибка при обновлении записи: " . $e->getMessage();
    }
    
    $conn = null;
?>