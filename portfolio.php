<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Fira+Sans:400,700&display=swap" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="css/normolize.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/index-style.css">
    <link href="https://fonts.googleapis.com/css?family=PT+Serif:400,400i,700&display=swap" rel="stylesheet"> 
    <script src="http://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="js/menu.js"></script>
    <script src="js/popup.js"></script>
    <link rel="shortcut icon" href="img/temino.svg" type="image/x-icon">
    <title>Порфтолио Пупкова Артема</title>
</head>
<body>
    <header>
        <div class="container">
            <div class="row align-items-center justify-content-between header">
                <div class="col-md-2">
                    <a href="/"><img class="header__logo" src="img/temino.svg" alt=""></a>
                </div>
                <div class="header__hamburger">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                <div class="col-md-7">
                    <ul class="header__nav d-flex justify-content-around">
                        <li> <a href="/">Главная</a> </li>
                        <li> <a href="portfolio.php">Порфтолио</a> </li>
                        <li> <a href="about.php">Обо мне</a> </li>
                        <li> <a href="contacts.php">Связаться</a></li>
                    </ul>
                </div>
              
            </div>
        </div>
    </header>
    
    <main class="content">
        <article class="portfolio-page">
            <div class="container">
                <div class="portfolio-page__wrapper row">
                    <div class="col-md-6 portfolio-page__img">
                        <img src="img/catenergy.jpg" alt="">
                    </div>
                    <div class="col-md-6">
                        <h1>Cat Energy</h1>
                        <p>Cat Energy - адаптивный кроссбраузерный сайт. </p>
                        <p>Был написан с нуля. Присуствует анимации блоков, изменение "кота" с помощью input range, форма отправки на почту. Сайт полностью адаптирован под любое расширение экрана.</p>
                        <ul>
                            <li>html</li>
                            <li>css - препроцессор (sass)</li>
                            <li>Javascript</li>
                            
                            <li>jquery</li>
                            <li>gulp</li>
                            <li>git</li>
                            
                        </ul>
                        <p>Ссылка - <a href="https://diamondkirov.github.io/cat/">Cat Energy</a></p>
                    </div>
                </div>
            </div>
        </article>
    </main>

    <footer>
        <div class="container">
            <div class="d-flex justify-content-between align-items-center footer__container">
                <a href="/"><img class="footer__logo" src="img/temino.svg" alt=""></a>
                <div class="footer__copyright">
                Copyright &copy; 2019-<?php echo date("Y")?>. All rights reserved. 
                </div>
            </div>
        </div>
    </footer>
    <div class="popup">
        <div class="popup__content">
            
        </div>
        <div class="popup__img">
            <img src="img/catenergy.jpg" alt="">
        </div>
    </div>
</body>
</html>