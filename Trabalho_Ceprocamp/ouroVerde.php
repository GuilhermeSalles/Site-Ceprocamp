   <?php include 'header-menu.php' ?>


   <div id="carouselSite" class="carousel slide d-block" data-ride="carousel" data-interval="7000">
       <!-- Lista de riscos brancos do carrossel -->
       <div class="carousel-inner">
           <ol class="carousel-indicators">
               <li data-target="#carouselSite" data-slide-to="0"></li>
               <li data-target="#carouselSite" data-slide-to="1" class="active"></li>
               <li data-target="#carouselSite" data-slide-to="2"></li>
               <li data-target="#carouselSite" data-slide-to="3"></li>
               <li data-target="#carouselSite" data-slide-to="4"></li>
           </ol>
           <!-- Imagens com texto do carrossel -->
           <div class="carousel-item">
               <img src="img/CeprocampCentro.png" class="img-fluid d-block">
               <div class="carousel-caption">
                   <h1 class="d-sm-block d-none">CENTRO</h1>
                   <h5>Centro - Cursos de Qualificação e Técnicos.</h5>
                   <a class="btn btn-light" href="index" role="button">Saiba mais</a>
               </div>
           </div>

           <div class="carousel-item active">
               <img src="img/ouroverde.jpeg" class="img-fluid d-block">
               <div class="carousel-caption text-center">
                   <h1 class="d-sm-block d-none">Ouro Verde</h1>
                   <h5>Ouro Verde - Cursos de Qualificação.</h5>
                   <a class="btn btn-light" href="ouroVerde" role="button">Saiba mais</a>
               </div>
           </div>

           <div class="carousel-item">
               <img src="img/joseAlves.jpeg" class="img-fluid d-block">
               <div class="carousel-caption text-center">
                   <h1 class="d-sm-block d-none">José Alves</h1>
                   <h5>José Alves - Cursos de Qualificação.</h5>
                   <a class="btn btn-light" href="joseAlves" role="button">Saiba mais</a>
               </div>
           </div>

           <div class="carousel-item">
               <img src="img/cambara.jpeg" class="img-fluid d-block">
               <div class="carousel-caption text-center">
                   <h1 class="d-sm-block d-none">Cambará</h1>
                   <h5>Cambará - Cursos de Qualificação.</h5>
                   <a class="btn btn-light" href="cambara" role="button">Saiba mais</a>
               </div>
           </div>

           <div class="carousel-item">
               <img src="img/CeprocampCentro.png" class="img-fluid d-block">
               <div class="carousel-caption text-center">
                   <h1 class="d-sm-block d-none">Campo Grande</h1>
                   <h5>Campo Grande - Cursos de Qualificação.</h5>
                   <a class="btn btn-light" href="campoGrande" role="button">Saiba mais</a>
               </div>
           </div>
       </div>


       <!-- Botões de anterior e proximo do carrossel -->
       <a class="carousel-control-prev" href="#carouselSite" role="button" data-slide="prev">
           <span class="carousel-control-prev-icon"></span>
           <span class="sr-only">Anterior</span>
       </a>


       <a class="carousel-control-next" href="#carouselSite" role="button" data-slide="next">
           <span class="carousel-control-next-icon"></span>
           <span class="sr-only">Avançar</span>
       </a>

   </div>
   <br>
   <!-- Fim carrossel -->

   <!-- parte de avisos em um carrossel que passa de 5 em 5 segundos -->
   <br>
   <?php include 'avisos.php' ?>

   <!-- Parte cinza claro sobre o Local que deve colocar o google maps e alterar a descrissão-->
   <br>
   <div class="jumbotron jumbotron-fluid" data-anime="left">
       <div class="container">
           <div class="tab-content" id="nav-pills-content">
               <div class="tab-pane fade show active" id="nav-item-01" role="tabpanel">
                   <div class="row">
                       <div class="col-sm-5">
                           <!-- Parte da descrissão -->
                           <h1>Unidade Ouro Verde</h1>
                           <br>
                           <span style="font-weight: bold;">Endereço: </span>Rua armando frederico renganeschi, 61
                           <br>
                           Jardim Cristina (segundo andar), Campinas - SP. <br><span style="font-weight: bold;">CEP:</span>
                           13054-000.

                           <p style="font-weight: bold">Para mais informações:</p><span style="font-weight: bold;">Telefone:</span>
                           (19) 3731.3650. <br>
                           <span style="font-weight: bold;">E-mail:</span> <a style="color: #fe5722;" href="mailto:fumec.ceprocamp@campinas.sp.gov.br">fumec.ceprocamp@campinas.sp.gov.br</a>
                           </p>
                       </div>
                       <div class="col-sm-7">
                           <!-- Parte aonde deve colocar o google maps -->
                           <div id="mapf" class="col-sm-12">
                               <iframe class="map-big" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d4799.485797997356!2d-47.13339017357712!3d-22.965963083609772!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x5be64393779d4ca9!2sVarej%C3%A3o%20Brasil!5e1!3m2!1spt-BR!2sbr!4v1621536572950!5m2!1spt-BR!2sbr" width="650" height="450" style="border: 1px solid black; border-radius: 5px;" allowfullscreen="" loading="lazy"></iframe>
                               <iframe class="map-small" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d4799.485797997356!2d-47.13339017357712!3d-22.965963083609772!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x5be64393779d4ca9!2sVarej%C3%A3o%20Brasil!5e1!3m2!1spt-BR!2sbr!4v1621536572950!5m2!1spt-BR!2sbr" width="250" height="150" style="border:1px solid black; border-radius: 5px;" allowfullscreen="" loading="lazy"></iframe>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </div>
   </div>

   <?php include 'footer.php' ?>