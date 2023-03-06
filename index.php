<!DOCTYPE html>
<html>
  <head>
    <title>CODE CASTLE - Aplicaciones móviles, Páginas web, Marketing Digital</title>
    <meta charset='utf-8'>
    <meta content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=no" name="viewport">
    <meta content="Nosotros tenemos la clave para que puedas generar ingresos desde casa" name="description">
    <meta content="Code Castle SA de CV" name="autor">
    <meta content="aplicaciones móviles, páginas web, sistemas web, redes sociales, marketing, el salvador" name="keywords">
    <meta name="facebook-domain-verification" content="hek0emiw9mz3mqsskh8t8w6eydl9e6" />
    <meta property="og:image" content="https://codecastle.dev/assets/images/logo_letters.png" />
    <meta property="og:description" content="Desarrollo de apps, tiendas en línea, sistemas a la medida." />

    <meta property="og:title" content="Code Castle" />
    <meta property="og:type" content="video.movie" />
    <meta property="og:url" content="https://codecastle.dev/assets/images/logo_letters.png" />


    <link href="assets/images/favicon.ico" rel="shortcut icon">
    <!-- css -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="assets/stylesheets/application.css">
    <!-- scripts -->
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script type="text/javascript" src="assets/javascripts/application.js"></script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-162754636-1"></script>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-162754636-1');
    </script>
    <script src="https://www.google.com/recaptcha/api.js"></script>
    <!-- Facebook Pixel Code -->
    <!--<script>
      !function(f,b,e,v,n,t,s)
      {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
      n.callMethod.apply(n,arguments):n.queue.push(arguments)};
      if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
      n.queue=[];t=b.createElement(e);t.async=!0;
      t.src=v;s=b.getElementsByTagName(e)[0];
      s.parentNode.insertBefore(t,s)}(window, document,'script',
      'https://connect.facebook.net/en_US/fbevents.js');
      fbq('init', '580106525939440');
      fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
      src="https://www.facebook.com/tr?id=580106525939440&ev=PageView&noscript=1"
    /></noscript>-->
    <!-- End Facebook Pixel Code -->

	<!-- Facebook Pixel Code -->
	<script>
	!function(f,b,e,v,n,t,s)
	{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
	n.callMethod.apply(n,arguments):n.queue.push(arguments)};
	if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
	n.queue=[];t=b.createElement(e);t.async=!0;
	t.src=v;s=b.getElementsByTagName(e)[0];
	s.parentNode.insertBefore(t,s)}(window, document,'script',
	'https://connect.facebook.net/en_US/fbevents.js');
	fbq('init', '644225450317393');
	fbq('track', 'PageView');
	</script>
	<noscript><img height="1" width="1" style="display:none"
	src="https://www.facebook.com/tr?id=644225450317393&ev=PageView&noscript=1"
	/></noscript>
	<!-- End Facebook Pixel Code -->
  </head>
  <body>
    <div class="container-fluid">
      <div class="row intro-section">
        <div class="col-md-6 col-sm-12 background-black">
          <img src="assets/images/logo_letters.png" class="logo">
          <div class="row intro-text">
            <div class="col-md-4 col-sm-12">
              <h1 class="text-white">Crecimiento digital</h1>
              <h1 class="text-blue">para tu negocio</h1>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-sm-12 background-blue">
          <div class="row icon-service-container">
            <div class="col-md-4 col-sm-12 icon-service">
              <img src="assets/images/hand.svg">
              <p>Redes sociales</p>
            </div>
            <div class="col-md-4 col-sm-12 icon-service">
              <img src="assets/images/shopping-cart.svg">
              <p>Tienda en línea</p>
            </div>
            <div class="col-md-4 col-sm-12 icon-service">
              <img src="assets/images/app.svg">
              <p>Apps</p>
            </div>
          </div>
        </div>
      </div>
      <div class="row form-container">
        <div class="col-10 offset-1">
          <h2 class="align-center blue-text">Apasionados por ver crecer<br />tu negocio</h2>
          <br><br>
	  <?php echo $_GET["r"] == "s" ? "<div class='alert alert-success' style='text-align: center'>Tu información ha sido enviada, pronto alguien se contactará contigo</div>" : "" ?>
          <form class="form" action="sendMail.php" method="POST" id="form">
            <div class="row">
              <div class="col-md-6 col-sm-12">
                <div class="form-group">
                  <label for="customer-name">Dínos tu nombre completo</label>
                  <input type="text" class="form-control" id="customer-name" name="customer-name" required>
                </div>
              </div>
              <div class="col-md-6 col-sm-12">
                <div class="form-group">
                  <label for="customer-email">Correo electrónico para enviarnos e-mails</label>
                  <input type="text" class="form-control" id="customer-email" name="customer-email" required>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6 col-sm-12">
                <div class="form-group">
                  <label for="customer-phone">Whatsapp para podernos comunicar contigo</label>
                  <input type="text" class="form-control" id="customer-phone" name="customer-phone" placeholder="Opcional">
                </div>
              </div>
              <div class="col-md-6 col-sm-12">
                <div class="form-group">
                  <label for="customer-company-description">¿En qué tipo de servicio estas interesado?</label>
                  <select class="form-control customer-want-service" name="customer-want-service" required>
                    <option>--Escoge una opción--</option>
                    <option value="website">Un grandioso SITIO WEB</option>
                    <option value="socialmedia">Quiero inicar con REDES SOCIALES o mejorar mi ESTRATEGÍA DIGITAL</option>
                    <option value="app">Una súper APLICACIÓN MÓVIL</option>
                    <option value="software">Un ordenado SISTEMA A LA MEDIDA</option>
                    <option value="software">Un BOT para atender a mis clientes</option>
                    <option value="otro">Otro tipo de servicio referente a tecnología e informática</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-12">
                <div class="form-group">
                  <label for="customer-has-company">¿Tienes alguna empresa o emprendimiento?</label>
                  <select class="form-control customer-has-company" name="customer-has-company" required>
                    <option>--Escoge una opción--</option>
                    <option value="Y">Si, y es grandioso</option>
                    <option value="N">No, pero quiero iniciar</option>
                  </select>
                </div>
              </div>              
            </div>
            <div class="hidden customer-company-data">
              <div class="row">
                <div class="col-md-6 col-sm-12">
                  <div class="form-group">
                    <label for="customer-company-name">Nombre de empresa o emprendimiento</label>
                    <input type="text" class="form-control" id="customer-company-name" name="customer-company-name">
                  </div>
                </div>
                <div class="col-md-6 col-sm-12">
                  <div class="form-group">
                    <label for="customer-company-link">¿Tienes algún link donde podamos conocer más?</label>
                    <input type="text" class="form-control" id="customer-company-link" name="customer-company-link">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-12">
                  <div class="form-group">
                    <label for="customer-company-description">Cuéntanos de que trata para poderte brindar un servicio más adecuado hacia tí</label>
                    <textarea id="customer-company-description" name="customer-company-description"></textarea>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
                <div class="col-12 align-center">
                  <div class="form-group">
                    <!--input type="submit" class="btn btn-info col-4"-->
		    <button class="g-recaptcha btn btn-info col-4" data-sitekey="6Lf697AfAAAAAOJF3Zx97JSjVTmOrk2HjpeA9jJJ" data-callback="onSubmit" data-action="submit">Enviar</Button>
                  </div>
                </div>
              </div>
          </form>
        </div>
      </div>
      <br>
      <br>
      <div class="row">
        <div class="col-md-8 offset-md-2 col-xs-12">
          <h2 class="align-center blue-text">¡Ellos ya confían en nosotros!</h2>
          <div id="carousel-customers" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carousel-customers" data-slide-to="0" class="active"></li>
              <li data-target="#carousel-customers" data-slide-to="1"></li>
              <li data-target="#carousel-customers" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <div class="row">
                  <div class="col-md-4 col-12">
                    <img class="img-fluid" src="assets/images/customers/delsur.png">    
                  </div>
                  <div class="col-md-4 col-12">
                    <img class="img-fluid"  src="assets/images/customers/fedecredito.png">
                  </div>
                  <div class="col-md-4 col-12">
                    <img class="img-fluid"  src="assets/images/customers/premium-brands.png">
                  </div>
                </div>
              </div>
              <div class="carousel-item">
                <div class="row">
                  <div class="col-md-4 col-12">
                    <img class="img-fluid"  src="assets/images/customers/laboratorios-paill.png">
                  </div>
                  <div class="col-md-4 col-12">
                    <img class="img-fluid"  src="assets/images/customers/queensshoes.png">   
                  </div>
                  <div class="col-md-4 col-12">
                    <img class="img-fluid"  src="assets/images/customers/teleperformance.png">
                  </div>
                </div>
              </div>
              <div class="carousel-item">
                <div class="row">
                  <div class="col-md-4 col-12">
                    <img class="img-fluid"  src="assets/images/customers/publimovil.png">
                  </div>
                  <div class="col-md-4 col-12">
                    <img class="img-fluid"  src="assets/images/customers/lutheran-world-relief.png">
                  </div>
                  <div class="col-md-4 col-12">
                    <img class="img-fluid"  src="assets/images/customers/centro-cultural-salvadoreno.png">
                  </div>
                </div>
              </div>
              <div class="carousel-item">
              <div class="row">
                <div class="col-md-4 col-12">
                  <img class="img-fluid"  src="assets/images/customers/cifco.png">
                </div>
                <div class="col-md-4 col-12">
                  <img class="img-fluid"  src="assets/images/customers/racor.png">
                </div>
                <div class="col-md-4 col-12">
                  <img class="img-fluid"  src="assets/images/customers/banco-hipotecario.png">
                </div>
              </div>
            </div>
            <a class="carousel-control-prev" href="#carousel-customers" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only"><</span>
            </a>
            <a class="carousel-control-next" href="#carousel-customers" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">></span>
            </a>
          </div>
        </div>
      </div>
      <div class="col-md-12 footer">
       <p class="copyright">Todos los derechos reservados</p>
       <p class="copyright"><a href="/politicas-privacidad.html">Políticas de privacidad<a></p>
      </div>
    </div>
    <script>
     function onSubmit(token) {
       document.getElementById("form").submit();
     }
    </script>
    <!-- Start of HubSpot Embed Code -->
      <script type="text/javascript" id="hs-script-loader" async defer src="//js.hs-scripts.com/5369811.js"></script>
    <!-- End of HubSpot Embed Code -->
  </body>
</html>


