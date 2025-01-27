<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale1.0">
    <meta http-equiv="X-UA-Compatible" conten="ie=edge">
    <title>Форма регистрации</title>
    <style>
      form{
        width:500px;
      }
    </style>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-4">
      <?php
      if($_COOKIE['user'] =='');
       ?>
      <div class="row">
        <div class="col">
          <h1>Форма регистрации</h1>
          <form action="/check.php" method="post">
            <input type="text" class="form-control" name="login"
            id="login" placeholder="Введите логин"><br>
            <input type="text" class="form-control" name="email"
            id="email" placeholder="Введите почту"><br>
            <input type="text" class="form-control" name="pass"
            id="pass" placeholder="Введите пароль"><br>
            <button class="btn btn-success" type="submit">Зарегистрировать</button>
          </form>
        </div>
        <div class="col">
          <h1>Форма авторизации</h1>
          <form action="/auth.php" method="post">
            <input type="text" class="form-control" name="login"
            id="login" placeholder="Введите логин"><br>
            <input type="text" class="form-control" name="pass"
            id="pass" placeholder="Введите пароль"><br>
            <button class="btn btn-success" type="submit">Войти</button>
          </form>
        </div>
      </div>
    </div>
</body>
</html>
