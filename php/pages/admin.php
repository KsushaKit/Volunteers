<!-- Получение данных (заявок) -->
<?php 
    include "../applicationGetData.php";
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Панель администратора</title>
    <link rel="stylesheet" href="../../css/normalize.css">
    <link rel="stylesheet" href="../../css/admin.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Выгрузка данных -->
    <script>
        
        $(document).ready(function() {
            $('.exportButton').click(function() {
                window.location.href = '../exportAllApplications.php';
            });
        });
        $(document).ready(function() {
            $('.exportButton1').click(function() {
                window.location.href = '../exportApplications1.php';
            });
        });
        $(document).ready(function() {
            $('.exportButton2').click(function() {
                window.location.href = '../exportApplications2.php';
            });
        });
        $(document).ready(function() {
            $('.exportButton3').click(function() {
                window.location.href = '../exportApplications3.php';
            });
        });
        $(document).ready(function() {
            $('.exportButton4').click(function() {
                window.location.href = '../exportApplications4.php';
            });
        });

        $(document).ready(function() {
            $('input[name="status"]').change(function() {

                var id = $(this).data('id');
                var date = $(this).data('date');
                var status = $(this).val()

                $.ajax({
                    url: '../updateApplications.php',
                    method: 'POST',
                    data: { id: id, date: date, status: status },
                    success: function(response) {
                        console.log(response);
                        // Дополнительные действия после обновления записи в базе данных
                    },
                    error: function(xhr, status, error) {
                        console.log(error);
                    }
                });

            });
        });
        
    </script>
    
</head>
<body>

        <div class="panel">
            <h1>Панель администратора</h1>

            <!-- Вкладки -->
            <div class="panel-buttons">
                <button class="panel-button" onclick="openTab('all')">Все заявки</button>
                <button class="panel-button" onclick="openTab('type1')">Адресная</button>
                <button class="panel-button" onclick="openTab('type2')">Гуманитарная</button>
                <button class="panel-button" onclick="openTab('type3')">Психологическая</button>
                <button class="panel-button" onclick="openTab('type4')">Выполненные</button>
            </div>
        </div>

    <div class="content-wrapper">

        <!-- Все заявки -->
        <div id="all" class="tab">

            <?php
                if ($result): 
            ?> 
                <div class="button-export-wrapper">
                    <button class="exportButton">Выгрузить в exel</button>
                </div>
            
                <table>
                    <tr>
                        <th>Имя</th>
                        <th>Фамилия</th>
                        <th>Номер телефона</th>
                        <th>Тип заявки</th>
                        <th>Комментарий</th>
                        <th>Дата</th>
                        <th>Статус</th>
                    </tr>
                    <?php foreach ($result as $row): ?>
                        <tr>
                            <td><?php echo $row['name']; ?></td>
                            <td><?php echo $row['surname']; ?></td>
                            <td><?php echo $row['phone']; ?></td>
                            <td><?php echo $row['type_of_assistance']; ?></td>
                            <td><?php echo $row['comment']; ?></td>
                            <td><?php echo $row['date']; ?></td>
                            <td>
                                <!-- Чекбокс статуса заявки -->
                                <input type="checkbox" name="status" value="1" data-id="<?php echo $row['application_id']; ?>" >
                            </td>
                        </tr>
                    <?php endforeach; ?> 
                </table>

            <?php else: ?>
                <p>Нет данных для отображения</p>
            <?php endif; ?>
        </div>

        <!-- Заявки типа 1 -->
        <div id="type1" class="tab">

            <?php
                if ($resultAddress): 
            ?> 
                <div class="button-export-wrapper">
                    <button class="exportButton1">Выгрузить в exel</button>
                </div>

                <table>
                    <tr>
                        <th>Имя</th>
                        <th>Фамилия</th>
                        <th>Номер телефона</th>
                        <th>Тип заявки</th>
                        <th>Комментарий</th>
                        <th>Дата</th>
                        <th>Статус</th>
                    </tr>
                    <?php foreach ($resultAddress as $row): ?>
                        <tr>
                            <td><?php echo $row['name']; ?></td>
                            <td><?php echo $row['surname']; ?></td>
                            <td><?php echo $row['phone']; ?></td>
                            <td><?php echo $row['type_of_assistance']; ?></td>
                            <td><?php echo $row['comment']; ?></td>
                            <td><?php echo $row['date']; ?></td>
                            <td>
                                <!-- Чекбокс статуса заявки -->
                                <input type="checkbox" name="status" value="1" data-id="<?php echo $row['application_id']; ?>" >
                            </td>
                        </tr>
                    <?php endforeach; ?> 
                </table>

            <?php else: ?>
                <p>Нет данных для отображения</p>
            <?php endif; ?>
        </div>

        <!-- Заявки типа 2 -->
        <div id="type2" class="tab">

            <?php
                if ($resultHumanitarian): 
            ?> 
                <div class="button-export-wrapper">
                    <button class="exportButton2">Выгрузить в exel</button>
                </div>

                <table>
                    <tr>
                        <th>Имя</th>
                        <th>Фамилия</th>
                        <th>Номер телефона</th>
                        <th>Тип заявки</th>
                        <th>Комментарий</th>
                        <th>Дата</th>
                        <th>Статус</th>
                    </tr>
                    <?php foreach ($resultHumanitarian as $row): ?>
                        <tr>
                            <td><?php echo $row['name']; ?></td>
                            <td><?php echo $row['surname']; ?></td>
                            <td><?php echo $row['phone']; ?></td>
                            <td><?php echo $row['type_of_assistance']; ?></td>
                            <td><?php echo $row['comment']; ?></td>
                            <td><?php echo $row['date']; ?></td>
                            <td>
                                <!-- Чекбокс статуса заявки -->
                                <input type="checkbox" name="status" value="1" data-id="<?php echo $row['application_id']; ?>" >
                            </td>
                        </tr>
                    <?php endforeach; ?> 
                </table>

            <?php else: ?>
                <p>Нет данных для отображения</p>
            <?php endif; ?>
        </div>

        <!-- Заявки типа 3 -->
        <div id="type3" class="tab">

            <?php
                if ($resultPsychological): 
            ?> 
                <div class="button-export-wrapper">
                    <button class="exportButton3">Выгрузить в exel</button>
                </div>

                <table>
                    <tr>
                        <th>Имя</th>
                        <th>Фамилия</th>
                        <th>Номер телефона</th>
                        <th>Тип заявки</th>
                        <th>Комментарий</th>
                        <th>Дата</th>
                        <th>Статус</th>
                    </tr>
                    <?php foreach ($resultPsychological as $row): ?>
                        <tr>
                            <td><?php echo $row['name']; ?></td>
                            <td><?php echo $row['surname']; ?></td>
                            <td><?php echo $row['phone']; ?></td>
                            <td><?php echo $row['type_of_assistance']; ?></td>
                            <td><?php echo $row['comment']; ?></td>
                            <td><?php echo $row['date']; ?></td>
                            <td>
                                <!-- Чекбокс статуса заявки -->
                                <input type="checkbox" name="status" value="1" data-id="<?php echo $row['application_id']; ?>" >
                            </td>
                        </tr>
                    <?php endforeach; ?> 
                </table>

            <?php else: ?>
                <p>Нет данных для отображения</p>
            <?php endif; ?>
        </div>

         <!-- Заявки типа 4 -->
         <div id="type4" class="tab">

        <?php
            if ($resultAllDone): 
        ?> 
            <div class="button-export-wrapper">
                <button class="exportButton4">Выгрузить в exel</button>
            </div>

            <table>
                <tr>
                    <th>Имя</th>
                    <th>Фамилия</th>
                    <th>Номер телефона</th>
                    <th>Тип заявки</th>
                    <th>Комментарий</th>
                    <th>Дата</th>
                    <th>Статус</th>
                </tr>
                <?php foreach ($resultAllDone as $row): ?>
                    <tr>
                        <td><?php echo $row['name']; ?></td>
                        <td><?php echo $row['surname']; ?></td>
                        <td><?php echo $row['phone']; ?></td>
                        <td><?php echo $row['type_of_assistance']; ?></td>
                        <td><?php echo $row['comment']; ?></td>
                        <td><?php echo $row['date']; ?></td>
                        <td>
                            <!-- Чекбокс статуса заявки -->
                            <input type="checkbox" name="status" value="0" data-id="<?php echo $row['application_id']; ?>" checked >
                        </td>
                    </tr>
                <?php endforeach; ?> 
            </table>

        <?php else: ?>
            <p>Нет данных для отображения</p>
        <?php endif; ?>
        </div>


    </div>

<script src="../../js/admin.js"></script>
</body>

</html>