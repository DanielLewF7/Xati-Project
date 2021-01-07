$(document).ready(function() {
    var box = $(".teaserbox");
    $("body").ready(function () {
        box.width(0);
        box.height(0);
        box.fadeIn(500).animate({width: 360, height: 530}, {duration: 1000});

        function boxAnim() {
            var txtbox = $(".textbox");
            txtbox.fadeIn(700);
            txtbox.css("border-top", "2px solid #53BBEB")
        }

        setTimeout(boxAnim, 1500);
    });
});