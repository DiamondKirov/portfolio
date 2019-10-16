$(document).ready(function () {
    $('#submit').bind('click', function(e){
        e.preventDefault();
        $.ajax({
            type: "POST",
            url: "window.location",
            data: $('.contact-page__form').serialize(),
            dataType: "HTML",
            success: function (data) {
              if (data=="Done"){
                  alert('Сообщение отправлено');
              }
            }
        });
    })
});