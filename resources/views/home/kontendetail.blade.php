<!DOCTYPE html>
<html lang="en">

<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Appku - Software Landing Page">

    <!-- ========== Page Title ========== -->
    <title>Medicify Blog</title>

    <!-- ========== Favicon Icon ========== -->
    <link rel="shortcut icon" href="{{ asset('assets/img/favicon.png') }}" type="image/x-icon">

    <!-- ========== Start Stylesheet ========== -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/helper.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/validnavs.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/flaticon-set.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/elegant-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">

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
    <div class="se-pre-con"></div>
    <!-- Preloader Ends -->

    <!-- Header
    ============================================= -->
    <header>
        <!-- Start Navigation -->
        {{-- <nav class="navbar mobile-sidenav navbar-common navbar-sticky navbar-default validnavs">


            <div class="container d-flex justify-content-between align-items-center">

                <!-- Start Header Navigation -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                        <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand" href="index.html">
                        <img src="{{ asset('assets/img/logo.png') }}" class="logo" alt="Logo">
                    </a>
                </div>
                <!-- End Header Navigation -->

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-menu">

                    <img src="{{ asset('assets/img/logo.png') }}" alt="Logo">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                        <i class="fa fa-times"></i>
                    </button>

                    <ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle active" data-toggle="dropdown" >Home</a>
                            <ul class="dropdown-menu">
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
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" >Pages</a>
                            <ul class="dropdown-menu">
                                <li><a href="about-us.html">About Us</a></li>
                                <li class="dropdown">
                                    <a href="about-us.html" class="dropdown-toggle" data-toggle="dropdown" >Team Members</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="team.html">Team Style One</a></li>
                                        <li><a href="team-2.html">Team Style Two</a></li>
                                        <li><a href="team-details.html">Team Details</a></li>
                                    </ul>
                                </li>
                                <li><a href="contact.html">Contact Us</a></li>
                                <li><a href="404.html">Error Page</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
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
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" >Services</a>
                            <ul class="dropdown-menu">
                                <li><a href="services.html">Services</a></li>
                                <li><a href="services-details.html">Services Details</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" >Blog</a>
                            <ul class="dropdown-menu">
                                <li><a href="blog-standard.html">Blog Standard</a></li>
                                <li><a href="blog-with-sidebar.html">Blog With Sidebar</a></li>
                                <li><a href="blog-2-colum.html">Blog Grid Two Colum</a></li>
                                <li><a href="blog-3-colum.html">Blog Grid Three Colum</a></li>
                                <li><a href="blog-single.html">Blog Single</a></li>
                                <li><a href="blog-single-with-sidebar.html">Blog Single With Sidebar</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" >Shop</a>
                            <ul class="dropdown-menu">
                                <li><a href="shop.html">Shop Product</a></li>
                                <li><a href="shop-single.html">Shop Single</a></li>
                                <li><a href="shop-single-thumb-only.html">Shop Single Version Two</a></li>
                            </ul>
                        </li>
                    </ul>
                </div><!-- /.navbar-collapse -->

                <div class="attr-right">
                    <!-- Start Atribute Navigation -->
                    <div class="attr-nav">
                        <ul>
                            <li class="button"><a href="#">Get Started</a></li>
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
        <!-- End Navigation --> --}}
    </header>
    <!-- End Header -->

    <!-- Start Breadcrumb
    ============================================= -->
    <div class="breadcrumb-area shadow dark bg-cover text-center text-light" style="background-image: {{ asset('assets/img/logo_putih.png') }}">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <h1>Medicify Blog</h1>
                    <ul class="breadcrumb">
                        <li><a href="/"><i class="fas fa-home"></i> Home</a></li>
                        <li><a href="/blog">Blog</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->

    <div class="blog-area single full-blog right-sidebar full-blog default-padding">
        <div class="container">
            <div class="blog-items">
                <div class="row">
                    <div class="blog-content wow fadeInUp col-lg-8 col-md-12">
                        <div class="item">

                            <div class="blog-item-box">
                                <div class="thumb">
                                    <a href="#">
                                        <img src="{{ asset('upload/post/' . $post->sampul) }}" alt="{{ $post->judul }}">
                                    </a>
                                    <div class="date"><strong>{{ date('d', strtotime($post->created_at)) }}</strong> <span>{{ date('M', strtotime($post->created_at)) }}</span></div>
                                </div>
                                <div class="info">
                                    <div class="meta">
                                        <ul>
                                            <li>
                                                <a href="#"><i class="fas fa-user"></i> {{ $post->user->name }}</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <h3>
                                        {{ $post->judul }}
                                    </h3>
                                    <p>
                                       {!! $post->konten !!}
                                    </p>
                                </div>
                            </div>
                        </div>

                        {{-- <!-- Start Post Pagination -->
                        <div class="post-pagi-area">
                            <a href="#">
                                <i class="fas fa-angle-double-left"></i> Previus Post
                                <h5>Hello World</h5>
                            </a>
                            <a href="#">
                                Next Post <i class="fas fa-angle-double-right"></i>
                                <h5>The earth brown</h5>
                            </a>
                        </div> --}}
                        <!-- End Post Pagination -->

                        <!-- Start Post Tag s-->
                        <div class="post-tags share">
                            <div class="tags">
                                <a href="#">Analysis</a>
                                <a href="#">Process</a>
                            </div>
                            <div class="social">
                                <ul>
                                    <li class="facebook">
                                        <a href="#">
                                            <i class="fab fa-facebook-f"></i>
                                        </a>
                                    </li>
                                    <li class="twitter">
                                        <a href="#">
                                            <i class="fab fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li class="pinterest">
                                        <a href="#">
                                            <i class="fab fa-pinterest-p"></i>
                                        </a>
                                    </li>
                                    <li class="linkedin">
                                        <a href="#">
                                            <i class="fab fa-linkedin-in"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- End Post Tags -->

                        <!-- Start Blog Comment -->
                        <div class="blog-comments">
                            <div class="comments-area">
                                {{-- <div class="comments-title">
                                    <h4>
                                        5 comments
                                    </h4>
                                    <div class="comments-list">
                                        <div class="commen-item">
                                            <div class="avatar">
                                                <img src="assets/img/100x100.png" alt="Author">
                                            </div>
                                            <div class="content">
                                                <div class="title">
                                                    <h5>Jonathom Doe</h5>
                                                    <span>28 Aug, 2022</span>
                                                </div>
                                                <p>
                                                    Year kept on over so as this of. She steepest doubtful betrayed formerly him. Active one called uneasy our seeing see cousin tastes its. Ye am it formed indeed agreed relied piqued. Met packages shy for kindness.
                                                </p>
                                                <div class="comments-info">
                                                    <a href=""><i class="fa fa-reply"></i>Reply</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="commen-item reply">
                                            <div class="avatar">
                                                <img src="assets/img/100x100.png" alt="Author">
                                            </div>
                                            <div class="content">
                                                <div class="title">
                                                    <h5>Spart Lee</h5>
                                                    <span>17 Feb, 2022</span>
                                                </div>
                                                <p>
                                                    Delivered ye sportsmen zealously arranging frankness estimable as. Nay any article enabled musical shyness yet sixteen yet blushes. Entire its the did figure wonder off.
                                                </p>
                                                <div class="comments-info">
                                                    <a href=""><i class="fa fa-reply"></i>Reply</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> --}}
                                <div class="comments-form">
                                    <div class="title">
                                        <h4>Leave a comments</h4>
                                    </div>
                                    <form action="#" class="contact-comments">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <!-- Name -->
                                                    <input name="name" class="form-control" placeholder="Name *" type="text">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <!-- Email -->
                                                    <input name="email" class="form-control" placeholder="Email *" type="email">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group comments">
                                                    <!-- Comment -->
                                                    <textarea class="form-control" placeholder="Comment"></textarea>
                                                </div>
                                                <div class="form-group full-width submit">
                                                    <button type="submit">
                                                        Post Comments
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- End Comments Form -->
                    </div>
                    <!-- Start Sidebar -->
                    <div class="sidebar wow fadeInLeft col-lg-4 col-md-12">
                        <aside>
                            <div class="sidebar-item search">
                                <div class="sidebar-info">
                                    <form>
                                        <input type="text" name="text" class="form-control">
                                        <button type="submit"><i class="fas fa-search"></i></button>
                                    </form>
                                </div>
                            </div>
                            <!-- Recent Post Sidebar -->
<div class="sidebar-item recent-post">
    <div class="title">
        <h4>Recent Post</h4>
    </div>
    <ul>
        @foreach($recentPosts as $recentPost)
            <li>
                <div class="thumb">
                    <a href="{{ route('blog.single', $recentPost->slug) }}">
                        <img src="{{ asset('upload/post/' . $post->sampul) }}" alt="Thumb">
                    </a>
                </div>
                <div class="info">
                    <div class="meta-title">
                        <span class="post-date">{{ $recentPost->created_at->format('d M, Y') }}</span>
                    </div>
                    <a href="{{ route('blog.single', $recentPost->slug) }}">{{ $recentPost->judul }}</a>
                </div>
            </li>
        @endforeach
    </ul>
</div>
<!-- End Recent Post Sidebar -->
                            <!-- Category Sidebar -->
<div class="sidebar-item category">
    <div class="title">
        <h4>Category List</h4>
    </div>
    <div class="sidebar-info">
        <ul>
            @foreach($categories as $category)
                <li>
                    {{-- <a href="{{ route('category.show', $category->slug) }}"> --}}
                        {{ $category->name }} <span>{{ $category->posts_count }}</span>
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
</div>
<!-- End Category Sidebar -->

                            {{-- <div class="sidebar-item archives">
                                <div class="title">
                                    <h4>Archives</h4>
                                </div>
                                <div class="sidebar-info">
                                    <ul>
                                        <li><a href="#">Aug 2022</a></li>
                                        <li><a href="#">Sept 2022</a></li>
                                        <li><a href="#">Nov 2022</a></li>
                                        <li><a href="#">Dec 2022</a></li>
                                    </ul>
                                </div>
                            </div> --}}
                            <div class="sidebar-item social-sidebar">
                                <div class="title">
                                    <h4>follow us</h4>
                                </div>
                                <div class="sidebar-info">
                                    <ul>
                                        <li class="facebook">
                                            <a href="#">
                                                <i class="fab fa-facebook-f"></i>
                                            </a>
                                        </li>
                                        <li class="twitter">
                                            <a href="#">
                                                <i class="fab fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li class="pinterest">
                                            <a href="#">
                                                <i class="fab fa-pinterest"></i>
                                            </a>
                                        </li>
                                        <li class="linkedin">
                                            <a href="#">
                                                <i class="fab fa-linkedin-in"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            {{-- <div class="sidebar-item tags">
                                <div class="title">
                                    <h4>tags</h4>
                                </div>
                                <div class="sidebar-info">
                                    <ul>
                                        <li><a href="#">Fashion</a>
                                        </li>
                                        <li><a href="#">Education</a>
                                        </li>
                                        <li><a href="#">nation</a>
                                        </li>
                                        <li><a href="#">study</a>
                                        </li>
                                        <li><a href="#">health</a>
                                        </li>
                                        <li><a href="#">food</a>
                                        </li>
                                        <li><a href="#">travel</a>
                                        </li>
                                    </ul>
                                </div>
                            </div> --}}
                        </aside>
                    </div>
                    <!-- End Start Sidebar -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Blog -->

   <!-- Start Footer
    ============================================= -->
    <footer class="bg-dark text-light">
        <div class="container">
            <div class="f-items default-padding">
                <div class="row">
                    <div class="col-lg-4 col-md-6 item">
                        <div class="f-item about">
                            <img src="{{ asset('assets/img/logo_putih.png') }}" alt="Logo">
                            <p>
                                Bridging Hope and Healing: Medicify, Your Visionary Guide to Medications
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
                                            Universitas Gunadarma
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <i class="fas fa-envelope"></i>
                                        </div>
                                        <div class="content">
                                            <strong>Email:</strong>
                                            <a href="mailto:medicify@medicify.org">medicify@medicify.org</a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <i class="fas fa-phone"></i>
                                        </div>
                                        <div class="content">
                                            <strong>Phone:</strong>
                                            <a href="tel:2151234567">085218300198</a>
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
                        <p>&copy; Copyright 2023. All Rights Reserved by <a href="/">Medicify</a></p>
                    </div>
                    <div class="col-lg-6 text-end link">
                        <ul>
                            <li>
                                <a href="about-us.html">Terms</a>
                            </li>
                            <li>
                                <a href="about-us.html">Privacy</a>
                            </li>
                            <li>
                                <a href="contact.html">Support</a>
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
    <script src="{{ asset('assets/js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.appear.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assets/js/modernizr.custom.13711.js') }}"></script>
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/js/wow.min.js') }}"></script>
    <script src="{{ asset('assets/js/progress-bar.min.js') }}"></script>
    <script src="{{ asset('assets/js/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/js/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/js/count-to.js') }}"></script>
    <script src="{{ asset('assets/js/YTPlayer.min.js') }}"></script>
    <script src="{{ asset('assets/js/validnavs.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>

</body>
</html>
