$(document).ready(function() {
    var slideIndex = 0;
    showSlides();

    function showSlides() {
        i = 0;
        var slides = $(".mySlides");
        slides.each(function (i) {
            i < slides.length;
            i++;
            slides.css("display", "none");
        });
        slideIndex++;
        if (slideIndex > slides.length) {
            slideIndex = 1
        }
        slides[slideIndex - 1].style.display = "block";
        setTimeout(showSlides, 3000);
    }
});