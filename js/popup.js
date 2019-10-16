$(document).ready(function () {
   $('.popup').bind('click', function(){
      $(this).toggle();
   })
   $('.portfolio-page__img').bind('click', function(){
    $('.popup').toggle();
 })
});