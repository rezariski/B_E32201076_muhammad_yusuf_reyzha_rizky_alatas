@section('head')
<link rel="stylesheet" type="text/css" href="{!! asset('assets/css/style2.css') !!}">
<link rel="stylesheet" type="text/css" href="{!! asset('assets/css/alt-color.css') !!}">
<link rel="stylesheet" type="text/css" href="{!! asset('assets/css/animate.css') !!}">
<link rel="stylesheet" type="text/css" href="{!! asset('assets/css/plugin.css') !!}">
<link href="{!! asset('assets/css/bootstrap/css/bootstrap.min.css') !!}" rel="stylesheet">
  <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Cardo:400,700,400italic' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Raleway:300,700,900,500' rel='stylesheet' type='text/css'>
<link href="{!! asset('assets/css/font-awesome/css/font-awesome.min.css') !!}" rel="stylesheet">
<link href="{!! asset('assets/css/pe-icons/css/pe-icon-7-stroke.css') !!}" rel="stylesheet">

<body class="regular-navigation">
    <div id="master-wrapper">

        <div class="nav-wrapper smoothie">  
            <div class="container">      
                <div class="row">
                    <div class="col-xs-3">
                        <a class="logo" href="https://jejakkoding.mhssh.site/"><img alt="" class="logo img-responsive" src="https://jejakkoding.mhssh.site/assets/images/logo.png"></a> 
                    </div>
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" style="background-color: #835aac" data-target="#navbar-collapse-1" aria-expanded="false" aria-controls="navbar">
                          <span class="sr-only">Toggle navigation</span>
                          <span class="icon-bar"></span>
                          <span class="icon-bar"></span>
                          <span class="icon-bar"></span>
                    </button>
                    <div class="col-xs-9">
                        <div class="collapse navbar-collapse" id="navbar-collapse-1">
                            <ul class="nav navbar-nav navbar-right">
                                <li class="dropdown">
                                    <a href="https://jejakkoding.mhssh.site/">Home</a>
                                   
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Materi <span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                      <li><a href="https://jejakkoding.mhssh.site/materi/materijaringan.html">Jaringan Dasar</a></li>
                                      <li><a href="https://jejakkoding.mhssh.site/materi/materipemograman.html">Pemograman Dasar</a></li>
                                      <li><a href="https://jejakkoding.mhssh.site/materi/materisistemoperasi.html">Sistem Operasi</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="https://jejakkoding.mhssh.site/materi/pengumuman.html" class="dropdown-toggle" aria-expanded="false">Pengumuman </a>
                                    <!--<ul class="dropdown-menu">-->
                                    <!--  <li><a href="news-list.html">News List</a></li>-->
                                    <!--  <li><a href="news-grid.html">News Grid</a></li>-->
                                    <!--  <li><a href="single-post.html">Single Post</a></li>-->
                                    <!--  <li><a href="single-post-no-sidebar.html">Single Post No Sidebar</a></li>-->
                                    <!--</ul>-->
                                </li>
                                <!--<li class="dropdown">-->
                                <!--    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pages <span class="caret"></span></a>-->
                                <!--    <ul class="dropdown-menu">-->
                                <!--      <li><a href="about-us.html">About Us</a></li>-->
                                <!--      <li><a href="404.html">404</a></li>-->
                                <!--      <li><a href="coming-soon.html">Coming Soon</a></li>-->
                                <!--    </ul>-->
                                <!--</li>-->
                                <li><a href="https://jejakkoding.mhssh.site/materi/contact-us.html">Contact Us</a></li>
                                
                            </ul>
                        </div>                        
                    </div>
                </div>
            </div>
        </div>

        <header id="home" class="backstretched fullheight max-600">
            <!--<div class="dark-overlay fullheight max-600">
                <div class="container fullheight max-600">     -->              
                    <div class="jumbotron">
                        <h1><small>selamat datang di</small><br>
                        jejak koding!</h1>
                        <p>
                            <a class="btn btn-white btn-lg page-scroll" href="#about-us" role="button">Kenapa?</a> 
                            <a class="btn btn-lg btn-primary btn-green page-scroll" href="#our-team" role="button">Cari materi</a>
                        </p>
                    <!--</div>
                </div> -->
            </div>
        </header>
@endsection