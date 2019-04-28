var slideIndex = 1;
showSlides(slideIndex);

// To do przełączania slajdów strzałkami
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// A to do wybierania slajdu po slideIndex (do kropek)
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i; //let lub const
  var slides = document.getElementsByClassName("mySlides");
  console.log(slides) 
  var dots = document.getElementsByClassName("dot");
  var slidesLenght = document.querySelectorAll("img").length-1;
  if (n > slidesLenght) {slideIndex = 1} 
  if (n < 1) {slideIndex = slidesLenght}
  for (i = 0; i < slidesLenght; i++) {
    slides[i].style.display = "none"; 
  }

  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = " block"; 
  slides[slideIndex-1].class = "mySlides";
  dots[slideIndex-1].className += " active";
}