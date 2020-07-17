let bnt = document.getElementById('bars-js');
bnt.addEventListener('click', function() {
    let ra = document.getElementById('topnav-mobile')
    ra.style.left = 0;
    document.getElementsByClassName('topnav-mobile-overlay')[0].style.display = 'block';
})
let btn = document.getElementById('topnav-mobile-overlay');
btn.addEventListener('click', function() {
    let vao = document.getElementById('topnav-mobile')
    vao.style.left = -320 + "px";
    document.getElementsByClassName('topnav-mobile-overlay')[0].style.display = 'none';
})

if (window.innerWidth < 798) {
    let carousel = document.getElementById("carouselExampleControls-mobile")
    carousel.id = carouselExampleControls;
}
if (window.innerWidth > 992) {
    let carousel = document.getElementById("carouselExampleControls-web")
    carousel.id = carouselExampleControls;
}