const slider = document.querySelector('.slider');
const slides = document.querySelectorAll('.slide');
const prevBtn = document.getElementById('prevBtn');
const nextBtn = document.getElementById('nextBtn');

let currentIndex = 0;

function goToSlide(index) {
    slider.style.transform = `translateX(-${index * 100}%)`;
    slides[currentIndex].classList.remove('active');
    slides[index].classList.add('active');
    currentIndex = index;
}

function nextSlide() {
    if (currentIndex === slides.length - 1) {
        goToSlide(0);
    } else {
        goToSlide(currentIndex + 1);
    }
}

function prevSlide() {
    if (currentIndex === 0) {
        goToSlide(slides.length - 1);
    } else {
        goToSlide(currentIndex - 1);
    }
}

function Redirect() {
    window.open('http://localhost:3000/register')
}
function Redirect1() {
    window.open('http://localhost:3000/login')
}
function Redirect_login() {
    window.open('http://localhost:3000')
}
function scrollToTop(){
    window.scrollTo(0,0);
}
function scrollToMiddle() {
    window.open('http://localhost/finalproject/index.php');
    window.scrollTo(2,2);
}

nextBtn.addEventListener('click', nextSlide);
prevBtn.addEventListener('click', prevSlide);

setInterval(nextSlide, 4000); // Automatically slide every 3 seconds