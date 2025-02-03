/*
let slideIndex = 1;
document.addEventListener("DOMContentLoaded", function () {
    showSlides(slideIndex);
});


function plusSlides(n) {
    showSlides(slideIndex += n);
}

function showSlides(n) {
    let i;
    let slides = document.getElementsByClassName("slides");

    if (n > slides.length) {
        slideIndex = 1;
    }
    if (n < 1) {
        slideIndex = slides.length
    }
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }

    slides[slideIndex - 1].style.display = "block";
}
*/

async function fetchReservations() {
    let response = await fetch("http://localhost/guest-list/Ajax/test.php");

    return await response.json();

}
