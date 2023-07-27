$(document).ready(function(){
    $(".test").mouseover(function(){
        if($(".test").find(".divs").hasClass("divs-hover")){
            $(".test").find(".divs").removeClass("divs-hover"); 
            $(".test").find("a").css("background-color","none");
        }
        $(this).find(".divs").addClass("divs-hover");
        $(this).find("a").css("background-color","none");
    })
    $(".test").mouseleave(function(){
            $(".test").find(".divs").removeClass("divs-hover");    
            $(".test").find("a").css("background-color","none");        
    })
});


  
$(document).ready(function(){
    $('.sel').chosen();
  });
