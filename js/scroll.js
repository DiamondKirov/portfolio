$(document).ready(function () {
 

    $(window).on("scroll", function(){
        $w_top = $(window).scrollTop();
        $A_top = $(".about-me").offset().top-300;
        $P_top = $(".portfolio").offset().top-300;
        $S_top = $(".skill").offset().top-1200;

        if ($w_top >  $A_top){

            $(".about-me").css({
                opacity: '1',
                left: '0'
            })
        }

        if ($w_top >  $P_top){

            $(".portfolio").css({
                opacity: '1',
            })
        }

        if ($w_top >  $S_top){

            $(".skill").css({
                transform: 'scale(1)',
            })
        }
    })
});