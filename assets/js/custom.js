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

    $('form[name=addform]').on('submit', function (ev){
        ev.preventDefault();
        $data = $(this).serialize();
        // console.log($data);
        $.ajax({
            type: 'post',
            url:'backend/qureies.php',
            data: $data,
            dataType:'json',
            success: function(res){
                console.log(res);
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
    $('input[name=regNum]').on('keyup',function () {
        $num = $(this).val();
        if($num != ''){
            $data = {'res':$num,'action':'checkreg'};
            $.ajax({
                type:'post',
                url:'backend/qureies.php',
                data:$data,
                dataType:'json',
                success:function(res2){
                    if(res2.msg == 'right'){
                        $('input[name=surName]').val(res2.users)
                        $('#green').removeClass('hidden')
                        $('#red').addClass('hidden')

                    }else{
                        $('input[name=surName]').val('')
                        $('#red').removeClass('hidden')
                        $('#green').addClass('hidden')
                    }
                }
                
            });
        }else{
            $('input[name=surName]').val('')
            $('#red').addClass('hidden')
            $('#green').addClass('hidden')
        }
        
    });
    $('input[name=surName]').val('')
    $('#red').addClass('hidden')
    $('#green').addClass('hidden')


    $('.switch').click(function(){
        $display = $(this).parent().parent().parent().siblings('div[name='+ $(this).attr('id') +']')
        $display.removeClass('hidden')
        $display.siblings().addClass('hidden')
    })
    $('.bars').click(()=>{
        $('.sidenav').toggleClass('-ml-72')
    })

    $('.selector').on('click',function(){
        $(this).parent().toggleClass('rounded-b-none')
        $(this).parent().siblings().toggleClass('hidden')
    })
    $('.selector-list').on('click',function(){
        $(this).parent().parent().parent().siblings().toggleClass('rounded-b-none')
        $val = $(this).text();
        $(this).parent().parent().parent().siblings().children('div').text($val)
        $(this).parent().parent().parent().toggleClass('hidden')
    })

    $url = new URL(window.location);
    $pathArray = $url.pathname.split('/');
    $current_page = $pathArray.pop();
    if($current_page == 'index.php'){
        setInterval(() => {
            $.ajax({
                url:'../electionprogress.php',
                dataType:'html',
                success: function(res){
                    $data = {'state':res};
                    $.ajax({
                        type:'post',
                        url:'../displayprogress.php',
                        data:$data,
                        dataType:'html',
                        success:function(res2){
                            $('#progressStatus').html(res2)
                        }
                        
                    });
                    $.ajax({
                        url:'../voteBtn.php',
                        dataType:'html',
                        success:function(re){
                            $('#voteBtn').html(re)
                        }
                        
                    });
                    $.ajax({
                        type:'post',
                        url:'../displayprogress.php',
                        data:$data,
                        dataType:'html',
                        success:function(res2){
                            $('#progressStatus').html(res2)
                        }
                        
                    });
                }
            })
        }, 1000);
    }


    // // $('#eye').cli('click',function () {
    // //     console.log('hi');
    //     $(this).addClass('hidden')
    // //     $(this).siblings('#eye2').removeClass('hidden')
    // // });
    // // $('#eye').click(function () {
    // //     console.log('hi');
    // // });
})