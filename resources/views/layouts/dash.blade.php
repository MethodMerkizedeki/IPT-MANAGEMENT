<!doctype html>
<html class="no-js" lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Asset Management System</title>

  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Scripts -->
  <script src="{{ asset('js/app.js') }}" defer></script>
  <!-- favicon
		============================================ -->
  <link rel="shortcut icon" type="image/x-icon" href="{{ asset('Pages/img/favicon.ico')}}">
  <!-- Google Fonts
		============================================ -->
  <link href="{{ asset('https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i,800') }}" rel="stylesheet">
  <!-- Bootstrap CSS
		============================================ -->
  <link rel="stylesheet" href="{{ asset('Pages/css/bootstrap.min.css') }}">
  <!-- Bootstrap CSS
		============================================ -->
  <link rel="stylesheet" href="{{ asset('Pages/css/font-awesome.min.css') }}">
  <!-- adminpro icon CSS
		============================================ -->
  <link rel="stylesheet" href="{{ asset('Pages/css/adminpro-custon-icon.css') }}">
  <!-- meanmenu icon CSS
		============================================ -->
  <link rel="stylesheet" href="{{ asset('Pages/css/meanmenu.min.css') }}">
  <!-- mCustomScrollbar CSS
		============================================ -->
  <link rel="stylesheet" href="{{ asset('Pages/css/jquery.mCustomScrollbar.min.css') }}">
  <!-- animate CSS
		============================================ -->
  <link rel="stylesheet" href="{{ asset('Pages/css/animate.css') }}">
  <link rel="stylesheet" href="{{ asset('Pages/css/modals.css') }}">
  <!-- jvectormap CSS
		============================================ -->
  <link rel="stylesheet" href="{{ asset('Pages/css/jvectormap/jquery-jvectormap-2.0.3.css') }}">
  <!-- normalize CSS
		============================================ -->
  <link rel="stylesheet" href="{{ asset('Pages/css/data-table/bootstrap-table.css') }}">
  <link rel="stylesheet" href="{{ asset('Pages/css/data-table/bootstrap-editable.css') }}">
  <link rel="stylesheet" href="{{ asset('Pages/css/form/all-type-forms.css')}}">

  <!-- normalize CSS
		============================================ -->
  <link rel="stylesheet" href="{{ asset('Pages/css/normalize.css') }}">
  <!-- charts CSS
		============================================ -->
  <link rel="stylesheet" href="{{ asset('Pages/css/c3.min.css') }}">
  <!-- style CSS
		============================================ -->
  <link rel="stylesheet" href="{{ asset('Pages/style.css') }}">
  <!-- responsive CSS
		============================================ -->
  <link rel="stylesheet" href="{{ asset('Pages/css/responsive.css') }}">
  <!-- modernizr JS
		============================================ -->
  <script src="{{ asset('Pages/js/vendor/modernizr-2.8.3.min.js') }}"></script>



  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css')}}">
  <!-- DataTables -->
  <link rel="stylesheet" href="{{ asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{ asset('plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{ asset('plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">

  <!-- sweetarlert -->
  <script src="{{ asset('Pages/js/sweetalert.min.js') }}"></script>
 
</head>

<body class="materialdesign">

  <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
   
  <!-- Header top area start-->
  <div class="wrapper-pro">
    <div class="left-sidebar-pro">
      <nav id="sidebar">
        <div class="sidebar-header">
          <a href="#"><img src="{{ asset('Pages/img/taifa.png')}}" alt="" class="img-circle" style="width: 100px;" />
          </a>
          <h3>User</h3>
          <p>{{ Auth::user()->email }}</p>

        </div>
        <div class="left-custom-menu-adp-wrap">
          <ul class="nav navbar-nav left-sidebar-menu-pro">
            <li class="nav-item">
              <a href="{{ route('home')}}" role="button" aria-expanded="false" class="nav-link active"><i class="nav-icon fas fa-tachometer-alt"></i> <span class="mini-dn"> Dashboard</span> </a>
            </li>
            @can('admin_menu')
            <li class="nav-link active">
              <a href="{{ route('brachoffice.index')}}" role="button" aria-expanded="false"><i class="fa big-icon fa-home"></i> <span class="mini-dn"> Branch Office</span> </a>
            </li>

            <li>
              <a href="{{ route('assetcategory.index')}}" role="button" aria-expanded="false"><i class="fa big-icon fa-file-archive-o"></i> <span class="mini-dn"> Asset Category</span> </a>
            </li>
            <li>
              <a href="{{ route('department.index')}}" role="button" aria-expanded="false"><i class="fa big-icon fa-institution"></i> <span class="mini-dn"> Department</span> </a>
            </li>
            <!-- <li>
              <a href="employeeinfo.php" role="button" aria-expanded="false"><i class="fa big-icon fa-folder-open"></i> <span class="mini-dn">Employee Information</span> </a>
            </li> -->
            <li>
              <a href="{{ route('assetinfo.index')}}" role="button" aria-expanded="false"><i class="fa big-icon fa-folder-open"></i> <span class="mini-dn">Asset Information</span> </a>
            </li>
            <li>
              <a href="{{route('assetassignment.index')}}" role="button" aria-expanded="false"><i class="fa big-icon fa-list-alt"></i> <span class="mini-dn">Asset Assignment</span> </a>
            </li>
            @endcan
            <li>
              <a href="{{route('transferasset.index')}}" role="button" aria-expanded="false"><i class="fa big-icon fa-history"></i> <span class="mini-dn">Asset Transfer History</span> </a>
            </li>
            @can('user-list','user-create','user-edit','user-delete')
            <li>
              <a href="{{ route('users.index') }}" role="button" aria-expanded="false"><i class="fa big-icon fa-users"></i> <span class="mini-dn">User Information</span> </a>
            </li>
            @endcan
            @can('role-list','role-create','role-edit','role-delete')
            <li class="nav-item">
              <a href="" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fas fa-cog"></i> <span class="mini-dn">Settings <i class="fa fa-chevron-down"></i></span> </a>
              <ul role="menu" class="dropdown-header-top author-log dropdown-menu animated flipInX">
                <li><a href="{{ route('roles.index') }}"><span class="far fa-circle nav-icon"></span>Roles </a> </li>
                <li><a href="{{ route('permission.index')}}"><span class="far fa-circle nav-icon"></span>Permissions </a> </li>
              </ul>
            </li>
            @endcan

            <li class="nav-item">
              <a href="{{ route('logout')}}" class="nav-link" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <i class="nav-icon fas fa-power-off"></i>
                {{ __('Logout') }}
              </a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
              </form>
            </li>
        </div>
      </nav>

    </div>

    <!-- Header top area start-->
    <div class="content-inner-all">
      <div class="header-top-area">
        <div class="fixed-header-top">
          <div class="container-fluid">
            <div class="row">
              <div class="col-lg-1 col-md-6 col-sm-6 col-xs-12">
                <button type="button" id="sidebarCollapse" class="btn bar-button-pro header-drl-controller-btn btn-info navbar-btn">
                  <i class="fa fa-bars"></i>
                </button>
                <div class="admin-logo logo-wrap-pro">
                  <a href="#"><img src="img/logo/log.png" alt="" />
                  </a>
                </div>
              </div>
              <div class="col-lg-6 col-md-1 col-sm-1 col-xs-12">
                <div class="header-top-menu tabl-d-n">
                  <ul class="nav navbar-nav mai-top-nav">
                    <li class="nav-item"><a href="{{route('assetinfo.report')}}" class="nav-link">Brach Report List</a>
                    </li>
                    <li class="nav-item"><a href="#" class="nav-link">Employee Report List</a>
                    </li>

                  </ul>
                </div>
              </div>
              <div class="col-lg-5 col-md-5 col-sm-6 col-xs-12">
                <div class="header-right-info">
                  <ul class="nav navbar-nav mai-top-nav header-right-menu">
                    <li class="nav-item">
                      <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
                        <span class="fas fa-user header-riht-inf"></span>
                        <span class="admin-name"> {{ Auth::user()->name }}</span>
                        <span class=""></span>
                      </a>
                      <ul role="menu" class="dropdown-header-top author-log dropdown-menu animated flipInX">
                        <li><a href="{{ route('logout') }}" onclick="event.preventDefault();                                                     document.getElementById('logout-form').submit();">
                            <span class="nav-icon fas fa-power-off">
                            </span> {{ __('Logout') }}</a>
                          <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                          </form>
                        </li>
                      </ul>
                    </li>

                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Header top area end-->
      @yield('content')

    </div>
  </div>
  <!-- Chat Box Start-->
  <!-- Chat Box End-->
  <!-- jquery
		============================================ -->
  <script src="{{ asset('Pages/js/vendor/jquery-1.11.3.min.js')}}"></script>
  <!-- bootstrap JS
		============================================ -->
  <script src="{{ asset('Pages/js/bootstrap.min.js')}}"></script>
  <!-- meanmenu JS
		============================================ -->
  <script src="{{ asset('Pages/js/jquery.meanmenu.js')}}"></script>
  <!-- mCustomScrollbar JS
		============================================ -->
  <script src="{{ asset('Pages/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
  <!-- sticky JS
		============================================ -->
  <script src="{{ asset('Pages/js/jquery.sticky.js')}}"></script>
  <!-- scrollUp JS
		============================================ -->
  <script src="{{ asset('Pages/js/jquery.scrollUp.min.js')}}"></script>
  <script src="{{ asset('Pages/js/modal-active.js') }}"></script>
  <!-- scrollUp JS
		============================================ -->
  <script src="{{ asset('Pages/js/wow/wow.min.js')}}"></script>
  <!-- counterup JS
		============================================ -->

  <!-- jvectormap JS
		============================================ -->
  <script src="{{ asset('Pages/js/jvectormap/jquery-jvectormap-2.0.2.min.js')}}"></script>
  <script src="{{ asset('Pages/js/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
  <script src="{{ asset('Pages/js/jvectormap/jvectormap-active.js')}}"></script>
  <!-- peity JS
		============================================ -->
  <script src="{{ asset('Pages/js/peity/jquery.peity.min.js')}}"></script>
  <script src="{{ asset('Pages/js/peity/peity-active.js')}}"></script>
  <!-- sparkline JS
		============================================ -->
  <script src="{{ asset('Pages/js/sparkline/jquery.sparkline.min.js')}}"></script>
  <script src="{{ asset('Pages/js/sparkline/sparkline-active.js')}}"></script>
  <!-- flot JS
		============================================ -->
  <script src="{{ asset('Pages/js/flot/Chart.min.js')}}"></script>
  <script src="{{ asset('Pages/js/flot/dashtwo-flot-active.js')}}"></script>
  <!-- data table JS
		============================================ -->
  <script src="{{ asset('Pages/js/data-table/bootstrap-table.js')}}"></script>
  <script src="{{ asset('Pages/js/data-table/tableExport.js')}}"></script>
  <script src="{{ asset('Pages/js/data-table/data-table-active.js')}}"></script>
  <script src="{{ asset('Pages/js/data-table/bootstrap-table-editable.js')}}"></script>
  <script src="{{ asset('Pages/js/data-table/bootstrap-editable.js')}}"></script>
  <script src="{{ asset('Pages/js/data-table/bootstrap-table-resizable.js')}}"></script>
  <script src="{{ asset('Pages/js/data-table/colResizable-1.5.source.js')}}"></script>
  <script src="{{ asset('Pages/js/data-table/bootstrap-table-export.js')}}"></script>
  <!-- main JS
		============================================ -->
  <script src="{{ asset('Pages/js/main.js')}}"></script>


  <script src="{{ asset('Pages/js/counterup/jquery.counterup.min.js')}}"></script>
  <script src="{{ asset('Pages/js/counterup/waypoints.min.js')}}"></script>
  <!-- DataTables  & Plugins -->
  <script src="{{ asset('/plugins/datatables/jquery.dataTables.min.js')}}"></script>
  <script src="{{ asset('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
  <script src="{{ asset('plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
  <script src="{{ asset('plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
  <script src="{{ asset('plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
  <script src="{{ asset('plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
  <script src="{{ asset('plugins/jszip/jszip.min.js')}}"></script>
  <script src="{{ asset('plugins/pdfmake/pdfmake.min.js')}}"></script>
  <script src="{{ asset('/plugins/pdfmake/vfs_fonts.js')}}"></script>
  <script src="{{ asset('plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
  <script src="{{ asset('plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
  <script src="{{ asset('plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>

  <script>
    $(function() {
      $("#example1").DataTable({
        "responsive": true,
        "lengthChange": false,
        "autoWidth": false,
        "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
      }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
      $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
      });
    });
  </script>




</body>

</html>