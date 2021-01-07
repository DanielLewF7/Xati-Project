$(document).ready(function() {
    $(".topnav").click(function () {
        fadeNew = $(".topnav");
        fadeNew.animate({
            height: '270px',
            width: '200px'
        });
        $("#topLinks").show();
    });
    $(".btn-small").click(function () {
        fadeNew.animate({
            height: '35px',
            width: '30px'
        });
        event.stopPropagation();
    });
    $(window).scroll(function () {
        if ($(this).scrollTop() > 10) {
            $(".btop").addClass("gotop");
            $(".btop a").attr("href", "#top");
        } else {
            $(".btop").removeClass("gotop");
            $(".btop a").attr("href", "#bottom");
        }
        $(".btop").click(function () {
            if ($(this).hasClass("gotop")) {
                $("html, body").animate({scrollTop: 0}, 50);
                return false;
            }
        });
    });
    $(".h2-anim").click(function () {
        animText = $(".AnimationText");
        animText.slideDown(700);
    });
    $(".AnimationText").click(function () {
        animText.slideUp(700);
        event.stopPropagation();
    });
});
//document.write(('b' + 'a' + + 'a' + 'a').toLowerCase());
console.log("a" + + "a");
console.log("d" + + "d");