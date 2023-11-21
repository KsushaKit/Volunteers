<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Добавление пользователя</title>
    <link rel="stylesheet" href="../../css/normalize.css">
    <link rel="stylesheet" href="../../css/form.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>
  <div class="container">
    <div id="logbox">
      <form id="signUpForm">
        <h1>Добавление пользователя</h1>
        <input name="email" type="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" placeholder="Email" class="input pass" required>
        <input name="password" type="password" placeholder="Пароль" required class="input pass" required>
        <input type="submit" value="Войти" class="inputButton">
        <a href="recoveryForm.php" class="restore-pass" role="button">Восстановить пароль</a>
      </form>
    </div>
  </div>
</body>

</html>