<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets2/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets2/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    {{Auth::user()->name}}'s Dashboard
  </title>
  <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="../assets2/css/material-dashboard.css?v=2.1.2" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="../assets2/demo/demo.css" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="{{ asset('assets3/css/pricing-plan.css')}}">
</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="purple" data-background-color="white" data-image="../assets2/img/sidebar-1.jpg">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
      <div class="logo"><a href="#" class="simple-text logo-normal">
          <b>{{Auth::user()->name}}</b>
        </a></div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item active  ">
            <a class="nav-link" href="/user/dashboard">
              <i class="material-icons">dashboard</i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="/user/profile">
              <i class="material-icons">person</i>
              <p>User Profile</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="/user/notification">
              <i class="material-icons">notifications</i>
              <p>File Complaint</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="/user/tables">
              <i class="material-icons">content_paste</i>
              <p>Set Alert</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="/user/typography">
              <i class="material-icons">library_books</i>
              <p>Premium Membership</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="/user/icons">
              <i class="material-icons">bubble_chart</i>
              <p>Rechrage</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="/user/map">
              <i class="material-icons">location_ons</i>
              <p>Maps</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="/user/feedback">
              <i class="material-icons">language</i>
              <p>Feedback</p>
            </a>
          </li>

         

        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand" href="javascript:;">Membership</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end">
            <form class="navbar-form">
              <div class="input-group no-border">
                <input type="text" value="" class="form-control" placeholder="Search...">
                <button type="submit" class="btn btn-white btn-round btn-just-icon">
                  <i class="material-icons">search</i>
                  <div class="ripple-container"></div>
                </button>
              </div>
            </form>
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="javascript:;">
                  <i class="material-icons">dashboard</i>
                  <p class="d-lg-none d-md-block">
                    Stats
                  </p>
                </a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="material-icons">notifications</i>
                  <span class="notification">5</span>
                  <p class="d-lg-none d-md-block">
                    Some Actions
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="#">Mike John responded to your email</a>
                  <a class="dropdown-item" href="#">You have 5 new tasks</a>
                  <a class="dropdown-item" href="#">You're now friend with Andrew</a>
                  <a class="dropdown-item" href="#">Another Notification</a>
                  <a class="dropdown-item" href="#">Another One</a>
                </div>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link" href="javascript:;" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="material-icons">person</i>
                  <p class="d-lg-none d-md-block">
                    Account
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
                  <a class="dropdown-item" href="#">Profile</a>
                  <a class="dropdown-item" href="#">Settings</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="{{ route('user.logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Log out</a>
                  <form action="{{ route('user.logout') }}" id="logout-form" method="post">@csrf</form>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="content">
        <div class="container">
          <h1 class="text-center pricing-table-title">Pricing Plans</h1>

          <ul class="nav nav-pills justify-content-center pricing-tab" id="pricing-tab" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" id="monthly-tab" data-toggle="pill" href="#monthly" role="tab" aria-controls="monthly" aria-selected="true">Person</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="yearly-tab" data-toggle="pill" href="#yearly" role="tab" aria-controls="yearly" aria-selected="false">Organization</a>
            </li>
          </ul>

          <div class="tab-content pricing-tab-content" id="pricing-tab-content">
            <div class="tab-pane active" id="monthly" role="tabpanel" aria-labelledby="monthly-tab">
              <div class="row">
                <div class="col-md-4">
                  <div class="card pricing-card">
                    <div class="card-body">
                      <h3 class="pricing-plan-title d-flex align-items-center">Fortnightly <span class="badge badge-pill offer-badge ml-auto">20% off</span></h3>
                      <p class="h1 pricing-plan-original-cost"><del>30.00Tk</del></p>
                      <p class="h1 pricing-plan-cost">20.00 <span class="currency">Taka</span></p>
                      <ul class="pricing-plan-features">
                        <li>Have access to chat with admin</li>
                        <li>Immediate response</li>
                        <li>Upgrade package any time</li>
                      </ul>
                      <a href="{{ route('user.payment') }}" class="btn pricing-plan-purchase-btn">Pay Now</a>
                      
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="card pricing-card pricing-card-highlighted">
                    <div class="card-body">
                      <h3 class="pricing-plan-title d-flex align-items-center">Monthly <span class="badge badge-pill offer-badge ml-auto">20% off</span></h3>
                      <p class="h1 pricing-plan-original-cost"><del>50.00Tk</del></p>
                      <p class="h1 pricing-plan-cost">35.00 <span class="currency">Taka</span></p>
                      <ul class="pricing-plan-features">
                        <li>Have access to chat with admin</li>
                        <li>Immediate response</li>
                        <li>Upgrade package any time</li>
                        <li>24/7 support</li>
                        
                      </ul>
                      <a href="{{ route('user.payment') }}" class="btn pricing-plan-purchase-btn">Pay Now</a>
                      
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="card pricing-card">
                    <div class="card-body">
                      <h3 class="pricing-plan-title d-flex align-items-center">Yearly <span class="badge badge-pill offer-badge ml-auto">20% off</span></h3>
                      <p class="h1 pricing-plan-original-cost"><del>550.00Tk</del></p>
                      <p class="h1 pricing-plan-cost">350.00 <span class="currency">Taka</span></p>
                      <ul class="pricing-plan-features">
                        <li>Have access to chat with admin</li>
                        <li>Immediate response</li>
                        <li>Upgrade package any time</li>
                        <li>24/7 support</li>
                        <li>Have admin contact number for immediacy</li>
                        
                      </ul>
                      <a href="payment" class="btn pricing-plan-purchase-btn">Pay Now</a>
                      
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane" id="yearly" role="tabpanel" aria-labelledby="yearly-tab">
              <div class="row">
                <div class="col-md-4">
                  <div class="card pricing-card">
                    <div class="card-body">
                      <h3 class="pricing-plan-title d-flex align-items-center">Fortnightly <span class="badge badge-pill offer-badge ml-auto">20% off</span></h3>
                      <p class="h1 pricing-plan-original-cost"><del>50.00Tk</del></p>
                      <p class="h1 pricing-plan-cost">30.00 <span class="currency">Taka</span></p>
                      <ul class="pricing-plan-features">
                      <li>Have access to chat with admin</li>
                        <li>Immediate response</li>
                        <li>Upgrade package any time</li>
                       
                      </ul>
                      <a href="payment" class="btn pricing-plan-purchase-btn">Pay Now</a>
                      
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="card pricing-card pricing-card-highlighted">
                    <div class="card-body">
                      <h3 class="pricing-plan-title d-flex align-items-center">Monthly <span class="badge badge-pill offer-badge ml-auto">20% off</span></h3>
                      <p class="h1 pricing-plan-original-cost"><del>80.00Tk</del></p>
                      <p class="h1 pricing-plan-cost">50.00 <span class="currency">Taka</span></p>
                      <ul class="pricing-plan-features">
                        
                      <li>Have access to chat with admin</li>
                        <li>Immediate response</li>
                        <li>Upgrade package any time</li>
                        <li>24/7 support</li>
                        
                      </ul>
                      <a href="payment" class="btn pricing-plan-purchase-btn">Pay Now</a>
                      
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="card pricing-card">
                    <div class="card-body">
                      <h3 class="pricing-plan-title d-flex align-items-center">Yearly <span class="badge badge-pill offer-badge ml-auto">20% off</span></h3>
                      <p class="h1 pricing-plan-original-cost"><del>880.00Tk</del></p>
                      <p class="h1 pricing-plan-cost">500.00 <span class="currency">Taka</span></p>
                      <ul class="pricing-plan-features">
                        
                      <li>Have access to chat with admin</li>
                        <li>Immediate response</li>
                        <li>Upgrade package any time</li>
                        <li>24/7 support</li>
                        <li>Have admin contact number for immediacy</li>
                      </ul>
                      <a href="payment" class="btn pricing-plan-purchase-btn">Pay Now</a>
                      
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <footer class="footer">
        <div class="container-fluid">
          <nav class="float-left">
          <ul>
              <li>
                <a href="/contact">
                  Contact Us
                </a>
              </li>
              <li>
                <a href="/aboutus">
                  About Us
                </a>
              </li>
              <li>
                <a href="/national">
                  National
                </a>
              </li>
              <li>
                <a href="/inational">
                  International
                </a>
              </li>
            </ul>
          </nav>
          
        </div>
      </footer>
    </div>
  </div>
  <div class="fixed-plugin">
    <div class="dropdown show-dropdown">
      <a href="#" data-toggle="dropdown">
        <i class="fa fa-cog fa-2x"> </i>
      </a>
      <ul class="dropdown-menu">
        <li class="header-title"> Sidebar Filters</li>
        <li class="adjustments-line">
          <a href="javascript:void(0)" class="switch-trigger active-color">
            <div class="badge-colors ml-auto mr-auto">
              <span class="badge filter badge-purple" data-color="purple"></span>
              <span class="badge filter badge-azure" data-color="azure"></span>
              <span class="badge filter badge-green" data-color="green"></span>
              <span class="badge filter badge-warning" data-color="orange"></span>
              <span class="badge filter badge-danger" data-color="danger"></span>
              <span class="badge filter badge-rose active" data-color="rose"></span>
            </div>
            <div class="clearfix"></div>
          </a>
        </li>
        <li class="header-title">Images</li>
        <li class="active">
          <a class="img-holder switch-trigger" href="javascript:void(0)">
            <img src="../assets2/img/sidebar-1.jpg" alt="">
          </a>
        </li>
        <li>
          <a class="img-holder switch-trigger" href="javascript:void(0)">
            <img src="../assets2/img/sidebar-2.jpg" alt="">
          </a>
        </li>
        <li>
          <a class="img-holder switch-trigger" href="javascript:void(0)">
            <img src="../assets2/img/sidebar-3.jpg" alt="">
          </a>
        </li>
        <li>
          <a class="img-holder switch-trigger" href="javascript:void(0)">
            <img src="../assets2/img/sidebar-4.jpg" alt="">
          </a>
        </li>
        <li class="button-container">
          <a href="https://www.creative-tim.com/product/material-dashboard" target="_blank" class="btn btn-primary btn-block">Free Download</a>
        </li>
        <!-- <li class="header-title">Want more components?</li>
            <li class="button-container">
                <a href="https://www.creative-tim.com/product/material-dashboard-pro" target="_blank" class="btn btn-warning btn-block">
                  Get the pro version
                </a>
            </li> -->
        <li class="button-container">
          <a href="https://demos.creative-tim.com/material-dashboard/docs/2.1/getting-started/introduction.html" target="_blank" class="btn btn-default btn-block">
            View Documentation
          </a>
        </li>
        <li class="button-container github-star">
          <a class="github-button" href="https://github.com/creativetimofficial/material-dashboard" data-icon="octicon-star" data-size="large" data-show-count="true" aria-label="Star ntkme/github-buttons on GitHub">Star</a>
        </li>
        <li class="header-title">Thank you for 95 shares!</li>
        <li class="button-container text-center">
          <button id="twitter" class="btn btn-round btn-twitter"><i class="fa fa-twitter"></i> &middot; 45</button>
          <button id="facebook" class="btn btn-round btn-facebook"><i class="fa fa-facebook-f"></i> &middot; 50</button>
          <br>
          <br>
        </li>
      </ul>
    </div>
  </div>

  
  <!--   Core JS Files   -->
  <script src="../assets2/js/core/jquery.min.js"></script>
  <script src="../assets2/js/core/popper.min.js"></script>
  <script src="../assets2/js/core/bootstrap-material-design.min.js"></script>
  <script src="../assets2/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!-- Plugin for the momentJs  -->
  <script src="../assets2/js/plugins/moment.min.js"></script>
  <!--  Plugin for Sweet Alert -->
  <script src="../assets2/js/plugins/sweetalert2.js"></script>
  <!-- Forms Validations Plugin -->
  <script src="../assets2/js/plugins/jquery.validate.min.js"></script>
  <!-- Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->
  <script src="../assets2/js/plugins/jquery.bootstrap-wizard.js"></script>
  <!--	Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
  <script src="../assets2/js/plugins/bootstrap-selectpicker.js"></script>
  <!--  Plugin for the DateTimePicker, full documentation here: https://eonasdan.github.io/bootstrap-datetimepicker/ -->
  <script src="../assets2/js/plugins/bootstrap-datetimepicker.min.js"></script>
  <!--  DataTables.net Plugin, full documentation here: https://datatables.net/  -->
  <script src="../assets2/js/plugins/jquery.dataTables.min.js"></script>
  <!--	Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
  <script src="../assets2/js/plugins/bootstrap-tagsinput.js"></script>
  <!-- Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
  <script src="../assets2/js/plugins/jasny-bootstrap.min.js"></script>
  <!--  Full Calendar Plugin, full documentation here: https://github.com/fullcalendar/fullcalendar    -->
  <script src="../assets2/js/plugins/fullcalendar.min.js"></script>
  <!-- Vector Map plugin, full documentation here: http://jvectormap.com/documentation/ -->
  <script src="../assets2/js/plugins/jquery-jvectormap.js"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="../assets2/js/plugins/nouislider.min.js"></script>
  <!-- Include a polyfill for ES6 Promises (optional) for IE11, UC Browser and Android browser support SweetAlert -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>
  <!-- Library for adding dinamically elements -->
  <script src="../assets2/js/plugins/arrive.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chartist JS -->
  <script src="../assets2/js/plugins/chartist.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="../assets2/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets2/js/material-dashboard.js?v=2.1.2" type="text/javascript"></script>
  <!-- Material Dashboard DEMO methods, don't include it in your project! -->
  <script src="../assets2/demo/demo.js"></script>


<!-- 
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
-->
  

  <script>
    $(document).ready(function() {
      $().ready(function() {
        $sidebar = $('.sidebar');

        $sidebar_img_container = $sidebar.find('.sidebar-background');

        $full_page = $('.full-page');

        $sidebar_responsive = $('body > .navbar-collapse');

        window_width = $(window).width();

        fixed_plugin_open = $('.sidebar .sidebar-wrapper .nav li.active a p').html();

        if (window_width > 767 && fixed_plugin_open == 'Dashboard') {
          if ($('.fixed-plugin .dropdown').hasClass('show-dropdown')) {
            $('.fixed-plugin .dropdown').addClass('open');
          }

        }

        $('.fixed-plugin a').click(function(event) {
          // Alex if we click on switch, stop propagation of the event, so the dropdown will not be hide, otherwise we set the  section active
          if ($(this).hasClass('switch-trigger')) {
            if (event.stopPropagation) {
              event.stopPropagation();
            } else if (window.event) {
              window.event.cancelBubble = true;
            }
          }
        });

        $('.fixed-plugin .active-color span').click(function() {
          $full_page_background = $('.full-page-background');

          $(this).siblings().removeClass('active');
          $(this).addClass('active');

          var new_color = $(this).data('color');

          if ($sidebar.length != 0) {
            $sidebar.attr('data-color', new_color);
          }

          if ($full_page.length != 0) {
            $full_page.attr('filter-color', new_color);
          }

          if ($sidebar_responsive.length != 0) {
            $sidebar_responsive.attr('data-color', new_color);
          }
        });

        $('.fixed-plugin .background-color .badge').click(function() {
          $(this).siblings().removeClass('active');
          $(this).addClass('active');

          var new_color = $(this).data('background-color');

          if ($sidebar.length != 0) {
            $sidebar.attr('data-background-color', new_color);
          }
        });

        $('.fixed-plugin .img-holder').click(function() {
          $full_page_background = $('.full-page-background');

          $(this).parent('li').siblings().removeClass('active');
          $(this).parent('li').addClass('active');


          var new_image = $(this).find("img").attr('src');

          if ($sidebar_img_container.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
            $sidebar_img_container.fadeOut('fast', function() {
              $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
              $sidebar_img_container.fadeIn('fast');
            });
          }

          if ($full_page_background.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
            var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

            $full_page_background.fadeOut('fast', function() {
              $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
              $full_page_background.fadeIn('fast');
            });
          }

          if ($('.switch-sidebar-image input:checked').length == 0) {
            var new_image = $('.fixed-plugin li.active .img-holder').find("img").attr('src');
            var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

            $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
            $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
          }

          if ($sidebar_responsive.length != 0) {
            $sidebar_responsive.css('background-image', 'url("' + new_image + '")');
          }
        });

        $('.switch-sidebar-image input').change(function() {
          $full_page_background = $('.full-page-background');

          $input = $(this);

          if ($input.is(':checked')) {
            if ($sidebar_img_container.length != 0) {
              $sidebar_img_container.fadeIn('fast');
              $sidebar.attr('data-image', '#');
            }

            if ($full_page_background.length != 0) {
              $full_page_background.fadeIn('fast');
              $full_page.attr('data-image', '#');
            }

            background_image = true;
          } else {
            if ($sidebar_img_container.length != 0) {
              $sidebar.removeAttr('data-image');
              $sidebar_img_container.fadeOut('fast');
            }

            if ($full_page_background.length != 0) {
              $full_page.removeAttr('data-image', '#');
              $full_page_background.fadeOut('fast');
            }

            background_image = false;
          }
        });

        $('.switch-sidebar-mini input').change(function() {
          $body = $('body');

          $input = $(this);

          if (md.misc.sidebar_mini_active == true) {
            $('body').removeClass('sidebar-mini');
            md.misc.sidebar_mini_active = false;

            $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar();

          } else {

            $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar('destroy');

            setTimeout(function() {
              $('body').addClass('sidebar-mini');

              md.misc.sidebar_mini_active = true;
            }, 300);
          }

          // we simulate the window Resize so the charts will get updated in realtime.
          var simulateWindowResize = setInterval(function() {
            window.dispatchEvent(new Event('resize'));
          }, 180);

          // we stop the simulation of Window Resize after the animations are completed
          setTimeout(function() {
            clearInterval(simulateWindowResize);
          }, 1000);

        });
      });
    });
  </script>
</body>

</html>