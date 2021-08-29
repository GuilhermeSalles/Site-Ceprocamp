   <?php include 'header-menu.php' ?>

   <style>
       h6{
           font-weight: bold;
           color: rgb(75, 75, 75);
       }
   </style>
   <br>
   <br>

   <!-- Filtro-->

   <div id="area">
       <div class="container">
           <div class="text-center">
               <h2 style="margin-bottom: 20px; color: rgb(75, 75, 75);">Horarios dos cursos</h2>
           </div>
           <div class="row">
               <div class="col-md-12" id="filter-btn-box">
                   <button class="main-btn filter-btn active" style="margin-bottom: 10px; font-weight: bold;" id="all-btn">Todos</button>
                   <button class="main-btn filter-btn" style="margin-bottom: 10px; font-weight: bold;" id="m-btn">Manhã</button>
                   <button class="main-btn filter-btn" style="margin-bottom: 10px; font-weight: bold;" id="t-btn">Tarde</button>
                   <button class="main-btn filter-btn" style="margin-bottom: 10px; font-weight: bold;" id="n-btn">Noite</button>
                   <hr class="filtro">
               </div>

               <div class="col-md-4 project-box m n">
                   <div class="card">
                       <img class="card-img-top" src="img/CAPA MINIATURA CURSOS/19.png" alt="Imagem de capa do card">
                       <div class="card-body">
                           <h6 class="card-title">AUXILIAR DE DEP.PESSOAL/RH</h6>
                           <p class="card-text">Aprenda a executar atividades relacionadas a administração de pessoas.
                           </p>
                           <a href="Curso/Auxiliar_de_departamento_pessoal_RH" class="btn btn-danger">Ver Mais</a>
                       </div>
                       <div class="card-footer">
                           <small class="text-muted"><b>Duração: </b>240 hs/a = 200 horas</small>
                       </div>
                   </div>
               </div>

               <div class="col-md-4 project-box n">
                   <div class="card">
                       <img class="card-img-top" src="img/CAPA MINIATURA CURSOS/20.png" alt="Imagem de capa do card">
                       <div class="card-body">
                           <h6 class="card-title">AUXILIAR FINANCEIRO</h6>
                           <p class="card-text">Aprenda a gerar lançamentos contábeis e auxiliar no controle do fluxo de caixa.
                           </p>
                           <a href="Curso/Auxiliar_financeiro" class="btn btn-danger">Ver Mais</a>
                       </div>
                       <div class="card-footer">
                           <small class="text-muted"><b>Duração: </b>240 h/a = 200 horas</small>
                       </div>
                   </div>
               </div>

               <div class="col-md-4 project-box m t n">
                   <div class="card">
                       <img class="card-img-top" src="img/CAPA MINIATURA CURSOS/39.png" alt="Imagem de capa do card">
                       <div class="card-body">
                           <h6 class="card-title">PADEIRO/ CONFEITEIRO</h6>
                           <p class="card-text">Produza itens de panificação e confeitaria e técnicas para manipulação e venda.
                           </p>
                           <a href="Curso/Padeiro_Confeiteiro" class="btn btn-danger">Ver Mais</a>
                       </div>
                       <div class="card-footer">
                           <small class="text-muted"><b>Duração: </b>400 h/a = 333 horas</small>
                       </div>
                   </div>
               </div>

               <div class="col-md-4 project-box t">
                   <div class="card">
                       <img class="card-img-top" src="img/CAPA MINIATURA CURSOS/7.png" alt="Imagem de capa do card">
                       <div class="card-body">
                           <h6 class="card-title">DESENHO TÉCNICO CAD</h6>
                           <p class="card-text">Aprenda a elaborar e interpretar desenhos de representação gráfica em projetos.
                           </p>
                           <a href="Curso/Desenho_CAD" class="btn btn-danger">Ver Mais</a>
                       </div>
                       <div class="card-footer">
                           <small class="text-muted"><b>Duração: </b>80 h/a = 67 horas</small>
                       </div>
                   </div>
               </div>

               <div class="col-md-4 project-box t">
                   <div class="card">
                       <img class="card-img-top" src="img/CAPA MINIATURA CURSOS/40.png" alt="Imagem de capa do card">
                       <div class="card-body">
                           <h6 class="card-title">GARÇOM - GARÇONETE</h6>
                           <p class="card-text">Aprenda a atender clientes, servindo alimentos e bebidas em geral.
                               <br>
                               <br>
                           </p>
                           <a href="Curso/Garcom_Garconete" class="btn btn-danger">Ver Mais</a>
                       </div>
                       <div class="card-footer">
                           <small class="text-muted"><b>Duração: </b>320 h/a = 266 horas</small>
                       </div>
                   </div>
               </div>

               <div class="col-md-4 project-box m">
                   <div class="card">
                       <img class="card-img-top" src="img/CAPA MINIATURA CURSOS/26.png" alt="Imagem de capa do card">
                       <div class="card-body">
                           <h6 class="card-title">ALMOXARIFE</h6>
                           <p class="card-text">Aprenda a controlar a entrada/saída de produtos e materiais de um almoxarifado.
                           </p>
                           <a href="Curso/Almoxarife" class="btn btn-danger">Ver Mais</a>
                       </div>
                       <div class="card-footer">
                           <small class="text-muted"> <b>Duração:</b> 400 h/a = 333 horas </small>
                       </div>
                   </div>
               </div>

               <div class="col-md-4 project-box t">
                   <div class="card">
                       <img class="card-img-top" src="img/CAPA MINIATURA CURSOS/12.png" alt="Imagem de capa do card">
                       <div class="card-body">
                           <h6 class="card-title">AGENTE DE CONTROLE DE ENDEMIAS</h6>
                           <p class="card-text" style="margin-bottom: 35px;">Aprenda a realizar a vigilância, prevenção, controle de doenças e a promoção da saúde.
                               
                           </p>
                           <a href="Curso/Agente_de_controle_de_endemias" class="btn btn-danger">Ver Mais</a>
                       </div>
                       <div class="card-footer">
                           <small class="text-muted"><b>Duração: </b>240 h/a = 200 horas</small>
                       </div>
                   </div>
               </div>

               <div class="col-md-4 project-box t">
                   <div class="card">
                       <img class="card-img-top" src="img/CAPA MINIATURA CURSOS/11.png" alt="Imagem de capa do card">
                       <div class="card-body">
                           <h6 class="card-title">AUXILIAR DE LABORATÓRIO DE QUÍMICA</h6>
                           <p class="card-text">Aprenda a preparar reagentes e equipamentos para utilização em experimentos.
                           </p>
                           <a href="Curso/Auxiliar_de_laboratorio" class="btn btn-danger">Ver Mais</a>
                       </div>
                       <div class="card-footer">
                           <small class="text-muted"> <b>Duração:</b> 400 h/a = 333 horas</small>
                       </div>
                   </div>
               </div>

               <div class="col-md-4 project-box m t n">
                   <div class="card">
                       <img class="card-img-top" src="img/CAPA MINIATURA CURSOS/18.png" alt="Imagem de capa do card">
                       <div class="card-body">
                           <h6 class="card-title">PORTEIRO/CONTROLADOR DE ACESSO</h6>
                           <p class="card-text">Aprenda a controlar o fluxo de pessoas e veículos, utilizando tecnologias adequadas
                           </p>
                           <a href="Curso/Porteiro_controlador_de_acesso" class="btn btn-danger">Ver Mais</a>
                       </div>
                       <div class="card-footer">
                           <small class="text-muted"><b>Duração: </b>240 h/a = 200 horas </small>
                       </div>
                   </div>
               </div>

               <div class="col-md-4 project-box m t n">
                   <div class="card">
                       <img class="card-img-top" src="img/CAPA MINIATURA CURSOS/27.png" alt="Imagem de capa do card">
                       <div class="card-body">
                           <h6 class="card-title">AUXILIAR DE LOGÍSTICA </h6>
                           <p class="card-text">Aprenda os processos de um departamento logístico, com uso de sistemas.
                           </p>
                           <a href="Curso/Auxiliar_de_logistica" class="btn btn-danger">Ver Mais</a>
                       </div>
                       <div class="card-footer">
                           <small class="text-muted"><b>Duração:</b> 240 h/a = 200 horas</small>
                       </div>
                   </div>
               </div>

               <div class="col-md-4 project-box m">
                   <div class="card">
                       <img class="card-img-top" src="img/CAPA MINIATURA CURSOS/15.png" alt="Imagem de capa do card">
                       <div class="card-body">
                           <h6 class="card-title">AUXILIAR ADMINISTRATIVO</h6>
                           <p class="card-text">Aprenda a realizar o suporte administrativo e técnico nas áreas administrativas.
                           </p>
                           <a href="Curso/Auxiliar_de_administracao" class="btn btn-danger">Ver Mais</a>
                       </div>
                       <div class="card-footer">
                           <small class="text-muted"> <b>Duração: </b>400 hs/a = 334 horas</small>
                       </div>
                   </div>
               </div>

               <div class="col-md-4 project-box m t">
                   <div class="card">
                       <img class="card-img-top" src="img/CAPA MINIATURA CURSOS/2.png" alt="Imagem de capa do card">
                       <div class="card-body">
                           <h6 class="card-title">CUIDADOR DE PESSOAS</h6>
                           <p class="card-text">Aprenda a dar assistência em saúde para crianças, pessoas com deficiência e idosos.
                           </p>
                           <a href="Curso/Cuidador_de_pessoas" class="btn btn-danger">Ver Mais</a>
                       </div>
                       <div class="card-footer">
                           <small class="text-muted"> <b>Duração:</b> 240 h/a = 200 horas</small>
                       </div>
                   </div>
               </div>

               <div class="col-md-4 project-box m n">
                   <div class="card">
                       <img class="card-img-top" src="img/CAPA MINIATURA CURSOS/3.png" alt="Imagem de capa do card">
                       <div class="card-body">
                           <h6 class="card-title">CUIDADOR DE IDOSOS</h6>
                           <p class="card-text">Aprenda a acompanhar e contribuir com a melhora da saúde de pessoas idosas.
                           </p>
                           <a href="Curso/Cuidador_de_idosos" class="btn btn-danger">Ver Mais</a>
                       </div>
                       <div class="card-footer">
                           <small class="text-muted"> <b>Duração: </b>240 hs/a = 200 horas </small>
                       </div>
                   </div>
               </div>

               <div class="col-md-4 project-box m t n">
                   <div class="card">
                       <img class="card-img-top" src="img/CAPA MINIATURA CURSOS/13.png" alt="Imagem de capa do card">
                       <div class="card-body">
                           <h6 class="card-title">INFORMÁTICA BÁSICA</h6>
                           <p class="card-text">Aprenda a utilizar melhor os equipamentos e recursos tecnológicos.
                           </p>
                           <a href="Curso/Informatica_basica" class="btn btn-danger">Ver Mais</a>
                       </div>
                       <div class="card-footer">
                           <small class="text-muted"> <b>Duração:</b> 160 h/a = 133 horas</small>
                       </div>
                   </div>
               </div>

               <div class="col-md-4 project-box m t">
                   <div class="card">
                       <img class="card-img-top" src="img/CAPA MINIATURA CURSOS/17.png" alt="Imagem de capa do card">
                       <div class="card-body">
                           <h6 class="card-title">AUXILIAR DE ESCRITÓRIO</h6>
                           <p class="card-text">Aprenda a manter as documentações e informações prontas para a tomada de decisão.
                           </p>
                           <a href="Curso/Auxiliar_de_escrtorio" class="btn btn-danger">Ver Mais</a>
                       </div>
                       <div class="card-footer">
                           <small class="text-muted"> <b>Duração: </b>200 hs/a = 166 horas</small>
                       </div>
                   </div>
               </div>

               <div class="col-md-4 project-box n">
                   <div class="card">
                       <img class="card-img-top" src="img/CAPA MINIATURA CURSOS/48.png" alt="Imagem de capa do card">
                       <div class="card-body">
                           <h6 class="card-title">INGLÊS PARA ATENDIMENTO DO CLIENTE</h6>
                           <p class="card-text">Aprenda a recepcionar, comunicar e orientar convidados e clientes falantes de Inglês.
                           
                           </p>
                           <a href="Curso/Ingles_para_Atendimento" class="btn btn-danger">Ver Mais</a>
                       </div>
                       <div class="card-footer">
                           <small class="text-muted"> <b>Duração: </b>240 h/a = 200 horas</small>
                       </div>
                   </div>
               </div>

               <div class="col-md-4 project-box n">
                   <div class="card">
                       <img class="card-img-top" src="img/CAPA MINIATURA CURSOS/50.png" alt="Imagem de capa do card">
                       <div class="card-body">
                           <h6 class="card-title">PORTUGUÊS E MATEMÁTICA PARA CONCURSOS PÚBLICOS E ENEM </h6>
                           <p class="card-text">Reforçe seus conhecimentos para conseguir aprovação em diversos tipos de exames.
                           </p>
                           <a href="Curso/Portugues_e_matematica_para_concursos_publicos_e_enem" class="btn btn-danger">Ver Mais</a>
                       </div>
                       <div class="card-footer">
                           <small class="text-muted"><b>Duração: </b>320 h/a = 266 horas</small>
                       </div>
                   </div>
               </div>


               <div class="col-md-4 project-box m ">
                   <div class="card">
                       <img class="card-img-top" src="img/CAPA MINIATURA CURSOS/6.png" alt="Imagem de capa do card">
                       <div class="card-body">
                           <h6 class="card-title">AGENTE DE SEGURANÇA DO TRABALHO E HIGIENE OCUPACIONAL</h6>
                           <p class="card-text">Dê assistência na elaboração de procedimentos de segurança em diversos segmentos.
                           </p>
                           <a href="Curso/Agente_de_segurança_do_trabalho_e_higiene_ocupacional" class="btn btn-danger">Ver Mais</a>
                       </div>
                       <div class="card-footer">
                           <small class="text-muted"> <b>Duração:</b> 240 h/a = 200 horas</small>
                       </div>
                   </div>
               </div>

               <div class="col-md-4 project-box m n">
                   <div class="card">
                       <img class="card-img-top" src="img/CAPA MINIATURA CURSOS/16.png" alt="Imagem de capa do card">
                       <div class="card-body">
                           <h6 class="card-title">MICROEMPREENDEDOR</h6>
                           <p class="card-text" style="margin-bottom: 15px;">Aprenda técnicas de gestão empresarial para ser dono do seu próprio negócio.
                        
                           </p>
                           <a href="Curso/Microempreendedor" class="btn btn-danger">Ver Mais</a>
                       </div>
                       <div class="card-footer">
                           <small class="text-muted"> <b>Duração: </b>200 hs/a = 166 horas</small>
                       </div>
                   </div>
               </div>

               <div class="col-md-4 project-box m t n">
                   <div class="card">
                       <img class="card-img-top" src="img/CAPA MINIATURA CURSOS/32.png" alt="Imagem de capa do card">
                       <div class="card-body">
                           <h6 class="card-title">CRIAÇÃO DE WEBSITES</h6>
                           <p class="card-text">Aprenda a criar páginas e estruture sites para diversas finalidades e usuários.
                               <br>
                        </p>
                           <a href="Curso/Criacao_de_websites" class="btn btn-danger">Ver Mais</a>
                       </div>
                       <div class="card-footer">
                           <small class="text-muted"> <b>Duração: </b>200 hs/a = 166 horas</small>
                       </div>
                   </div>
               </div>

               <div class="col-md-4 project-box m t n">
                   <div class="card">
                       <img class="card-img-top" src="img/CAPA MINIATURA CURSOS/34.png" alt="Imagem de capa do card">
                       <div class="card-body">
                           <h6 class="card-title">DESENVOLVEDOR DE JOGOS DIGITAIS</h6>
                           <p class="card-text" style="margin-bottom: 40px;">Aprenda a criar jogos que executem em diversos aplicativos e na WEB!</p>
                           <a href="Curso/Desenvolvedor_de_jogos_digitais" class="btn btn-danger">Ver Mais</a>
                       </div>
                       <div class="card-footer">
                           <small class="text-muted"> Duração: </b>200 hs/a = 166 horas</small>
                       </div>
                   </div>
               </div>

               <div class="col-md-4 project-box m t n">
                   <div class="card">
                       <img class="card-img-top" src="img/CAPA MINIATURA CURSOS/21.png" alt="Imagem de capa do card">
                       <div class="card-body">
                           <h6 class="card-title">AGENTE ADMINISTRATIVO</h6>
                           <p class="card-text">Aprenda a realizar o suporte administrativo e técnico nas áreas administrativas.
                           </p>
                           <a href="Curso/Agente_administrativo" class="btn btn-danger">Ver Mais</a>
                       </div>
                       <div class="card-footer">
                           <small class="text-muted"><b>Duração: </b>240 h/a = 200 horas </small>
                       </div>
                   </div>
               </div>

               <div class="col-md-4 project-box m t n">
                   <div class="card">
                       <img class="card-img-top" src="img/CAPA MINIATURA CURSOS/5.png" alt="Imagem de capa do card">
                       <div class="card-body">
                           <h6 class="card-title">AGENTE DE EPI/EPC</h6>
                           <p class="card-text">Colabore na escolha correta de equipamentos para proteção dos funcionários.
                           </p>
                           <a href="Curso/Agente_de_EPI_EPC" class="btn btn-danger">Ver Mais</a>
                       </div>
                       <div class="card-footer">
                           <small class="text-muted"><b>Duração: </b>240 h/a = 200 horas </small>
                       </div>
                   </div>
               </div>

               <div class="col-md-4 project-box m t n">
                   <div class="card">
                       <img class="card-img-top" src="img/CAPA MINIATURA CURSOS/37.png" alt="Imagem de capa do card">
                       <div class="card-body">
                           <h6 class="card-title">EXCEL BÁSICO</h6>
                           <p class="card-text">Aprenda a usar funções e fazer planilhas e gráficos no Microsoft Excel™.
                           </p>
                           <a href="Curso/Excel_basico" class="btn btn-danger">Ver Mais</a>
                       </div>
                       <div class="card-footer">
                           <small class="text-muted"><b>Duração: </b>240 h/a = 200 horas </small>
                       </div>
                   </div>
               </div>

               <div class="col-md-4 project-box m t n">
                   <div class="card">
                       <img class="card-img-top" src="img/CAPA MINIATURA CURSOS/45.png" alt="Imagem de capa do card">
                       <div class="card-body">
                           <h6 class="card-title">ATENDIMENTO E COPA</h6>
                           <p class="card-text">Aprenda técnicas para servir, manipular alimentos e manter a limpeza da copa/cozinha.
                           </p>
                           <a href="Curso/atendimento_e_copa" class="btn btn-danger">Ver Mais</a>
                       </div>
                       <div class="card-footer">
                           <small class="text-muted"><b>Duração: </b>240 h/a = 200 horas </small>
                       </div>
                   </div>
               </div>

               <div class="col-md-4 project-box m t n">
                   <div class="card">
                       <img class="card-img-top" src="img/CAPA MINIATURA CURSOS/28.png" alt="Imagem de capa do card">
                       <div class="card-body">
                           <h6 class="card-title">AUXILIAR DE ALMOXARIFADO</h6>
                           <p class="card-text">Aprenda a colaborar na organização de almoxarifados, garantindo a operação.
                           </p>
                           <a href="Curso/Auxiliar_almoxarifado" class="btn btn-danger">Ver Mais</a>
                       </div>
                       <div class="card-footer">
                           <small class="text-muted"><b>Duração: </b>240 h/a = 200 horas </small>
                       </div>
                   </div>
               </div>

               <div class="col-md-4 project-box m t n">
                   <div class="card">
                       <img class="card-img-top" src="img/CAPA MINIATURA CURSOS/29.png" alt="Imagem de capa do card">
                       <div class="card-body">
                           <h6 class="card-title">AUXILIAR DE COMÉRCIO EXTERIOR</h6>
                           <p class="card-text">Aprenda a controlar os procedimentos de comercialização internacional de produtos.
                           </p>
                           <a href="Curso/Auxiliar_comercio_exterior" class="btn btn-danger">Ver Mais</a>
                       </div>
                       <div class="card-footer">
                           <small class="text-muted"><b>Duração: </b>240 h/a = 200 horas </small>
                       </div>
                   </div>
               </div>

               <div class="col-md-4 project-box m t n">
                   <div class="card">
                       <img class="card-img-top" src="img/CAPA MINIATURA CURSOS/8.png" alt="Imagem de capa do card">
                       <div class="card-body">
                           <h6 class="card-title">AUXILIAR ADMINISTRATIVO</h6>
                           <p class="card-text">Aprenda a colaborar para o funcionamento e continuidade dos serviços em empresas.
                           </p>
                           <a href="Curso/Auxiliar_de_administracao" class="btn btn-danger">Ver Mais</a>
                       </div>
                       <div class="card-footer">
                           <small class="text-muted"><b>Duração: </b>240 h/a = 200 horas </small>
                       </div>
                   </div>
               </div>

               <div class="col-md-4 project-box m t n">
                   <div class="card">
                       <img class="card-img-top" src="img/CAPA MINIATURA CURSOS/42.png" alt="Imagem de capa do card">
                       <div class="card-body">
                           <h6 class="card-title">AUXILIAR DE HOTELARIA</h6>
                           <p class="card-text">Aprenda a oferecer uma ótima experiência para o cliente, utilizando técnicas.
                           </p>
                           <a href="Curso/Auxiliar_hotelaria" class="btn btn-danger">Ver Mais</a>
                       </div>
                       <div class="card-footer">
                           <small class="text-muted"><b>Duração: </b>240 h/a = 200 horas </small>
                       </div>
                   </div>
               </div>

               <div class="col-md-4 project-box m t n">
                   <div class="card">
                       <img class="card-img-top" src="img/CAPA MINIATURA CURSOS/41.png" alt="Imagem de capa do card">
                       <div class="card-body">
                           <h6 class="card-title">CAMAREIRA EM MEIOS DE HOSPEDAGEM</h6>
                           <p class="card-text">Aprenda a realizar o asseio de quartos garantir a qualidade da experiência do hóspede.
                           </p>
                           <a href="Curso/Camareira_em_meios_de_hospedagem" class="btn btn-danger">Ver Mais</a>
                       </div>
                       <div class="card-footer">
                           <small class="text-muted"><b>Duração: </b>240 h/a = 200 horas </small>
                       </div>
                   </div>
               </div>

               <div class="col-md-4 project-box m t n">
                   <div class="card">
                       <img class="card-img-top" src="img/CAPA MINIATURA CURSOS/13.png" alt="Imagem de capa do card">
                       <div class="card-body">
                           <h6 class="card-title">AGENTE DE SANEAMENTO AMBIENTAL</h6>
                           <p class="card-text">Aprenda a fiscalizar o saneamento básico em conformidade com a legislação. 
                           </p>
                           <a href="Curso/Agente_de_saneamento_ambiental" class="btn btn-danger">Ver Mais</a>
                       </div>
                       <div class="card-footer">
                           <small class="text-muted"><b>Duração: </b>240 h/a = 200 horas </small>
                       </div>
                   </div>
               </div>

               <div class="col-md-4 project-box m t n">
                   <div class="card">
                       <img class="card-img-top" src="img/CAPA MINIATURA CURSOS/9.png" alt="Imagem de capa do card">
                       <div class="card-body">
                           <h6 class="card-title">PROJETO DE PREVENÇÃO E COMBATE A INCÊNDIOS</h6>
                           <p class="card-text">Aprenda a elaborar planos de fuga e sistemas de controle de incêndios diversos.
                           </p>
                           <a href="Curso/Projeto_de_prevencao_e_combate_a_incendios" class="btn btn-danger">Ver Mais</a>
                       </div>
                       <div class="card-footer">
                           <small class="text-muted"><b>Duração: </b>240 h/a = 200 horas </small>
                       </div>
                   </div>
               </div>

               <div class="col-md-4 project-box m t n">
                   <div class="card">
                       <img class="card-img-top" src="img/CAPA MINIATURA CURSOS/46.png" alt="Imagem de capa do card">
                       <div class="card-body">
                           <h6 class="card-title">HIGIENE E MANIPULAÇÃO DE ALIMENTOS</h6>
                           <p class="card-text">Aprenda técnicas para manipular alimentos, garantindo a qualidade e segurança.
                           </p>
                           <a href="Curso/Higiene_e_manipulacao_de_alimentos" class="btn btn-danger">Ver Mais</a>
                       </div>
                       <div class="card-footer">
                           <small class="text-muted"><b>Duração: </b>240 h/a = 200 horas </small>
                       </div>
                   </div>
               </div>

               <div class="col-md-4 project-box m t n">
                   <div class="card">
                       <img class="card-img-top" src="img/CAPA MINIATURA CURSOS/43.png" alt="Imagem de capa do card">
                       <div class="card-body">
                           <h6 class="card-title">HOSTESS - RECEPCIONISTA DE EVENTOS</h6>
                           <p class="card-text">Aprenda a recepcionar, comunicar e orientar convidados de diversos eventos.
                           </p>
                           <a href="Curso/Hostess_recepcionista_de_eventos" class="btn btn-danger">Ver Mais</a>
                       </div>
                       <div class="card-footer">
                           <small class="text-muted"><b>Duração: </b>240 h/a = 200 horas </small>
                       </div>
                   </div>
               </div>

               <div class="col-md-4 project-box m t n">
                   <div class="card">
                       <img class="card-img-top" src="img/CAPA MINIATURA CURSOS/38.png" alt="Imagem de capa do card">
                       <div class="card-body">
                           <h6 class="card-title">INCLUSÃO DIGITAL</h6>
                           <p class="card-text" style="margin-bottom: 30px;">Conheça e entenda mais sobre recursos tecnológicos e como eles podem te ajudar em seu trabalho.
                           </p>
                           <a href="Curso/Inclusao_digital" class="btn btn-danger">Ver Mais</a>
                       </div>
                       <div class="card-footer">
                           <small class="text-muted"><b>Duração: </b>240 h/a = 200 horas </small>
                       </div>
                   </div>
               </div>

               <div class="col-md-4 project-box m t n">
                   <div class="card">
                       <img class="card-img-top" src="img/CAPA MINIATURA CURSOS/36.png" alt="Imagem de capa do card">
                       <div class="card-body">
                           <h6 class="card-title">INFORMÁTICA BÁSICA</h6>
                           <p class="card-text">Aprenda a utilizar melhor os equipamentos e recursos tecnológicos.
                           </p>
                           <a href="Curso/Informatica_basica" class="btn btn-danger">Ver Mais</a>
                       </div>
                       <div class="card-footer">
                           <small class="text-muted"><b>Duração: </b>240 h/a = 200 horas </small>
                       </div>
                   </div>
               </div>

               <div class="col-md-4 project-box m t n">
                   <div class="card">
                       <img class="card-img-top" src="img/CAPA MINIATURA CURSOS/8.png" alt="Imagem de capa do card">
                       <div class="card-body">
                           <h6 class="card-title">MAPA DE RISCOS</h6>
                           <p class="card-text">Aprenda a elaborar mapas identificando situações de risco em diversos ambientes.
                           </p>
                           <a href="Curso/Mapa_de_riscos" class="btn btn-danger">Ver Mais</a>
                       </div>
                       <div class="card-footer">
                           <small class="text-muted"><b>Duração: </b>240 h/a = 200 horas </small>
                       </div>
                   </div>
               </div>

               <div class="col-md-4 project-box m t n">
                   <div class="card">
                       <img class="card-img-top" src="img/CAPA MINIATURA CURSOS/31.png" alt="Imagem de capa do card">
                       <div class="card-body">
                           <h6 class="card-title">OPERADOR DE COMPUTADOR</h6>
                           <p class="card-text">Aprenda a prestar assistência e suporte em informática para diversos tipos de usuários.
                           </p>
                           <a href="Curso/Operador_de_compuatador" class="btn btn-danger">Ver Mais</a>
                       </div>
                       <div class="card-footer">
                           <small class="text-muted"><b>Duração: </b>240 h/a = 200 horas </small>
                       </div>
                   </div>
               </div>

               <div class="col-md-4 project-box m t n">
                   <div class="card">
                       <img class="card-img-top" src="img/CAPA MINIATURA CURSOS/44.png" alt="Imagem de capa do card">
                       <div class="card-body">
                           <h6 class="card-title">ORGANIZADOR DE EVENTOS</h6>
                           <p class="card-text">Aprenda a organizar, controlar e garantir a operação da equipe em eventos.
                           </p>
                           <a href="Curso/Organizador_de_eventos" class="btn btn-danger">Ver Mais</a>
                       </div>
                       <div class="card-footer">
                           <small class="text-muted"><b>Duração: </b>240 h/a = 200 horas </small>
                       </div>
                   </div>
               </div>

               <div class="col-md-4 project-box m t n">
                   <div class="card">
                       <img class="card-img-top" src="img/CAPA MINIATURA CURSOS/22.png" alt="Imagem de capa do card">
                       <div class="card-body">
                           <h6 class="card-title">PRÁTICAS ADMINISTRATIVAS</h6>
                           <p class="card-text">Aprenda a realizar açoes e procedimentos relacionados as rotinas administrativas.
                           </p>
                           <a href="Curso/Praticas_administrativas" class="btn btn-danger">Ver Mais</a>
                       </div>
                       <div class="card-footer">
                           <small class="text-muted"><b>Duração: </b>240 h/a = 200 horas </small>
                       </div>
                   </div>
               </div>

               <div class="col-md-4 project-box m t n">
                   <div class="card">
                       <img class="card-img-top" src="img/CAPA MINIATURA CURSOS/23.png" alt="Imagem de capa do card">
                       <div class="card-body">
                           <h6 class="card-title">PRÁTICAS CONTÁBEIS</h6>
                           <p class="card-text">Aprenda a realizar ações e procedimentos contábeis e financeiros.
                           </p>
                           <a href="Curso/Praticas_contabeis" class="btn btn-danger">Ver Mais</a>
                       </div>
                       <div class="card-footer">
                           <small class="text-muted"><b>Duração: </b>240 h/a = 200 horas </small>
                       </div>
                   </div>
               </div>

               <div class="col-md-4 project-box m t n">
                   <div class="card">
                       <img class="card-img-top" src="img/CAPA MINIATURA CURSOS/47.png" alt="Imagem de capa do card">
                       <div class="card-body">
                           <h6 class="card-title">FRENTISTA</h6>
                           <p class="card-text">Aprenda a recepcionar, comunicar e prestar serviço de abastecimento em postos.
                           </p>
                           <a href="Curso/Frentista" class="btn btn-danger">Ver Mais</a>
                       </div>
                       <div class="card-footer">
                           <small class="text-muted"><b>Duração: </b>240 h/a = 200 horas </small>
                       </div>
                   </div>
               </div>

               <div class="col-md-4 project-box m t n">
                   <div class="card">
                       <img class="card-img-top" src="img/CAPA MINIATURA CURSOS/24.png" alt="Imagem de capa do card">
                       <div class="card-body">
                           <h6 class="card-title">PRÁTICAS DE ESCRITÓRIO</h6>
                           <p class="card-text">Aprenda a realizar ações e procedimentos de arquivo e documentação.
                           </p>
                           <a href="Curso/Praticas_de_escritorio" class="btn btn-danger">Ver Mais</a>
                       </div>
                       <div class="card-footer">
                           <small class="text-muted"><b>Duração: </b>240 h/a = 200 horas </small>
                       </div>
                   </div>
               </div>

               <!-- <div class="col-md-4 project-box m t n">
                   <div class="card">
                       <img class="card-img-top" src="img/CAPA MINIATURA CURSOS/33.png" alt="Imagem de capa do card">
                       <div class="card-body">
                           <h6 class="card-title">CRIAÇÃO EM PYTHON</h6>
                           <p class="card-text">Aprenda Python - Fundamentos, algoritmos, estruturas de dados e orientação a objeto.
                           </p>
                           <a href="Curso/Criacao_em_Python" class="btn btn-danger">Ver Mais</a>
                       </div>
                       <div class="card-footer">
                           <small class="text-muted"><b>Duração: </b>240 h/a = 200 horas </small>
                       </div>
                   </div>
               </div>

               <div class="col-md-4 project-box m t n">
                   <div class="card">
                       <img class="card-img-top" src="img/CAPA MINIATURA CURSOS/35.png" alt="Imagem de capa do card">
                       <div class="card-body">
                           <h6 class="card-title">ROBÓTICA</h6>
                           <p class="card-text">Aprenda Arduino - Fundamentos, programação e teste em sistema simples e complexo.
                           </p>
                           <a href="Curso/Robotica" class="btn btn-danger">Ver Mais</a>
                       </div>
                       <div class="card-footer">
                           <small class="text-muted"><b>Duração: </b>240 h/a = 200 horas </small>
                       </div>
                   </div>
               </div> -->

           </div>
       </div>
   </div>

   <?php include 'footer.php' ?>