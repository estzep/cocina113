var hash = window.location.hash;
if (!hash=="") {
    slideTo(hash);
    window.location.hash = '';
}
function nav() {
    var btn = document.getElementById("btn-nav"),
        body = document.getElementsByTagName("body")[0];
    btn.classList.toggle("change");
    body.classList.toggle("opened-nav");
}
function slideTo(id) {
    $('html, body').animate({
      scrollTop: $(id).offset().top
    }, 800);
    var body = document.getElementsByTagName("body")[0];
    if (body.classList.contains("opened-nav")) {
        nav();
    }
}
setInterval(function() { document.getElementsByTagName("nav")[0].style.transition = "all .5s ease"; }, 800);