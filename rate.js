$(document).on('click', '.icon', function() {
        $('input[name=stars]').val($(this).data('rate'));
        alert($('input[name=stars]').val());
        var num = 1,iconStar = $(this);
        $('.icon').each(function() {
            if (num <= iconStar.data('rate')) {
                $(this).css('color', '#09f');
            }else{
                $(this).css('color', '#000');
            }
            num++;
        });
    });

    var num = 1,iconStar = $('input[name=stars]').val();
    $('.icon').each(function() {
        if (num <= iconStar) {
            $(this).css('color', '#09f');
        }else{
            $(this).css('color', '#000');
        }
        num++;
    });