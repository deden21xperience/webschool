@extends('layouts.adminLayout')
@section('title', 'Administrator')
@section('section')
<!-- Start Page Loading -->
{{-- <div id="loader-wrapper">
    <div id="loader"></div>
    <div class="loader-section section-left"></div>
    <div class="loader-section section-right"></div>
  </div> --}}
<!-- End Page Loading -->
<!-- //////////////////////////////////////////////////////////////////////////// -->
<!-- START HEADER -->
<header id="header" class="page-topbar">
  <!-- start header nav-->
  <div class="navbar-fixed">
    <nav class="navbar-color gradient-45deg-light-blue-cyan">
      <div class="nav-wrapper">
        <ul class="left">
          <li>
            <h1 class="logo-wrapper">
              <a href="{{ config('app.url') }}" class="brand-logo darken-1">
                <img src="{{ asset('images/logo/materialize-logo.png') }}" alt="materialize logo">
                <span class="logo-text hide-on-med-and-down">Materialize</span>
              </a>
            </h1>
          </li>
        </ul>
        <div class="header-search-wrapper hide-on-med-and-down">
          <i class="material-icons">search</i>
          <input type="text" name="Search" class="header-search-input z-depth-2" placeholder="Explore Materialize" />
        </div>
        <ul class="right hide-on-med-and-down">
          <li>
            <a href="javascript:void(0);" class=" waves-block waves-light translation-button"
              data-activates="translation-dropdown">
              <span class="flag-icon flag-icon-gb"></span>
            </a>
          </li>
          <li>
            <a href="javascript:void(0);" class=" waves-block waves-light toggle-fullscreen">
              <i class="material-icons">settings_overscan</i>
            </a>
          </li>
          <li>
            <a href="javascript:void(0);" class=" waves-block waves-light notification-button"
              data-activates="notifications-dropdown">
              <i class="material-icons">notifications_none
                <small class="notification-badge pink accent-2">5</small>
              </i>
            </a>
          </li>
          <li>
            <a href="javascript:void(0);" class=" waves-block waves-light profile-button"
              data-activates="profile-dropdown">
              <span class="avatar-status avatar-online">
                @php
                $post = App\Post::find(1);
                $image = $post->image;
                // dd($image->url);
                @endphp
                <img src="{{ asset($image->url) }}" alt="avatar">
                {{-- <img src="{{ asset('images/avatar/avatar-7.png') }}" alt="avatar"> --}}
                <i></i>
              </span>
            </a>
          </li>
          <li>
            <a href="#" data-activates="chat-out" class=" waves-block waves-light chat-collapse">
              <i class="material-icons">format_indent_increase</i>
            </a>
          </li>
        </ul>
        <!-- translation-button -->
        <ul id="translation-dropdown" class="dropdown-content">
          <li>
            <a href="#!" class="grey-text text-darken-1">
              <i class="flag-icon flag-icon-gb"></i> English</a>
          </li>
          <li>
            <a href="#!" class="grey-text text-darken-1">
              <i class="flag-icon flag-icon-fr"></i> French</a>
          </li>
          <li>
            <a href="#!" class="grey-text text-darken-1">
              <i class="flag-icon flag-icon-cn"></i> Chinese</a>
          </li>
          <li>
            <a href="#!" class="grey-text text-darken-1">
              <i class="flag-icon flag-icon-de"></i> German</a>
          </li>
        </ul>
        <!-- notifications-dropdown -->
        <ul id="notifications-dropdown" class="dropdown-content">
          <li>
            <h6>NOTIFICATIONS
              <span class="new badge">5</span>
            </h6>
          </li>
          <li class="divider"></li>
          <li>
            <a href="#!" class="grey-text text-darken-2">
              <span class="material-icons icon-bg-circle cyan small">add_shopping_cart</span> A new order has been
              placed!</a>
            <time class="media-meta" datetime="2015-06-12T20:50:48+08:00">2 hours ago</time>
          </li>
          <li>
            <a href="#!" class="grey-text text-darken-2">
              <span class="material-icons icon-bg-circle red small">stars</span> Completed the task</a>
            <time class="media-meta" datetime="2015-06-12T20:50:48+08:00">3 days ago</time>
          </li>
          <li>
            <a href="#!" class="grey-text text-darken-2">
              <span class="material-icons icon-bg-circle teal small">settings</span> Settings updated</a>
            <time class="media-meta" datetime="2015-06-12T20:50:48+08:00">4 days ago</time>
          </li>
          <li>
            <a href="#!" class="grey-text text-darken-2">
              <span class="material-icons icon-bg-circle deep-orange small">today</span> Director meeting started</a>
            <time class="media-meta" datetime="2015-06-12T20:50:48+08:00">6 days ago</time>
          </li>
          <li>
            <a href="#!" class="grey-text text-darken-2">
              <span class="material-icons icon-bg-circle amber small">trending_up</span> Generate monthly report</a>
            <time class="media-meta" datetime="2015-06-12T20:50:48+08:00">1 week ago</time>
          </li>
        </ul>
        <!-- profile-dropdown -->
        <ul id="profile-dropdown" class="dropdown-content">
          <li>
            <a href="#" class="grey-text text-darken-1">
              <i class="material-icons">face</i> Profile</a>
          </li>
          <li>
            <a href="#" class="grey-text text-darken-1">
              <i class="material-icons">settings</i> Settings</a>
          </li>
          <li>
            <a href="#" class="grey-text text-darken-1">
              <i class="material-icons">live_help</i> Help</a>
          </li>
          <li class="divider"></li>
          <li>
            <a href="#" class="grey-text text-darken-1">
              <i class="material-icons">lock_outline</i> Lock</a>
          </li>
          <li>
            <a href="#" class="grey-text text-darken-1">
              <i class="material-icons">keyboard_tab</i> Logout</a>
          </li>
        </ul>
      </div>
    </nav>
  </div>
  <!-- end header nav-->
</header>
<div id="app">

  <!-- END HEADER -->
  <!-- //////////////////////////////////////////////////////////////////////////// -->
  <!-- START MAIN -->
  <div id="main">
    <!-- START WRAPPER -->
    <div class="wrapper">
      <div id="breadcrumbs-wrapper">
        <!-- Search for small screen -->
        <div class="header-search-wrapper grey lighten-2 hide-on-large-only">
          <input type="text" name="Search" class="header-search-input z-depth-2" placeholder="Explore Materialize">
        </div>
        <div class="container">
          <div class="row">
            <div class="col s10 m6 l6">
              <h5 class="breadcrumbs-title">Cards</h5>
              <ol class="breadcrumbs">
                <li><a href="index.html">Dashboard</a>
                </li>
                <li><a href="#">UI Elements</a>
                </li>
                <li class="active">Cards</li>
              </ol>
            </div>
            <div class="col s2 m6 l6">
              <a class="btn dropdown-settings waves-effect waves-light breadcrumbs-btn right" href="#!"
                data-activates="dropdown1">
                <i class="material-icons hide-on-med-and-up">settings</i>
                <span class="hide-on-small-onl">Settings</span>
                <i class="material-icons right">arrow_drop_down</i>
              </a>
              <ul id="dropdown1" class="dropdown-content">
                <li><a href="#!" class="grey-text text-darken-2">Access<span class="badge">1</span></a>
                </li>
                <li><a href="#!" class="grey-text text-darken-2">Profile<span class="new badge">2</span></a>
                </li>
                <li><a href="#!" class="grey-text text-darken-2">Notifications</a>
                </li>
              </ul>

            </div>
          </div>
        </div>
      </div>
      <!-- START LEFT SIDEBAR NAV-->
      <aside id="left-sidebar-nav">

        <ul id="slide-out" class="side-nav fixed leftside-navigation ps-container ps-active-y"
          style="transform: translateX(0%);">
          <li class="user-details cyan darken-2">
            <div class="row">
              <div class="col col s4 m4 l4">
                <img src="{{ asset($image->url) }}" alt="avatar"
                  class="circle responsive-img valign profile-image cyan">
              </div>
              <div class="col col s8 m8 l8">
                <ul id="profile-dropdown-nav" class="dropdown-content">
                  <li>
                    <a href="#" class="grey-text text-darken-1">
                      <i class="material-icons">face</i> Profile</a>
                  </li>
                  <li>
                    <a href="#" class="grey-text text-darken-1">
                      <i class="material-icons">settings</i> Settings</a>
                  </li>
                  <li>
                    <a href="#" class="grey-text text-darken-1">
                      <i class="material-icons">live_help</i> Help</a>
                  </li>
                  <li class="divider"></li>
                  <li>
                    <a href="#" class="grey-text text-darken-1">
                      <i class="material-icons">lock_outline</i> Lock</a>
                  </li>
                  <li>
                    <a href="#" class="grey-text text-darken-1">
                      <i class="material-icons">keyboard_tab</i> Logout</a>
                  </li>
                </ul>
                <a class="btn-flat dropdown-button  waves-light white-text profile-btn" href="#"
                  data-activates="profile-dropdown-nav">John Doe<i class="mdi-navigation-arrow-drop-down right"></i></a>
                <p class="user-roal">Administrator</p>
              </div>
            </div>
          </li>
          <li class="no-padding">
            <ul class="collapsible" data-collapsible="accordion">
              <li>
                <router-link :to="{path:'/admin/dashboard', params: { userId: 123 }}">
                  {{-- <NavLink :active="isActive" :href="href" @click="navigate">{{ route.fullPath }}</NavLink> --}}
                  <i class="material-icons">pie_chart_outlined</i>
                  <span class="nav-text">Dashboard</span>
                </router-link>
              </li>
              <li class="bold">
                <router-link to="/admin/profile">
                  <i class="material-icons">people</i>
                  <span class="nav-text">My Profile</span>
                </router-link>
              </li>
              <!-- Start Collapsible-->
              <li class="bold">
                <ul class="collapsible">
                  <li>
                    <div class="collapsible-header ">
                      <a href="#">
                        <i class="material-icons">settings_applications</i>
                        <span class="nav-text">{{ config('app.name')}}
                          Master</span>
                      </a>
                    </div>
                    <div class="collapsible-body">
                      <div class="row">
                        <div class="col s12 m12 l12">
                          <ul class="collapsible">
                            <li>
                              <div class="collapsible-header ">
                                <a>
                                  <i class="material-icons">settings</i>
                                  <span class="nav-text">Setting</span>
                                </a>
                              </div>
                              <div class="collapsible-body">
                                <ul class="collapsible">
                                  <li>
                                    <router-link to="/admin/profileinfo" class="">
                                      <i class=" material-icons">info</i>
                                      <span class="nav-text">set profile info</span>
                                    </router-link>
                                  </li>
                                </ul>
                              </div>
                            </li>
                            <li>
                              <div class="collapsible-header ">
                                <a href="#">
                                  <i class="material-icons">supervisor_account</i>
                                  <span class="nav-text">Pengguna</span>
                                </a>
                              </div>
                              <div class="collapsible-body">
                                <ul class="collapsible">
                                  <li>
                                    <router-link to="/admin/level" class="">
                                      <i class="material-icons">account_box</i>
                                      <span class="nav-text">Level</span>
                                    </router-link>
                                  </li>
                                  <li>
                                    <router-link to="/admin/pengguna" class="">
                                      <i class="material-icons">account_box</i>
                                      <span class="nav-text">Pengguna</span>
                                    </router-link>
                                  </li>
                                </ul>
                              </div>
                            </li>
                            <li>
                              <router-link to="/admin/matapelajaran" class="">
                                <i class="material-icons">library_books</i>
                                <span class="nav-text">Mata Pelajaran</span>
                              </router-link>
                            </li>
                            <li>
                              <router-link to="/admin/siswa" class="">
                                <i class="material-icons">people_outline</i>
                                <span class="nav-text">Siswa</span>
                              </router-link>
                            </li>
                            <li>
                              <router-link to="/admin/guru" class="">
                                <i class="material-icons">people_outline</i>
                                <span class="nav-text">Guru</span>
                              </router-link>
                            </li>
                            <li>
                              <router-link to="tema" class="">
                                <i class="material-icons">style</i>
                                Tema
                              </router-link>
                            </li>

                          </ul>
                        </div>
                      </div>
                    </div>
                  </li>
                </ul>
                <!-- End of Collapsible -->
              </li>

              <li class="bold">
                <router-link to="/admin/keuangan">
                  <i class="material-icons">attach_money</i>
                  <span class="nav-text">Keuangan</span>
                </router-link>
              </li>
              <li class="bold">
                <router-link to="/admin/keuangan">
                  <i class="material-icons">attach_money</i>
                  <span class="nav-text">Administrasi</span>
                </router-link>
              </li>
              {{-- <li class="bold">
                <router-link to="/admin/transaksi">
                  <i class="material-icons">all_inclusive</i>
                  <span class="nav-text">Transaksi</span>
                </router-link>
              </li> --}}
              {{-- <li class="bold">
                <router-link to="/admin/laporan">
                  <i class="material-icons">print</i>
                  <span class="nav-text">Laporan</span>
                </router-link>
              </li> --}}
            </ul>

          </li>
        </ul>
        <a href="#" data-activates="slide-out"
          class="sidebar-collapse btn-floating btn-medium  waves-light hide-on-large-only">
          <i class="material-icons">menu</i>
        </a>
      </aside>
      <!-- END LEFT SIDEBAR NAV-->
      <!-- //////////////////////////////////////////////////////////////////////////// -->
      <!-- START CONTENT -->
      <section>
        <div class="container">
          <!--start container-->
          <router-view></router-view>
        </div>
        <!--end container-->
      </section>
      <!-- END CONTENT -->
      <!-- START RIGHT SIDEBAR NAV-->

      <!-- END RIGHT SIDEBAR NAV-->
    </div>
    <!-- END WRAPPER -->
  </div>
  <!-- END MAIN -->
</div>

<!-- //////////////////////////////////////////////////////////////////////////// -->
<!-- START FOOTER -->
{{--<footer class="page-footer gradient-45deg-light-blue-cyan">
    <div class="footer-copyright">
      <div class="container">
        <span>Copyright ©
          <script type="text/javascript">
            document.write(new Date().getFullYear());
          </script> <a class="grey-text text-lighten-2"
            href="http://themeforest.net/user/pixinvent/portfolio?ref=pixinvent" target="_blank">PIXINVENT</a> All
          rights reserved.</span>
        <span class="right hide-on-small-only"> Design and Developed by <a class="grey-text text-lighten-2"
            href="https://pixinvent.com/">PIXINVENT</a></span>
      </div>
    </div>
  </footer> --}}
<!-- END FOOTER -->


<script src="{{ asset('js/vendor.js') }}"></script>
<script src="{{ asset('js/manifest.js') }}"></script>
<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('develop/js/myadminscript.js') }}"></script>
<script src="{{ asset('mainadmin.js') }}"></script>
@endsection