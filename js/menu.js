$(document).ready(function () {
    $hamburger = $('.header__hamburger');
    $menu = $('.header__nav li');

    $hamburger.bind('click', function(e){
        e.preventDefault();
        console.log('13');
        $menu.toggle('300');
    })
});