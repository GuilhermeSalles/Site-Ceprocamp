   <?php include 'header-menu.php' ?>
   <style>
       @import url('https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');


       .btn-primary:hover,
       .btn-primary:focus {
           background-color: #fe5722;
           border-color: #fe5722;
           box-shadow: none;
           outline: none;
       }

       .btn-primary {
           color: #fff;
           background-color: #007b5e;
           border-color: #007b5e;
       }

       section {
           padding: 40px 0;
       }

       #team .card {
           border: none;
           background: #FEF4F1;
       }

       .image-flip:hover .backside,
       .image-flip.hover .backside {
           -webkit-transform: rotateY(0deg);
           -moz-transform: rotateY(0deg);
           -o-transform: rotateY(0deg);
           -ms-transform: rotateY(0deg);
           transform: rotateY(0deg);
           border-radius: .25rem;
       }

       .image-flip:hover .frontside,
       .image-flip.hover .frontside {
           -webkit-transform: rotateY(180deg);
           -moz-transform: rotateY(180deg);
           -o-transform: rotateY(180deg);
           transform: rotateY(180deg);
       }

       .mainflip {
           -webkit-transition: 1s;
           -webkit-transform-style: preserve-3d;
           -ms-transition: 1s;
           -moz-transition: 1s;
           -moz-transform-style: preserve-3d;
           -ms-transform-style: preserve-3d;
           transition: 1s;
           transform-style: preserve-3d;
           position: relative;
       }

       .frontside {
           position: relative;
           z-index: 2;
           margin-bottom: 50px;
       }

       .backside {
           position: absolute;
           top: 0;
           left: 0;
           background: white;
           -webkit-transform: rotateY(-180deg);
           -moz-transform: rotateY(-180deg);
           -o-transform: rotateY(-180deg);
           -ms-transform: rotateY(-180deg);
           transform: rotateY(-180deg);
           -webkit-box-shadow: 5px 7px 9px -4px rgb(158, 158, 158);
           -moz-box-shadow: 5px 7px 9px -4px rgb(158, 158, 158);
           box-shadow: 5px 7px 9px -4px rgb(158, 158, 158);
       }

       .frontside,
       .backside {
           -webkit-backface-visibility: hidden;
           -moz-backface-visibility: hidden;
           -ms-backface-visibility: hidden;
           backface-visibility: hidden;
           -webkit-transition: 1s;
           -webkit-transform-style: preserve-3d;
           -moz-transition: 1s;
           -moz-transform-style: preserve-3d;
           -o-transition: 1s;
           -o-transform-style: preserve-3d;
           -ms-transition: 1s;
           -ms-transform-style: preserve-3d;
           transition: 1s;
           transform-style: preserve-3d;
       }

       .frontside .card,
       .backside .card {
           min-height: 412px;
       }

       .backside .card a {
           font-size: 18px;
           color: #fe5722 !important;
       }

       .frontside .card .card-title,
       .backside .card .card-title {
           color: #fe5722 !important;
       }

       .frontside .card .card-body img {
           width: 120px;
           height: 120px;
           border-radius: 45%;
       }

       section {
           margin-bottom: 20px;
       }

       .container {
           padding-right: 15px;
           padding-left: 15px;
           margin-right: auto;
           margin-left: auto;
       }

       .ct-row {
           margin-left: -5px;
           margin-right: -5px;
           display: -webkit-box;
           display: -ms-flexbox;
           display: flex;
       }

       .ct-sectional-box {
           display: -webkit-box;
           display: -ms-flexbox;
           display: flex;
           max-width: 100%;
           -webkit-box-orient: vertical;
           -webkit-box-direction: normal;
           -ms-flex-direction: column;
           flex-direction: column;
           padding: 0 5px 5px 5px;
       }

       .ct-sectional-box .title {
           font-family: Arial Narrow, Arial, sans-serif;
           font-weight: 600;
           position: relative;
           font-size: 24px;
           margin: 5px 0 10px;
           display: -webkit-box;
           display: -ms-flexbox;
           display: flex;
           -webkit-box-align: center;
           -ms-flex-align: center;
           align-items: center;
           line-height: 0.9;
           min-height: 87px;
           text-transform: uppercase;
           -webkit-transition: background-color 0.15s ease-in-out;
           transition: background-color 0.15s ease-in-out;
       }

       .ct-sectional-box .title::after {
           content: '';
           background: url(https://raw.githubusercontent.com/solodev/column-links/master/images/arrow-right-white.png);
           width: 14px;
           height: 27px;
           position: absolute;
           right: 30px;
           top: 50%;
           margin-top: -13.5px;
       }

       .ct-sectional-box .title a {
           display: block;
           padding: 10px 100px 10px 34px;
           max-width: 100%;
           color: inherit;
           position: relative;
           z-index: 1;
           -webkit-box-flex: 1;
           -ms-flex: 1 0 auto;
           flex: 1 0 auto;
       }

       .ct-sectional-box .title a:hover {
           text-decoration: none;
       }

       .ct-sectional-box .inner {
           background: #faf9f9;
           -webkit-box-flex: 1;
           -ms-flex: 1 0 auto;
           flex: 1 0 auto;
       }

       .ct-sectional-box ul {
           font-size: 18px;
           padding: 30px 20px 30px 55px;
       }


       /* box blue */

       .ct-sectional-box--blue .title {
           background: #00719b;
           color: #fff;
       }

       .ct-sectional-box--blue .title:hover {
           background: #0094cb;
       }

       /* box red */

       .ct-sectional-box--red .title {
           background: #e81e26;
           color: #fff;
       }

       .ct-sectional-box--red .title:hover {
           background: #d11118;
       }

       /* box green */

       .ct-sectional-box--green .title {
           background: #6f9e2e;
           color: #fff;
       }

       .ct-sectional-box--green .title:hover {
           background: #78ab33;
       }

       /* Media Queries */

       @media (min-width: 992px) {
           .ct-sectional-box {
               -webkit-box-flex: 1;
               -ms-flex: 1 1 33.3333%;
               flex: 1 1 33.3333%;
               max-width: 33.3333%;
           }
       }

       @media (max-width: 991px) {
           .ct-row {
               -webkit-box-orient: vertical;
               -webkit-box-direction: normal;
               -ms-flex-direction: column;
               flex-direction: column;
           }
       }
   </style>

   <br>
   <br>

   <!-- Texto NIT -->
   <div class="container">
       <div class="row">

           <br>
           <br>

           <h1 style="color: rgb(75, 75, 75);">NIT CEPROCAMP</h1>
           <hr class="NIT">
           <div class="col-sm-12 col-md-6 col-xs-6">
               <img src="unnamed.png" class="img-fluid">
           </div>
           <div class="col-sm-12 col-md-6 col-xs-6">
               <p class="text-justify" style="font-size: large;">O Núcleo de Interação Tecnológica (NIT) é um setor no CEPROCAMP responsável pela
                   criação, administração, manutenção e expansão do uso de recursos tecnológicos para manter contato
                   com o candidato, aluno ativo ou aluno egresso bem como inserir o CEPROCAMP no meio digital e em
                   contato mais próximo com o público.</p>
           </div>


       </div>


       <br>


       <div class="row">
           <hr class="NIT">

           <div class="col-12 text-center">
               <br>
               <h1 style="font-weight: bold; color: rgb(75, 75, 75);"> Equipe NIT</h1>
           </div>
           <br>

           <!-- Team -->
           <section id="team" class="pb-5">
               <div class="container">

                   <div class="row">
                       <!-- Team member -->
                       <div class="col-xs-12 col-sm-6 col-md-4">
                           <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                               <div class="mainflip">
                                   <div class="frontside">
                                       <div class="card">
                                           <div class="card-body text-center">
                                               <p><img class=" img-fluid" src="img/gui.jpeg" alt="card image"></p>
                                               <h4 class="card-title">Sunlimetech</h4>
                                               <p class="card-text">This is basic card with image on top, title, description and button.</p>

                                           </div>
                                       </div>
                                   </div>
                                   <div class="backside">
                                       <div class="card">
                                           <div class="card-body text-center mt-4">
                                               <h4 class="card-title">Sunlimetech</h4>
                                               <p class="card-text">This is basic card with image on top, title, description and button.This is basic card with image on top, title, description and button.This is basic card with image on top, title, description and button.</p>
                                               <ul class="list-inline">
                                                   <li class="list-inline-item">
                                                       <a class="social-icon text-xs-center" target="_blank" href="#">
                                                           <i class="fa fa-facebook"></i>
                                                       </a>
                                                   </li>
                                                   <li class="list-inline-item">
                                                       <a class="social-icon text-xs-center" target="_blank" href="#">
                                                           <i class="fa fa-twitter"></i>
                                                       </a>
                                                   </li>
                                                   <li class="list-inline-item">
                                                       <a class="social-icon text-xs-center" target="_blank" href="#">
                                                           <i class="fa fa-linkedin"></i>
                                                       </a>
                                                   </li>
                                                   <li class="list-inline-item">
                                                       <a class="social-icon text-xs-center" target="_blank" href="#">
                                                           <i class="fa fa-google"></i>
                                                       </a>
                                                   </li>
                                               </ul>
                                           </div>
                                       </div>
                                   </div>
                               </div>
                           </div>
                       </div>
                       <!-- ./Team member -->
                       <!-- Team member -->
                       <div class="col-xs-12 col-sm-6 col-md-4">
                           <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                               <div class="mainflip">
                                   <div class="frontside">
                                       <div class="card">
                                           <div class="card-body text-center">
                                               <p><img class=" img-fluid" src="img/gui.jpeg" alt="card image"></p>
                                               <h4 class="card-title">Sunlimetech</h4>
                                               <p class="card-text">This is basic card with image on top, title, description and button.</p>

                                           </div>
                                       </div>
                                   </div>
                                   <div class="backside">
                                       <div class="card">
                                           <div class="card-body text-center mt-4">
                                               <h4 class="card-title">Sunlimetech</h4>
                                               <p class="card-text">This is basic card with image on top, title, description and button.This is basic card with image on top, title, description and button.This is basic card with image on top, title, description and button.</p>
                                               <ul class="list-inline">
                                                   <li class="list-inline-item">
                                                       <a class="social-icon text-xs-center" target="_blank" href="#">
                                                           <i class="fa fa-facebook"></i>
                                                       </a>
                                                   </li>
                                                   <li class="list-inline-item">
                                                       <a class="social-icon text-xs-center" target="_blank" href="#">
                                                           <i class="fa fa-twitter"></i>
                                                       </a>
                                                   </li>
                                                   <li class="list-inline-item">
                                                       <a class="social-icon text-xs-center" target="_blank" href="#">
                                                           <i class="fa fa-linkedin"></i>
                                                       </a>
                                                   </li>
                                                   <li class="list-inline-item">
                                                       <a class="social-icon text-xs-center" target="_blank" href="#">
                                                           <i class="fa fa-google"></i>
                                                       </a>
                                                   </li>
                                               </ul>
                                           </div>
                                       </div>
                                   </div>
                               </div>
                           </div>
                       </div>
                       <!-- ./Team member -->
                       <!-- Team member -->
                       <div class="col-xs-12 col-sm-6 col-md-4">
                           <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                               <div class="mainflip">
                                   <div class="frontside">
                                       <div class="card">
                                           <div class="card-body text-center">
                                               <p><img class=" img-fluid" src="img/gui.jpeg" alt="card image"></p>
                                               <h4 class="card-title">Sunlimetech</h4>
                                               <p class="card-text">This is basic card with image on top, title, description and button.</p>

                                           </div>
                                       </div>
                                   </div>
                                   <div class="backside">
                                       <div class="card">
                                           <div class="card-body text-center mt-4">
                                               <h4 class="card-title">Sunlimetech</h4>
                                               <p class="card-text">This is basic card with image on top, title, description and button.This is basic card with image on top, title, description and button.This is basic card with image on top, title, description and button.</p>
                                               <ul class="list-inline">
                                                   <li class="list-inline-item">
                                                       <a class="social-icon text-xs-center" target="_blank" href="#">
                                                           <i class="fa fa-facebook"></i>
                                                       </a>
                                                   </li>
                                                   <li class="list-inline-item">
                                                       <a class="social-icon text-xs-center" target="_blank" href="#">
                                                           <i class="fa fa-twitter"></i>
                                                       </a>
                                                   </li>
                                                   <li class="list-inline-item">
                                                       <a class="social-icon text-xs-center" target="_blank" href="#">
                                                           <i class="fa fa-linkedin"></i>
                                                       </a>
                                                   </li>
                                                   <li class="list-inline-item">
                                                       <a class="social-icon text-xs-center" target="_blank" href="#">
                                                           <i class="fa fa-google"></i>
                                                       </a>
                                                   </li>
                                               </ul>
                                           </div>
                                       </div>
                                   </div>
                               </div>
                           </div>
                       </div>
                       <!-- ./Team member -->
                       <!-- Team member -->
                       <div class="col-xs-12 col-sm-6 col-md-4">
                           <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                               <div class="mainflip">
                                   <div class="frontside">
                                       <div class="card">
                                           <div class="card-body text-center">
                                               <p><img class=" img-fluid" src="img/gui.jpeg" alt="card image"></p>
                                               <h4 class="card-title">Sunlimetech</h4>
                                               <p class="card-text">This is basic card with image on top, title, description and button.</p>

                                           </div>
                                       </div>
                                   </div>
                                   <div class="backside">
                                       <div class="card">
                                           <div class="card-body text-center mt-4">
                                               <h4 class="card-title">Sunlimetech</h4>
                                               <p class="card-text">This is basic card with image on top, title, description and button.This is basic card with image on top, title, description and button.This is basic card with image on top, title, description and button.</p>
                                               <ul class="list-inline">
                                                   <li class="list-inline-item">
                                                       <a class="social-icon text-xs-center" target="_blank" href="#">
                                                           <i class="fa fa-facebook"></i>
                                                       </a>
                                                   </li>
                                                   <li class="list-inline-item">
                                                       <a class="social-icon text-xs-center" target="_blank" href="#">
                                                           <i class="fa fa-twitter"></i>
                                                       </a>
                                                   </li>
                                                   <li class="list-inline-item">
                                                       <a class="social-icon text-xs-center" target="_blank" href="#">
                                                           <i class="fa fa-linkedin"></i>
                                                       </a>
                                                   </li>
                                                   <li class="list-inline-item">
                                                       <a class="social-icon text-xs-center" target="_blank" href="#">
                                                           <i class="fa fa-google"></i>
                                                       </a>
                                                   </li>
                                               </ul>
                                           </div>
                                       </div>
                                   </div>
                               </div>
                           </div>
                       </div>
                       <!-- ./Team member -->
                       <!-- Team member -->
                       <div class="col-xs-12 col-sm-6 col-md-4">
                           <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                               <div class="mainflip">
                                   <div class="frontside">
                                       <div class="card">
                                           <div class="card-body text-center">
                                               <p><img class=" img-fluid" src="img/gui.jpeg" alt="card image"></p>
                                               <h4 class="card-title">Sunlimetech</h4>
                                               <p class="card-text">This is basic card with image on top, title, description and button.</p>

                                           </div>
                                       </div>
                                   </div>
                                   <div class="backside">
                                       <div class="card">
                                           <div class="card-body text-center mt-4">
                                               <h4 class="card-title">Sunlimetech</h4>
                                               <p class="card-text">This is basic card with image on top, title, description and button.This is basic card with image on top, title, description and button.This is basic card with image on top, title, description and button.</p>
                                               <ul class="list-inline">
                                                   <li class="list-inline-item">
                                                       <a class="social-icon text-xs-center" target="_blank" href="#">
                                                           <i class="fa fa-facebook"></i>
                                                       </a>
                                                   </li>
                                                   <li class="list-inline-item">
                                                       <a class="social-icon text-xs-center" target="_blank" href="#">
                                                           <i class="fa fa-twitter"></i>
                                                       </a>
                                                   </li>
                                                   <li class="list-inline-item">
                                                       <a class="social-icon text-xs-center" target="_blank" href="#">
                                                           <i class="fa fa-linkedin"></i>
                                                       </a>
                                                   </li>
                                                   <li class="list-inline-item">
                                                       <a class="social-icon text-xs-center" target="_blank" href="#">
                                                           <i class="fa fa-google"></i>
                                                       </a>
                                                   </li>
                                               </ul>
                                           </div>
                                       </div>
                                   </div>
                               </div>
                           </div>
                       </div>
                       <!-- ./Team member -->
                       <!-- Team member -->
                       <div class="col-xs-12 col-sm-6 col-md-4">
                           <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                               <div class="mainflip">
                                   <div class="frontside">
                                       <div class="card">
                                           <div class="card-body text-center">
                                               <p><img class=" img-fluid" src="img/gui.jpeg" alt="card image"></p>
                                               <h4 class="card-title">Sunlimetech</h4>
                                               <p class="card-text">This is basic card with image on top, title, description and button.</p>

                                           </div>
                                       </div>
                                   </div>
                                   <div class="backside">
                                       <div class="card">
                                           <div class="card-body text-center mt-4">
                                               <h4 class="card-title">Sunlimetech</h4>
                                               <p class="card-text">This is basic card with image on top, title, description and button.This is basic card with image on top, title, description and button.This is basic card with image on top, title, description and button.</p>
                                               <ul class="list-inline">
                                                   <li class="list-inline-item">
                                                       <a class="social-icon text-xs-center" target="_blank" href="#">
                                                           <i class="fa fa-facebook"></i>
                                                       </a>
                                                   </li>
                                                   <li class="list-inline-item">
                                                       <a class="social-icon text-xs-center" target="_blank" href="#">
                                                           <i class="fa fa-twitter"></i>
                                                       </a>
                                                   </li>
                                                   <li class="list-inline-item">
                                                       <a class="social-icon text-xs-center" target="_blank" href="#">
                                                           <i class="fa fa-linkedin"></i>
                                                       </a>
                                                   </li>
                                                   <li class="list-inline-item">
                                                       <a class="social-icon text-xs-center" target="_blank" href="#">
                                                           <i class="fa fa-google"></i>
                                                       </a>
                                                   </li>
                                               </ul>
                                           </div>
                                       </div>
                                   </div>
                               </div>
                           </div>
                       </div>
                       <!-- ./Team member -->
                   </div>
               </div>
           </section>
       </div>

       <div>


       </div>
   </div>

   <br>



   <div class="container">



       <div class="row">
           <div class="col-12 text-center">
               <h1 style="font-weight: bold; color: rgb(75, 75, 75);"> Links NIT</h1>
               <hr class="NIT">
           </div>
       </div>

       <br>

       <div class="col-sm-12 col-md-12">
           <section>
               <div class="container">
                   <div class="ct-row">
                       <div class="ct-sectional-box ct-sectional-box--blue">
                           <h2 class="title"><a>ATAS</a></h2>
                           <div class="inner">
                               <ul>
                                   <li><a class="linkNIT" href="https://fumec.sp.gov.br/sites/www.fumec.sp.gov.br/files/ceprocamp/arquivos/ata_nit_01.2021.pdf">ATA NIT 01/2021</a></li>
                                   <li><a class="linkNIT" href="https://fumec.sp.gov.br/sites/www.fumec.sp.gov.br/files/ceprocamp/arquivos/ata_nit_02.2021.pdf">ATA NIT 02/2021</a></li>
                                   <li><a class="linkNIT" href="https://fumec.sp.gov.br/sites/www.fumec.sp.gov.br/files/ceprocamp/arquivos/ata_nit_03.2021.pdf">ATA NIT 03/2021</a></li>
                                   <li><a class="linkNIT" href="https://fumec.sp.gov.br/sites/www.fumec.sp.gov.br/files/ceprocamp/arquivos/ata_nit_04.2021.pdf">ATA NIT 04/2021</a></li>
                                   <li><a class="linkNIT" href="https://fumec.sp.gov.br/sites/www.fumec.sp.gov.br/files/ceprocamp/arquivos/ata_nit_05.2021.pdf">ATA NIT 05/2021</a></li>
                                   <li><a class="linkNIT" href="https://fumec.sp.gov.br/sites/www.fumec.sp.gov.br/files/ceprocamp/arquivos/ata_nit_06.2021.pdf">ATA NIT 06/2021</a></li>
                                   <li><a class="linkNIT" href="https://fumec.sp.gov.br/sites/www.fumec.sp.gov.br/files/ceprocamp/arquivos/ata_nit_07.2021.pdf">ATA NIT 07/2021</a></li>
                                   <li><a class="linkNIT" href="https://fumec.sp.gov.br/sites/www.fumec.sp.gov.br/files/ceprocamp/arquivos/ata_nit_08.2021.pdf">ATA NIT 08/2021</a></li>
                                   <li><a class="linkNIT" href="https://drive.google.com/file/d/1jEYz0iTUWqh3bvJfog596x5aJxspNc94/view?usp=sharing">ATA NIT 09/2021</a></li>
                                   <li><a class="linkNIT" href="https://drive.google.com/file/d/17DMCQrnfHZfpb-0iYytz1sxtEpiqmvxd/view?usp=sharing">ATA NIT 10/2021</a></li>
                                   <li><a class="linkNIT" href="https://drive.google.com/file/d/14pGr-73B1bWaGCYMjZ6KzBtnS7lMk4Ti/view?usp=sharing">ATA NIT 11/2021</a></li>
                               </ul>
                           </div>
                       </div>
                       <div class="ct-sectional-box ct-sectional-box--green">
                           <h2 class="title"><a>Agenda do NIT</a></h2>
                           <div class="inner">
                               <ul>
                                   <li><a class="linkNIT" href="https://calendar.google.com/calendar/embed?src=c_mnp8flft56fqljkdqkghgabrkc%40group.calendar.google.com&ctz=America%2FSao_Paulo">Clique e veja sobre.</a></li>
                               </ul>
                           </div>
                       </div>
                       <div class="ct-sectional-box ct-sectional-box--red">
                           <h2 class="title"><a>AÇÕES</a></h2>
                           <div class="inner">
                               <ul>
                                   <li><a class="linkNIT" href="https://www.youtube.com/playlist?list=PLhXI73YC-qHutwUR3SjsMrF1wkq_Jff_m">NIT NA NET</a></li>
                                   <li><a class="linkNIT" href="https://www.youtube.com/playlist?list=PLhXI73YC-qHspPHrdmr0IV96d1qr8hs8G">ENTREVISTA FUMEC</a></li>
                               </ul>
                           </div>
                       </div>
                   </div>
               </div>
           </section>

           <div>

               Esta equipe atua ativamente nas redes sociais da FUMEC (<a class="linkNIT" href="https://www.facebook.com/fumec.cepro" target="_blank">Facebook</a>,
               <a class="linkNIT" href="https://www.instagram.com/fumec.cepro/ " target="_blank">Instagram</a>
               e <a class="linkNIT" href="https://www.youtube.com/TVFUMEC" target="_blank">YouTube</a>), desenvolvendo
               o
               novo site do
               CEPROCAMP e o
               <a class="linkNIT" href="https://play.google.com/store/apps/details?id=sp.gov.br.ceprocampov.fumec" target="_blank">App
                   CEPROCAMP</a>

               </p>

           </div>
       </div>

   </div>

   <br>
   <br>

   <?php include 'footer.php' ?>