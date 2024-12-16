const navbarMenu = document.querySelector('.navbar-menu');
document.querySelector('#btn-menu').onclick = () => {
  navbarMenu.classList.toggle("active");
};

const btnMenu = document.querySelector('#btn-menu');
document.addEventListener('click', function (e) {
  if (!btnMenu.contains(e.target) && !navbarMenu.contains(e.target)) {
    navbarMenu.classList.remove('active');
  }
});

// owl-caraousel
$(document).ready(function(){
  $('.hero .owl-carousel').owlCarousel({
    autoplay: true,
    nav: true,
    loop: true,
    dots: true,
    inifinite: true,
    speed: 4000,
    autoplaySpeed: 2500,
    slideToShow: 1,
    items: 1,
    navTex: [
      "<i class='fas fa-angle-left'></i>",
      "<i class='fas fa-angle-right'></i>"
    ],
    navContainer: "#owl-nav"
  });
});
