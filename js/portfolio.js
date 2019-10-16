$(document).ready(function () {
    $(".portfolio__item img").on("mouseover", function(){
        $(".portfolio__item img").css({
            opacity: '0.3'
        })
        $(this).css({
            opacity: '1'
        })
    })
    $(".portfolio__item img").on("mouseout", function(){
        $(".portfolio__item img").css({
            opacity: '1'
        })
    })
});