<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- CSS -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">    
    <!-- Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
</head>

<!-- Body -->
<body>
    <!-- header -->
    <header>
        <div class="head-anim">
            <nav>
                <ul>
                    <li style="list-style-type: none;">
                        <a href="index.php"><img src="png/Logo.png" class="img-head"/></a>
                        <a href="#project" class="head1">Проекты</a>
                        <a href="#uslugi" class="head2">Услуги</a>
                        <a href="#about" class="head3">О студии</a>
                        <a href="#contact" class="head4">Контакты</a>
                        <a href="#" class="head5" id="open_pop_up">Обсудить проект</a>
                    </li>
                </ul>
            </nav>
        </div>

        <form action="send.php" method="post">
            <div class="pop_up" id="pop_up">
                <div class="pop_up_container">
                    <div class="pop_up_body" id="pop_up_body">
                        <h1 >ПОЛУЧИТЕ БЕСПЛАТНУЮ<br> КОНСУЛЬТАЦИЮ ПЕРЕД<br> НАЧАЛОМ ПРОЕКТА</h1>
                        <p>Ответим на все интересующие вас вопросы простым языком,<br> поможем подобрать оптимальное решение ваших задач<br> и расскажем подробнее о работе нашей студии.</p>
                                <div class="group">      
                                    <input type="text" name="name" required>
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
                                    <input type="email" id="email" name="email" size="30" required>
                                    <span class="highlight"></span>
                                    <span class="bar"></span>
                                    <label>Ваш email</label>
                                </div>
                        
                                <div class="check"> 
                                    <figure style="display: flex;">
                                        <input type="checkbox" name="personal"><p>Я соглашаюсь с</p><a href="#">политикой конфиденциальности</a>
                                    </figure>
                                </div>

                                <div class="container">
                                    <button type="submit" name="submit">Отправить</button>
                                </div>
                            </form>
                            <!-- Close -->
                            <div class="pop_up_close" id="pop_up_close">&#10006</div>
                        </div>
                    </div>
                </div>
            </form>

        <!-- Что входи? -->
        <div class="pop_pu" id="pop_pu">
            <div class="pop_pu_container">
                <div class="pop_pu_body" id="pop_pu_body">
                    <h1>КОНСУЛЬТАЦИЯ ДИЗАЙНЕРА</h1>
                    <p>Вы можете получить консультацию по улучшению своего интерьера без заказа дизайн-проекта.</p>
                    <ul>
                        <li>Выезд дизайнера на объект;</li>
                        <li>Дистанционная консультация;</li>
                        <li>Консультация в студии.</li>
                    </ul>
                    <!-- Close -->
                    <div class="pop_pu_close" id="pop_pu_close">&#10006</div>
                </div>
            </div>
        </div>

    </header>
    <div class="slide">
        <h1 class="slide" style="">
            ПРОЕКТЫ ЖИЛЫХ <br>И КОММЕРЧЕСКИХ ПРОСТРАНСТВ
        </h1>
    </div>
    <!-- Text -->
     <ul>
        <li style="list-style-type: none;">
            <figure style="display: flex;">
                <p class="down-head">
                    От идеи до реализации
                </p>
            </figure>
        </li>
     </ul>

     <!-- project -->
    <section id="project">
        <div class="img1">
            <!-- Img -->
            <a href="gostlest.php"><img src="png/disain1.png" alt="дизайн1"  width="60%" loading="lazy"/></a>
            <h5>Гостиные с лестницей</h5>
        </div>
    
        <div class="img2">
            <!-- Img2 -->
            <a href="gostsvet.php"><img src="png/disain2.png" alt="дизайн2"  class="img2" width="60%" loading="lazy"/></a>
            <h5>Гостиная со вторым светом</h5> 
        </div>
    
        <figure class="half" style="display: flex;">
            <!-- IMG3 -->
            <div class="img3">
                <a href="betd1.php"><img src="png/disain3.png" class="img3" alt="Лучший дизайн" loading="lazy"></a>
                <h5>Лучший дизайн</h5>
             </div>
         
             <div class="img4">
                <!-- IMG4 -->
                <a href="lest.php"><img src="png/disain4.png" class="img4" loading="lazy"></a>
                <h5>лестница Укладка шейкера</h5>
             </div>
        </section>

        <div class="img5">
            <a href="disth.php"><img src="png/disain5.png" class="img5" alt="Дизайн проект интерьера таунхауса" loading="lazy"></a>
            <h5>Дизайн проект интерьера таунхауса</h5>
        </div>

        <figure style="display: flex;">
            <div class="img6">
                <a href="rbh.php"><img src="png/disain6.png" class="img6" alt="Роскошное Большое Фойе Для Вашего Элегантного Дома" loading="lazy"></a>
                <h5>Роскошное Большое Фойе Для Вашего Элегантного Дома</h5>
            </div>
            <div class="img7">
                <a href="ph.php"><img src="png/disain7.png" class="img7" alt="Пентхаус на Уоппинг-лейн от Эймоса и Amos" loading="lazy"></a>
                <h5>Пентхаус на Уоппинг-лейн от Эймоса и Amos</h5>
            </div>
        </figure>

        <div class="img8">
            <a href="dpt.php"><img src="png/disain8.png" class="img8" alt="Дизайн проект интерьера таунхауса" loading="lazy"></a>
            <h5>Дизайн проект интерьера таунхауса</h5>
        </div>

        <div class="img9">
            <a href="dpo.php"><img src="png/disain9.png" class="img9" alt="Дизайн проект внутренней отделки дома" loading="lazy"></a>
            <h5>Дизайн проект внутренней отделки дома</h5>
        </div>
    </section>

    <section id="uslugi">
        <div class="uslugi">
            <h1>ПРЕДОСТАВЛЯЕМ ПОЛНЫЙ СПЕКТР УСЛУГ <br> ДЛЯ ЖИЛЫХ И КОММЕРЧЕСКИХ ПОМЕЩЕНИЙ</h1>
        </div>

        <!-- Услуги -->
        <div class="uslugi2">
            <h1>РАЗРАБОТКА ДИЗАЙН-ПРОЕКТА</h1>
            <p>В ходе разработки дизайн-проекта создается концептуальное решение<br> интерьера и проектируется полный комплект чертежей, необходимых<br> 
                для выполнения работ строительными бригадами.</p>
        </div>

        <div class="btn_usl1">
            <a href="" class="btn-usl1" id="open_pop_pu"><p class="btn-usl1">Что входит?</p></a>
        </div>

        <figure style="display: flex;">
            <div class="usl1">
                <h1>КОНСУЛЬТАЦИЯ<br>ДИЗАЙНЕРА</h1>
                <p>Вы можете получить консультацию<br> по улучшению своего интерьера без<br> заказа дизайн-проекта.</p>
            </div>

            <div class="usl2">
                <h1>СОПРОВОЖДЕНИЕ<br>ПРОЕКТА</h1>
                <p>В сопровождение проекта входит<br>
                     помощь в подборе материалов<br>
                      и мебели, комплектация дизайн-проекта,<br>
                       а также контроль соответствия<br>
                        проводимых отделочных работ<br>
                         утвержденному дизайн-проекту.</p>

            </div>
                
        </figure>
    </section>

    <!-- About -->
    <section id="about">
        <h1 class="abouth">ВОПЛОЩАЕМ ВАШИ<br> МЕЧТЫ В ЖИЗНЬ</h1>
        
        <figure style="display: flex;">
            <div class="aboutp1">
                <p>За время работы на рынке дизайна интерьеров<br> мы приняли участие в проектах, за которыми<br>
                     стоят разные люди и их истории. Именно эти<br> истории и встречи побуждали нас каждый день<br>
                     с вдохновением садиться за работу над<br>
                    проектом и создавать новые пространства.</p>
            </div>
            <div class="aboutp2">
                <p>Мы стараемся сделать так, чтобы совместная<br> работа проходила в дружеской атмосфере,<br>
                     всегда сможем посоветовать, выслушать<br> и развеять сомнения.</p>
            </div>
        </figure>
        <div class="image">
            <img src="png/about.png" alt="rectangle" height="650px">
        </div>
        <figure style="display: flex;">
            <div class="aboutp3">
                <p>
                    Полученные нами знания, а также<br> их использование в проектах позволили<br>
                     выработать индивидуальный стиль. Мы уважаем<br> классику и в своей работе соединяем<br>
                      ее с современными трендами.</p>
            </div>
            <div class="aboutp4">
                <p>Сейчас нам удалось достичь той точки,<br>
                     в которой мы сознательно выбираем путь вперед<br>
                      и выполняем свою работу с радостью.<br> Предлагаем Вам ознакомиться с нашим<br>
                       предложением.</p>
            </div>
        </figure>
        <div class="aboutp5">
            <p>При работе над каждым проектом, как частных интерьеров, так и коммерческих, мы всегда находим<br>
                 компромисс между ожиданиями заказчика и нашим восприятием пространства. Наш опыт работы<br>
                  помогает спроектировать интерьер так, чтобы он был функциональным и вместительным.</p>
        </div>
    </section>

    <!-- footer -->
    <section id="contact">
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
    </section>
     
</body>

<!-- JS -->
<script src="js/style.js"></script>
</html>