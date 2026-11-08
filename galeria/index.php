<!DOCTYPE html>
<html lang="es">
<head>
    <!-- General -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Galisse Studio">
    <title>Cocina 113</title>
    <meta name="description" content="Frutos del mar y pastas hechas en casa que maridan con vinos de origenes diversos, ubicado en la colonia Roma.">
    <link rel="icon" href="../assets/img/LogoBlack.svg">
    <link rel="canonical" href="https://cocina113.com/galeria">
    <meta name="url" content="https://cocina113.com/galeria">
    <!-- Redes Sociales -->
    <meta property="og:title" content="Cocina 113 ~ De Autor">
    <meta property="og:description" content="Frutos del mar y pastas hechas en casa.">
    <meta property="og:url" content="https://cocina113.com">
    <meta property="og:site_name" content="Cocina 113">
    <meta property="og:image" content="http://cocina113.com/assets/img/LogoBlack.svg">
    <meta property="og:image:secure_url" content="https://cocina113.com/assets/img/LogoBlack.svg">
    <!-- Stylesheets -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/fonts.css">
    <link rel="stylesheet" href="../assets/css/keyframes.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/scrollAppearEffect.css">
</head>
<body>
    <div id="view" class="" data-num="">
      <a href="javascript:;" onclick="npGallery('prev');" class="gallery-np-item" style="width: 25%; left: .8rem;"><img src="../assets/icons/prev.svg" alt="previous image" style="left: 0;"></a>
      <a href="javascript:;" onclick="npGallery('next');" class="gallery-np-item" style="width: 45%; right: .8rem;"><img src="../assets/icons/next.svg" alt="next image" style="right: 0;"></a>
      <img src="../assets/icons/close.svg" onclick="closeGallery();" style="position: absolute; top: -1rem; right: 0; width: 1rem; height: 1rem; z-index: 7; cursor: pointer; filter: invert(100%);">
      <img id="view-img" src="" class="py-3">
      <p id="view-name" class="main-text text-white"></p>
    </div>
    <div id="darken-2" onclick="closeGallery();"></div>
    <?php require("../assets/includes/navigation.html");?>
    <main id="galeria-index">
        <section class="header container-fluid">
            <div class="row pb-5">
                <div class="d-none d-sm-block col-sm-1 px-0">
                    <div class="cuadro"></div>
                </div>
                <div class="col-12 col-sm-55 px-0">
                    <div class="main-card">
                        <div class="container">
                            <h2>Galería</h2>
                            <hr class="gold">
                            <p class="main-text">
                                Cada imagen transmite la modernidad de nuestro espacio, la propuesta de nuestra cocina y la experiencia única de quienes nos visitan.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-55 px-0 text-right">
                    <img src="../assets/img/galeria/galeria-img-26.jpeg" class="main-img">
                </div>
            </div>
        </section>
        <section class="main">
            <div class="container-fluid pb-5">
                <ul class="nav main-text mb-0" role="tablist">
                  <li class="nav-item" role="presentation">
                    <a id="all-tab" href="#all-content" class="nav-link active" data-toggle="tab" role="tab" aria-controls="all-content" aria-selected="true">Todo</a>
                  </li>
                  <span class="py-2">|</span>
                  <li class="nav-item" role="presentation">
                    <a id="firstfil-tab" href="#firstfil-content" class="nav-link" data-toggle="tab" role="tab" aria-controls="firstfil-content" aria-selected="false">De la carta</a>
                  </li>
                  <span class="py-2">|</span>
                  <li class="nav-item" role="presentation">
                    <a id="secondfil-tab" href="#secondfil-content" class="nav-link" data-toggle="tab" role="tab" aria-controls="secondfil-content" aria-selected="false">Ambiente</a>
                  </li>
                </ul>
                <div class="tab-content">
                  <div id="all-content" class="tab-pane fade show active" role="tabpanel" aria-labelledby="all-tab">
                      <div class="container-fluid">
                          <div class="row galeria-img">
                              <div class="col-12 col-sm-3 px-0">
                                  <div class="galeria-img-item">
                                      <img src="../assets/img/galeria/galeria-img-19.jpg" alt="Cocina 113" data-num="1" onclick="gallery(this);">
                                  </div>
                                  <div class="galeria-img-item galeria-img-ditem">
                                      <img src="../assets/img/reservaciones-img.jpg" alt="Cocina 113" data-num="2" onclick="gallery(this);">
                                  </div>
                                  <div class="galeria-img-item">
                                      <img src="../assets/img/galeria/galeria-img-28.jpeg" alt="" data-num="3" onclick="gallery(this);">
                                  </div>
                              </div>
                              <div class="col-12 col-sm-3 px-0">
                                  <div class="galeria-img-item">
                                      <img src="../assets/img/galeria/galeria-img-18.jpg" alt="Cocina 113" data-num="4" onclick="gallery(this);">
                                  </div>
                                  <div class="galeria-img-item">
                                      <img src="../assets/img/menu/menu-img-12.jpg" alt="" data-num="5" onclick="gallery(this);">
                                  </div>
                                  <div class="galeria-img-item">
                                      <img src="../assets/img/galeria/galeria-img-30.jpeg" alt="" data-num="6" onclick="gallery(this);">
                                  </div>
                                  <div class="galeria-img-item">
                                      <img src="../assets/img/galeria/galeria-img-29.jpeg" alt="" data-num="7" onclick="gallery(this);">
                                  </div>
                              </div>
                              <div class="col-12 col-sm-3 px-0">
                                  <div class="galeria-img-item">
                                      <img src="../assets/img/galeria/galeria-img-21.jpg" alt="Cocina 113" data-num="8" onclick="gallery(this);">
                                  </div>
                                  <div class="galeria-img-item galeria-img-ditem">
                                      <img src="../assets/img/galeria/galeria-img-27.jpeg" alt="Cocina 113" data-num="9" onclick="gallery(this);">
                                  </div>
                                  <div class="galeria-img-item">
                                      <img src="../assets/img/galeria/galeria-img-2.jpg" alt="" data-num="10" onclick="gallery(this);">
                                  </div>
                              </div>
                              <div class="col-12 col-sm-3 px-0">
                                  <div class="galeria-img-item">
                                      <img src="../assets/img/galeria/galeria-img-17.jpg" alt="Cocina 113" data-num="11" onclick="gallery(this);">
                                  </div>
                                  <div class="galeria-img-item">
                                      <img src="../assets/img/galeria/galeria-img-25.jpg" alt="" data-num="12" onclick="gallery(this);">
                                  </div>
                                  <div class="galeria-img-item">
                                      <img src="../assets/img/galeria/galeria-img-12.jpg" alt="Chupe de camarones" data-num="13" onclick="gallery(this);">
                                  </div>
                                  <div class="galeria-img-item">
                                      <img src="../assets/img/galeria/galeria-img-22.jpeg" alt="" data-num="14" onclick="gallery(this);">
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div id="firstfil-content" class="tab-pane fade" role="tabpanel" aria-labelledby="firstfil-tab">
                      <div class="container-fluid">
                          <div class="row galeria-img">
                              <div class="col-12 col-sm-3 px-0">
                                  <div class="galeria-img-item">
                                      <img src="../assets/img/menu/menu-img-12.jpg" alt="" data-num="1" onclick="gallery(this);">
                                  </div>
                                  <div class="galeria-img-item">
                                      <img src="../assets/img/galeria/galeria-img-28.jpeg" alt="" data-num="2" onclick="gallery(this);">
                                  </div>
                              </div>
                              <div class="col-12 col-sm-3 px-0">
                                  <div class="galeria-img-item">
                                      <img src="../assets/img/galeria/galeria-img-30.jpeg" alt="" data-num="3" onclick="gallery(this);">
                                  </div>
                                  <div class="galeria-img-item">
                                      <img src="../assets/img/galeria/galeria-img-29.jpeg" alt="" data-num="4" onclick="gallery(this);">
                                  </div>
                              </div>
                              <div class="col-12 col-sm-3 px-0">
                                  <div class="galeria-img-item">
                                      <img src="../assets/img/galeria/galeria-img-25.jpg" alt="" data-num="5" onclick="gallery(this);">
                                  </div>
                                  <div class="galeria-img-item">
                                      <img src="../assets/img/galeria/galeria-img-2.jpg" alt="" data-num="6" onclick="gallery(this);">
                                  </div>
                              </div>
                              <div class="col-12 col-sm-3 px-0">
                                  <div class="galeria-img-item">
                                      <img src="../assets/img/galeria/galeria-img-12.jpg" alt="Bisque de langosta" data-num="7" onclick="gallery(this);">
                                  </div>
                                  <div class="galeria-img-item">
                                      <img src="../assets/img/galeria/galeria-img-22.jpeg" alt="" data-num="8" onclick="gallery(this);">
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div id="secondfil-content" class="tab-pane fade" role="tabpanel" aria-labelledby="secondfil-tab">
                      <div class="container-fluid">
                        <div class="row galeria-img">
                          <div class="col-12 col-sm-4 px-0">
                              <div class="galeria-img-item">
                                  <img src="../assets/img/galeria/galeria-img-19.jpg" alt="Cocina 113" data-num="1" onclick="gallery(this);">
                              </div>
                              <div class="galeria-img-item">
                                  <img src="../assets/img/reservaciones-img.jpg" alt="Cocina 113" data-num="2" onclick="gallery(this);">
                              </div>
                          </div>
                          <div class="col-12 col-sm-4 px-0">
                              <div class="galeria-img-item">
                                  <img src="../assets/img/galeria/galeria-img-18.jpg" alt="Cocina 113" data-num="3" onclick="gallery(this);">
                              </div>
                              <div class="galeria-img-item">
                                  <img src="../assets/img/galeria/galeria-img-21.jpg" alt="Cocina 113" data-num="4" onclick="gallery(this);">
                              </div>
                          </div>
                          <div class="col-12 col-sm-4 px-0">
                              <div class="galeria-img-item">
                                  <img src="../assets/img/galeria/galeria-img-27.jpeg" alt="Cocina 113" data-num="5" onclick="gallery(this);">
                              </div>
                              <div class="galeria-img-item">
                                  <img src="../assets/img/galeria/galeria-img-17.jpg" alt="Cocina 113" data-num="6" onclick="gallery(this);">
                              </div>
                          </div>
                        </div>
                      </div>
                  </div>
                </div>
            </div>
        </section>
        <?php require("../assets/includes/footer.html");?>
    </main>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="../assets/js/scripts.js"></script>
    <script type="text/javascript">
        setInterval(function() {
            var currentScrollPos = window.pageYOffset;
              if (currentScrollPos >= (window.innerHeight - (window.innerHeight * 0.6))) {
                document.getElementById("btn-nav").classList.add("nav-scroll");
              } else {
                document.getElementById("btn-nav").classList.remove("nav-scroll");
              }
        }, 50);
        function gallery(select) {
            var view = document.getElementById("view");
            var src = select.getAttribute("src");
            var alt = select.getAttribute("alt");
            var num = select.getAttribute("data-num");
            var items = document.getElementsByClassName("galeria-img-item").length;
            var viewimg = document.getElementById("view-img");
            var viewname = document.getElementById("view-name");
            var dark = document.getElementById("darken-2");
            var body = document.getElementsByTagName("body")[0];
            if (!view.classList.contains("ver")) {
              view.classList.add("ver");
              dark.classList.add("ver");
              view.setAttribute("data-num",num);
              viewimg.setAttribute("src",src);
              viewname.innerHTML = alt;
              body.classList.add("overflow-hid");
              setTimeout(function(){
                view.classList.add("ver-2");
              }, 50);
            }
        }
        function closeGallery() {
            var view = document.getElementById("view");
            var viewimg = document.getElementById("view-img");
            var viewname = document.getElementById("view-name");
            var dark = document.getElementById("darken-2");
            var body = document.getElementsByTagName("body")[0];
            view.classList.remove("ver-2");
            dark.classList.remove("ver");
            setTimeout(function(){
              view.classList.remove("ver");
              viewimg.setAttribute("src","");
              view.setAttribute("data-num","");
              viewname.innerHTML = "";
              body.classList.remove("overflow-hid");
            }, 500);
        }
        function npGallery(direction) {
          var view = document.getElementById("view");
          var viewnum = parseInt(view.getAttribute("data-num"));
          for (var i = 0; i < document.getElementsByClassName("tab-pane").length; i++) {
            if (document.getElementsByClassName("tab-pane")[i].classList.contains("active")) {
              var active = document.getElementsByClassName("tab-pane")[i];
              break;
            }
          }
          var items = active.getElementsByClassName("galeria-img-item").length;
          var viewimg = document.getElementById("view-img");
          var viewname = document.getElementById("view-name");
          if (viewnum == 1) {
              var prev = items;
          } else {
              var prev = viewnum - 1;
          }
          if (viewnum == items) {
              var next = 1;
          } else {
              var next = viewnum + 1;
          }
          if (direction=="next") {
            var select = active.getElementsByClassName("galeria-img-item")[next-1].getElementsByTagName("img")[0];
          } else if (direction=="prev") {
            var select = active.getElementsByClassName("galeria-img-item")[prev-1].getElementsByTagName("img")[0];
          }
          var src = select.getAttribute("src");
          var alt = select.getAttribute("alt");
          var num = select.getAttribute("data-num");
          view.classList.remove("ver-2");
          setTimeout(function(){
            view.setAttribute("data-num",num);
            viewimg.setAttribute("src",src);
            viewname.innerHTML = alt;
            view.classList.add("ver-2");
          }, 500);
        }
    </script>
</body>
</html>