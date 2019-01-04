$(document).ready(function() {
    if($.cookie('userid')==null){
        window.location.href = 'index.php';
    }

    $(document).mouseup(function (e) {
        var div = $("#set2");
        if (div.is(e.target)) {
            alert('s2');
        }
        console.log(e.target.attr("class"));

    });

    $('#aform').submit(function(e){

        var message = $(this).serialize();
        if(message['name']==''||message['name']==''){
            alert('Заполните все поля!');
            return false;
        }
        var data={
            'key':'df548f-61ac83-624ea4',
            'message':message
        }

        $.ajax({
            type: 'GET',
            url: 'https://alarmerbot.ru',
            data: data,
            success: function(data) {
                $('#results').html(data);
            },
            error:  function(xhr, str){
                //alert('Возникла ошибка: ' + xhr.responseCode);
            }
        }).done(function() {
            console.log('success');
        }).fail(function() {
            console.log('fail');
        });
        alert('Ваша заявка отправлена, ожидайте письма с инстукциями');
        return false;

    });

});