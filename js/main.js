$(document).ready(function () {
    var time_banner = 3000;
    var myTimeOut;
    var glob_num;

    $("#nav-banner li").on("click", function(){
        var num = $(this).attr("num");

        $("#nav-banner li").removeClass("selected");
        $(this).addClass("selected");

        $(".large-banner").removeClass("selected");
        $(".large-banner[num='"+num+"']").addClass("selected");
        $(".description-banner").removeClass("selected");
        $(".description-banner[num='"+num+"']").addClass("selected");
        
    });

    $("#nav-banner li, .large-banner, .description-banner").on("mouseenter", function(){
        var num = $(this).attr("num");
        if (glob_num == parseInt(num)) {
           clearTimeout(myTimeOut); 
        }
    }).on("mouseleave", function(){
        clearTimeout(myTimeOut); 
        timmer();
    });

    var timmer = function () {
        myTimeOut = setTimeout(function(){
            glob_num = $(".selected").attr("num");
            glob_num = parseInt(glob_num)+1;

            if (glob_num > 4) {
                glob_num = 1
            }

            $("#nav-banner li").removeClass("selected");
            $("#nav-banner li[num='"+glob_num+"']").addClass("selected");

            $(".large-banner").removeClass("selected");
            $(".large-banner[num='"+glob_num+"']").addClass("selected");
            $(".description-banner").removeClass("selected");
            $(".description-banner[num='"+glob_num+"']").addClass("selected");
            timmer();
        }, time_banner);
        
    }
    timmer();

    var slider_videos = function () {
        $("#thumbs.videos .thumb").on("mouseenter", function(){
            $(this).addClass("thumb-on");
        }).on("mouseleave", function(){
            $(this).removeClass("thumb-on");
        });

        $("#thumbs.videos .thumb").on("click", function() {
            var num = $(this).index();

            $("#thumbs .thumb").removeClass("thumb-on");
            $(this).addClass("thumb-on");

            $("#slider iframe").hide();
            $("#slider").children("iframe").eq(num).show();
        });
    };
    slider_videos();
});