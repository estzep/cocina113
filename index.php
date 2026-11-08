<!DOCTYPE html>
<html lang="es">
<head>
    <!-- General -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Galisse Studio">
    <title>Cocina 113</title>
    <meta name="description" content="Frutos del mar y pastas hechas en casa que maridan con vinos de origenes diversos, ubicado en la colonia Roma.">
    <link rel="icon" href="assets/img/LogoBlack.svg">
    <link rel="canonical" href="https://cocina113.com">
    <meta name="url" content="https://cocina113.com">
    <!-- Redes Sociales -->
    <meta property="og:title" content="Cocina 113 ~ De Autor">
    <meta property="og:description" content="Frutos del mar y pastas hechas en casa.">
    <meta property="og:url" content="https://cocina113.com">
    <meta property="og:site_name" content="Cocina 113">
    <meta property="og:image" content="http://cocina113.com/assets/img/LogoBlack.svg">
    <meta property="og:image:secure_url" content="https://cocina113.com/assets/img/LogoBlack.svg">
    <!-- Stylesheets -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/fonts.css">
    <link rel="stylesheet" href="assets/css/keyframes.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/scrollAppearEffect.css">
</head>
<body>
    <!-- <hr style="position: fixed; bottom: 30%; border: 1px solid red; z-index: 999; width: 100vw;"> -->
    <!-- <section id="introducction" style="width: 100%; height: 100vh; z-index: 7; background-color: red; position: fixed; top: 0; left: 0;"></section> -->
    <button id="btn-nav" class="" onclick="nav();">
        <div class="bar1"></div>
        <div class="bar2"></div>
        <div class="bar3"></div>
    </button>
    <nav>
        <div class="container-fluid position-relative h-100 d-flex flex-column">
            <img src="assets/img/LogoWhite.png" class="logo d-block mx-auto">
            <ul>
                <li><a href="javascript:;" onclick="slideTo('header');">Inicio</a></li>
                <li><a href="javascript:;" onclick="slideTo('#nosotros');">Nosotros</a></li>
                <li><a href="javascript:;" onclick="slideTo('#menu');">Propuesta Gastronómica</a></li>
                <li><a href="javascript:;" onclick="slideTo('#reservaciones');">Reservaciones</a></li>
                <li><a href="javascript:;" onclick="slideTo('#eventos');">Eventos Privados</a></li>
                <li><a href="javascript:;" onclick="slideTo('#galeria');">Galería</a></li>
                <li><a href="contacto">Contacto</a></li>
            </ul>
            <div class="text-center pb-4">
                <a href="https://www.facebook.com/cocina113mx/" target="_blank"><img src="assets/icons/facebook.svg" class="icons mx-1"></a>
                <a href="https://instagram.com/cocina113mx?igshid=18nv88g98pu0j" target="_blank"><img src="assets/icons/instagram.svg" class="icons mx-1"></a>
                <a href="https://goo.gl/maps/q6wzCNNNirArfP6R7" target="_blank" class="bottom">Córdoba 113, Roma Norte<br>Ciudad de México</a>
            </div>
        </div>
    </nav>
    <section id="darken" onclick="nav();"></section>
    <main>
        <header>
            <button id="btn-pp" onclick="video();"><img src="assets/icons/pause-fill.svg" width="16" height="16"></button>
            <video id="heroVideo" autoplay loop muted playsinline preload="metadata" poster="assets/img/header-bg.jpg">
                <!-- <source src="assets/videos/stock.mp4" type="video/mp4"> -->
            </video>
            <div class="hero">
                <img src="assets/img/LogoWhite.png" class="scrollApp">
            </div>
        </header>
        <section id="nosotros" class="container-fluid">
            <div class="row">
                <div class="col-12 col-sm-55 px-0">
                    <div class="main-card">
                        <div class="container">
                            <h2 class="scrollApp">Nosotros</h2>
                            <hr class="gold scrollApp">
                            <p class="main-text scrollApp">
                                Cocina 113 es un sencillo y merecido homenaje al arte culinario.
                                <br>
                                <br>
                                Una apuesta por el buen gusto basada en formas creativas de preparar los alimentos. Frutos de nuestros mares y pastas hechas en casa que maridan con vinos de orígenes diversos y cócteles originales, bajo un ambiente cálido y exclusivo en el corazón de la Roma.
                                <span class="d-none d-md-inline"><br><br>Cocina 113 es más que un restaurante, es un espacio para sentir, vivir y comunicarnos a través de aromas, sabores, texturas y colores en una experiencia en la que, algunos por primera vez, se acerquen a la comida de autor perdiéndole el miedo o quizás el respeto, para comenzar a hacerla parte de nuestra vida cotidiana.</span>
                                <br>
                                <br>
                                Bienvenidos al placer de disfrutar y compartir Cocina 113.
                            </p>
                            <!-- <a href="nosotros" class="more">Leer más<img src="assets/icons/taketo.svg"></a> -->
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-65 px-0">
                    <span class="mask scrollApp"></span>
                    <img src="assets/img/nosotros-img.jpg" class="main-img scrollApp">
                </div>
            </div>
        </section>
        <section id="menu" class="container-fluid">
            <div class="row">
                <div class="col-7 col-sm-4 col-md-4 col-lg-4 col-xl-4 px-0">
                    <img id="menu-img" src="" class="main-img scrollApp">
                </div>
                <div class="col-12 col-sm-7 col-md-6 col-lg-6 col-xl-5 px-0">
                    <div class="main-card">
                        <div class="container">
                            <h2 class="scrollApp">Propuesta Gastronómica</h2>
                            <hr class="gold scrollApp">
                            <div id="menu-carousel" class="carousel slide scrollApp" data-ride="carousel" data-interval="false">
                              <div class="carousel-inner">
                                <div class="carousel-item active">
                                  <p class="main-text">
                                    Creatividad y experiencia en nuestros cocineros sumadas a materias primas selectas, dan como resultado un menú con personalidad propia.
                                    <br>
                                    <br>
                                    Cada plato ha sido pensado y se elabora a la vista de manera original, convirtiendo nuestra cocina en una propuesta moderna y atrevida, ideal para compartir y disfrutar.
                                  </p>
                                </div>
                                <div class="carousel-item">
                                  <p class="main-text text-center">
                                    <span class="text-uppercase">Entradas Frías</span>
                                    <br>
                                    <br>
                                    <span class="text-uppercase">Entradas Calientes</span>
                                    <br>
                                    <br>
                                    <span class="text-uppercase">Pescados y Mariscos</span>
                                    <br>
                                    <br>
                                    <span class="text-uppercase">Pastas Frescas y Risottos</span>
                                    <br>
                                    <br>
                                    <span class="text-uppercase">Carnes y Aves</span>
                                    <br>
                                    <br>
                                    <span class="text-uppercase">Postres</span>
                                  </p>
                                </div>
                                <!-- <div class="carousel-item">
                                  <p class="main-text text-center">
                                    <span class="font-weight-500 text-uppercase">Entradas Frías</span>
                                    <br>
                                    <br>
                                    Pulpo al olivo
                                    <br>
                                    Tartar de atún
                                    <br>
                                    Estación Marina
                                    <br>
                                    Ceviche Cocina 113
                                    <br>
                                    Degustación de causas
                                    <br>
                                    Ensalada de la casa
                                  </p>
                                </div> -->
                                <!-- <div class="carousel-item">
                                  <p class="main-text text-center">
                                    <span class="font-weight-500 text-uppercase">Entradas Calientes</span>
                                    <br>
                                    <br>
                                    Bisque de langosta
                                    <br>
                                    Ceviche caliente
                                    <br>
                                    Aguadito de mariscos
                                    <br>
                                    Chupe de camarones
                                  </p>
                                </div> -->
                                <!-- <div class="carousel-item">
                                  <p class="main-text text-center">
                                    <span class="font-weight-500 text-uppercase">Pescados y Mariscos</span>
                                    <br>
                                    <br>
                                    Pulpo zarandeado
                                    <br>
                                    Atún sellado con puré de camote
                                    <br>
                                    Salmón en salsa de cítricos
                                    <br>
                                    Pesca del día al champagne
                                  </p>
                                </div> -->
                                <!-- <div class="carousel-item">
                                  <p class="main-text text-center">
                                    <span class="font-weight-500 text-uppercase">Pastas Frescas y Risottos</span>
                                    <br>
                                    <br>
                                    Tortellini miel de trufa
                                    <br>
                                    Lasagna de camarones en salsa de mariscos
                                    <br>
                                    Tagliolini trufa y parmesano
                                    <br>
                                    Raviolis de burrata en salsa de trufa blanca
                                    <br>
                                    ESPAGUETTI de sepia con mariscos al vino blanco
                                    <br>
                                    Pasta de la casa con langosta a la pimienta rosa
                                    <br>
                                    Pappardelle con ragú de alcachofas y mozzarella de búfala
                                    <br>
                                    Garganelli con ragú de pato
                                    <br>
                                    Agnolotti con ragú de cordero
                                    <br>
                                    Risotto tinta de sepia
                                    <br>
                                    Risotto de espárragos con huanchale y provolone
                                  </p>
                                </div> -->
                                <!-- <div class="carousel-item">
                                  <p class="main-text text-center">
                                    <span class="font-weight-500 text-uppercase">Carnes y Aves</span>
                                    <br>
                                    <br>
                                    Pechuga de pollo rellena en salsa demiglace
                                    <br>
                                    Filete de res en reducción de vino tinto
                                    <br>
                                    Rib eye con chimichurri a las finas hierbas
                                  </p>
                                </div> -->
                              </div>
                            </div>
                            <a href="menu/?pg" class="more scrollApp">Menú Completo<img src="assets/icons/taketo.svg"></a>
                            <div id="menu-carousel-indicator" class="scrollApp">1 | 2</div>
                        </div>
                        <a class="carousel-control-prev carousel-control scrollApp" href="#menu-carousel" role="button" data-slide="prev">
                            <img src="assets/icons/prev.svg" style="left: 20%;">
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next carousel-control scrollApp" href="#menu-carousel" role="button" data-slide="next">
                            <img src="assets/icons/next.svg" style="right: 20%;">
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
                <div class="col-5 col-sm-1 col-md-2 col-lg-2 col-xl-3 px-0">
                    <div class="cuadro"></div>
                </div>
            </div>
        </section>
        <section id="reservaciones" class="container-fluid">
            <div class="row">
                <div class="container mx-auto text-center">
                    <h2 class="scrollApp">Reservaciones</h2>
                    <hr class="gold scrollApp ml-auto">
                    <p class="main-text scrollApp">
                        Reservaciones con un día de anticipación o a través de OpenTable.
                        <br>
                        <br>
                        teléfonos:
                        <br>
                        <a href="+525535433133" class="text-decoration-none main-text mb-0">55 3543 3133</a>
                        <br>
                        <a href="+523221342225" class="text-decoration-none main-text mb-0">322 134 2225</a>
                    </p>
                    <!-- <a href="#reservaciones-form" class="more scrollApp" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="collapseExample">Reservar<img src="assets/icons/taketo.svg"></a> -->
                    <a href="https://www.opentable.com.mx/r/cocina-113-reservations-ciudad-de-mexico?restref=1144009&lang=es-MX&ot_source=Restaurant%20website" target="_blank" class="more scrollApp">OpenTable<img src="assets/icons/taketo.svg"></a>
                    <!-- <script type='text/javascript' src='//www.opentable.com.mx/widget/reservation/loader?rid=1144009&type=button&theme=standard&iframe=false&domain=commx&lang=es-MX&newtab=false&ot_source=Restaurant%20website'></script> -->
                    <!-- <form id="reservaciones-form" class="collapse main-text mb-0 text-left">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                              <label for="name">nombre y apellido</label>
                              <input type="text" name="name" id="form-name">
                            </div>
                        <div class="form-group col-md-6">
                          <label for="tel">teléfono</label>
                          <input type="text" name="tel" id="form-tel">
                        </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                              <label for="email">correo</label>
                              <input type="email" name="email" id="form-email">
                            </div>
                            <div class="form-group col-md-6">
                              <label for="nopersonas">no. de personas</label>
                              <input type="number" name="nopersonas" id="form-nopersonas" min="1" max="12">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-6">
                              <label for="date">fecha <span class="d-none d-md-inline">de reservación</span></label>
                              <input type="date" name="date" id="form-date" class="text-nowrap" style="text-transform: uppercase;">
                            </div>
                            <div class="form-group col-6">
                              <label for="time">hora</label>
                              <input type="time" name="time" id="form-time">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="mensaje">mensaje (opcional)</label>
                            <textarea id="form-mensaje" rows="1"></textarea>
                        </div>
                        <button type="submit" class="btn">Enviar</button>
                    </form> -->
                </div>
            </div>
        </section>
        <section id="eventos" class="container-fluid">
            <div class="row main-img">
                <div class="col-3 col-sm-6 px-0 position-relative">
                    <div class="cuadro"></div>
                </div>
                <div class="col-9 col-sm-6 px-0 h-100">
                    <img src="assets/img/eventos-img.jpg">
                </div>
            </div>
            <div class="row">
                <div class="col-12 px-0">
                    <div class="main-card">
                        <div class="container">
                            <h2 class="scrollApp">Eventos Privados</h2>
                            <hr class="gold scrollApp">
                            <p class="main-text scrollApp">
                                Cocina 113 abre sus puertas a eventos privados que quieran disfrutar el gusto por la buena mesa en un espacio de vanguardia, cálido y exclusivo, ubicado en una de las zonas de ocio más apetecidas de la ciudad.
                            </p>
                            <a href="contacto" class="more scrollApp">Contacto<img src="assets/icons/taketo.svg"></a>
                        </div>
                    </div>
                </div>
                <div class="cuadro-2"></div>
            </div>
        </section>
        <section id="galeria" class="container-fluid">
            <div class="row">
                <div class="col-galeria px-0" style="z-index: 2;">
                    <div class="main-card px-0">
                        <div class="container">
                            <h2 class="scrollApp">Galería</h2>
                            <hr class="gold scrollApp">
                            <p class="main-text scrollApp">
                                Cada imagen transmite la modernidad de nuestro espacio, la propuesta de nuestra cocina y la experiencia única de quienes nos visitan.
                            </p>
                            <a href="galeria" class="more scrollApp">Galería Completa<img src="assets/icons/taketo.svg"></a>
                        </div>
                    </div>
                </div>
                <div class="main-img px-0 scrollApp">
                    <div id="galeria-carousel" class="carousel slide" data-ride="carousel" data-interval="6000">
                      <div class="carousel-inner">
                        <div class="carousel-item active">
                          <img src="assets/img/galeria/galeria-img-24.jpeg" alt="" style="width: 110%;">
                        </div>
                        <div class="carousel-item">
                          <img src="assets/img/galeria/galeria-img-2.jpg" alt="Degustación de causas">
                        </div>
                        <div class="carousel-item">
                          <img src="assets/img/galeria/galeria-img-25.jpg" alt="">
                        </div>
                        <div class="carousel-item">
                          <img src="assets/img/galeria/galeria-img-16.jpg" alt="Aguadito de mariscos">
                        </div>
                      </div>
                    </div>
                </div>
                <div class="carousel-indicator">
                    <a href="#galeria-carousel" role="button" data-slide="prev">
                        <img src="assets/icons/arrow-prev.svg"  style="margin-right: 1.2rem;">
                    </a>
                    <span id="galeria-carousel-indicator">1 | 4</span>
                    <a id="galeriaNext" href="#galeria-carousel" role="button" data-slide="next">
                        <img src="assets/icons/arrow-next.svg"  style="margin-left: 1.2rem;">
                    </a>
                </div>
            </div>
        </section>
        <?php require("assets/includes/footer.html");?>
    </main>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="assets/js/scripts.js"></script>
    <script src="assets/js/scrollAppearEffect.js"></script>
    <script type="text/javascript">
        var menuimg = document.getElementById("menu-img");
        var menuimg1 = "assets/img/menu/menu-img-9.jpg"; 
        var menuimg2 = "assets/img/galeria/galeria-img-7.jpg";
        var menuimg3 = "assets/img/galeria/galeria-img-23.jpeg";
        var menuimages = [menuimg1, menuimg2, menuimg3];
        var menui = Math.floor(Math.random() * menuimages.length);
        menuimg.setAttribute("src",menuimages[menui]);
        function video() {
            var vid = document.getElementById("heroVideo"),
                btn = document.getElementById("btn-pp");
            if (btn.classList.contains("pause") || vid.paused) {
                vid.play();
                btn.classList.remove("pause");
                btn.getElementsByTagName("img")[0].setAttribute("src","assets/icons/pause-fill.svg");
            } else {
                vid.pause();
                btn.classList.add("pause");
                btn.getElementsByTagName("img")[0].setAttribute("src","assets/icons/play-fill.svg");
            }
        }
        setInterval(function() {
            var currentScrollPos = window.pageYOffset;
            if (currentScrollPos >= (window.innerHeight - (window.innerHeight * 0.1))) {
            document.getElementById("btn-nav").classList.add("nav-scroll");
            } else {
            document.getElementById("btn-nav").classList.remove("nav-scroll");
            }
            var itemM = document.getElementById("menu-carousel").getElementsByClassName("carousel-item"),
                indicatorM = document.getElementById("menu-carousel-indicator");
            for (var i = 0; i < itemM.length; i++) {
                if (itemM[i].classList.contains("active")) {
                    var nM = i + 1;
                    indicatorM.innerHTML = nM+" | "+itemM.length;
                }
            }
            var itemG = document.getElementById("galeria-carousel").getElementsByClassName("carousel-item"),
                indicatorG = document.getElementById("galeria-carousel-indicator");
            for (var j = 0; j < itemG.length; j++) {
                if (itemG[j].classList.contains("active")) {
                    var nG = j + 1;
                    indicatorG.innerHTML = nG+" | "+itemG.length;
                }
            }
        }, 50);
    </script>
</body>
</html>