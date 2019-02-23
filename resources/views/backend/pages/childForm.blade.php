<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from www.bootstrapdash.com/demo/stellar-admin/jquery/pages/forms/wizard.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 18 Feb 2019 11:04:37 GMT -->
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Stellar Admin</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="../../node_modules/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="../../node_modules/simple-line-icons/css/simple-line-icons.css">
  <link rel="stylesheet" href="../../node_modules/flag-icon-css/css/flag-icon.min.css">
  <link rel="stylesheet" href="../../node_modules/perfect-scrollbar/css/perfect-scrollbar.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="../../css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="../images/favicon.html" />
</head>

<body>
  <div class="container-scroller">
    <!-- partial:../../partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper">
        <a class="navbar-brand brand-logo" href="../../index.html"><img src="../../images/logo.svg" alt="logo"></a>
        <a class="navbar-brand brand-logo-mini" href="../../index.html"><img src="../../images/logo_mini.svg" alt="logo"></a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center">
        <button class="navbar-toggler navbar-toggler d-none d-lg-block align-self-center mr-2" type="button" data-toggle="minimize">
        <span class="icon-list icons"></span>
      </button>
        <p class="page-name d-none d-lg-block">Hi, Dave Mattew</p>
        <ul class="navbar-nav ml-lg-auto">
          <li class="nav-item">
            <form class="mt-2 mt-md-0 d-none d-lg-block search-input">
              <div class="input-group">
                <span class="input-group-addon d-flex align-items-center"><i class="icon-magnifier icons"></i></span>
                <input type="text" class="form-control" placeholder="Search...">
              </div>
            </form>
          </li>
          <li class="nav-item dropdown mail-dropdown">
            <a class="nav-link count-indicator" id="MailDropdown" href="#" data-toggle="dropdown">
                <i class="icon-envelope-letter icons"></i>
                <span class="count bg-danger"></span>
            </a>
            <div class="dropdown-menu navbar-dropdown mail-notification dropdownAnimation" aria-labelledby="MailDropdown">
              <a class="dropdown-item" href="#">
                <div class="sender-img">
                  <img src="../../images/faces/face6.jpg" alt="">
                  <span class="badge badge-success">&nbsp;</span>
                </div>
                <div class="sender">
                  <p class="Sende-name">John Doe</p>
                  <p class="Sender-message">Hey, We have a meeting planned at the end of the day.</p>
                </div>
              </a>
              <a class="dropdown-item" href="#">
                <div class="sender-img">
                  <img src="../../images/faces/face2.jpg" alt="">
                  <span class="badge badge-success">&nbsp;</span>
                </div>
                <div class="sender">
                  <p class="Sende-name">Leanne Jones</p>
                  <p class="Sender-message">Can we schedule a call this afternoon?</p>
                </div>
              </a>
              <a class="dropdown-item" href="#">
                <div class="sender-img">
                  <img src="../../images/faces/face3.jpg" alt="">
                  <span class="badge badge-primary">&nbsp;</span>
                </div>
                <div class="sender">
                  <p class="Sende-name">Stella</p>
                  <p class="Sender-message">Great presentation the other day. Keep up the good work!</p>
                </div>
              </a>
              <a class="dropdown-item" href="#">
                <div class="sender-img">
                  <img src="../../images/faces/face4.jpg" alt="">
                  <span class="badge badge-warning">&nbsp;</span>
                </div>
                <div class="sender">
                  <p class="Sende-name">James Brown</p>
                  <p class="Sender-message">Need the updates of the project at the end of the week.</p>
                </div>
              </a>
              <a href="#" class="dropdown-item view-all">View all</a>
            </div>
          </li>
          <li class="nav-item dropdown notification-dropdown">
            <a class="nav-link count-indicator" id="notificationDropdown" href="#" data-toggle="dropdown">
              <i class="icon-speech icons"></i>
              <span class="count"></span>
            </a>
            <div class="dropdown-menu navbar-dropdown preview-list notification-drop-down dropdownAnimation" aria-labelledby="notificationDropdown">
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon">
                    <i class="icon-info mx-0"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <p class="preview-subject font-weight-medium">Application Error</p>
                  <p class="font-weight-light small-text">
                    Just now
                  </p>
                </div>
              </a>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon">
                    <i class="icon-speech mx-0"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <p class="preview-subject">Settings</p>
                  <p class="font-weight-light small-text">
                    Private message
                  </p>
                </div>
              </a>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon">
                    <i class="icon-envelope mx-0"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <p class="preview-subject">New user registration</p>
                  <p class="font-weight-light small-text">
                    2 days ago
                  </p>
                </div>
              </a>
            </div>
          </li>
          <li class="nav-item lang-dropdown d-none d-sm-block">
            <a class="nav-link" href="#">
              <p class="mb-0">English <i class="flag-icon flag-icon-gb"></i></p>
            </a>
          </li>
          <li class="nav-item d-none d-sm-block profile-img">
            <a class="nav-link profile-image" href="#">
              <img src="../../images/faces/face4.jpg" alt="profile-img">
              <span class="online-status online bg-success"></span>
            </a>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center ml-auto" type="button" data-toggle="offcanvas">
          <span class="icon-menu icons"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <div class="row row-offcanvas row-offcanvas-right">
        <!-- partial:../../partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            <li class="nav-item nav-category">
              <span class="nav-link">GENERAL</span>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../../index.html">
                <span class="menu-title">Dashboard</span>
                <i class="icon-speedometer menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../widgets.html">
                <span class="menu-title">Widgets</span>
                <i class="icon-wrench menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#page-layouts" aria-expanded="false" aria-controls="page-layouts">
                <span class="menu-title">Page Layouts</span>
                <i class="icon-size-actual menu-icon"></i>
              </a>
              <div class="collapse" id="page-layouts">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="../layout/boxed-layout.html">Boxed</a></li>
                  <li class="nav-item"> <a class="nav-link" href="../layout/rtl-layout.html">RTL</a></li>
                  <li class="nav-item"> <a class="nav-link" href="../layout/horizontal-menu.html">Horizontal Menu</a></li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#sidebar-layouts" aria-expanded="false" aria-controls="sidebar-layouts">
                <span class="menu-title">Sidebar Layouts</span>
                <i class="icon-list menu-icon"></i>
              </a>
              <div class="collapse" id="sidebar-layouts">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="../layout/compact-menu.html">Compact menu</a></li>
                  <li class="nav-item"> <a class="nav-link" href="../layout/sidebar-collapsed.html">Icon menu</a></li>
                  <li class="nav-item"> <a class="nav-link" href="../layout/sidebar-hidden.html">Sidebar Hidden</a></li>
                  <li class="nav-item"> <a class="nav-link" href="../layout/sidebar-hidden-overlay.html">Sidebar Overlay</a></li>
                  <li class="nav-item"> <a class="nav-link" href="../layout/sidebar-fixed.html">Sidebar Fixed</a></li>
                </ul>
              </div>
            </li>
            <li class="nav-item nav-category">
              <span class="nav-link">UI FEATURES</span>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                <span class="menu-title">Basic UI Elements</span>
                <i class="icon-layers menu-icon"></i>
              </a>
              <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="../ui-features/accordions.html">Accordions</a></li>
                  <li class="nav-item"> <a class="nav-link" href="../ui-features/buttons.html">Buttons</a></li>
                  <li class="nav-item"> <a class="nav-link" href="../ui-features/badges.html">Badges</a></li>
                  <li class="nav-item"> <a class="nav-link" href="../ui-features/breadcrumbs.html">Breadcrumbs</a></li>
                  <li class="nav-item"> <a class="nav-link" href="../ui-features/dropdowns.html">Dropdowns</a></li>
                  <li class="nav-item"> <a class="nav-link" href="../ui-features/modals.html">Modals</a></li>
                  <li class="nav-item"> <a class="nav-link" href="../ui-features/progress.html">Progress bar</a></li>
                  <li class="nav-item"> <a class="nav-link" href="../ui-features/pagination.html">Pagination</a></li>
                  <li class="nav-item"> <a class="nav-link" href="../ui-features/tabs.html">Tabs</a></li>
                  <li class="nav-item"> <a class="nav-link" href="../ui-features/typography.html">Typography</a></li>
                  <li class="nav-item"> <a class="nav-link" href="../ui-features/tooltips.html">Tooltips</a></li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#ui-advanced" aria-expanded="false" aria-controls="ui-advanced">
                <span class="menu-title">Advanced Elements</span>
                <i class="icon-handbag menu-icon"></i>
              </a>
              <div class="collapse" id="ui-advanced">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="../ui-features/dragula.html">Dragula</a></li>
                  <li class="nav-item"> <a class="nav-link" href="../ui-features/clipboard.html">Clipboard</a></li>
                  <li class="nav-item"> <a class="nav-link" href="../ui-features/context-menu.html">Context menu</a></li>
                  <li class="nav-item"> <a class="nav-link" href="../ui-features/slider.html">Sliders</a></li>
                  <li class="nav-item"> <a class="nav-link" href="../ui-features/carousel.html">Carousel</a></li>
                  <li class="nav-item"> <a class="nav-link" href="../ui-features/colcade.html">Colcade</a></li>
                  <li class="nav-item"> <a class="nav-link" href="../ui-features/loaders.html">Loaders</a></li>
                  <li class="nav-item"> <a class="nav-link" href="../ui-features/tour.html">Tour</a></li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#tables" aria-expanded="false" aria-controls="tables">
                <span class="menu-title">Tables</span>
                <i class="icon-grid menu-icon"></i>
              </a>
              <div class="collapse" id="tables">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="../tables/basic-table.html">Basic table</a></li>
                  <li class="nav-item"> <a class="nav-link" href="../tables/data-table.html">Data table</a></li>
                  <li class="nav-item"> <a class="nav-link" href="../tables/js-grid.html">Js-grid</a></li>
                  <li class="nav-item"> <a class="nav-link" href="../tables/sortable-table.html">Sortable table</a></li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../ui-features/popups.html">
                <span class="menu-title">Popups</span>
                <i class="icon-diamond menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../ui-features/notifications.html">
                <span class="menu-title">Notifications</span>
                <i class="icon-bell menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#icons" aria-expanded="false" aria-controls="icons">
                <span class="menu-title">Icons</span>
                <i class="icon-globe menu-icon"></i>
              </a>
              <div class="collapse" id="icons">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="../icons/flag-icons.html">Flag icons</a></li>
                  <li class="nav-item"> <a class="nav-link" href="../icons/font-awesome.html">Font Awesome</a></li>
                  <li class="nav-item"> <a class="nav-link" href="../icons/simple-line-icon.html">Simple line icons</a></li>
                  <li class="nav-item"> <a class="nav-link" href="../icons/themify.html">Themify icons</a></li>
                </ul>
              </div>
            </li>
            <li class="nav-item nav-category">
              <span class="nav-link">FORMS</span>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#form-elements" aria-expanded="false" aria-controls="form-elements">
                <span class="menu-title">Form elements</span>
                <i class="icon-flag menu-icon"></i>
              </a>
              <div class="collapse" id="form-elements">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"><a class="nav-link" href="basic_elements.html">Basic Elements</a></li>
                  <li class="nav-item"><a class="nav-link" href="advanced_elements.html">Advanced Elements</a></li>
                  <li class="nav-item"><a class="nav-link" href="validation.html">Validation</a></li>
                  <li class="nav-item"><a class="nav-link" href="wizard.html">Wizard</a></li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#editors" aria-expanded="false" aria-controls="editors">
                <span class="menu-title">Editors</span>
                <i class="icon-anchor menu-icon"></i>
              </a>
              <div class="collapse" id="editors">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"><a class="nav-link" href="text_editor.html">Text editors</a></li>
                  <li class="nav-item"><a class="nav-link" href="code_editor.html">Code editors</a></li>
                </ul>
              </div>
            </li>
            <li class="nav-item nav-category">
              <span class="nav-link">DATA REPRESENTAION</span>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#charts" aria-expanded="false" aria-controls="charts">
                <span class="menu-title">Charts</span>
                <i class="icon-pie-chart menu-icon"></i>
              </a>
              <div class="collapse" id="charts">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="../charts/chartjs.html">ChartJs</a></li>
                  <li class="nav-item"> <a class="nav-link" href="../charts/morris.html">Morris</a></li>
                  <li class="nav-item"> <a class="nav-link" href="../charts/flot-chart.html">Flot</a></li>
                  <li class="nav-item"> <a class="nav-link" href="../charts/google-charts.html">Google charts</a></li>
                  <li class="nav-item"> <a class="nav-link" href="../charts/sparkline.html">Sparkline js</a></li>
                  <li class="nav-item"> <a class="nav-link" href="../charts/c3.html">C3 charts</a></li>
                  <li class="nav-item"> <a class="nav-link" href="../charts/chartist.html">Chartists</a></li>
                  <li class="nav-item"> <a class="nav-link" href="../charts/rickshaw.html">Rickshaw</a></li>
                  <li class="nav-item"> <a class="nav-link" href="../charts/justGage.html">JustGage</a></li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#maps" aria-expanded="false" aria-controls="maps">
                <span class="menu-title">Maps</span>
                <i class="icon-location-pin menu-icon"></i>
              </a>
              <div class="collapse" id="maps">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="../maps/mapeal.html">Mapeal</a></li>
                  <li class="nav-item"> <a class="nav-link" href="../maps/vector-map.html">Vector Map</a></li>
                  <li class="nav-item"> <a class="nav-link" href="../maps/google-maps.html">Google Map</a></li>
                </ul>
              </div>
            </li>
            <li class="nav-item nav-category">
              <span class="nav-link">SAMPLE PAGES</span>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
                <span class="menu-title">User Pages</span>
                <i class="icon-bubbles menu-icon"></i>
              </a>
              <div class="collapse" id="auth">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="../samples/login.html"> Login </a></li>
                  <li class="nav-item"> <a class="nav-link" href="../samples/login-2.html"> Login 2 </a></li>
                  <li class="nav-item"> <a class="nav-link" href="../samples/register.html"> Register </a></li>
                  <li class="nav-item"> <a class="nav-link" href="../samples/register-2.html"> Register 2 </a></li>
                  <li class="nav-item"> <a class="nav-link" href="../samples/lock-screen.html"> Lockscreen </a></li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#error" aria-expanded="false" aria-controls="error">
                <span class="menu-title">Error pages</span>
                <i class="icon-support menu-icon"></i>
              </a>
              <div class="collapse" id="error">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="../samples/error-404.html"> 404 </a></li>
                  <li class="nav-item"> <a class="nav-link" href="../samples/error-500.html"> 500 </a></li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#general-pages" aria-expanded="false" aria-controls="general-pages">
                <span class="menu-title">General Pages</span>
                <i class="icon-user menu-icon"></i>
              </a>
              <div class="collapse" id="general-pages">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="../samples/blank-page.html"> Blank Page </a></li>
                  <li class="nav-item"> <a class="nav-link" href="../samples/landing-page.html"> Landing Page </a></li>
                  <li class="nav-item"> <a class="nav-link" href="../samples/profile.html"> Profile </a></li>
                  <li class="nav-item"> <a class="nav-link" href="../samples/faq.html"> FAQ </a></li>
                  <li class="nav-item"> <a class="nav-link" href="../samples/faq-2.html"> FAQ 2 </a></li>
                  <li class="nav-item"> <a class="nav-link" href="../samples/news-grid.html"> News grid </a></li>
                  <li class="nav-item"> <a class="nav-link" href="../samples/timeline.html"> Timeline </a></li>
                  <li class="nav-item"> <a class="nav-link" href="../samples/search-results.html"> Search Results </a></li>
                  <li class="nav-item"> <a class="nav-link" href="../samples/portfolio.html"> Portfolio </a></li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#e-commerce" aria-expanded="false" aria-controls="e-commerce">
                <span class="menu-title">E-commerce</span>
                <i class="icon-briefcase menu-icon"></i>
              </a>
              <div class="collapse" id="e-commerce">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="../samples/invoice.html"> Invoice </a></li>
                  <li class="nav-item"> <a class="nav-link" href="../samples/pricing-table.html"> Pricing Table </a></li>
                  <li class="nav-item"> <a class="nav-link" href="../samples/orders.html"> Orders </a></li>
                </ul>
              </div>
            </li>
            <li class="nav-item nav-category">
              <span class="nav-link">APPLICATIONS</span>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../apps/email.html">
                <span class="menu-title">E-mail</span>
                <i class="icon-cursor menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../apps/calendar.html">
                <span class="menu-title">Calendar</span>
                <i class="icon-calendar menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../apps/todo.html">
                <span class="menu-title">Todo List</span>
                <i class="icon-clock menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../apps/gallery.html">
                <span class="menu-title">Gallery</span>
                <i class="icon-picture menu-icon"></i>
              </a>
            </li>
            <li class="nav-item nav-category">
              <span class="nav-link">DOCUMENTAIONS</span>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../documentation.html">
                <span class="menu-title">Documentation</span>
                <i class="icon-magnet menu-icon"></i>
              </a>
            </li>
          </ul>
        </nav>
        <!-- partial -->
        <div class="content-wrapper">
          <div class="row">
            <div class="col-12 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">jquery-steps wizard</h4>
                  <form id="example-form" action="#">
                    <div>
                      <h3>Account</h3>
                      <section>
                        <div class="form-group">
                          <label for="exampleInputEmail1">Email address</label>
                          <input type="email" class="form-control" aria-describedby="emailHelp" placeholder="Enter email">
                          <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                        </div>
                        <div class="form-group">
                          <label for="exampleInputPassword1">Password</label>
                          <input type="password" class="form-control" placeholder="Password">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputPassword1">Confirm Password</label>
                          <input type="password" class="form-control" placeholder="Confirm password">
                        </div>
                      </section>
                      <h3>Profile</h3>
                      <section>
                        <div class="form-group">
                          <label for="exampleInputEmail1">First name</label>
                          <input type="email" class="form-control" aria-describedby="emailHelp" placeholder="Enter first name">
                        </div>
                        <div class="form-group">
                          <label>Last name</label>
                          <input type="password" class="form-control" placeholder="Last name">
                        </div>
                        <div class="form-group">
                          <label>Profession</label>
                          <input type="password" class="form-control" placeholder="Profession">
                        </div>
                      </section>
                      <h3>Comments</h3>
                      <section>
                        <div class="form-group">
                          <label>Comments</label>
                          <textarea class="form-control" rows="3"></textarea>
                        </div>
                      </section>
                      <h3>Finish</h3>
                      <section>
                        <div class="form-check">
                          <label class="form-check-label">
                            <input class="checkbox" type="checkbox">
                            I agree with the Terms and Conditions.
                          </label>
                        </div>
                      </section>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
          <!--vertical wizard-->
          <div class="row">
            <div class="col-12 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">jquery-steps vertical wizard</h4>
                  <form id="example-vertical-wizard" action="#">
                    <div>
                      <h3>Account</h3>
                      <section>
                        <div class="form-group">
                          <label for="userName">User name *</label>
                          <input id="userName" name="userName" type="text" class="required form-control">
                        </div>
                        <div class="form-group">
                          <label for="password">Password *</label>
                          <input id="password" name="password" type="password" class="required form-control">
                        </div>
                        <div class="form-group">
                          <label for="confirm">Confirm Password *</label>
                          <input id="confirm" name="confirm" type="password" class="required form-control">
                          <small>(*) Mandatory</small>
                        </div>
                      </section>
                      <h3>Profile</h3>
                      <section>
                        <div class="form-group">
                          <label for="name">First name *</label>
                          <input id="name" name="name" type="text" class="required form-control">
                        </div>
                        <div class="form-group">
                          <label for="surname">Last name *</label>
                          <input id="surname" name="surname" type="text" class="required form-control">
                        </div>
                        <div class="form-group">
                          <label for="email">Email *</label>
                          <input id="email" name="email" type="text" class="required email form-control">
                        </div>
                        <div class="form-group">
                          <label for="address">Address</label>
                          <input id="address" name="address" type="text" class="form-control">
                          <small>(*) Mandatory</small>
                        </div>
                      </section>
                      <h3>Finish</h3>
                      <section>
                        <div class="form-check">
                          <label class="form-check-label">
                            <input class="checkbox" type="checkbox">
                            I agree with the Terms and Conditions.
                          </label>
                        </div>
                      </section>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->
        <footer class="footer">
          <div class="container-fluid clearfix">
            <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © 2018 <a href="http://www.bootstrapdash.com/" target="_blank">Bootstrapdash</a>. All rights reserved.</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="mdi mdi-heart text-danger"></i></span>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- row-offcanvas ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="../../node_modules/jquery/dist/jquery.min.js"></script>
  <script src="../../node_modules/popper.js/dist/umd/popper.min.js"></script>
  <script src="../../node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
  <script src="../../node_modules/perfect-scrollbar/dist/perfect-scrollbar.min.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <script src="../../node_modules/jquery-steps/build/jquery.steps.min.js"></script>
  <script src="../../node_modules/jquery-validation/dist/jquery.validate.min.js"></script>
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="../../js/off-canvas.js"></script>
  <script src="../../js/hoverable-collapse.js"></script>
  <script src="../../js/misc.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="../../js/wizard.js"></script>
  <!-- End custom js for this page-->
</body>


<!-- Mirrored from www.bootstrapdash.com/demo/stellar-admin/jquery/pages/forms/wizard.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 18 Feb 2019 11:04:38 GMT -->
</html>
