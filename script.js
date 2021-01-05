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
    onOff1 = $(".tab-text-2, .tab-text-3, .tab-text-4");
    onOff2 = $(".tab-text-1, .tab-text-3, .tab-text-4");
    onOff3 = $(".tab-text-1, .tab-text-2, .tab-text-4");
    onOff4 = $(".tab-text-1, .tab-text-3, .tab-text-2");
    $(".tab-text-1").fadeToggle(500);
    $(".btn-tabs-1").click(function () {
        onOff1.hide();
        $(".tab-text-1").fadeToggle(500);
    });
    $(".btn-tabs-2").click(function () {
        $(".tab-text-2").fadeToggle(500);
        onOff2.hide();
    });
    $(".btn-tabs-3").click(function () {
        $(".tab-text-3").fadeToggle(500);
        onOff3.hide();
    });
    $(".btn-tabs-4").click(function () {
        $(".tab-text-4").fadeToggle(500);
        onOff4.hide();
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