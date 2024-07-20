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
                        <a href="#" class="head5" id="open_pop_up">Обсудить проект</a>
                    </li>
                </ul>
            </nav>
        </div>

        <div class="pop_up" id="pop_up">
            <div class="pop_up_container">
                <div class="pop_up_body" id="pop_up_body">
                    <h1>ПОЛУЧИТЕ БЕСПЛАТНУЮ<br> КОНСУЛЬТАЦИЮ ПЕРЕД<br> НАЧАЛОМ ПРОЕКТА</h1>
                    <p>Ответим на все интересующие вас вопросы простым языком,<br> поможем подобрать оптимальное решение ваших задач<br> и расскажем подробнее о работе нашей студии.</p>
                    <form action="send">
                        <div class="group">      
                            <input type="text"required>
                            <span class="highlight"></span>
                            <span class="bar"></span>
                            <label>Как вас зовут?</label>
                        </div>
                        <div class="group">      
                            <input type="tel" id="phone" name="phone" data-phone-pattern required>
                            <span class="highlight"></span>
                            <span class="bar"></span>
                            <label>Ваш телефон</label>
                        </div>
                        <div class="group">      
                            <input type="email" id="email" pattern=".+@example\.com" size="30" required>
                            <span class="highlight"></span>
                            <span class="bar"></span>
                            <label>Ваш email</label>
                        </div>
                        
                        <div class="check"> 
                            <figure style="display: flex;">
                                <input type="checkbox" name="personal"><p>Я соглашаюсь с</p>  <a href="#">политикой конфиденциальности</a>
                            </figure>
                        </div>

                        <div class="container">
                            <button>Отправить</button>
                        </div>
                    </form>
                    <!-- Close -->
                    <div class="pop_up_close" id="pop_up_close">&#10006</div>
                </div>
            </div>
        </div>
    </header>

    <figure style="display: flex;">
        <div class="text">
            <h1>Роскошное Большое Фойе Для Вашего Элегантного Дома</h1>
            <p>Команда Syneation</p>
            <form action="index.php">
                <button>Заказать</button>
            </form>
        </div>
        <div class="img1" >
            <img src="png/disain6.png" data-enlargeable style="cursor: zoom-in" alt="disain1" width="1100px">
            <img src="png/disain6(1).png" data-enlargeable style="cursor: zoom-in" alt="disain2" width="1100px">
            <img src="png/disain6(2).png" data-enlargeable style="cursor: zoom-in" alt="disain3" width="1100px">
        </div>


    </figure>

    <!-- footer -->
    <footer>
            <figure style="display: flex;">
                <div class="fot">
                    <p>Нужна консультация, дизайн-проект или есть<br> предложение — оставьте заявку.</p>
                </div>
                <div class="mail">
                    <a href="mailto:mail@example.com">mail@example.com</a>
                    <br>
                    <a href="tel:+79999999999">+7 999 999 99 99</a>
                </div>
            </figure>
            
            <form action="send1.php" method="post">
                <figure style="display: flex;">
                    <div class="group" style="margin-left: 30px;">      
                        <input type="tel" id="phone" name="phone" data-phone-pattern required>
                        <span class="highlight"></span>
                        <span class="bar"></span>
                        <label>Ваш телефон</label>
                    </div>
                    <div class="check1" style="margin-left: 30px;"> 
                        <figure style="display: flex;">
                            <input type="checkbox" name="personal" style="margin-bottom: 30px;transform: scale(2);"><p style="margin-top: 30px;">Я соглашаюсь с  </p>
                            <a href="#" style="margin-top: 30px;">политикой конфиденциальности</a>
                        </figure>
                    </div>
                    <div class="container2">
                        <button type="submit" name="submit">Отправить</button>
                    </div>
    
                    <div class="con">
                        <a href="#">VK</a>
                        <a href="#">TG</a>
                        <a href="#">WA</a>
                    </div>
                </figure>
            </form>

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