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
    $(".btn-tabs").click(function () {
        $(".btn-tabs").removeClass("active");
        $(this).addClass("active");
        $(".tab-text").hide();
        $(".tab-text:nth-of-type("+ ($(this).index() + 1) +")").show();
        console.log($(this).index() + 1);
    });
        $(".confirm").click(function () {
       var checkName = $(".x-mas").val();
        if (checkName === "Daniel") {
            $(".interface-2").fadeIn(500);
            $(".interface-1").fadeOut(500);
        } else {
            alert("you typed the wrong name. Please try again! :^)");
            location.reload();
        }
    });
    var box = $(".teaserbox");
    $("body").ready(function () {
        box.width(0);
        box.height(0);
        box.fadeIn(500).animate ({width: 360, height: 530}, { duration: 1000});
        function boxAnim () {
            var txtbox = $(".textbox");
            txtbox.fadeIn(700);
            txtbox.css("border-top","2px solid #53BBEB")
        }
        setTimeout(boxAnim, 1500);
    });
    var slideIndex = 0;
    showSlides();

    function showSlides() {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        slideIndex++;
        if (slideIndex > slides.length) {slideIndex = 1}
        slides[slideIndex-1].style.display = "block";
        setTimeout(showSlides, 3000);
    }
});

document.write(('b' + 'a' + + 'a' + 'a').toLowerCase());
console.log("a" + + "a");
console.log("d" + + "d");