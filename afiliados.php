<?php //include("./ra.web/includes/ValidaSession.php");?>
<!DOCTYPE html>
<html lang="es">

<head>
    <?php include("./ra.web/includes/Head.php"); ?>

</head>

<body>				
  <?php include("./ra.web/includes/HeadTopInvitado.php");?>
    
    <div class="hero-wrap js-fullheight" style="background-image: url('./ra.web/img/img3.jpg');" height: 890px; data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container-fluid px-md-5">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start" data-scrollax-parent="true">
          <div class="col-md-6 ftco-animate">
          	<!--<h2 class="subheading">Product Liabilty &amp; Personal Injury</h2>-->
            <h1 class="mb-4">Nuestos Afiliados</h1>
            <!--<p><a href="#" class="btn-custom mr-md-4">Get Legal Advice <span class="ion-ios-arrow-forward"></span></a> <a href="#" class="btn-custom">Request A Quote <span class="ion-ios-arrow-forward"></span></a></p>-->
          </div>
        </div>
      </div>
    </div>

    <!--<section class="ftco-section ftco-no-pb ftco-no-pt services-section">
      <div class="container-fluid px-md-5 py-3">
        <div class="row py-4 d-flex">
          <div class="col-md-3 services align-self-stretch ftco-animate">
            <div class="media-body">
            	<span class="num">01</span>
              <h3 class="heading mb-3"><a href="#">Get Your Legal Advice</a></h3>
              <p>Far far away, behind the word mountains, far from the countries</p>
            </div>
          </div>
          <div class="col-md-3 services align-self-stretch ftco-animate">
            <div class="media-body">
            	<span class="num">02</span>
              <h3 class="heading mb-3"><a href="#">Work with Expert Lawyers</a></h3>
              <p>Far far away, behind the word mountains, far from the countries</p>
            </div>
          </div>
          <div class="col-md-3 services align-self-stretch ftco-animate">
            <div class="media-body">
            	<span class="num">03</span>
              <h3 class="heading mb-3"><a href="#">Have Great Discounted Rates</a></h3>
              <p>Far far away, behind the word mountains, far from the countries</p>
            </div>
          </div>
          <div class="col-md-3 services align-self-stretch ftco-animate">
            <div class="media-body">
            	<span class="num">04</span>
              <h3 class="heading mb-3"><a href="#">Review Your Case Documents</a></h3>
              <p>Far far away, behind the word mountains, far from the countries</p>
            </div>
          </div>
        </div>
      </div>
    </section>-->

    <section class="ftco-section ftco-no-pt ftco-no-pb">
    	<div class="container">
    		<div class="row d-flex">
    			<div class="col-md-12 px-5 py-5">
    				<div class="row justify-content-start pt-3 pb-3">
		            <div class="col-md-12 heading-section ftco-animate">
                  <!--<div align="right">
                    <button type="button" class="btn btn-primary" onclick="mostrarModalAgregarAfiliado();">Agregar Afiliado</button>
                  </div>
		          	  <span class="subheading">Welcome to Judge</span>
		              <h2 class="mb-4">We Always Fight For Your Justice to Win</h2>
		              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
		              <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                  <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
                    -->
                  <div class="years d-flex">
                </div>
                <br>
                <div class="col-md-12 heading-section ftco-animate">
                  <table class="table" id="table_nuestros_directores">
                    <thead>
                      <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Sección</th>
                        <th scope="col">Dirección</th>
                        <th scope="col">Teléfono</th>
                        <th scope="col">Acción</th>
                      </tr>
                    </thead>
                    <tbody id="tbody_directores">
                      <!--<tr>
                        <th scope="row">Juan Manuel De lucio Ramirez</th>
                        <td>0236</td>
                        <td>Priv. Libertad #7</td>
                        <td>5531220199</td>
                        <td></td>
                      </tr>-->
                    </tbody>
                  </table>
                </div>
		          </div>
		        </div>
	        </div>
        </div>
    	</div>
    </section>
    
    <?php include("./ra.web/includes/HeaderEnd.php");?>
    <?php include("./ra.web/includes/HeadEnd.php");?>	
</body>
    <script src="./ra.web/js/afiliados.js"></script>
</html>





