<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Восстановление пароля</title>
    <link rel="stylesheet" href="../../css/normalize.css">
    <link rel="stylesheet" href="../../css/form.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>
  <div class="container">
    <div id="logbox">
      <form id="recoveryForm" action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="POST">
        <h1>Восстановление пароля</h1>
        <input name="email" type="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" placeholder="Email" class="input pass" required>
        <input type="submit" value="Восстановить пароль" class="inputButton">
        <a href="login.php" class="restore-pass" role="button">Вернуться назад</a>
      </form>
    </div>
  </div>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Подключение к базе данных
  require '../db.php';

  // Получение данных из POST-запроса
  $email = $_POST['email'];

  function generateRandomPassword() {
    // Генерируем случайный пароль
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $randomPassword = '';
    for ($i = 0; $i < 8; $i++) {
        $randomPassword .= $characters[rand(0, strlen($characters) - 1)];
    }
    return $randomPassword;
  }

  try {
      // Выполнение запроса к базе данных для получения записи с указанным email
      $stmt = $conn->prepare("SELECT * FROM admins WHERE email = :email");
      $stmt->bindParam(':email', $email);
      $stmt->execute();
      $row = $stmt->fetch(PDO::FETCH_ASSOC);

      //если введенный email существует
      if ($row) {
          // Генерация нового пароля
          $newPassword = generateRandomPassword();
          // Обновление пароля в базе данных для указанного email
          try {
            // Хешируем новый пароль
              $hashedPassword = password_hash($newPassword, PASSWORD_DEFAULT);

              // Создаем SQL запрос
              $sql = "UPDATE admins SET password = :password WHERE email = :email";

              // Подготавливаем запрос
              $stmt = $conn->prepare($sql);
              $stmt->bindParam(':password', $hashedPassword);
              $stmt->bindParam(':email', $email);

              // Выполняем запрос
              $stmt->execute();

              // Отправка нового пароля на указанный email
              $subject = "Восстановление пароля";
              $message = "Ваш новый пароль: " . $newPassword;
              $headers = "From: ksushazamaraeva@gmail.com";
              
              if (mail($email, $subject, $message, $headers)) {
                  echo '<script>alert("Пароль успешно восстановлен и отправлен на указанный email")</script>';
              } else {
                  echo '<script>alert("Не удалось отправить пароль на указанный email")</script>';
              }
          } catch(PDOException $e) {
              echo '<script>alert("Ошибка при обновлении пароля в базе данных")</script>';
          }

      } else {
        echo '<script>alert("Указанный email не существует в базе данных")</script>';
      }

  } catch (PDOException $e) {
      echo '<script>alert("Что-то пошло не так...")</script>';
      die("Ошибка подключения к базе данных: " . $e->getMessage());
  }
}
?>
</body>

</html>