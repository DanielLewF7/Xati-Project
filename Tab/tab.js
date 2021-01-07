$(document).ready(function() {
    $(".btn-tabs").click(function () {
        $(".btn-tabs").removeClass("active");
        $(this).addClass("active");
        $(".tab-text").hide();
        $(".tab-text:nth-of-type(" + ($(this).index() + 1) + ")").show();
        //console.log($(this).index() + 1);
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
});