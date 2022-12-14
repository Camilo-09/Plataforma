
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- custom.css -->
<link rel="stylesheet" href="{{ asset('css/custom.css') }}">
<!-- bootstrap.min.css -->
<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}">
<!-- font-awesome -->
<link rel="stylesheet" href="{{ asset('css/all.min.css')}}">
<!-- AOS -->
<link rel="stylesheet" href="{{ asset('aos/aos.css')}}">
<!-- estilo del modal -->
<link href="{{ asset('sweetalert/sweetalert.css')}}" rel="stylesheet">
<!-- Toastr Css -->
<link rel="stylesheet" href="{{asset('css/toastr.min.css')}}">
<!-- Alertify Css -->
<link rel="stylesheet" href="{{('css/alertify.min.css')}}">
<link rel="stylesheet" href="../../assets/vendor/alertify/css/themes/default.min.css">
<link rel="stylesheet" href="../../assets/vendor/alertify/css/themes/semantic.min.css">
<link rel="stylesheet" href="../../assets/vendor/alertify/css/themes/bootstrap.min.css">
      

        <title>Plataforma CrowdSourcing</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
        <style type="text/css">
            body{
                font-family: 'Nunito', sans-serif;
            }
        
            #toTop {
            padding: 5px 3px;
            color: #fff;
            position: fixed;
            bottom: 30px;
            right: 20px;
            display: none;
            }

            .color-success {
            color: #5cde7a !important;
            }
            </style>
</head>

<body class="contenedor">
  <nav class="navbar navbar-expand-lg navbar" style="background-color:#ff7300; " >
    <div class="container-fluid">
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-link text-white" href="#desafio">Desafios</a>
          <a class="nav-link text-white" href="#Solucionadores">Solucionadores</a>
          <a class="nav-link text-white" href="#Recursos">Recursos</a>
          <a class="nav-link text-white" href="http://sennovacolomboaleman.blogspot.com" target="_blank">Grupo CNCA</a>
          <a class="nav-link text-white" href="{{ route('login')}}">Ingresar</a>
          <a class="nav-link text-white" href="{{route('register')}}">Registrate</a>
        </div>
      </div>
    </div>
  </nav>
  <div class="home">
  <div class="title" >
  <center>Te invitamos a <B>Solucionar</B> los<B> Retos</B> de las <B>Mypines</B> del departamento del Atl??ntico.</center>
</div>

<div class="imagen">
  <img src="{{ asset('img/principal.jpg') }}" alt="Phishing Detect" height="400" width="800">
</div>
  </div>
  <hr>
  
  <section id="desafio" >
    <div class="card-body bg-light">
      <h1 class="text-center text-white font-weight-bold my-5 " style="background-color:#ff7300; ">Desafios</h1>
      <div class="card-deck">
      <div class="card">
      <div class="card-body bg-light" >
      <p data-aos="fade" data-aos-easing="linear" data-aos-duration="1000" data-aos-once="true" class="lead text-black  font-weight-bold">
                    Dise??o de una soluci??n que permita 
                    crear un sistema energ??tico aut??nomo,
                    para oxigenar peceras. 
              </p>
      <img src="{{ asset('img/peceras.png') }}" alt="Phishing Detect" height="200" width="400">
      <p data-aos="fade" data-aos-easing="linear" data-aos-duration="1000" data-aos-once="true" class="lead text-black my-4">
                  Tipo de desaf??o: Transferencia de conocimiento<br>
                  Municipio: Molinero ??? Sabanalarga<br>
                  Empresario: Reinaldo D??az Cervantes<br>
                  Nombre del Negocio: Peces El Rey<br>
                </p>
        </div>
      </div>
    
      <div class="card">
      <div class="card-body bg-light">
      <p  data-aos="fade" data-aos-easing="linear" data-aos-duration="1000" data-aos-once="true" class="lead text-black font-weight-bold">
                    Dise??o de una soluci??n que permita crear un 
                    dise??o de Ecosistema Digital de posicionamiento 
                    web para la marca Bollos El Abue.
      </p>
      <img src="{{ asset('img/el abue.png') }}" alt="Phishing Detect" height="200" width="400">
      <p data-aos="fade" data-aos-easing="linear" data-aos-duration="1000" data-aos-once="true" class="lead text-black my-4">
                Tipo de desaf??o:</b>  Transferencia de conocimiento<br>
                Municipio: Soledad ??? Atl??ntico<br>
                Empresario: Jhonnys De la Hoz<br>
                Nombre del Negocio: Bollos El Abue<br>
                </p>
        </div>
      </div>
      
      <div class="card">
      <div class="card-body bg-light">
      <p data-aos="fade" data-aos-easing="linear" data-aos-duration="1000" data-aos-once="true" class="lead text-black font-weight-bold">
          Dise??o de una soluci??n que permita optimizar
          los cortes en Cuero de Babilla para el dise??o 
          de art??culos de marroquiner??a.
              </p>
          <img src="{{ asset('img/marroquineria.jpg') }}" alt="Phishing Detect" height="200" width="400">
          <p class="card-text">   <p data-aos="fade" data-aos-easing="linear" data-aos-duration="1000" data-aos-once="true" class="lead text-black my-4">
                  Tipo de desaf??o: Transferencia de conocimiento<br>
                  Municipio: Campo De la Cruz ??? Atl??ntico<br>
                  Empresario: Mar??a Cecilia Carbonell<br>
                  Nombre del Negocio: The Real Thing<br>
                </p>
        </div>
      </div>
    </div>
    </div>
  </section>
 
  <section id="Solucionadores" >
    <div class="card-body bg-white"> 
      <h1 class="text-center text-white font-weight-bold my-5 " style="background-color:#ff7300; ">Solucionadores</h1>
      <div class="card-deck">
      <div class="card">
      <div class="card-body bg-light" >
      <p data-aos="fade" data-aos-easing="linear" data-aos-duration="1000" data-aos-once="true" class="lead text-black  font-weight-bold">
      Cambiar el mundo 
              </p>
      <img src="{{ asset('') }}" alt="Phishing Detect" height="200" width="400">
      <p data-aos="fade" data-aos-easing="linear" data-aos-duration="1000" data-aos-once="true" class="lead text-black my-4">
                Los solucionadores han contribuido a<br>
                resolver algunos de los problemas m??s<br>
                urgentes del mundo, desde facilitar el<br>
                acceso al agua potable en los hogares<br>
                hasta el dise??o de dispostivos solares<br>
                pasivos para atraer y matar a los mosquitos<br>
                portadores de la malaria.<br>
           
                </p>
        </div>
      </div>
    
      <div class="card">
      <div class="card-body bg-light">
      <p  data-aos="fade" data-aos-easing="linear" data-aos-duration="1000" data-aos-once="true" class="lead text-black font-weight-bold">
                    Promocionarte y ganar recompensas<br>
      </p>
      <img src="{{ asset('') }}" alt="Phishing Detect" height="200" width="400">
      <p data-aos="fade" data-aos-easing="linear" data-aos-duration="1000" data-aos-once="true" class="lead text-black my-4">
                Hemos concedido m??s de 60 millones de<br>
                d??lares a miles de brillantes solucionadores<br>
                de todo el mundo. La cuent??a media de los<br>
                premios para un desafio es de unos 20.000a<br>
                d??lares, pero algunos desafios ofrecen<br>
                premios de 100.000 d??lares o m??s. Pero no<br>
                se trata solo de recompensa econ??mica,<br>
                este logro garantiza mejorar tu hoja de vida<br>
                o tu perfil social.<br>
                </p>
        </div>
      </div>
      
      <div class="card">
      <div class="card-body bg-light">
      <p data-aos="fade" data-aos-easing="linear" data-aos-duration="1000" data-aos-once="true" class="lead text-black font-weight-bold">
          Prueba mental incomparable
              </p>
          <img src="{{ asset('') }}" alt="Phishing Detect" height="200" width="400">
          <p  data-aos="fade" data-aos-easing="linear" data-aos-duration="1000" data-aos-once="true" class="lead text-black my-4">
                  Para ver todos los detalles de los desafios y<br>
                  ofrecer soluciones, inscribete y ??nete a<br>
                  nuestra Red Global de solucionadores de<br>
                  m??s de 500.000 mentes diversas y creativas.<br>
                  Abierto a todo el p??blico.<br>
                </p>
        </div>
      </div>
    </div>
    </div>
  </section>
  
  <section id="Recursos" >
    <div class="card-body bg-white"> 
      <h1 class="text-center text-white font-weight-bold my-5 " style="background-color:#ff7300; ">Recursos</h1>
      <div class="card-deck">
      <div class="card">
      <div class="card-body bg-light" >
      <img src="{{ asset('img/registrate.jpg') }}" alt="Phishing Detect" height="200" width="400">
      <p data-aos="fade" data-aos-easing="linear" data-aos-duration="1000" data-aos-once="true" class="lead text-center text-black  font-weight-bold">
      Reg??strate
              </p>
      <p data-aos="fade" data-aos-easing="linear" data-aos-duration="1000" data-aos-once="true" class="lead text-center text-black my-4">
                Crea tu ses??on y completa tu<br>
                 perfil como solucionador.<br>
           
                </p>
        </div>
      </div>
    
      <div class="card">
      <div class="card-body bg-light">
      <img src="{{ asset('img/revisa.jpg') }}" alt="Phishing Detect" height="200" width="400">
      <p  data-aos="fade" data-aos-easing="linear" data-aos-duration="1000" data-aos-once="true" class="lead text-center text-black font-weight-bold">
                   Revisa y acepta
      </p>
      <p data-aos="fade" data-aos-easing="linear" data-aos-duration="1000" data-aos-once="true" class="lead text-center text-black my-4">
                Lee la descripci??n de los<br>
                Desafi??s Abiertos en el Centro<br>
                de Desaf??os y acepta los<br>
                t??rminos especificos del<br>
                desafio<br>
                </p>
        </div>
      </div>
      
      <div class="card">
      <div class="card-body bg-light">
      <img src="{{ asset('img/envia.jpg') }}" alt="Phishing Detect" height="200" width="400">
      <p data-aos="fade" data-aos-easing="linear" data-aos-duration="1000" data-aos-once="true" class="lead text-center text-black font-weight-bold">
          Env??a
              </p>
          <p data-aos="fade" data-aos-easing="linear" data-aos-duration="1000" data-aos-once="true" class="lead text-center text-black my-4">
                 Sube la(s) soluci??n(es)<br>
                 propuestas(s) que has<br>
                 desarrollado para un desaf??o<br>
                 especifico<br>
                </p>
        </div>
      </div>

      <div class="card">
        <div class="card-body bg-light">
        <img src="{{ asset('img/gana.jpg') }}" alt="Phishing Detect" height="200" width="400">
        <p data-aos="fade" data-aos-easing="linear" data-aos-duration="1000" data-aos-once="true" class="lead text-center text-black font-weight-bold">
            Gana
                </p>           
            <p data-aos="fade" data-aos-easing="linear" data-aos-duration="1000" data-aos-once="true" class="lead text-center text-black my-4">
                   Recibe premios en efectivo <br>
                   por las soluciones aceptadas <br>
                   por las organizaciones patrocinadoras.<br>
                  </p>
          </div>
        </div>
    </div>
    </div>
  </section>
  
  <footer>
    <div class="home_footer">
        <p> Todos los Derechos Reservados plat. CrowdSourcing &copy; <?php echo date('Y'); ?></p>
        
    </div>
  </footer> 
</body>
</html>
