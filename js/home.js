$(document).ready(function(){
    $('.nav a').click(function(){
        id = $(this).attr('href');
        if (id != '#'){
          if (id != null)
            $('body').animate({'scrollTop':$(id).offset().top},1000);
          return false;
        }
        return true;
    });
});
