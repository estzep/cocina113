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
    <link rel="canonical" href="https://cocina113.com/contacto">
    <meta name="url" content="https://cocina113.com/contacto">
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
    <?php require("../assets/includes/navigation.html");?>
    <main id="contacto-index">

      <div class="alert alert-success alert-dismissible fade" role="alert" style="position: fixed; top: 1%; left: 1%; z-index: 2;">
        <strong>Tu mensaje se ha enviado!</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

        <section class="container-fluid">
            <div class="row">
                <div class="col-12 col-sm-7 col-md-7 col-lg-6 col-xl-5 px-0" style="z-index: 1;">
                    <div class="main-card">
                        <div class="container">
                            <h2>Contacto</h2>
                            <hr class="gold">
                            <p class="main-text">
                                Ponte en contacto con nosotros. Te contestaremos a la brevedad.
                                <br>
                                <br>
                                teléfono:
                                <br>
                                <a href="+525535433133" class="text-decoration-none main-text mb-0">55 3543 3133</a>
                                <br>
                                <a href="+523221342225" class="text-decoration-none main-text mb-0">322 134 2225</a>
                            </p>
                            
                            <!-- <form class="h5 font-weight-normal needs-validation" action="contacto.php" method="post" autocomplete="on" novalidate>
                              <div class="form-row">
                                <div class="form-group col-12">
                                  <input type="text" name="name" id="name" class="form-control" autocomplete="name" placeholder="Nombre y Apellido" required>
                                </div>
                              </div>
                              <div class="form-row">
                                <div class="form-group col-12 col-md-6">
                                  <input type="email" name="email" id="email" class="form-control" autocomplete="email" placeholder="Email" required>
                                </div>
                                <div class="form-group col-12 col-md-6">
                                  <input type="tel" name="phone" id="phone" class="form-control" autocomplete="tel" placeholder="Teléfono (Opcional)">
                                </div>
                              </div>
                              <div class="form-row">
                                <div class="form-group col-12">
                                  <input type="text" name="subject" id="subject" class="form-control" placeholder="Asunto" required>
                                </div>
                              </div>
                              <div class="form-row">
                                <div class="form-group col-12">
                                  <textarea name="message" id="message" class="form-control" placeholder="Mensaje" maxlength="500" rows="5" required></textarea>
                                </div>
                              </div>
                              <button id="enviarBtn" class="d-block mx-auto px-5 py-2 mt-4" type="submit" name="submit">Enviar</button>
                            </form> -->

                            <form id="contacto-form" class="main-text mb-0 needs-validation" action="contacto.php" method="post" autocomplete="on">
                                <div class="form-row">
                                    <div class="form-group col-sm-12 col-md-6">
                                      <label for="form-name">nombre y apellido</label>
                                      <!-- <input type="text" name="name" id="name" class="form-control" autocomplete="name" placeholder="Nombre y Apellido" required> -->
                                      <input type="text" name="name" id="form-name" class="form-control" autocomplete="name" required>
                                    </div>
                                <div class="form-group col-sm-12 col-md-6">
                                  <label for="form-phone">teléfono</label>
                                  <!-- <input type="tel" name="phone" id="phone" class="form-control" autocomplete="tel" placeholder="Teléfono (Opcional)"> -->
                                  <input type="tel" name="phone" id="form-phone" class="form-control" autocomplete="tel">
                                </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-sm-12 col-md-6">
                                      <label for="form-email">correo</label>
                                      <!-- <input type="email" name="email" id="email" class="form-control" autocomplete="email" placeholder="Email" required> -->
                                      <input type="email" name="email" id="form-email" class="form-control" autocomplete="email" required>
                                    </div>
                                    <div class="form-group col-sm-12 col-md-6">
                                      <label for="form-subject">asunto</label>
                                      <!-- <input type="text" name="subject" id="subject" class="form-control" placeholder="Asunto" required> -->
                                      <input type="subject" name="subject" id="form-subject" class="form-control" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="form-message">mensaje (opcional)</label>
                                    <!-- <textarea name="message" id="message" class="form-control" placeholder="Mensaje" maxlength="500" rows="5" required></textarea> -->
                                    <textarea name="message" id="form-message" class="form-control" rows="3" maxlength="500" required></textarea>
                                </div>
                                <button type="submit" name="submit" class="btn">Enviar</button>
                            </form>
                        </div>
                    </div>
                    <div class="cuadro d-block d-sm-none"></div>
                </div>
                <div class="col-12 col-sm-5 col-md-5 col-lg-6 col-xl-7 px-0 text-right">
                    <img src="../assets/img/reservaciones-img-3.jpg" class="main-img">
                    <div class="cuadro d-none d-sm-block"></div>
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
      var sent = window.location.search;
      var alert = document.getElementsByClassName("alert")[0];
      if (sent == "?mail=sent") {
        alert.classList.add("show");
      }
      document.getElementById("btn-nav").classList.add("nav-scroll");
      setInterval(function() {
          var currentScrollPos = window.pageYOffset;
            if (currentScrollPos >= 0) {
              document.getElementById("btn-nav").classList.add("nav-scroll");
            } else {
              document.getElementById("btn-nav").classList.remove("nav-scroll");
            }
      }, 50);
    </script>
</body>
</html>