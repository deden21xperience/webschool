<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>{{ __('Home') }}</title>
  <link rel="stylesheet" href="{{ asset('/vendors/materialize-costum/app.css') }}">
  <link rel="stylesheet" href="{{ asset('develop/css/mystyle.css') }}">
  <link rel="shortcut icon" href="{{ asset('images/icon/bowling.png') }}" type="image/x-icon">
  {{-- <link rel="stylesheet" href="{{ asset('/fonts/material-design-icons') }}"> --}}
  {{-- <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"> --}}
  <!-- Fonts -->
  {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> --}}
  {{--
    i<link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">--}}

  {{-- <link rel="stylesheet" href="{{ asset('fonts/i.fontawesome/css/fontawesome.min.css') }}"> --}}
  <link rel="stylesheet" href="{{ asset('fonts/iconfont/material-icons.css') }}">
  <link rel="stylesheet" href="{{ asset('vendors/flag-icon/css/flag-icon.min.css') }}">
  {{--<link rel="stylesheet" href="{{ asset('css/app.css') }}">
  <link rel="stylesheet" href="{{ asset('css/mystyle.css') }}"> --}}
  {{-- <link rel="stylesheet" href="{{ asset('css/style.css') }}"> --}}
  <style>
    /* html {
      line-height: 1.5;
      font-family: "Roboto", sans-serif !important;
      font-weight: normal;
      color: rgba(0, 0, 0, 0.87);
    }

    @font-face {
      font-family: "Roboto";
      src: local(Roboto Thin), url("../fonts/roboto/Roboto-Thin.woff2") format("woff2"),
        url("../fonts/roboto/Roboto-Thin.woff") format("woff");
      font-weight: 100;
    } */
  </style>

</head>

<body>


  <!-- Start Navbar -->
  <div class="navbar-fixed">
    <nav>
      <div style="margin:0 11px">
        <div class="nav-wrapper">
          <a href="#beranda" class="brand-logo hide-on-med-and-down">{{ strtoupper(config('app.name')) }}</a>
          <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
          <ul class="right hide-on-med-and-down">
            <li><a class="waves-effect waves-block waves-light" href="#beranda">{{ ucfirst(__('text.home')) }}</a></li>
            <li><a class="tesnav waves-effect waves-block waves-light"
                href="#about">{{ ucfirst(__('text.about us')) }}</a>
            </li>

            {{-- <li><a class="waves-effect waves-block waves-light" href="#news">Berita</a></li> --}}
            {{-- <li><a class="waves-effect waves-block waves-light" href="#card-id">Fasilitas</a></li> --}}
            <li><a class="waves-effect waves-block waves-light"
                href="{{ route('subdomain',['account'=>'ppdb'])}}">PPDB</a></li>
            <li><a class="waves-effect waves-block waves-light"
                href="{{ route('subdomain', ['account' => 'elearning'])}}">E-Learning</a></li>
            {{-- <li><a class="waves-effect waves-block waves-light" href="#profile-sejarah">Profil & Sejarah</a></li>
            <li><a class="waves-effect waves-block waves-light" href="#visi-misi">Visi & Misi</a></li> --}}
            {{-- <li><a class="waves-effect waves-block waves-light" href="{{route('login')}}">{{ __('Login')}}</a></li>
            --}}
            <!-- Dropdown Trigger -->
            <li>

              <a class='dropdown-trigger' href='#' data-target='dropdown1'>
                <span class="flag-icon {{$flagIcon}}"></span>
                {{ $langName}}
                <span class="material-icons">arrow_drop_down</span>
              </a>
            </li>
            <!-- Dropdown Structure -->
            <ul id='dropdown1' class='dropdown-content'>
              <li>
                <a class='dropdown waves-effect waves-block waves-light translation-button' data-target='dropdown1'
                  href="{{ url('/','id')}}"><span class="flag-icon flag-icon-id"></span>&nbsp;id
                </a>
                <a class='dropdown waves-effect waves-block waves-light translation-button' data-target='dropdown1'
                  href="{{ url('/','en')}}"><span class="flag-icon flag-icon-gb"></span>&nbsp;en</a>
              </li>
            </ul>
            <li>
              <ul><a href="{{route('login')}}"><i class="material-icons">account_circle</i></a></ul>
            </li>
          </ul>
          </li>
          </ul>
        </div>
      </div>
    </nav>
  </div>
  <ul class="sidenav" id="mobile-demo">
    <li><a class="brand-logo" href="sass.html">SMK PasJat</a></li>
    <div class="divider"></div>
    <li><a class="waves-effect waves-block waves-light" href="#beranda">{{ ucfirst(__('text.home'))}}</a></li>
    <li><a class="tesnav waves-effect waves-block waves-light" href="#about">{{ ucfirst(__('text.about us'))}}</a>
    </li>
    <li><a href="#">PPDB</a></li>
    <li><a href="#">Ujian Online</a></li>
    {{-- <li><a href="{{route('login')}}">{{ __('Login') }}</a></li> --}}
  </ul>
  <!-- dropdown trigger -->
  <ul id="dropdown1" class="dropdown-content"
    style="white-space: nowrap; position: absolute; top: 64px; left: 862.203px; display: none; opacity: 1;">
    <li>
      <a href="#!" class="grey-text text-darken-1">
        <i class="flag-icon flag-icon-gb"></i></a>
    </li>
    <li>
      <a href="#!" class="grey-text text-darken-1">
        <i class="flag-icon flag-icon-id"></i></a>
    </li>
  </ul>
  <!-- End of Navbar -->

  <!-- Start of Slider -->
  <div id="beranda" class="slider scrollspy tes123">
    <ul class="slides">
      @for ($i = 0; $i < 3; $i++) <li>
        <img class="lazy" data-src="{{ asset('images/gallary/' . ($i +8) .'.png') }}" alt="">
        <div class="caption {{$data[$i]}}">
          <h3>This is our big Tagline</h3>
          <h5 class="hide-on-med-and-down">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quidem, illum.
          </h5>
        </div>
        </li>
        @endfor
    </ul>
    <div class="tes234">
      <button id="prev" class="btn"><i class="material-icons text-darken-1">skip_previous</i></button>
      <button id="pause" class="btn"><i class="material-icons">pause</i></button>
      <button id="next" class="btn"><i class="material-icons">skip_next</i></button>
    </div>

  </div>
  <!-- End of Slider -->
  <!-- Start of Pengumuman -->
  <!-- Pengumuman ketika disorot akan memunculkan pointer
    pada saat diklik muncul modal sebagai pengumuman -->
  <section id="pengumuman" class="grey lighten-3">
    <h4 class="center-align">{{ strtoupper(__('text.announcement'))}}</h4>
    <hr>
    <div class="row">
      @for ($i = 0; $i < 4; $i++) <div class="col s12 l3">
        <div class="flip-card">
          <div class="flip-card-inner">
            <div class="flip-card-front">
              <img src="img_avatar.png" alt="Avatar" style="width:300px;height:300px;">
            </div>
            <div class="flip-card-back">
              {{-- <h1>John Doe</h1> --}}
              <p>Architect & Engineer</p>
              {{-- <p>We love that guy</p> --}}
            </div>
          </div>
        </div>
    </div>
    @endfor
    </div>
    {{-- <div class="row" style="margin-bottom: 0 !important">
        @for ($i = 0; $i < 3; $i++) <div class="col l4 s12">
          <div id="app" class="agenda-frame">
            <agenda-frame>
          </div>
      </div>
      @endfor
      </div> --}}
  </section>
  <!-- End of Pengumuman -->

  <!-- Start of news -->
  <!-- Data diambil dari JSON blog, artikel 
    Link menuju ke subdomain blog
  -->
  <section id="news" class="grey lighten-5 scrollspy">
    <h4 class="center">{{ strtoupper(__('text.news info') )}}</h4>
    <hr>
    <div class="row ">
      <!-- Start Berita -->
      <div class="col l7 s12">
        <h5>{{ strtoupper(__('text.news')) }}</h5>
        <!-- Start of BLOG -->
        <div class="row">
          @for ($i = 0; $i < 2; $i++) <div class="col s12 l12">
            <div class="card horizontal hoverable">
              <div class="card-image">
                <img class="lazy" data-src="{{asset('images/gallary/'. ($i + 2) .'.png')}}">
              </div>
              <div class="card-stacked">
                <div class="card-content">
                  <span class="card-title">Card Title</span>
                  <p style="font-size: smaller; margin-bottom:10px">Senin, 11 Mei 2020 | 03:22 WIB</p>
                  <p>I am a very simple card. I am good at containing small bits of information.</p>
                </div>
                <div class="card-action">
                  <a class="left" href="#">{{ __('Share')}}</a>
                  <a class="right" href="{{route('subdomain',['account'=>'blog'])}}">{{ __('Selengkapnya')}}</a>

                </div>
              </div>
            </div>
        </div>
        @endfor
      </div>
      {{-- <div class="row">
          <div class="col s12 l6">
            <h5>BERITA</h5>
          </div>
          <div class="col l6 hide-on-med-and-down">
            <h5>BERITA</h5>
          </div>
        </div> --}}
    </div>
    <!-- End Berita -->

    <!-- Start Agenda -->
    <div class="col l5 s12 ">
      <h5>AGENDA</h5>

      <div class="row">
        <div class="col l12 s12">
          <div class="grey lighten-3 timeline" style="margin-top:10px; overflow: auto;">
            <div class="containerx leftx">
              <div class="content">
                <h5>2020</h5>
                <p>Lorem ipsum..</p>
              </div>
            </div>
            <div class="containerx rightx">
              <div class="content">
                <h5>2020</h5>
                <p>Lorem ipsum..</p>
              </div>
            </div>
            <div class="containerx leftx">
              <div class="content">
                <h5>2020</h5>
                <p>Lorem ipsum..</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End Agenda -->
    </div>
  </section>
  <!-- End of news -->


  <!-- Start of Card -->
  <!-- Fasilitas berupa carousel 
    data diambil dari JSON
  -->
  <section id="card-id" class="grey lighten-3 scrollspy">
    <h4 class="center">{{ strtoupper(__('text.facilities') )}}</h4>
    <hr>
    <div class="row" style="margin-bottom: 0 !important">
      @for ($i = 0; $i < 4; $i++) <div class="col s12 m3">
        <div class="card overflow-auto">
          <div class="card-image">
            <img class="lazy" data-src="{{ asset('images/gallary/'. ($i + 10) .'.png') }}">
            <span class="card-title">Card Title</span>
          </div>
          <div class="card-content">
            <p>I am a very simple card. I am good at containing small bits of information.
              I am convenient because I require little markup to use effectively.</p>
          </div>
          <div class="card-action">
            <a href="#">{{ __('Selengkapnya') }}</a>
          </div>
        </div>
    </div>
    @endfor
  </section>
  <!-- End of card -->

  <!-- Start of Galeri & video -->
  <section class="grey lighten-5">
    <h4 class="center">Galeri Foto & Video</h4>
    <hr>
    <div class="row">
      <div class="col l12 s12">
        <div class="row">
          @for ($i = 0; $i < 4; $i++) <div class="col l3 s12">
            <img class="lazy materialboxed responsive-img" data-src="{{ asset('images/gallary/'.($i+1).'.png') }}">
        </div>
        @endfor
      </div>
    </div>
    </div>
    <div class="row">
      <div class="col l12 s12">
        <video class="lazy responsive-video" controls>
          <source data-src="movie.mp4" type="video/mp4">
        </video>
      </div>
    </div>
  </section>
  <!-- End of Galeri & video -->


  <!-- Start Section Counter 
  data diambil dari warga sekolah 
  @return json
  -->
  <section class="grey lighten-4">
    <div class="row counter" style="margin-bottom: 0 !important">
      @foreach ($wargaSekolah as $item => $value)
      <div class="col l3 s12 ">
        <!-- start of Card-->
        <div id="card-panel" class="card-panel white darken-4 center ">
          <i class="material-icons medium">people</i>
          <h4>{{$value}}+</h4>
          <p>{{ ucfirst(__($item)) }}</p>
        </div>
        <!-- end of Card-->
      </div>
      @endforeach
    </div>
  </section>
  <!-- End Section Counter -->

  <!-- Start Footer -->
  <footer class="page-footer overflow-auto">
    <div class="row">
      <div class="col l12 s12">
        <h5>{{__('text.map location')}}: </h5>
        <div id="googleMap" style="width:100%;height:400px;background-color:grey"></div>
        {{-- <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.5643371372057!2d107.77092821457612!3d-6.942554394984077!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68c49877ef716d%3A0xfcf8fe738b3db412!2sSMK%20Pasundan%20Jatinangor!5e0!3m2!1sid!2sid!4v1588957156522!5m2!1sid!2sid"
          width="100%" height="400" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
          tabindex="0"></iframe> --}}
      </div>
    </div>
    <!-- Start of Kritik & Saran -->
    {{-- <div class="col l6 s12">
        <h5 class="header2">Saran & Kritik</h5>
        <div class="card-panel black-text ">
          <div class="row">
            <form class="col s12">
              <div class="row">
                <div class="input-field col s12">
                  <i class="material-icons prefix">account_circle</i>
                  <input id="name3" type="text">
                  <label for="first_name">Name</label>
                </div>
              </div>
              <div class="row">
                <div class="input-field col s12">
                  <i class="material-icons prefix">email</i>
                  <input id="email3" type="email">
                  <label for="email">Email</label>
                </div>
              </div>
              <div class="row">
                <div class="input-field col s12">
                  <i class="material-icons prefix">question_answer</i>
                  <textarea id="message3" class="materialize-textarea"></textarea>
                  <label for="message" class="">Message</label>
                </div>
                <div class="row">
                  <div class="input-field col s12">
                    <button class="btn waves-effect waves-light right" type="submit" name="action">Submit
                      <i class="material-icons right">send</i>
                    </button>
                  </div>
                </div>
              </div>
              @csrf
            </form>
          </div>
        </div>
      </div> --}}
    <!-- End of Kritik & Saran -->

    <!-- end kolom 1 -->

    <!-- start kolom 2 -->


    <div class="row" style="margin-bottom: 0 !important">
      <!-- start kolom 1 -->
      <div class="col l6 s12">
        <h5 class="white-text">{{__('text.about us')}}: </h5>
        <p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia provident voluptatem facere natus commodi
          atque nulla eius iure molestiae distinctio.</p>
      </div>

      <div class="col l6 s12">
        <h5>{{__('text.contact')}}: </h5>
        <ul>
          <li><i class="fa fa-map-marker" aria-hidden="true"></i> Jl. Kolonel Ahmad Syam - Cikeruh - Jatinangor
          </li>
          <li><i class="fa fa-phone" aria-hidden="true"></i> (022)7782242</li>
          <li><i class="fa fa-envelope" aria-hidden="true"></i> smkpasundanjatinangor@gmail.com</li>
        </ul>
      </div>
    </div>
    <!-- end kolom 2 -->

    <div class="row">
      <div class="col l12 s12 center">
        <h5 class="white-text">{{__('text.connect with us')}}:</h5>
        <div class="center">
          <a class="grey-text text-lighten-3" href="#!"><span class="fa fa-facebook"></span> Facebook</a>
          <a class="grey-text text-lighten-3" href="#!"><span class="fa fa-twitter"></span> Twitter</a>
          <a class="grey-text text-lighten-3" href="#!"><span class="fa fa-instagram"></span> Instagram</a>
          <a class="grey-text text-lighten-3" href="#!"><span class="fa fa-youtube"></span> Youtube</a>
          {{-- </div> --}}
        </div>
      </div>
    </div>
    <div class="footer-copyright" style="margin:0 11px">
      <p>© {{date('Y') }} Copyright Text</p>
      <a href="#" class="white-text right">Creative by: d21xperience</a>
  </footer>
  <!-- End Footer -->


  <!-- Start Chat -->
  <div class="fixed-action-btn" style="bottom:50px">
    <a class="btn-floating btn-large green">
      <i class="large material-icons">chat</i>
    </a>

    <ul>
      <li><a class="btn-floating red"><i class="material-icons">insert_chart</i></a></li>
      <li><a class="btn-floating yellow darken-1"><i class="material-icons">format_quote</i></a></li>
      <li><a class="btn-floating green"><i class="material-icons">publish</i></a></li>
      <li><a class="btn-floating blue"><i class="material-icons">attach_file</i></a></li>
    </ul>
  </div>
  <!-- End Chat -->


  {{-- <script src="{{ asset('js/app.js') }}"></script> --}}
  <script src="{{ asset('js/costum.js') }}"></script>
  <script src="{{ asset('vendors/materialize-costum/materialize.js') }}"></script>
  {{-- <script src="{{ asset('vendors/jquery-3.2.1.min.js') }}"></script> --}}
  <script src="{{ asset('develop/js/myscript.js')}}"></script>
  <script>
    function myMap(){
      var mapProp={
        center: {lat:-6.9425544,lng:107.7709282},
        zoom: 15
      }
      var map = new google.maps.Map(document.getElementById("googleMap"),mapProp)
      var marker = new google.maps.Marker({position: mapProp.center, map: map, animation:google.maps.Animation.BOUNCE});
    }
  </script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBa3eoNmIVuyJ6-ejh1_vAugsktbHl2rJY&callback=myMap" async
    defer>
  </script>
</body>

</html>