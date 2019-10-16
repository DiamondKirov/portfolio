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
    
    <script src="http://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="js/portfolio.js"></script>
    <script src="js/scroll.js"></script>
    <script src="js/menu.js"></script>
    <title>Document</title>
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
        
        <article class="top-info">
            <div class="container">
                <div class="top-info__information row align-items-center ">
                <div class="col-lg-7">
                    <h1>Пупков Артем</h1>
                    <p>Мое личное портфолио</p>
                </div>
                <div class="col-lg-5 top-info__img">
                     <img src="img/code.gif" alt="">
                </div>
            </div>
        </article>

        <article class="about-me">
            <div class="container">
                <div class="about-me__wrapper row">
                    <h1>Обо мне</h1>
                    <div class="w-100"></div>
                    <div class="col-lg-6 about-me__photo">
                        <img src="img/me.jpg" alt="">
                    </div>
                    <div class="col-lg-6 about-me__info">
                      
                        <p>Доброго времени суток, дорогой гость!</p>
                        <p>Меня зовут Пупков Артем, мне 21 год. Долго время я активно занимаюсь Fronted разработкой. Я приуспел в познании технологий: HTML, CSS, JavaScript, 
                            библиотекой JQuery. С помощью инструмента Gulp придаю адаптивность сайту, а также работаю с модулем Sass. С недавнего времени узучаю Backend разработку.
                        </p>
                        <p>Я полон энергии и энтузиазма, очень сильно мотивирован и настроен на работу!!!</p>
                    </div>
                    
                </div>
            </div>
        </article>

        <article class="portfolio">
            <div class="container">
            <h1>Мое портфолио</h1>
                <div class="portfolio__items d-flex justify-content-around flex-wrap">
                    <a href="#" class="portfolio__item">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        <img src="img/port1.jpg" alt="">
                    </a>
                    <a href="#" class="portfolio__item">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        <img src="img/port2.jpg" alt="">
                    </a>
                    <a href="#" class="portfolio__item">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>   
                        <img src="img/port3.jpg" alt="">
                    </a>
                    <a href="#" class="portfolio__item">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        <img src="img/port4.jpg" alt="">
                    </a>
                </div>
            </div>
        </article>

        <article class="skill">
            <div class="container">
               
                <div class="row skill__wrapper">
                    <h1>В своих работах использую</h1>
                    <div class="col-md-3 skill__item">
                        <img src="img/html.svg" alt="">
                    </div>
                    <div class="col-md-3 skill__item">
                        <img src="img/css.svg" alt="">
                    </div>
                    <div class="col-md-3 skill__item">
                        <img src="img/js.svg" alt="">
                    </div>
                    <div class="col-md-3 skill__item">
                        <img src="img/jquery.svg" alt="">
                    </div>
                    <div class="col-md-3 skill__item">
                        <img src="img/boodstrap.svg" alt="">
                    </div>
                    <div class="col-md-3 skill__item">
                        <img src="img/wordpress.svg" alt="">
                    </div>                 
                    <div class="col-md-3 skill__item">
                        <img src="img/sass.png" alt="">
                    </div>
                    <div class="col-md-3 skill__item">
                        <img src="img/gulp.png" alt="">
                    </div>
                    <div class="col-md-4 skill__item">
                        <img src="img/php.png" alt="">
                    </div>
                    <div class="col-md-4 skill__item">
                        <img src="img/git.png" alt="">
                    </div>
                    <div class="col-md-4 skill__item">
                        <img src="img/ajax.png" alt="">
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
                    Copyright &copy; 2019- <?php echo date("Y")?>. All rights reserved. 
                </div>
            </div>
        </div>
    </footer>

</body>
</html>