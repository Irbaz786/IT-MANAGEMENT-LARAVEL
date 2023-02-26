
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
  <meta name="description" content=""/>
  <meta name="author" content=""/>
  <title>Admin Page</title>
  <!-- loader-->
  <link href="assetsA/css/pace.min.css" rel="stylesheet"/>
  <script src="assetsA/js/pace.min.js"></script>
  <!--favicon-->
  <link rel="icon" href="assetsA/images/favicon.ico" type="image/x-icon">
  <!-- Vector CSS -->
  <link href="assetsA/plugins/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet"/>
  <!-- simplebar CSS-->
  <link href="assetsA/plugins/simplebar/css/simplebar.css" rel="stylesheet"/>
  <!-- Bootstrap core CSS-->
  <link href="assetsA/css/bootstrap.min.css" rel="stylesheet"/>
  <!-- animate CSS-->
  <link href="assetsA/css/animate.css" rel="stylesheet" type="text/css"/>
  <!-- Icons CSS-->
  <link href="assetsA/css/icons.css" rel="stylesheet" type="text/css"/>
  <!-- Sidebar CSS-->
  <link href="assetsA/css/sidebar-menu.css" rel="stylesheet"/>
  <!-- Custom Style-->
  <link href="assetsA/css/app-style.css" rel="stylesheet"/>
  <style>
    .pagination{
      font-size: 12px;
      }

  </style>
  
</head>


<body class="bg-theme bg-theme1">

  @section('header')
 
<!-- Start wrapper-->
 <div id="wrapper">
 
  <!--Start sidebar-wrapper-->
   <div id="sidebar-wrapper" data-simplebar="" data-simplebar-auto-hide="true">
     <div class="brand-logo">
      <a href="index.html">
       <img src="assetsA/images/logo-icon.png" class="logo-icon" alt="logo icon">
       <h5 class="logo-text">Admin Site</h5>
     </a>
   </div>
   <ul class="sidebar-menu do-nicescrol">
      <li class="sidebar-header">MAIN NAVIGATION</li>
     
     
      <li>
        <a href="docs">
          <i class="zmdi zmdi-format-list-bulleted"></i> <span>User's Query</span>
        </a>
      </li>

  <li>
        <a href="feedbackA">
          <i class="zmdi zmdi-format-list-bulleted"></i> <span>Feedback Form</span>
        </a>
      </li>

                
      <li>
        <a href="photos">
          <i class="zmdi zmdi-format-list-bulleted"></i> <span>Upload</span>
        </a>
      </li>
     
      <li>
        <a href="category1A">
          <i class="zmdi zmdi-format-list-bulleted"></i> <span>Categories</span></a>
            <li class="dropdown-divider"></li>
        <li class="dropdown-item"><a href="/service"><i class="icon-envelope mr-2"></i>Service</li></a>
        <li class="dropdown-divider"></li>
        <li class="dropdown-item"><a href="/about"><i class="icon-wallet mr-2"></i> About-us</li></a>
        <li class="dropdown-divider"></li>
        <li class="dropdown-item"><a href="/contact"><i class="icon-settings mr-2"></i>Contact</li></a>
        <li class="dropdown-divider"></li>
        
      </li>


      
    </ul>
   
   </div>
   <!--End sidebar-wrapper-->

<!--Start topbar header-->
<header class="topbar-nav">
 <nav class="navbar navbar-expand fixed-top">
  <ul class="navbar-nav mr-auto align-items-center">
    <li class="nav-item">
      <a class="nav-link toggle-menu" href="javascript:void();">
       <i class="icon-menu menu-icon"></i>
     </a>
    </li>
    <li class="nav-item">
      <form class="search-bar">
        <input type="text" class="form-control" placeholder="Enter keywords">
         <a href="javascript:void();"><i class="icon-magnifier"></i></a>
      </form>
    </li>
  </ul>
     
  <ul class="navbar-nav align-items-center right-nav-link">
    <li class="nav-item dropdown-lg">
      <a class="nav-link dropdown-toggle dropdown-toggle-nocaret waves-effect" data-toggle="dropdown" href="javascript:void();">
      <i class="fa fa-envelope-open-o"></i></a>
    </li>
    <li class="nav-item dropdown-lg">
      <a class="nav-link dropdown-toggle dropdown-toggle-nocaret waves-effect" data-toggle="dropdown" href="javascript:void();">
      <i class="fa fa-bell-o"></i></a>
    </li>
    <li class="nav-item language">
      <a class="nav-link dropdown-toggle dropdown-toggle-nocaret waves-effect" data-toggle="dropdown" href="javascript:void();"><i class="fa fa-flag"></i></a>
      <ul class="dropdown-menu dropdown-menu-right">
          <li class="dropdown-item"> <i class="flag-icon flag-icon-gb mr-2"></i> English</li>
          <li class="dropdown-item"> <i class="flag-icon flag-icon-fr mr-2"></i> French</li>
          <li class="dropdown-item"> <i class="flag-icon flag-icon-cn mr-2"></i> Chinese</li>
          <li class="dropdown-item"> <i class="flag-icon flag-icon-de mr-2"></i> German</li>
        </ul>
    </li>
    <li class="nav-item">
      <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown" href="#">
        <span class="user-profile"><img src="https://via.placeholder.com/110x110" class="img-circle" alt="user avatar"></span>
      </a>
      <ul class="dropdown-menu dropdown-menu-right">
       <li class="dropdown-item user-details">
        <a href="javaScript:void();">
           <div class="media">
             <div class="avatar"><img class="align-self-start mr-3" src="picmy(.jpeg)" alt="user avatar"></div>
            <div class="media-body">
            <h6 class="mt-2 user-title">Irbaz Lokhandwala</h6>
            <p class="user-subtitle">ljuniversity26@gmail.com</p>
            </div>
           </div>
          </a>
        </li>
        <li class="dropdown-divider"></li>
        <li class="dropdown-item"><i class="icon-envelope mr-2"></i> Inbox</li>
        <li class="dropdown-divider"></li>
        <li class="dropdown-item"><i class="icon-wallet mr-2"></i> Account</li>
        <li class="dropdown-divider"></li>
        <li class="dropdown-item"><i class="icon-settings mr-2"></i> Setting</li>
        <li class="dropdown-divider"></li>
        <li class="dropdown-item"><i class="icon-power mr-2"></i> Logout</li>
      </ul>
    </li>
  </ul>
</nav>
</header>
<!--End topbar header-->
@show
@yield('main')

