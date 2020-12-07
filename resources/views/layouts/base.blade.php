<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">


<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Universidad Autónoma de Chiapas,UNACH,chiapas, México" />
    <meta name="description" content="La Universidad Autónoma de Chiapas es una Institución de Educación Superior pública y autónoma, socialmente responsable y con vocación de servicio." />
    <meta name="generator" content="Joomla! - Open Source Content Management" />
    <title>Universidad Autónoma de Chiapas</title>
    <link href="templates/unach-template-17/favicon.ico" rel="shortcut icon" type="image/vnd.microsoft.icon" />
    <link href="templates/unach-template-17/css/app65e3.css?v=100" rel="stylesheet" type="text/css" />

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <script src="templates/unach-template-17/js/foundation.js" type="text/javascript"></script>
    <script src="templates/unach-template-17/js/app.js" type="text/javascript"></script>

    <!--<meta charset="<metautf-8"> -->
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
  <div id="app">
  <header>
    <div class="logo-busqueda">
      <div class="logo">
        <img src="templates/unach-template-17/images/unach.jpg" alt="UNACH">
      </div>
      <!-- Right Side Of Navbar -->
      <ul class="navbar-nav ml-auto float-right">
          <!-- Authentication Links -->
          @guest
              <li class="nav-item">
                  <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
              </li>
              @if (Route::has('register'))
                  <li class="nav-item">
                      <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                  </li>
              @endif
          @else
              <li class="nav-item dropdown">
                  <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                      {{ Auth::user()->name }} <span class="caret"></span>
                  </a>

                  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="{{ route('logout') }}"
                         onclick="event.preventDefault();
                                       document.getElementById('logout-form').submit();">
                          {{ __('Logout') }}
                      </a>

                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                          @csrf
                      </form>
                  </div>
              </li>
          @endguest
      </ul>
    </div>
  </header>

<!--inicio de login-->

<!--fin de login-->
  <nav>
    <div class="top-bar " id="menu-principal">
      <div class="top-bar-left">
        <ul class="nav menu" data-responsive-menu="drilldown large-dropdown">
          <li class="item-101 default current active">
            <a href="{{ url('/home') }}" >Inicio</a>
          </li>





          <!-- Nav Item - Alerts -->
          <li class="nav-item dropdown no-arrow mx-1">
            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fas fa-bell fa-fw"></i>
              <!-- Counter - Alerts -->
              <span class="badge badge-danger badge-counter">3+</span>
            </a>
            <!-- Dropdown - Alerts -->
            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
              <h6 class="dropdown-header">
                Alerts Center
              </h6>
              <a class="dropdown-item d-flex align-items-center" href="#">
                <div class="mr-3">
                  <div class="icon-circle bg-primary">
                    <i class="fas fa-file-alt text-white"></i>
                  </div>
                </div>
                <div>
                  <div class="small text-gray-500">December 12, 2019</div>
                  <span class="font-weight-bold">A new monthly report is ready to download!</span>
                </div>
              </a>
              <a class="dropdown-item d-flex align-items-center" href="#">
                <div class="mr-3">
                  <div class="icon-circle bg-success">
                    <i class="fas fa-donate text-white"></i>
                  </div>
                </div>
                <div>
                  <div class="small text-gray-500">December 7, 2019</div>
                  $290.29 has been deposited into your account!
                </div>
              </a>
              <a class="dropdown-item d-flex align-items-center" href="#">
                <div class="mr-3">
                  <div class="icon-circle bg-warning">
                    <i class="fas fa-exclamation-triangle text-white"></i>
                  </div>
                </div>
                <div>
                  <div class="small text-gray-500">December 2, 2019</div>
                  Spending Alert: We've noticed unusually high spending for your account.
                </div>
              </a>
              <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
            </div>
          </li>

          <!-- Nav Item - Messages -->
          <li class="nav-item dropdown no-arrow mx-1">
            <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fas fa-envelope fa-fw"></i>
              <!-- Counter - Messages -->
              <span class="badge badge-danger badge-counter">7</span>
            </a>
            <!-- Dropdown - Messages -->
            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="messagesDropdown">
              <h6 class="dropdown-header">
                Message Center
              </h6>
              <a class="dropdown-item d-flex align-items-center" href="#">
                <div class="dropdown-list-image mr-3">
                  <img class="rounded-circle" src="https://source.unsplash.com/fn_BT9fwg_E/60x60" alt="">
                  <div class="status-indicator bg-success"></div>
                </div>
                <div class="font-weight-bold">
                  <div class="text-truncate">Hi there! I am wondering if you can help me with a problem I've been having.</div>
                  <div class="small text-gray-500">Emily Fowler · 58m</div>
                </div>
              </a>
              <a class="dropdown-item d-flex align-items-center" href="#">
                <div class="dropdown-list-image mr-3">
                  <img class="rounded-circle" src="https://source.unsplash.com/AU4VPcFN4LE/60x60" alt="">
                  <div class="status-indicator"></div>
                </div>
                <div>
                  <div class="text-truncate">I have the photos that you ordered last month, how would you like them sent to you?</div>
                  <div class="small text-gray-500">Jae Chun · 1d</div>
                </div>
              </a>
              <a class="dropdown-item d-flex align-items-center" href="#">
                <div class="dropdown-list-image mr-3">
                  <img class="rounded-circle" src="https://source.unsplash.com/CS2uCrpNzJY/60x60" alt="">
                  <div class="status-indicator bg-warning"></div>
                </div>
                <div>
                  <div class="text-truncate">Last month's report looks great, I am very happy with the progress so far, keep up the good work!</div>
                  <div class="small text-gray-500">Morgan Alvarez · 2d</div>
                </div>
              </a>
              <a class="dropdown-item d-flex align-items-center" href="#">
                <div class="dropdown-list-image mr-3">
                  <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60" alt="">
                  <div class="status-indicator bg-success"></div>
                </div>
                <div>
                  <div class="text-truncate">Am I a good boy? The reason I ask is because someone told me that people say this to all dogs, even if they aren't good...</div>
                  <div class="small text-gray-500">Chicken the Dog · 2w</div>
                </div>
              </a>
              <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
            </div>
          </li>
          <!--li class="item-223 divider deeper parent">
            <a href="#" class="separator">Acerca de</a>
              <ul class="vertical menu">
                <li class="item-193">
                  <a href="acerca-de/mision-y-vision-unach.html" >Misión y Visión</a>
                </li>
                <li class="item-191">
                  <a href="https://transparencia.unach.mx/" target="_blank">Transparencia</a>
                </li>
                <li class="item-141">
                  <a href="acerca-de/legislacion-universitaria.html" >Legislación Universitaria</a>
                </li>
                <li class="item-225">
                  <a href="acerca-de/organizacion-funcional.html" >Organización funcional</a>
                </li>
                <li class="item-229">
                  <a href="acerca-de/identidad.html" >Identidad</a>
                </li>
                <li class="item-226">
                  <a href="acerca-de/numeralia.html" >Numeralia</a>
                </li>
                <li class="item-125">
                  <a href="acerca-de/rector.html" >Rector</a>
                </li>
                <li class="item-227">
                  <a href="https://contraloriasocial.unach.mx/" target="_blank">Contraloría social</a>
                </li>
                <li class="item-303">
                  <a href="acerca-de/administracion-central.html" >Administración central</a>
                </li>
                <li class="item-228">
                  <a href="acerca-de/gestion-de-la-calidad.html" >Gestión de la calidad</a>
                </li>
              </ul>
            </li>
            <li class="item-114 divider deeper parent">
              <a href="#" class="separator">Oferta educativa</a>
                <ul class="vertical menu">
                  <li class="item-115">
                    <a href="oferta-educativa/licenciaturas.html" >Licenciaturas</a>
                  </li>
                  <li class="item-232">
                    <a href="oferta-educativa/facultades.html" >Facultades</a>
                  </li>
                  <li class="item-121">
                    <a href="oferta-educativa/posgrados.html" >Posgrados</a>
                  </li>
                  <li class="item-287">
                    <a href="oferta-educativa/escuelas.html" >Escuelas</a>
                  </li>
                  <li class="item-116">
                    <a href="oferta-educativa/educacion-a-distancia.html" >Educación a Distancia</a>
                  </li>
                  <li class="item-286">
                    <a href="oferta-educativa/institutos.html" >Institutos</a>
                  </li>
                  <li class="item-157">
                    <a href="oferta-educativa/educacion-continua.html" >Educación continua</a>
                  </li>
                  <li class="item-284">
                    <a href="oferta-educativa/centros.html" >Centros</a>
                  </li>
                  <li class="item-230">
                    <a href="oferta-educativa/idiomas.html" >Idiomas</a>
                  </li>
                  <li class="item-236">
                    <a href="oferta-educativa/calendario-escolar.html" >Calendario escolar</a>
                  </li>
                  <li class="item-231">
                    <a href="oferta-educativa/movilidad.html" >Movilidad</a>
                  </li>
                  <li class="item-308">
                    <a href="oferta-educativa/mooc.html" >MOOC</a>
                  </li>
                </ul>
              </li>
              <li class="item-237 divider deeper parent">
                <a href="#" class="separator">Investigación</a>
                  <ul class="vertical menu">
                    <li class="item-239">
                      <a href="investigacion/sistema-nacional-de-investigadores-sni.html" >Sistema Nacional de Investigadores (SNI)</a>
                    </li>
                    <li class="item-240">
                      <a href="investigacion/sistema-estatal-de-investigadores-sei.html" >Sistema Estatal de Investigadores (SEI)</a>
                    </li>
                    <li class="item-241">
                      <a href="investigacion/redes-tematicas.html" >Redes temáticas</a>
                    </li>
                    <li class="item-242">
                      <a href="investigacion/cuerpos-academicos.html" >Cuerpos Académicos</a>
                      </li>
                      <li class="item-304">
                        <a href="investigacion/publicaciones.html" >Publicaciones científicas</a>
                      </li>
                    </ul>
                  </li>
                  <li class="item-243 divider deeper parent">
                    <a href="#" class="separator">Extensión y Vinculación</a>
                    <ul class="vertical menu">
                      <li class="item-282">
                        <a href="vinculacion/incubadora-de-empresas-incubo.html" >Incubadora de empresas (INCUBO)</a>
                      </li>
                      <li class="item-246">
                        <a href="vinculacion/propiedad-industrial.html" >Propiedad industrial</a>
                      </li>
                      <li class="item-247">
                        <a href="vinculacion/derechos-de-autor.html" >Derechos de autor</a>
                      </li>
                      <li class="item-249">
                        <a href="vinculacion/servicio-social.html" >Servicio Social</a>
                      </li>
                      <li class="item-250">
                        <a href="vinculacion/uvd.html" >UVD</a>
                      </li>
                      <li class="item-257">
                        <a href="vinculacion/entidad-de-certificacion-y-evaluacion-ece.html" >Entidad de Certificación y Evaluación (ECE)</a>
                      </li>
                      <li class="item-307">
                        <a href="vinculacion/universidad-socialmente-responsable.html" >Universidad Socialmente Responsable</a>
                      </li>
                      <li class="item-347">
                        <a href="https://becas.unach.mx/" target="_blank">Becas</a>
                      </li>
                    </ul>
                  </li>
                  <li class="item-139 divider deeper parent">
                    <a href="#" class="separator">Servicios</a>
                    <ul class="vertical menu">
                      <li class="item-252">
                        <a href="servicios/estancias-infantiles.html" >Estancias Infantiles</a>
                      </li>
                      <li class="item-253">
                        <a href="servicios/tecnologias-de-informacion.html" >Tecnologías de Información</a>
                      </li>
                      <li class="item-255">
                        <a href="servicios/tienda-unach.html" >Tienda UNACH</a>
                      </li>
                      <li class="item-256">
                        <a href="servicios/biblioteca.html" >Biblioteca</a>
                      </li>
                      <li class="item-260">
                        <a href="servicios/catalogo-de-servicios.html" >Catálogo de servicios</a>
                      </li>
                      <li class="item-339">
                        <a href="servicios/universidad-saludable.html" >Universidad saludable </a>
                      </li>
                      <li class="item-338">
                        <a href="servicios/catalogo-de-beneficios.html" >Catálogo de beneficios </a>
                      </li>
                      <li class="item-340">
                        <a href="servicios/universidad-sustentable.html" >Universidad sustentable</a>
                      </li>
                      <li class="item-341">
                        <a href="servicios/seguro-facultativo.html" >Seguro Facultativo </a>
                      </li>
                    </ul>
                  </li>
                  <li class="item-261 divider deeper parent">
                    <a href="#" class="separator">Deporte y Cultura</a>
                    <ul class="vertical menu">
                      <li class="item-266">
                        <a href="deporte-y-cultura/ballet.html" >Ballet</a>
                      </li>
                      <li class="item-306">
                        <a href="deporte-y-cultura/instalaciones-deportivas.html" >Instalaciones Deportivas</a>
                      </li>
                      <li class="item-270">
                        <a href="deporte-y-cultura/universitarios-de-10.html" >Universitarios de 10</a>
                      </li>
                      <li class="item-186">
                        <a href="deporte-y-cultura/publicaciones-culturales.html" >Publicaciones culturales</a>
                      </li>
                      <li class="item-273">
                        <a href="deporte-y-cultura/feria-internacional-del-libro-unach.html" >Feria Internacional del Libro UNACH</a>
                      </li>
                      <li class="item-289">
                        <a href="deporte-y-cultura/talleres-artisticos.html" >Talleres artísticos</a>
                      </li>
                    </ul>
                  </li>
                  <li class="item-143">
                    <a href="directorio.html" >Directorio</a>
                  </li>
                </ul>
            </div> -->
        </div>
    </nav>


    <main class="py-4">
        @yield('content')
    </main>
  </div>


  </body>
<!-- Mirrored from www.unach.mx/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 11 May 2020 14:13:07 GMT -->
</html>
