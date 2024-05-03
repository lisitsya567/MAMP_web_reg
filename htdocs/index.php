<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA=Compatible" content="ie-edge">
    <title>Форма регестрации</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
    <div class="container mt-4">

        <?php
            if($_COOKIE['user'] == ''):
        ?>

        <div class="row">
            <div class="col">
                    <h1>Регестрация аккаунта</h1>
                    <form action="validation-form/check.php" method="post">
                    <input type="text" class="form-control" name="login" id="login" placeholder="Логин"><br>
                    <input type="text" class="form-control" name="name" id="name" placeholder="Имя"><br>
                    <input type="password" class="form-control" name="pass" id="pass" placeholder="Пароль"><br> 
                    <button class="btn btn-success" type="submit">Зарегестрироваться</button> 
                </form>
            </div>

            <div class="col">
                    <h1>Вход в аккаунт</h1>
                    <form action="validation-form/auth.php" method="post">
                    <input type="text" class="form-control" name="login" id="login" placeholder="Логин"><br>
                    <input type="password" class="form-control" name="pass" id="pass" placeholder="Паспорт"><br> 
                    <button class="btn btn-success" type="submit">Войти</button> 
                </form>
            </div>
        </div>

        <?php else: ?>
            <p>Hi <?=$_COOKIE['user']?>. 4tobi viyti najmite <a href="exit.php">zdes</a>.</p>
        <?php endif;?>

    </div>
</body>
</html>