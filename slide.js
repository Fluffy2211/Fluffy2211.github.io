let slideIndex = 1;
showDivs(slideIndex);
showDivs1(slideIndex);
showDivs2(slideIndex);

function plusDivs(n) {
    showDivs(slideIndex += n);
}

function showDivs(n) {
    let i;
    let x = document.getElementsByClassName("mySlides");
    if (n > x.length) {slideIndex = 1}
    if (n < 1) {slideIndex = x.length}
    for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";
    }
    x[slideIndex-1].style.display = "block";
}

// Slide2
function plusDivs1(n) {
    showDivs1(slideIndex += n);
}

function showDivs1(n) {
    let i;
    let x = document.getElementsByClassName("mySlides1");
    if (n > x.length) {slideIndex = 1}
    if (n < 1) {slideIndex = x.length}
    for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";
    }
    x[slideIndex-1].style.display = "block";
}

//slide 3
function plusDivs2(n) {
    showDivs2(slideIndex += n);
}

function showDivs2(n) {
    let i;
    let x = document.getElementsByClassName("mySlides2");
    if (n > x.length) {slideIndex = 1}
    if (n < 1) {slideIndex = x.length}
    for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";
    }
    x[slideIndex-1].style.display = "block";
}
