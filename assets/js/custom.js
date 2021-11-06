$(document).ready(function () {



    $('form[name=auth]').on('submit', function (ev){
        ev.preventDefault();
        $data = $(this).serialize();
        $.ajax({
            type: 'post',
            url:'backend/qureies.php',
            data: $data,
            dataType:'json',
            success: function(res){
                if(res.msg == 'login'){
                    window.location.href = 'index.php'
                }else if(res.msg == 'logout'){
                    window.location.href = 'index.php'
                    // Add a modal here too
                }else{
                    // TODO: Add a modal
                }
            }
        })
    });



    $('input[name=pwd]').on('keyup',function () {
        if($(this).val().length > 0){
            $(this).siblings('#eye').removeClass('hidden')
        }else{
            $(this).siblings('#eye').addClass('hidden')
        }
    });
    $('.switch').click(function(){
        $display = $(this).parent().parent().parent().siblings('div[name='+ $(this).attr('id') +']')
        $display.removeClass('hidden')
        $display.siblings().addClass('hidden')
    })
    // $('#eye').cli('click',function () {
    //     console.log('hi');
    //     // $(this).addClass('hidden')
    //     // $(this).siblings('#eye2').removeClass('hidden')
    // });
    // $('#eye').click(function () {
    //     console.log('hi');
    // });
})