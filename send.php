

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- Css -->
    <link href="css/style.css" rel="stylesheet"> 
    <link href="css/gost.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">    
    <!-- Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
</head>
<body>
    <!-- Header -->
    <header>
    <div class="head-anim">
            <nav>
                <ul>
                    <li style="list-style-type: none;">
                        <a href="index.php"><img src="png/Logo.png" width="90px" class="img-head"/></a>
                        <a href="index.php#project" class="head1">Проекты</a>
                        <a href="index.php#uslugi" class="head2">Услуги</a>
                        <a href="index.php#about" class="head3">О студии</a>
                        <a href="index.php#contact" class="head4">Контакты</a>
                    </li>
                </ul>
            </nav>
        </div>
        <center>
        <?php
            if (isset($_POST['personal'])) {
                require_once('db.php');

                $name = $_POST['name'];
                $phone = $_POST['phone'];
                $email = $_POST['email'];

                $sql = "INSERT INTO `users` (name, tel, email) VALUES ('$name', '$phone', '$email')";

                $conn->query($sql);

                echo "<h1>Спасибо за обращения, Данные успешно отправленны</h1>";
                echo '<p>Можете вернутся на <a href="index.php">Главную</a></p>';

            } else {
                echo "<h1>Данные не отправлены!</h1>";
                echo "<h1>Нажмите на галочку!</h1>";
            }

        ?>
        </center>
    <br>
    <br>
    <!-- footer -->
    <footer>
            <figure style="display: flex;">
                <div class="end">
                    <p>© 2024. Все права защищены</p>
                </div>
                <div class="end0">
                    <a href="#">Политика конфиденциальности</a>
                </div>
                <div class="end1">
                    <a href="#">Разработка сайта</a>
                </div>
            </figure>
        </footer>
</body>

<!-- JS -->
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="js/etc.js"></script>
</html>