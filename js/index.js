$(document).ready(function() {
    if($.cookie('userid')!=null){
       window.location.href = 'message.php';
    }
    else{

    }

    $('#regform').submit(function(e){

        //var data = $('#regform').serialize();
        var dat =$('#regform').serializeArray();

        var data = $('#regform').serialize();

        $.ajax({
            type: 'POST',
            url: 'ajax.php',
            data: data,
            dataType: 'json',
            success: function(data) {
                console.log(data);
                if(data.responseText != 'false'){
                    $.cookie('userid',data);
                    console.log('setcook: '+data);
                    window.location.href='message.php';
                    return true;
                }
                else {
                    alert('Неверный код авторизации');
                    return false;
                }

            },
            error:  function(xhr, str){
                alert('Неверный код авторизации Er');
                return false;
            }
        }).done(function() {
            console.log('success');
        }).fail(function() {
            console.log('fail');
        });

        return false;

    });

});