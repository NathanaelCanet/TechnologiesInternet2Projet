$(document).ready(function(){
    $('h2').css('color','blue');

    $('#p1').hide();
    $('#div1').hide();
    $('#cliquer').click(function(){
        $(this).css({
            'color' : 'red',
            'font-weight' : 'bold',
            'font-size' : '150%'
        })
        $('#p1').show();
        $('#div1').fadeIn(10000);
    });
    $('#p1').mouseover(function(){
        $('#div1').css('background-color','pink');
    })
    $('#calendrier').datepicker();
    $('#tirer').click(function(){
        $('#menu').toggle('slide');
    })
    //Mozart
    $('#vie').hide();
    $('#para1').hide();
    $('#deuxieme').hide();
    $('#troisieme').hide();
    $('#quatrieme').hide();
    $('#montrer_image').hide();
    $('h1').click(function(){
        $(this).css('color','red');
        $('#vie').show();
    })
    $('#vie').mouseover(function(){
        $(this).css({
            'color' : 'pink',
            'font-weight' : 'bold',
            'font-style' : 'italic'
        })
    })

    $('#vie').mouseout(function(){
        $('#para1').show();
    })

    $('#para1').click(function(){
        $('#deuxieme').show();
    })

    $('#para2').click(function(){
        $('#troisieme').slideDown('slow');
    })

    $('#para3').click(function(){
        $('#quatrieme').slideDown('slow');
    })

    $('#cacher').click(function(){
        $('#montrer_image').slideDown('slow');
    })
})