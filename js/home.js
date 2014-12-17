$(document).ready(function(){
    $('.nav a').click(function(){
        id = $(this).attr('href');
        $('body').animate({'scrollTop':$(id).offset().top},1000);
        return false;
    });
});