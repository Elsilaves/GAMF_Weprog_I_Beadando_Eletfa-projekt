
let slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("vidBox");
  if (n > slides.length) {slideIndex = 1} //léptetés
  if (n < 1) {slideIndex = slides.length} //léptetés
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none"; // Következő elemek elrejtése
  }
  slides[slideIndex-1].style.display = "block"; // megjelenítés blokkban
}