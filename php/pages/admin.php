<?php 
    include "../applicationGetData.php";
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Панель администратора</title>
    <link rel="stylesheet" href="../../css/admin.css">
</head>
<body>
    <h1>Панель администратора</h1>

    <!-- Вкладки -->
    <button onclick="openTab('all')">Все заявки</button>
    <button onclick="openTab('type1')">Адресная</button>
    <button onclick="openTab('type2')">Гуманитарная</button>
    <button onclick="openTab('type3')">Психологическая</button>
    <br><br>

   <!-- Все заявки -->
    <div id="all" class="tab">
        <button onclick="exportAllToExcel()">Выгрузить в exel</button>
        <h2>Все заявки</h2>
        <?php
            if ($result): 
        ?> 
            
            <table>
                <tr>
                    <th>Имя</th>
                    <th>Фамилия</th>
                    <th>Номер телефона</th>
                    <th>Тип заявки</th>
                    <th>Комментарий</th>
                </tr>
                <?php foreach ($result as $row): ?>
                    <tr>
                        <td><?php echo $row['name']; ?></td>
                        <td><?php echo $row['surname']; ?></td>
                        <td><?php echo $row['phone']; ?></td>
                        <td><?php echo $row['type_of_assistance']; ?></td>
                        <td><?php echo $row['comment']; ?></td>
                    </tr>
                <?php endforeach; ?> 
            </table>

        <?php else: ?>
            <p>Нет данных для отображения</p>
        <?php endif; ?>
    </div>
 
    <!-- Заявки типа 1 -->
    <div id="type1" class="tab">
        <h2>Адресная</h2>
        <?php
            if ($result): 
        ?> 
            
            <table>
                <tr>
                    <th>Имя</th>
                    <th>Фамилия</th>
                    <th>Номер телефона</th>
                    <th>Тип заявки</th>
                    <th>Комментарий</th>
                </tr>
                <?php foreach ($resultAddress as $row): ?>
                    <tr>
                        <td><?php echo $row['name']; ?></td>
                        <td><?php echo $row['surname']; ?></td>
                        <td><?php echo $row['phone']; ?></td>
                        <td><?php echo $row['type_of_assistance']; ?></td>
                        <td><?php echo $row['comment']; ?></td>
                    </tr>
                <?php endforeach; ?> 
            </table>

        <?php else: ?>
            <p>Нет данных для отображения</p>
        <?php endif; ?>
    </div>

    <!-- Заявки типа 2 -->
    <div id="type2" class="tab">
        <h2>Гуманитарная</h2>
        <?php
            if ($result): 
        ?> 
            
            <table>
                <tr>
                    <th>Имя</th>
                    <th>Фамилия</th>
                    <th>Номер телефона</th>
                    <th>Тип заявки</th>
                    <th>Комментарий</th>
                </tr>
                <?php foreach ($resultHumanitarian as $row): ?>
                    <tr>
                        <td><?php echo $row['name']; ?></td>
                        <td><?php echo $row['surname']; ?></td>
                        <td><?php echo $row['phone']; ?></td>
                        <td><?php echo $row['type_of_assistance']; ?></td>
                        <td><?php echo $row['comment']; ?></td>
                    </tr>
                <?php endforeach; ?> 
            </table>

        <?php else: ?>
            <p>Нет данных для отображения</p>
        <?php endif; ?>
    </div>

    <!-- Заявки типа 3 -->
    <div id="type3" class="tab">
        <h2>Психологическая</h2>
        <?php
            if ($result): 
        ?> 
            
            <table>
                <tr>
                    <th>Имя</th>
                    <th>Фамилия</th>
                    <th>Номер телефона</th>
                    <th>Тип заявки</th>
                    <th>Комментарий</th>
                </tr>
                <?php foreach ($resultPsychological as $row): ?>
                    <tr>
                        <td><?php echo $row['name']; ?></td>
                        <td><?php echo $row['surname']; ?></td>
                        <td><?php echo $row['phone']; ?></td>
                        <td><?php echo $row['type_of_assistance']; ?></td>
                        <td><?php echo $row['comment']; ?></td>
                    </tr>
                <?php endforeach; ?> 
            </table>

        <?php else: ?>
            <p>Нет данных для отображения</p>
        <?php endif; ?>
    </div>
</body>

<script src="../../js/admin.js"></script>

</html>