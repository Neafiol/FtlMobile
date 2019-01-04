$(document).ready(function() {
    if($.cookie('userid')==null){
        window.location.href = 'index.php';
    }

    var set1 = $("#set1");
    var set2 = $("#set2");
    //поле 1
    // if($.cookie('set1')==1){
    //     set1.click();
    //     // set1.attr('class','toggle-handle active');
    // }
    // else {
    //     set1.div.attributes['class']='toggle-handle';
    // }
    // //поле 2
    // if($.cookie('set2')==1){
    //     set2.attr('class','toggle-handle active');
    // }
    // else {
    //     set2.attr('class',' toggle-handle');
    // }



    $(document).mouseup(function (e) {
        if (set1.is(e.target)) {
            $.cookie('set1', !$.cookie('set1'));
        }
        if (set2.is(e.target)) {
            $.cookie('set2', !$.cookie('set2'));
        }

    });

    $('#aform').submit(function(e){

        var data = $('#aform').serialize();


        $.ajax({
            type: 'POST',
            url: 'ajax.php',
            data: data,
            success: function(data) {
                alert('Данные сохранены');
                window.location.href ='message.php';
            },
            error:  function(xhr, str){
                alert('Возникла ошибка: ' + xhr.responseCode);
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