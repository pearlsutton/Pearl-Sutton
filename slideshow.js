
function openImage() {
    document.getElementById("slideshow").style.display = "block";
}

// <span> element closes modal
let span = document.getElementsByClassName("close")[0];
span.onclick = function() {
    slideshow.style.display = "none";
}
// Outside slideshow closes modal
window.onclick = function(e) {
    if (e.target == slideshow) {
        slideshow.style.display = "none";
    }
}

function leftSlide(){
displaySlide(slideNumber -= 1);
}

function rightSlide(){
displaySlide(slideNumber += 1);
}

let slideNumber = 1;
displaySlide(slideNumber);

function currentSlide(n) {
    displaySlide(slideNumber = n);
}

function displaySlide(n) {
    let index;
    let slides = document.getElementsByClassName("slides");

    if (n > slides.length) {
        slideNumber = 1;
    }    
    if (n < 1) {
        slideNumber = slides.length;
    }

    for (index = 0; index < slides.length; index++) {
        slides[index].style.display = "none";  
    }
    slides[slideNumber-1].style.display = "block";  
}