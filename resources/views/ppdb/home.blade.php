@extends('layouts.admin')
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
              <a href="index.html" class="brand-logo darken-1">
                <img src="images/logo/materialize-logo.png" alt="materialize logo">
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
            <a href="javascript:void(0);" class="waves-effect waves-block waves-light translation-button"
              data-activates="translation-dropdown">
              <span class="flag-icon flag-icon-gb"></span>
            </a>
          </li>
          <li>
            <a href="javascript:void(0);" class="waves-effect waves-block waves-light toggle-fullscreen">
              <i class="material-icons">settings_overscan</i>
            </a>
          </li>
          <li>
            <a href="javascript:void(0);" class="waves-effect waves-block waves-light notification-button"
              data-activates="notifications-dropdown">
              <i class="material-icons">notifications_none
                <small class="notification-badge pink accent-2">5</small>
              </i>
            </a>
          </li>
          <li>
            <a href="javascript:void(0);" class="waves-effect waves-block waves-light profile-button"
              data-activates="profile-dropdown">
              <span class="avatar-status avatar-online">
                <img src="images/avatar/avatar-7.png" alt="avatar">
                <i></i>
              </span>
            </a>
          </li>
          <li>
            <a href="#" data-activates="chat-out" class="waves-effect waves-block waves-light chat-collapse">
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
      <!-- START LEFT SIDEBAR NAV-->
      <aside id="left-sidebar-nav">
        <ul id="slide-out" class="side-nav fixed leftside-navigation">
          <li class="user-details cyan darken-2">
            <div class="row">
              <div class="col col s4 m4 l4">
                <img src="images/avatar/avatar-7.png" alt="" class="circle responsive-img valign profile-image cyan">
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
                <a class="btn-flat dropdown-button waves-effect waves-light white-text profile-btn" href="#"
                  data-activates="profile-dropdown-nav">John Doe<i class="mdi-navigation-arrow-drop-down right"></i></a>
                <p class="user-roal">Administrator</p>
              </div>
            </div>
          </li>
          <li class="no-padding">
            <ul class="collapsible" data-collapsible="accordion">
              <li class="bold">
                <router-link class="waves-effect waves-cyan" to="dasboard">
                  <i class="material-icons">pie_chart_outlined</i>
                  <span class="nav-text">Dashboard</span>
                </router-link>
              </li>
              <li class="bold">
                <router-link class="waves-effect waves-cyan" to="login">
                  <i class="material-icons">people</i>
                  <span class="nav-text">My Profile</span>
                </router-link>
              </li>
              <li class="bold">
                <router-link class="waves-effect waves-cyan" to="/register">
                  <i class="material-icons">cast</i>
                  <span class="nav-text">Materi</span>
                </router-link>
              </li>
              <li class="bold">
                <router-link class="waves-effect waves-cyan" to="login">
                  <i class="material-icons">cast</i>
                  <span class="nav-text">Tugas</span>
                </router-link>
              </li>
              <li class="bold">
                <a href="#" class="waves-effect waves-cyan">
                  <i class="material-icons">cast</i>
                  <span class="nav-text">Evaluasi</span>
                </a>
              </li>
            </ul>
          </li>
        </ul>
        <a href="#" data-activates="slide-out"
          class="sidebar-collapse btn-floating btn-medium waves-effect waves-light hide-on-large-only">
          <i class="material-icons">menu</i>
        </a>
      </aside>







      <!-- END LEFT SIDEBAR NAV-->
      <!-- //////////////////////////////////////////////////////////////////////////// -->
      <!-- START CONTENT -->
      <section>
        <!--start container-->
        <router-view></router-view>

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

@endsection