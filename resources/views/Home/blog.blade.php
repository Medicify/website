<!DOCTYPE html>
<html lang="en">

<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Appku - Software Landing Page">

    <!-- ========== Page Title ========== -->
    <title>Appku - Software Landing Page</title>

    <!-- ========== Favicon Icon ========== -->
    <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon">

    <!-- ========== Start Stylesheet ========== -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/css/font-awesome.min.css" rel="stylesheet" />
    <link href="assets/css/themify-icons.css" rel="stylesheet" />
    <link href="assets/css/elegant-icons.css" rel="stylesheet" />
    <link href="assets/css/flaticon-set.css" rel="stylesheet" />
    <link href="assets/css/magnific-popup.css" rel="stylesheet" />
    <link href="assets/css/owl.carousel.min.css" rel="stylesheet" />
    <link href="assets/css/owl.theme.default.min.css" rel="stylesheet" />
    <link href="assets/css/animate.css" rel="stylesheet" />
    <link href="assets/css/validnavs.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet" />
    <link href="style.css" rel="stylesheet">
    <link href="assets/css/responsive.css" rel="stylesheet" />
    <!-- ========== End Stylesheet ========== -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="assets/js/html5/html5shiv.min.js"></script>
      <script src="assets/js/html5/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Preloader Start -->
    {{-- <div class="se-pre-con"></div> --}}
    <!-- Preloader Ends -->

    <!-- Header
    ============================================= -->
    <header>
        <!-- Start Navigation -->
        <nav class="navbar mobile-sidenav attr-border navbar-sticky navbar-default validnavs navbar-fixed dark no-background">


            <div class="container d-flex justify-content-between align-items-center">

                <!-- Start Header Navigation -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                        <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand" href="index.html">
                        <img src="assets/img/logo.png" class="logo" alt="Logo">
                    </a>
                </div>
                <!-- End Header Navigation -->

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-menu">

                    <img src="assets/img/logo.png" alt="Logo">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                        <i class="fa fa-times"></i>
                    </button>

                    <ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">
                        <li class="dropdown">
                            <a href="/" class="dropdown-toggle active" data-toggle="dropdown" >Home</a>
                            {{-- <ul class="dropdown-menu">
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" >Multipage</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="index.html">App Landing</a></li>
                                        <li><a href="index-2.html">Software Landing</a></li>
                                        <li><a href="index-5.html">Startup Landing</a></li>
                                        <li><a href="index-3.html">Saas Landing</a></li>
                                        <li><a href="index-4.html">Data Science</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" >Onepage</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="index-op.html">App Landing</a></li>
                                        <li><a href="index-op-2.html">Software Landing</a></li>
                                        <li><a href="index-op-5.html">Startup Landing</a></li>
                                        <li><a href="index-op-3.html">Saas Landing</a></li>
                                        <li><a href="index-op-4.html">Data Science</a></li>
                                    </ul>
                                </li>
                            </ul> --}}
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" >Pages</a>
                            <ul class="dropdown-menu">
                                <li><a href="about-us.html">About Us</a></li>
                                <li class="dropdown">
                                    <a href="about-us.html" class="dropdown-toggle" data-toggle="dropdown" >Team Members</a>
                                    {{-- <ul class="dropdown-menu">
                                        <li><a href="team.html">Team Style One</a></li>
                                        <li><a href="team-2.html">Team Style Two</a></li>
                                        <li><a href="team-details.html">Team Details</a></li>
                                    </ul> --}}
                                </li>
                                <li><a href="contact.html">Contact Us</a></li>
                                <li><a href="404.html">Error Page</a></li>
                            </ul>
                        </li>
                        {{-- <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" >Projects</a>
                            <ul class="dropdown-menu">
                                <li class="dropdown">
                                    <a href="about-us.html" class="dropdown-toggle" data-toggle="dropdown" >Grid Style</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="project-2-colum.html">Project Style One</a></li>
                                        <li><a href="projects.html">Project Style Two</a></li>
                                        <li><a href="project-4-colum.html">Project Style Three</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="about-us.html" class="dropdown-toggle" data-toggle="dropdown" >Masonary Style</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="project-masonary-2-colum.html">Project Style One</a></li>
                                        <li><a href="project-masonary-3-colum.html">Project Style Two</a></li>
                                        <li><a href="project-masonary-4-colum.html">Project Style Three</a></li>
                                    </ul>
                                </li>
                                <li><a href="project-details.html">Project Details</a></li>
                            </ul>
                        </li> --}}
                        {{-- <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" >Services</a>
                            <ul class="dropdown-menu">
                                <li><a href="services.html">Services</a></li>
                                <li><a href="services-details.html">Services Details</a></li>
                            </ul>
                        </li> --}}
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" >Blog</a>
                            {{-- <ul class="dropdown-menu">
                                <li><a href="blog-standard.html">Blog Standard</a></li>
                                <li><a href="blog-with-sidebar.html">Blog With Sidebar</a></li>
                                <li><a href="blog-2-colum.html">Blog Grid Two Colum</a></li>
                                <li><a href="blog-3-colum.html">Blog Grid Three Colum</a></li>
                                <li><a href="blog-single.html">Blog Single</a></li>
                                <li><a href="blog-single-with-sidebar.html">Blog Single With Sidebar</a></li>
                            </ul> --}}
                        </li>
                        {{-- <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" >Shop</a>
                            <ul class="dropdown-menu">
                                <li><a href="shop.html">Shop Product</a></li>
                                <li><a href="shop-single.html">Shop Single</a></li>
                                <li><a href="shop-single-thumb-only.html">Shop Single Version Two</a></li>
                            </ul>
                        </li> --}}
                    </ul>
                </div><!-- /.navbar-collapse -->

                <div class="attr-right">
                    <!-- Start Atribute Navigation -->
                    <div class="attr-nav">
                        <ul>
                            {{-- <li class="button"><a href="/login">Login</a></li> --}}
                        </ul>
                    </div>
                    <!-- End Atribute Navigation -->
                </div>

                <!-- Main Nav -->
            </div>
            <!-- Overlay screen for menu -->
            <div class="overlay-screen"></div>
            <!-- End Overlay screen for menu -->
        </nav>
        <!-- End Navigation -->
    </header>
    <!-- End Header -->


    <!-- Start Breadcrumb
    ============================================= -->
    <div class="breadcrumb-area shadow dark bg-cover text-center text-light" style="background-image: url(7283494.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <h1>Blog Standard</h1>
                    <ul class="breadcrumb">
                        <li><a href="#"><i class="fas fa-home"></i> Home</a></li>
                        <li><a href="#">Blog</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->

   <!-- Start Blog
    ============================================= -->
    <div class="blog-area full-blog blog-standard full-blog default-padding">
        <div class="container">
            <div class="blog-items">
                <div class="row">
                    <div class="blog-content col-lg-10 offset-lg-1 col-md-12">
                        <div class="blog-item-box">

                            @foreach ($posts as $post)
                            <!-- Single Item -->
                            <div class="single-item">
                                <div class="item">
                                    <div class="thumb text-center">
                                        <a href="{{ route('blog.single', $post->slug) }}">
                                            <img src="{{ asset('upload/post/' . $post->sampul) }}" alt="Thumb" style="max-width: 200px; height: auto; display: inline-block; margin: 20;">
                                        <div class="date">
                                            <strong>{{ date('d', strtotime($post->created_at)) }}</strong> <span>{{ date('M', strtotime($post->created_at)) }}</span>
                                        </div>
                                    </div>
                                    <div class="info">
                                        <div class="meta">
                                            <ul>
                                                <li>
                                                    <a href="#"><i class="fas fa-user"></i> {{ $post->penulis }}</a>
                                                </li>
                                                <!-- Jika Anda memiliki sistem komentar, Anda dapat menambahkannya di sini -->
                                            </ul>
                                        </div>
                                        <h3>
                                            <a href="{{ route('blog.single', $post->slug) }}">{{ $post->judul }}</a>
                                        </h3>
                                        <p>
                                            {{ substr($post->konten, 0, 100) }}{{ strlen($post->konten) > 100 ? '...' : '' }}
                                        </p>
                                        <a class="btn circle btn-theme-border btn-sm" href="{{ route('blog.single', $post->slug) }}">Read More</a>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Item -->
                            @endforeach

                        </div>

                        <!-- Pagination -->
                        <div class="row">
                            <div class="col-md-12 pagi-area text-center">
                                <nav aria-label="navigation">
                                    <ul class="pagination">
                                        <li class="page-item"><a class="page-link" href="#"><i class="fas fa-angle-double-left"></i></a></li>
                                        <!-- Tambahkan logika paginasi di sini sesuai kebutuhan -->
                                        <li class="page-item"><a class="page-link" href="#"><i class="fas fa-angle-double-right"></i></a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Start Footer
    ============================================= -->
    <footer class="bg-dark text-light">
        <div class="container">
            <div class="f-items default-padding">
                <div class="row">
                    <div class="col-lg-4 col-md-6 item">
                        <div class="f-item about">
                            <img src="assets/img/logo-light.png" alt="Logo">
                            <p>
                                Excellence decisively nay man yet impression for contrasted remarkably. There spoke happy for you are out. Fertile how old address did showing.
                            </p>
                            <form action="#">
                                <input type="email" placeholder="Your Email" class="form-control" name="email">
                                <button type="submit"> <i class="arrow_right"></i></button>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 item">
                        <div class="f-item link">
                            <h4 class="widget-title">Quick LInk</h4>
                            <ul>
                                <li>
                                    <a href="#"><i class="fas fa-angle-right"></i> Home</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fas fa-angle-right"></i> About us</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fas fa-angle-right"></i> Compnay History</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fas fa-angle-right"></i> Features</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fas fa-angle-right"></i> Blog Page</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fas fa-angle-right"></i> Login</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 item">
                        <div class="f-item link">
                            <h4 class="widget-title">Community</h4>
                            <ul>
                                <li>
                                    <a href="#"><i class="fas fa-angle-right"></i> Career</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fas fa-angle-right"></i> Leadership</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fas fa-angle-right"></i> Strategy</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fas fa-angle-right"></i> Services</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fas fa-angle-right"></i> History</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fas fa-angle-right"></i> Components</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 item">
                        <div class="f-item contact-widget">
                            <h4 class="widget-title">Contact Info</h4>
                            <div class="address">
                                <ul>
                                    <li>
                                        <div class="icon">
                                            <i class="fas fa-home"></i>
                                        </div>
                                        <div class="content">
                                            <strong>Address:</strong>
                                            5919 Trussville Crossings Pkwy, Birmingham
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <i class="fas fa-envelope"></i>
                                        </div>
                                        <div class="content">
                                            <strong>Email:</strong>
                                            <a href="mailto:info@validtheme.com">info@validtheme.com</a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <i class="fas fa-phone"></i>
                                        </div>
                                        <div class="content">
                                            <strong>Phone:</strong>
                                            <a href="tel:2151234567">+123 34598768</a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Start Footer Bottom -->
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <p>&copy; Copyright 2021. All Rights Reserved by <a href="#">validthemes</a></p>
                    </div>
                    <div class="col-lg-6 text-end link">
                        <ul>
                            <li>
                                <a href="#">Terms</a>
                            </li>
                            <li>
                                <a href="#">Privacy</a>
                            </li>
                            <li>
                                <a href="#">Support</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Footer Bottom -->
    </footer>
    <!-- End Footer -->

    <!-- jQuery Frameworks
    ============================================= -->
    <script src="assets/js/jquery-3.6.0.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/jquery.appear.js"></script>
    <script src="assets/js/jquery.easing.min.js"></script>
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/modernizr.custom.13711.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/progress-bar.min.js"></script>
    <script src="assets/js/isotope.pkgd.min.js"></script>
    <script src="assets/js/imagesloaded.pkgd.min.js"></script>
    <script src="assets/js/count-to.js"></script>
    <script src="assets/js/YTPlayer.min.js"></script>
    <script src="assets/js/validnavs.js"></script>
    <script src="assets/js/main.js"></script>

</body>
</html>
