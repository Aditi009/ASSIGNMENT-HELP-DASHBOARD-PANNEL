<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>@yield('title')</title>
  <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!--<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.4.1/css/bootstrap.min.css" />-->
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <style>
      #remove:hover
      {
        cursor:pointer;
        font-weight:700;
      }
      #mytabledashboard
      {
         display:none;
      }
      #mytablenewassignment
      {
         display:none;
      }
      #mytablenewnotpaid
      {
         display:none;
      }
      #mytableppfa
      {
         display:none;
      }
      #mytableallocatedfreelancer
      {
         display:none;
      }
      #mytableallorders
      {
         display:none;
      }
      #mytableordersnotpaid
      {
         display:none;
      }
      .brand-link:hover
      {
         cursor:pointer;
      }
</style>
</head>
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Brad Diesel
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Call me whenever you can...</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  John Pierce
                  <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">I got your message bro</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Nora Silvester
                  <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">The subject goes here</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
      </li>
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light" id="dashboard">Dashboard</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="/" class="d-block">A2Z Assignment</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Assignment
                <i class="fas fa-angle-right right"></i>
                <span class="badge badge-info right"></span>
              </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item" id="newassignment">
                  <a href="NewAssignment" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>New Assignment</p>
                  </a>
                </li>
                <li class="nav-item" id="newnotpaid">
                  <a href="NewnotPaid" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>New Not Paid</p>
                  </a>
                </li>
          <li class="nav-item" id="ppfa">
            <a href="Ppfa" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>PPFA</p>
            </a>
          </li>
          <li class="nav-item" id="allocatedfreelancer">
            <a href="AllocatedFreelancer" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Allocated Freelancer</p>
            </a>
          </li>
          <li class="nav-item" id="allocatedfreelancer">
            <a href="DoneWithoutProof" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Done Without Proof Reading</p>
            </a>
          </li>
          <li class="nav-item" id="allocatedfreelancer">
            <a href="DoneWithProof" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Done With Proof Reading</p>
            </a>
          </li>
          <li class="nav-item" id="allocatedfreelancer">
            <a href="StudentreWork" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Student Rework</p>
            </a>
          </li>
          <li class="nav-item" id="allocatedfreelancer">
            <a href="ExpiredAssignment" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Expired Assignment</p>
            </a>
          </li>
    </li>
        </ul>
          <li class="nav-item">
            <a class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Order
                <i class="fas fa-angle-right right"></i>
                <span class="badge badge-info right"></span>
              </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item" id="allorders">
                  <a class="nav-link" href="order">
                    <i class="far fa-circle nav-icon"></i>
                    <p>All Orders</p>
                  </a>
                </li>
                <li class="nav-item" id="ordernotpaid">
                  <a class="nav-link"  href="ordernotpaid">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Orders Not Paid</p>
                  </a>
                </li>
            </ul>
          </li>
      <li class="nav-item">
        <a class="nav-link" href="AddFreelancer">
          <i class="nav-icon fas fa-copy"></i>
          <p>
            Add Freelancer
            <i class="fas fa-angle-right right"></i>
            <span class="badge badge-info right"></span>
          </p>
        </a>
      </li>
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
        <li class="nav-item">
          <a class="nav-link">
            <i class="nav-icon fas fa-copy"></i>
            <p>
             Upload Assignment
              <i class="fas fa-angle-right right"></i>
              <span class="badge badge-info right"></span>
            </p>
          </a>
          <ul class="nav nav-treeview">
              <li class="nav-item" id="nuploadAssignment">
                <a href="uploadAssignment" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Upload Assignment</p>
                </a>
              </li>




  </li>
      </ul>
      <li class="nav-item" id="addsubject">
        <a href="addsubject" class="nav-link">
          <i class="nav-icon fas fa-copy"></i>
          <p>Add Subject</p>
        </a>
      </li>

      <li class="nav-item">

      <form method="POST" action="{{ route('logout') }}">
                            @csrf
        <a class="nav-link" href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
          <i class="nav-icon fas fa-copy"></i>
          <p>
          {{ __('Log out') }}
            <i class="fas fa-angle-right right"></i>
            <span class="badge badge-info right"></span>
          </p>
        </a>
        </form>
      </li>

    </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>


    @yield('content')

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>

<!-- OPTIONAL SCRIPTS -->
<script src="dist/js/demo.js"></script>

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
<script src="plugins/raphael/raphael.min.js"></script>
<script src="plugins/jquery-mapael/jquery.mapael.min.js"></script>
<script src="plugins/jquery-mapael/maps/usa_states.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>

<!-- PAGE SCRIPTS -->
<script src="dist/js/pages/dashboard2.js"></script>
<link href="summernote/summernote.css" rel="stylesheet">
<script src="summernote/summernote.js"></script>
<script>
$(document).ready(function() {
  $('#summernote').summernote('code');
  $('#summernote').summernote('insertImage', "img", filename);
});
</script>
</body>
</html>
