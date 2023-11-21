<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Авторизация</title>
    <link rel="stylesheet" href="../../css/normalize.css">
    <link rel="stylesheet" href="../../css/form.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>
  <div class="container">
    <div id="logbox">
      <form id="loginForm" action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="POST">
        <h1>Вход в панель администратора</h1>
        <input name="email" type="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" placeholder="Email" class="input pass" required>
        <input name="password" type="password" placeholder="Пароль" required class="input pass" required>
        <input type="submit" value="Войти" class="inputButton">
        <a href="recoveryForm.php" class="restore-pass" role="button">Восстановить пароль</a>
      </form>
    </div>
  </div>


  <?php
    //ОТПРАВКА ДАННЫХ ИЗ ФОРМЫ
    // Проверяем, была ли отправлена форма
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      require '../db.php';
      // Получение данных из POST-запроса
      $email = $_POST['email'];
      $password = $_POST['password'];

      try {
        // Выполнение запроса к базе данных для получения записи с указанным email
        $stmt = $conn->prepare("SELECT password FROM admins WHERE email = :email");
        $stmt->bindParam(':email', $email);
        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
              
        if ($row) {

          $hashedPassword = $row['password'];
          // Сравнение введенного пароля с хэшированным паролем из базы данных
          if (password_verify($password, $hashedPassword)) {
            header('Location: admin.php');
            exit();
          } else {
            echo '<script>alert("Неправильный пароль")</script>';
          }
        } else {
          echo '<script>alert("Пользователь с таким email не найден")</script>';
        }

      } catch (PDOException $e) {
        echo '<script>alert("Что-то пошло не так...")</script>';
      }

      $conn = null;
    }
  ?>
</body>

</html>