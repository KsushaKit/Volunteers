<?php
// Подключение к базе данных
require 'db.php';

// Подключение библиотеки PhpSpreadsheet
require '../vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\IOFactory;

try {
    // Создание нового экземпляра класса Spreadsheet
    $spreadsheet = new Spreadsheet();

    // Выполнение SQL-запроса и получение данных из базы данных
    $sql = "SELECT * FROM applications WHERE type_of_assistance LIKE 'Адресная'";
    $stmt = $conn->query($sql);
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Заполнение данных в файле Excel
    $spreadsheet->getActiveSheet()->fromArray($result, null, 'A1');

    // Установка заголовков столбцов
    $spreadsheet->getActiveSheet()->getColumnDimension('A')->setAutoSize(true);
    $spreadsheet->getActiveSheet()->getColumnDimension('B')->setAutoSize(true);
    $spreadsheet->getActiveSheet()->getColumnDimension('C')->setAutoSize(true);

    // Создание объекта для записи в файл Excel
    $writer = IOFactory::createWriter($spreadsheet, 'Xlsx');

    // Установка заголовков для выгрузки файла
    header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
    header('Content-Disposition: attachment;filename="заявки.xlsx"');
    header('Cache-Control: max-age=0');

    // Запись данных в файл Excel
    $writer->save('php://output');
} catch(PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}
?>