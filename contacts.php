<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Fira+Sans:400,700&display=swap" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css?family=PT+Serif:400,400i,700&display=swap" rel="stylesheet"> 
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
        <article class="contact-page">
            <div class="container">
                <div class="contact-page__wrapper row">
                    <div class="col-md-6">
                        <h2>Контакты</h2>
                        <p>Свяжитесь со мной любым удобныс для вас способом</p>
                        <p><span>Email:</span> <a href="mailto:diamondkirov@gmail.com">diamondkirov@gmail.com</a> </p>
                        <p><span>Телефон:</span> <a href="tel:+79960458075">+79960458075</a></p>
                    </div>
                    <div class="col-md-6">
                      <form action="" class="contact-page__form">
                            <input type="text" name="name" id="name" placeholder="Имя" required>

                            <input type="text" name="email" id="email" placeholder="Email" required>

                            <input type="text" name="phone" id="phone" placeholder="Телефон" required>

                            <input type="text" name="title" id="title" placeholder="Тема" required>

                            <textarea name="message" id="message" cols="30" rows="10" placeholder="Сообщение" required></textarea>
                            
                            <input id="submit" type="submit" value="Отправить сообщение">
                      </form>
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
</body>
</html>