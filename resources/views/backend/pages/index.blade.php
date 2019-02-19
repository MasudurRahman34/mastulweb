<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from www.bootstrapdash.com/demo/stellar-admin/jquery/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 18 Feb 2019 10:54:37 GMT -->
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Stellar Admin</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="node_modules/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="node_modules/simple-line-icons/css/simple-line-icons.css">
  <link rel="stylesheet" href="node_modules/flag-icon-css/css/flag-icon.min.css">
  <link rel="stylesheet" href="node_modules/perfect-scrollbar/css/perfect-scrollbar.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <link rel="stylesheet" href="node_modules/chartist/dist/chartist.min.css" />
  <link rel="stylesheet" href="node_modules/jvectormap/jquery-jvectormap.css" />
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="images/favicon.png" />
</head>
<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper">
        <a class="navbar-brand brand-logo" href="index.html"><img src="images/logo.svg" alt="logo"></a>
        <a class="navbar-brand brand-logo-mini" href="index.html"><img src="images/logo_mini.svg" alt="logo"></a>
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
                  <img src="images/faces/face6.jpg" alt="">
                  <span class="badge badge-success">&nbsp;</span>
                </div>
                <div class="sender">
                  <p class="Sende-name">John Doe</p>
                  <p class="Sender-message">Hey, We have a meeting planned at the end of the day.</p>
                </div>
              </a>
              <a class="dropdown-item" href="#">
                <div class="sender-img">
                  <img src="images/faces/face2.jpg" alt="">
                  <span class="badge badge-success">&nbsp;</span>
                </div>
                <div class="sender">
                  <p class="Sende-name">Leanne Jones</p>
                  <p class="Sender-message">Can we schedule a call this afternoon?</p>
                </div>
              </a>
              <a class="dropdown-item" href="#">
                <div class="sender-img">
                  <img src="images/faces/face3.jpg" alt="">
                  <span class="badge badge-primary">&nbsp;</span>
                </div>
                <div class="sender">
                  <p class="Sende-name">Stella</p>
                  <p class="Sender-message">Great presentation the other day. Keep up the good work!</p>
                </div>
              </a>
              <a class="dropdown-item" href="#">
                <div class="sender-img">
                  <img src="images/faces/face4.jpg" alt="">
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
              <img src="images/faces/face4.jpg" alt="profile-img">
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
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            <li class="nav-item nav-category">
              <span class="nav-link">GENERAL</span>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.html">
                <span class="menu-title">Dashboard</span>
                <i class="icon-speedometer menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="pages/widgets.html">
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
                  <li class="nav-item"> <a class="nav-link" href="pages/layout/boxed-layout.html">Boxed</a></li>
                  <li class="nav-item"> <a class="nav-link" href="pages/layout/rtl-layout.html">RTL</a></li>
                  <li class="nav-item"> <a class="nav-link" href="pages/layout/horizontal-menu.html">Horizontal Menu</a></li>
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
                  <li class="nav-item"> <a class="nav-link" href="pages/layout/compact-menu.html">Compact menu</a></li>
                  <li class="nav-item"> <a class="nav-link" href="pages/layout/sidebar-collapsed.html">Icon menu</a></li>
                  <li class="nav-item"> <a class="nav-link" href="pages/layout/sidebar-hidden.html">Sidebar Hidden</a></li>
                  <li class="nav-item"> <a class="nav-link" href="pages/layout/sidebar-hidden-overlay.html">Sidebar Overlay</a></li>
                  <li class="nav-item"> <a class="nav-link" href="pages/layout/sidebar-fixed.html">Sidebar Fixed</a></li>
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
                  <li class="nav-item"> <a class="nav-link" href="pages/ui-features/accordions.html">Accordions</a></li>
                  <li class="nav-item"> <a class="nav-link" href="pages/ui-features/buttons.html">Buttons</a></li>
                  <li class="nav-item"> <a class="nav-link" href="pages/ui-features/badges.html">Badges</a></li>
                  <li class="nav-item"> <a class="nav-link" href="pages/ui-features/breadcrumbs.html">Breadcrumbs</a></li>
                  <li class="nav-item"> <a class="nav-link" href="pages/ui-features/dropdowns.html">Dropdowns</a></li>
                  <li class="nav-item"> <a class="nav-link" href="pages/ui-features/modals.html">Modals</a></li>
                  <li class="nav-item"> <a class="nav-link" href="pages/ui-features/progress.html">Progress bar</a></li>
                  <li class="nav-item"> <a class="nav-link" href="pages/ui-features/pagination.html">Pagination</a></li>
                  <li class="nav-item"> <a class="nav-link" href="pages/ui-features/tabs.html">Tabs</a></li>
                  <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">Typography</a></li>
                  <li class="nav-item"> <a class="nav-link" href="pages/ui-features/tooltips.html">Tooltips</a></li>
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
                  <li class="nav-item"> <a class="nav-link" href="pages/ui-features/dragula.html">Dragula</a></li>
                  <li class="nav-item"> <a class="nav-link" href="pages/ui-features/clipboard.html">Clipboard</a></li>
                  <li class="nav-item"> <a class="nav-link" href="pages/ui-features/context-menu.html">Context menu</a></li>
                  <li class="nav-item"> <a class="nav-link" href="pages/ui-features/slider.html">Sliders</a></li>
                  <li class="nav-item"> <a class="nav-link" href="pages/ui-features/carousel.html">Carousel</a></li>
                  <li class="nav-item"> <a class="nav-link" href="pages/ui-features/colcade.html">Colcade</a></li>
                  <li class="nav-item"> <a class="nav-link" href="pages/ui-features/loaders.html">Loaders</a></li>
                  <li class="nav-item"> <a class="nav-link" href="pages/ui-features/tour.html">Tour</a></li>
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
                  <li class="nav-item"> <a class="nav-link" href="pages/tables/basic-table.html">Basic table</a></li>
                  <li class="nav-item"> <a class="nav-link" href="pages/tables/data-table.html">Data table</a></li>
                  <li class="nav-item"> <a class="nav-link" href="pages/tables/js-grid.html">Js-grid</a></li>
                  <li class="nav-item"> <a class="nav-link" href="pages/tables/sortable-table.html">Sortable table</a></li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="pages/ui-features/popups.html">
                <span class="menu-title">Popups</span>
                <i class="icon-diamond menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="pages/ui-features/notifications.html">
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
                  <li class="nav-item"> <a class="nav-link" href="pages/icons/flag-icons.html">Flag icons</a></li>
                  <li class="nav-item"> <a class="nav-link" href="pages/icons/font-awesome.html">Font Awesome</a></li>
                  <li class="nav-item"> <a class="nav-link" href="pages/icons/simple-line-icon.html">Simple line icons</a></li>
                  <li class="nav-item"> <a class="nav-link" href="pages/icons/themify.html">Themify icons</a></li>
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
                  <li class="nav-item"><a class="nav-link" href="pages/forms/basic_elements.html">Basic Elements</a></li>
                  <li class="nav-item"><a class="nav-link" href="pages/forms/advanced_elements.html">Advanced Elements</a></li>
                  <li class="nav-item"><a class="nav-link" href="pages/forms/validation.html">Validation</a></li>
                  <li class="nav-item"><a class="nav-link" href="pages/forms/wizard.html">Wizard</a></li>
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
                  <li class="nav-item"><a class="nav-link" href="pages/forms/text_editor.html">Text editors</a></li>
                  <li class="nav-item"><a class="nav-link" href="pages/forms/code_editor.html">Code editors</a></li>
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
                  <li class="nav-item"> <a class="nav-link" href="pages/charts/chartjs.html">ChartJs</a></li>
                  <li class="nav-item"> <a class="nav-link" href="pages/charts/morris.html">Morris</a></li>
                  <li class="nav-item"> <a class="nav-link" href="pages/charts/flot-chart.html">Flot</a></li>
                  <li class="nav-item"> <a class="nav-link" href="pages/charts/google-charts.html">Google charts</a></li>
                  <li class="nav-item"> <a class="nav-link" href="pages/charts/sparkline.html">Sparkline js</a></li>
                  <li class="nav-item"> <a class="nav-link" href="pages/charts/c3.html">C3 charts</a></li>
                  <li class="nav-item"> <a class="nav-link" href="pages/charts/chartist.html">Chartists</a></li>
                  <li class="nav-item"> <a class="nav-link" href="pages/charts/rickshaw.html">Rickshaw</a></li>
                  <li class="nav-item"> <a class="nav-link" href="pages/charts/justGage.html">JustGage</a></li>
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
                  <li class="nav-item"> <a class="nav-link" href="pages/maps/mapeal.html">Mapeal</a></li>
                  <li class="nav-item"> <a class="nav-link" href="pages/maps/vector-map.html">Vector Map</a></li>
                  <li class="nav-item"> <a class="nav-link" href="pages/maps/google-maps.html">Google Map</a></li>
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
                  <li class="nav-item"> <a class="nav-link" href="pages/samples/login.html"> Login </a></li>
                  <li class="nav-item"> <a class="nav-link" href="pages/samples/login-2.html"> Login 2 </a></li>
                  <li class="nav-item"> <a class="nav-link" href="pages/samples/register.html"> Register </a></li>
                  <li class="nav-item"> <a class="nav-link" href="pages/samples/register-2.html"> Register 2 </a></li>
                  <li class="nav-item"> <a class="nav-link" href="pages/samples/lock-screen.html"> Lockscreen </a></li>
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
                  <li class="nav-item"> <a class="nav-link" href="pages/samples/error-404.html"> 404 </a></li>
                  <li class="nav-item"> <a class="nav-link" href="pages/samples/error-500.html"> 500 </a></li>
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
                  <li class="nav-item"> <a class="nav-link" href="pages/samples/blank-page.html"> Blank Page </a></li>
                  <li class="nav-item"> <a class="nav-link" href="pages/samples/landing-page.html"> Landing Page </a></li>
                  <li class="nav-item"> <a class="nav-link" href="pages/samples/profile.html"> Profile </a></li>
                  <li class="nav-item"> <a class="nav-link" href="pages/samples/faq.html"> FAQ </a></li>
                  <li class="nav-item"> <a class="nav-link" href="pages/samples/faq-2.html"> FAQ 2 </a></li>
                  <li class="nav-item"> <a class="nav-link" href="pages/samples/news-grid.html"> News grid </a></li>
                  <li class="nav-item"> <a class="nav-link" href="pages/samples/timeline.html"> Timeline </a></li>
                  <li class="nav-item"> <a class="nav-link" href="pages/samples/search-results.html"> Search Results </a></li>
                  <li class="nav-item"> <a class="nav-link" href="pages/samples/portfolio.html"> Portfolio </a></li>
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
                  <li class="nav-item"> <a class="nav-link" href="pages/samples/invoice.html"> Invoice </a></li>
                  <li class="nav-item"> <a class="nav-link" href="pages/samples/pricing-table.html"> Pricing Table </a></li>
                  <li class="nav-item"> <a class="nav-link" href="pages/samples/orders.html"> Orders </a></li>
                </ul>
              </div>
            </li>
            <li class="nav-item nav-category">
              <span class="nav-link">APPLICATIONS</span>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="pages/apps/email.html">
                <span class="menu-title">E-mail</span>
                <i class="icon-cursor menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="pages/apps/calendar.html">
                <span class="menu-title">Calendar</span>
                <i class="icon-calendar menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="pages/apps/todo.html">
                <span class="menu-title">Todo List</span>
                <i class="icon-clock menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="pages/apps/gallery.html">
                <span class="menu-title">Gallery</span>
                <i class="icon-picture menu-icon"></i>
              </a>
            </li>
            <li class="nav-item nav-category">
              <span class="nav-link">DOCUMENTAIONS</span>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="pages/documentation.html">
                <span class="menu-title">Documentation</span>
                <i class="icon-magnet menu-icon"></i>
              </a>
            </li>
          </ul>
        </nav>
        <!-- partial -->
        <div class="content-wrapper">
          <div class="row">
            <div class="col-lg-12 grid-margin">
              <div class="card overflow-hidden dashboard-curved-chart">
                <div class="card-body mx-3">
                  <h2 class="card-title border-bottom-none">Recent Movement</h2>
                  <div class="align-items-center mb-5 justify-content-between d-lg-flex d-xl-flex d-md-block d-block">
                    <div id="chartLegend"></div>
                    <div class="nav-wrapper d-inline-block mt-4 mt-lg-0">
                      <ul class="nav nav-pills">
                        <li class="nav-item">
                          <a class="nav-link" href="#">Week</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link active" href="#">Month</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#">Year</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#">Today</a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div id="curved-line-chart" class="float-chart float-chart-mini"></div>
              </div>
            </div>
          </div>
          <!-- ROW ENDS -->
          <div class="row">
            <div class="col-lg-12 grid-margin">
              <div class="card performance-cards">
                <div class="card-body">
                  <div class="row">
                    <div class="col d-flex flex-row justify-content-center align-items-center">
                      <div class="wrapper icon-circle bg-success">
                        <i class="icon-rocket icons"></i>
                      </div>
                      <div class="wrapper text-wrapper">
                        <p class="text-dark">8954</p>
                        <p>Lifetime total sales</p>
                      </div>
                    </div>
                    <div class="col d-flex flex-row justify-content-center align-items-center">
                      <div class="wrapper icon-circle bg-danger">
                        <i class="icon-briefcase icons"></i>
                      </div>
                      <div class="wrapper text-wrapper">
                        <p class="text-dark">7841</p>
                        <p>Income amounts</p>
                      </div>
                    </div>
                    <div class="col d-flex flex-row justify-content-center align-items-center">
                      <div class="wrapper icon-circle bg-warning">
                        <i class="icon-umbrella icons"></i>
                      </div>
                      <div class="wrapper text-wrapper">
                        <p class="text-dark">6521</p>
                        <p>Total users</p>
                      </div>
                    </div>
                    <div class="col d-flex flex-row justify-content-center align-items-center">
                      <div class="wrapper icon-circle bg-primary">
                        <i class="icon-check icons"></i>
                      </div>
                      <div class="wrapper text-wrapper">
                        <p class="text-dark">325</p>
                        <p>Total visits</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- ROW ENDS -->
          <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-12 grid-margin stretch-card">
              <div class="card current-progress-card">
                <div class="card-body">
                <h2 class="card-title">Current Progress</h2>
                <div class="row">
                  <div class="col">Bootstrap Admin</div>
                  <div class="col">
                    <div class="progress progress-sm">
                      <div class="progress-bar bg-primary" role="progressbar" style="width: 64%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col">Custom Work</div>
                  <div class="col">
                    <div class="progress progress-sm">
                      <div class="progress-bar bg-success" role="progressbar" style="width: 24%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col">Clients Module</div>
                  <div class="col">
                    <div class="progress progress-sm">
                      <div class="progress-bar bg-info" role="progressbar" style="width: 52%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col">Email Templates</div>
                  <div class="col">
                    <div class="progress progress-sm">
                      <div class="progress-bar bg-danger" role="progressbar" style="width: 69%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col">Plans Module</div>
                  <div class="col">
                    <div class="progress progress-sm">
                      <div class="progress-bar bg-warning" role="progressbar" style="width: 78%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                </div>
              </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 grid-margin stretch-card">
              <div class="card calender-card">
                <div class="card-body">
                <h2 class="card-title">Calender</h2>
                <div class="datepicker"></div>
              </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-12 col-sm-12 grid-margin stretch-card">
              <div class="card quick-stat">
                <div class="card-body">
                <h2 class="card-title">Quick Status</h2>
                <div class="row mt-3">
                  <div class="col">
                    <div id="YearlyProgress" class="progressbar-js-circle item-relative"></div>
                    <p class="graph-name text-center mt-2">Yearly Income</p>
                  </div>
                  <div class="col">
                    <div id="MonthlyProgress" class="progressbar-js-circle item-relative"></div>
                    <p class="graph-name text-center mt-2">Monthly Income</p>
                  </div>
                </div>
                <div class="pending-amount">
                  <div class="data d-flex justify-content-between">
                    <p class="txt">Pending Amount</p>
                    <p class="pendin-percentage">65%</p>
                  </div>
                  <div class="progress">
                    <div class="progress-bar bg-primary" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
              </div>
              </div>
            </div>
          </div>
          <!-- ROW ENDS -->
          <div class="row">
            <div class="col-12 col-lg-4 col-md-4 grid-margin stretch-card">
              <div class="card px-3">
                <div class="card-body">
                  <h2 class="card-title">Business Grid</h2>
                  <div id="c3-pie-chart" class="mb-4"></div>
                </div>
              </div>
            </div>
            <div class="col-12 col-lg-8 col-md-8 grid-margin stretch-card">
              <div class="card px-3">
                <div class="card-body">
                  <h2 class="card-title">Growth</h2>
                  <div class="ct-chart" id="ct-chart-vartical-stacked-bar"></div>
                </div>
              </div>
            </div>
          </div>
          <!-- ROW ENDS -->
          <div class="row section social-section">
            <div class="col-lg-4 grid-margin stretch-card">
              <div class="social-card w-100 bg-facebook">
                <div class="social-icon">
                  <i class="icon-social-facebook icons"></i>
                </div>
                <div class="content">
                  <p>+ 1500</p>
                  <p>Facebook Likes</p>
                </div>
              </div>
            </div>
            <div class="col-lg-4 grid-margin stretch-card">
              <div class="social-card w-100 bg-twitter">
                <div class="social-icon">
                  <i class="icon-social-twitter icons"></i>
                </div>
                <div class="content">
                  <p>+574</p>
                  <p>Twitter Followers</p>
                </div>
              </div>
            </div>
            <div class="col-lg-4 grid-margin stretch-card">
              <div class="social-card w-100 bg-dribbble">
                <div class="social-icon">
                  <i class="icon-social-dribbble icons"></i>
                </div>
                <div class="content">
                  <p>+450</p>
                  <p>Dribble Shots</p>
                </div>
              </div>
            </div>
          </div>
          <!-- ROW ENDS -->
          <div class="row">
            <div class="col-12 col-lg-5 col-md-5 grid-margin stretch-card">
              <div class="card px-3 activity-card">
                <div class="card-body">
                  <h2 class="card-title">Latest Activity</h2>
                  <div class="col">
                    <div class="pic pr-3"><img src="images/faces/face1.jpg" alt=""></div>
                    <div class="content">
                      <p class="activity">Create New Page</p>
                      <p class="a-text">Vestibulum lectus nulla, maximus</p>
                    </div>
                    <div class="time">
                      <p>Just Now</p>
                    </div>
                  </div>
                  <div class="col">
                    <div class="pic pr-3"><img src="images/faces/face2.jpg" alt=""></div>
                    <div class="content">
                      <p class="activity">Back Up Theme</p>
                      <p class="a-text">Vestibulum lectus nulla, maximus </p>
                    </div>
                    <div class="time">
                      <p>Sept 13, 2018</p>
                      <p>3 mins</p>
                    </div>
                  </div>
                  <div class="col">
                    <div class="pic pr-3"><img src="images/faces/face3.jpg" alt=""></div>
                    <div class="content">
                      <p class="activity">Changes In The Structure</p>
                      <p class="a-text">Vestibulum lectus nulla, maximus </p>
                    </div>
                    <div class="time">
                      <p>Sept 07, 2018</p>
                      <p>4 mins</p>
                    </div>
                  </div>
                  <div class="col">
                    <div class="pic pr-3"><img src="images/faces/face4.jpg" alt=""></div>
                    <div class="content">
                      <p class="activity">Fix the Sidebar</p>
                      <p class="a-text">Vestibulum lectus nulla, maximus</p>
                    </div>
                    <div class="time">
                      <p>Sept 16, 2018</p>
                      <p>15 mins</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12 col-lg-7 col-md-7 grid-margin stretch-card">
              <div class="card activity-card">
                <div class="card-body">
                  <h2 class="card-title">World Map</h2>
                  <div id="dashboard-vmap" class="vector-map"></div>
                </div>
              </div>
            </div>
          </div>
          <!-- ROW ENDS -->
          <div class="row">
            <div class="col-lg-12 grid-margin">
              <div class="card px-3">
                <div class="card-body">
                  <h2 class="card-title">Manage Users</h2>
                  <div class="table-responsive">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>Name</th>
                          <th>Position</th>
                          <th>Office</th>
                          <th>Age</th>
                          <th>Start Date</th>
                          <th>Assign</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>Airi Satou</td>
                          <td>Accountant</td>
                          <td>Tokyo</td>
                          <td>55</td>
                          <td>2009/10/09</td>
                          <td>$162,700</td>
                        </tr>
                        <tr>
                          <td>Angelica Ramos</td>
                          <td>Chief Executive Officer (CEO)</td>
                          <td>London</td>
                          <td>30</td>
                          <td>2009/10/09</td>
                          <td>$190,500</td>
                        </tr>
                        <tr>
                          <td>Ashton Cox</td>
                          <td>Regional Director</td>
                          <td>San Francisco</td>
                          <td>36</td>
                          <td>2004/12/02</td>
                          <td>$62,700</td>
                        </tr>
                        <tr>
                          <td>Angelica Ramos</td>
                          <td>Chief Executive Officer (CEO)</td>
                          <td>London</td>
                          <td>30</td>
                          <td>2011/07/25</td>
                          <td>$190,500</td>
                        </tr>
                        <tr>
                          <td>Ashton Cox</td>
                          <td>Regional Director</td>
                          <td>San Francisco</td>
                          <td>32</td>
                          <td>2004/12/02</td>
                          <td>$62,700</td>
                        </tr>
                        <tr>
                          <td>Angelica Ramos</td>
                          <td>Chief Executive Officer (CEO)</td>
                          <td>London</td>
                          <td>31</td>
                          <td>2011/07/25</td>
                          <td>$190,500</td>
                        </tr>
                        <tr>
                          <td>Ashton Cox</td>
                          <td>Regional Director</td>
                          <td>Tokyo</td>
                          <td>39</td>
                          <td>2004/12/02</td>
                          <td>$62,700</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  <div class="d-flex align-items-center justify-content-between flex-wrap">
                    <p class="mb-0">Showing 1 to 10 of 57 entries</p>
                    <nav>
                      <ul class="pagination rounded-separated pagination-info mt-3">
                        <li class="page-item"><a class="page-link" href="#"><i class="mdi mdi-chevron-left"></i></a></li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">4</a></li>
                        <li class="page-item"><a class="page-link" href="#"><i class="mdi mdi-chevron-right"></i></a></li>
                      </ul>
                    </nav>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- ROW ENDS -->
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
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
  <script src="node_modules/jquery/dist/jquery.min.js"></script>
  <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
  <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
  <script src="node_modules/perfect-scrollbar/dist/perfect-scrollbar.min.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <script src="node_modules/flot/jquery.flot.js"></script>
  <script src="node_modules/flot/jquery.flot.resize.js"></script>
  <script src="node_modules/flot.curvedlines/curvedLines.js"></script>
  <script src="node_modules/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
  <script src="node_modules/bootstrap-table/dist/bootstrap-table.min.js"></script>
  <script src="node_modules/jvectormap/jquery-jvectormap.min.js"></script>
  <script src="node_modules/jvectormap/tests/assets/jquery-jvectormap-world-mill-en.js"></script>
  <script src="node_modules/chartist/dist/chartist.min.js"></script>
  <script src="node_modules/progressbar.js/dist/progressbar.min.js"></script>
  <script src="node_modules/chartist-plugin-legend/chartist-plugin-legend.js"></script>
  <script src="node_modules/chart.js/dist/Chart.min.js"></script>
  <script src="node_modules/d3/d3.min.js"></script>
  <script src="node_modules/c3/c3.min.js"></script>
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/hoverable-collapse.js"></script>
  <script src="js/misc.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="js/dashboard.js"></script>
  <!-- End custom js for this page-->
</body>


<!-- Mirrored from www.bootstrapdash.com/demo/stellar-admin/jquery/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 18 Feb 2019 10:55:28 GMT -->
</html>
