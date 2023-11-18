<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Авторизация</title>
    <link rel="stylesheet" href="../../css/normalize.css">
    <link rel="stylesheet" href="../../css/form.css">
</head>

<body>
  <div class="container">
    <div id="logbox">
      <form id="signup" method="post" action="/signup">
        <h1>Вход в панель администратора</h1>
        <!-- <input name="user[name]" type="text" placeholder="What's your username?" pattern="^[\\w]{3,16}$" autofocus required class="input pass"> -->
        <input name="password2" type="password" placeholder="Пароль" required class="input pass">
        <input name="email" type="email" placeholder="Email" class="input pass">
        <input type="submit" value="Войти" class="inputButton">
        <a href="#" class="restore-pass" role="button">Восстановить пароль</a>
      </form>
    </div>
  </div>
</body>

</html>