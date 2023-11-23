@extends('home.app')
@section('title', 'Post')
@section('post', 'active')
@section('main', 'show')
@section('main-active', 'active')
@section('content')
   <!-- Start Banner
    ============================================= -->
    <div class="banner-area auto-height bg-fixed banner-style-four text-default" style="background-image: url(assets/img/shape/1.jpg);">
        <div class="shape-bottom" style="background-image: url(assets/img/shape/44.png);"></div>
        <div class="container">
            <div class="double-items">
                <div class="row align-center">

                    <div class="col-lg-6 info">
                        <h4 class="wow fadeInRight"><strong>TOP 20</strong> Best Capstone Project Bangkit Academy 2023</h4>
                        <h2 class="wow fadeInLeft" data-wow-defaul="300ms">Introducing Our
                            Product
                            <span style="color: rgb(5, 204, 226);">Medicify</span></h2>


                        <p class="wow fadeInLeft" data-wow-delay="500ms">
                            Bridging Hope and Healing: Medicify, Your Visionary Guide to Medications

                        </p>
                        <a class="btn btn-md circle btn-gradient effect wow fadeInUp" data-wow-delay="700ms" href="#">Coba Sekarang <i class="fas fa-angle-right"></i></a>
                    </div>

                     <div class="col-lg-6 thumb wow fadeInRight" data-wow-delay="900ms">
                        <img src="assets/img/illustration/Picture1.png" alt="Thumb" width="500" >
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- End Banner -->

    <!-- Start Features
    ============================================= -->
    <div class="features-style-four-area text-center default-padding bottom-less">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="site-heading text-center">
                        <h2>Aplikasi Medicify</h2>
                        <div class="devider"></div>
                        <p>
                            Aplikasi Medicify merupakan inisiatif dari tim startup yang bertujuan untuk menyediakan layanan yang mendukung pengguna, terutama mereka yang memiliki gangguan penglihatan atau tunanetra, dalam mengidentifikasi dan mengakses informasi tentang obat-obatan.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <!-- Signle item -->
                <div class="features-style-four col-lg-4 col-md-6">
                    <div class="feature-style-four-item">
                        <div class="icon">
                            <img src="assets/img/icon/app/1.png" alt="Icon">
                        </div>
                        <div class="info">
                            <h4>Real Time Scanner Obat</h4>
                            <p>
                                Pengguna dapat menggunakan kamera ponsel mereka untuk memindai obat-obatan yang mereka miliki. Aplikasi ini kemudian akan mengidentifikasi obat tersebut dan memberikan informasi tentang nama obat, dosis yang dianjurkan, aturan penggunaan, dan indikasi penggunaan.
                            </p>
                        </div>
                    </div>
                </div>
                <!-- End Signle item -->
                <!-- Signle item -->
                <div class="features-style-four col-lg-4 col-md-6">
                    <div class="feature-style-four-item">
                        <div class="icon">
                            <img src="assets/img/icon/app/2.png" alt="Icon">
                        </div>
                        <div class="info">
                            <h4>Rekomendasi Obat</h4>
                            <p>
                                Kami menyediakan fitur yang memungkinkan Anda untuk memindai obat dan menerima rekomendasi obat sejenis. Ini memudahkan pengguna dalam menemukan alternatif obat yang sesuai dengan kebutuhan kesehatan mereka. Dengan cepat dan mudah, Anda dapat membuat keputusan yang lebih baik tentang perawatan medis Anda.
                            </p>
                        </div>
                    </div>
                </div>
                <!-- End Signle item -->
                <!-- Signle item -->
                <div class="features-style-four col-lg-4 col-md-6">
                    <div class="feature-style-four-item">
                        <div class="icon">
                            <img src="assets/img/icon/app/3.png" alt="Icon">
                        </div>
                        <div class="info">
                            <h4>Pengingat Minum Obat</h4>
                            <p>
                                Kami juga menawarkan fitur pengingat minum obat yang membantu Anda mengatur jadwal dan dosis obat. Fitur ini akan mengingatkan Anda secara teratur untuk minum obat sesuai dengan rekomendasi dokter, sehingga Anda dapat menjaga perawatan kesehatan Anda dengan lebih baik.
                            </p>
                        </div>
                    </div>
                </div>
                <!-- End Signle item -->
            </div>
        </div>
    </div>
    <!-- End Features -->

    <!-- Start Video
    ============================================= -->
    <div class="video-style-one-area text-light shadow dark video-bg-live bg-cover" style="background-image: url(logo-bangkit-2022.png);">
        <div class="player bg-cover" data-property="{videoURL:'cAN0NI5IZ5c',containment:'.video-bg-live', showControls:false, autoPlay:true, zoom:0, loop:true, mute:true, startAt:0, opacity:1, quality: 'highres'}"></div>
        <div class="video-content-info default-padding shadow dark">
            <div class="container">
                <div class="row align-center">
                    <div class="col-lg-6 video-style-one-item">
                        <h2 ><strong>APLIKASI KARYA ANAK BANGSA</strong> </h2>
                        <p>
                           Memperoleh pendanaan 140 Juta dari Google dan Dikti (Top 20 Best Capstone Project)
                        </p>
                        <div class="fun-facto-box">
                            <div class="fun-fact">
                                <div class="counter">
                                    <div class="timer" data-to="2023" data-speed="2000">2023</div>
                                    <div class="operator"></div>
                                </div>
                                <span class="medium">Bangkit Academy</span>
                            </div>
                            <div class="fun-fact">
                                <div class="counter">
                                    <div class="timer" data-to="98" data-speed="2000">98</div>
                                    <div class="operator">%</div>
                                </div>
                                <span class="medium">Positive Rating</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 video-style-one-item text-center">
                        <video width="100%" height="auto" controls>
                            <source src="{{ asset('intro.mp4') }}" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- End Video -->

    <!-- Start App features
    ============================================= -->
    <div class="app-features-area default-padding">
        <div class="container">
            <div class="row align-center">
                <div class="col-lg-3 text-end app-feature-style-one">
                    <div class="app-feature-item">
                        <h4>User-Friendly Design</h4>
                        <p>
                            Aplikasi Medicify dirancang dengan antarmuka yang ramah pengguna, memastikan pengalaman yang mulus bagi semua pengguna, termasuk mereka yang memiliki tantangan penglihatan.
                        </p>
                    </div>
                    <div class="app-feature-item">
                        <h4>Konsultasi Medis Online</h4>
                        <p>
                            Medicify memungkinkan konsultasi medis online yang mudah, memungkinkan pengguna untuk terhubung dengan profesional kesehatan tanpa meninggalkan kenyamanan rumah.
                        </p>
                    </div>
                    <div class="app-feature-item">
                        <h4>Manajemen Pengingat Kesehatan</h4>
                        <p>
                            Tingkatkan kesehatan Anda dengan fitur pengingat Medicify yang dapat diintegrasikan dengan puskesmas dan apotek, membantu Anda menjaga konsistensi dalam perawatan kesehatan Anda.
                        </p>
                    </div>
                </div>
                <div class="col-lg-6 text-center app-feature-style-one">
                    <div class="app-feature-item">
                        <div class="app-feature-thumb">
                            <img src="assets/img/app2.png"  alt="Thumb">
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 app-feature-style-one">
                    <div class="app-feature-item">
                        <h4>Teknologi Bantu Penglihatan</h4>
                        <p>
                            Aplikasi ini dilengkapi dengan teknologi bantu penglihatan, membuatnya lebih dapat diakses dan mendukung pengguna yang memiliki kebutuhan khusus pada penglihatan.
                        </p>
                    </div>
                    <div class="app-feature-item">
                        <h4>Informasi Kesehatan Terpercaya</h4>
                        <p>
                            Dapatkan informasi kesehatan terkini dan terpercaya melalui Medicify, membantu Anda membuat keputusan yang lebih baik untuk kesehatan pribadi Anda.
                        </p>
                    </div>
                    <div class="app-feature-item">
                        <h4>Fitur Konsultasi Telepon</h4>
                        <p>
                            Medicify memberikan fitur konsultasi telepon yang terintegrasi dengan puskesmas, memberikan akses mudah dan cepat untuk mendapatkan saran medis.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End App Features -->

    <!-- Start Screnshoot
    ============================================= -->

    <!-- End Screnshoot -->

    <!-- Start Team
    ============================================= -->
    <div id="team" class="team-area default-padding bg-gray bg-cover bottom-less" style="background-image: url(assets/img/shape/33.png);">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="site-heading text-center">
                        <h2>Core Team</h2>
                        <div class="devider"></div>
                        <p>
                            Kami, adalah mahasiswa penuh semangat yang tergabung untuk membawa inovasi dalam dunia kesehatan digital. Dengan latar belakang studi yang beragam, kami menyatukan pengetahuan teknis dan wawasan kesehatan untuk menciptakan solusi yang dapat diandalkan dan mudah diakses. Bersama-sama, kami berkomitmen untuk membentuk masa depan layanan kesehatan yang lebih baik.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="team-items">
                <div class="row justify-content-between">
                    <!-- Single Item -->
                    <div class="single-item col-lg-2 col-md-6">
                        <div class="item">
                            <div class="thumb card">
                                <img src="assets/img/nisa.png" alt="Thumb" class="img-fluid">
                                <div class="social">
                                    <input type="checkbox" id="toggle" class="share-toggle" hidden>
                                    <label for="toggle" class="share-button">
                                        <i class="fas fa-plus"></i>
                                    </label>
                                    <a href="#" class="share-icon facebook">
                                        <i class="fab fa-linkedin-in"></i>
                                    </a>
                                    <a href="#" class="share-icon twitter">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                    <a href="#" class="share-icon instagram">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="info">
                                <span><a href="team-details.html">Annisa Umulfath</a></span>
                                <!-- <p>Chief Executive Officer</p> -->
                               <p> Universitas Gunadarma</p>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="single-item col-lg-2 col-md-6">
                        <div class="item">
                            <div class="thumb card">
                                <img src="assets/img/didi.png" alt="Thumb" class="img-fluid">
                                <div class="social">
                                    <input type="checkbox" id="toggle2" class="share-toggle" hidden>
                                    <label for="toggle2" class="share-button">
                                        <i class="fas fa-plus"></i>
                                    </label>
                                    <a href="#" class="share-icon facebook">
                                        <i class="fab fa-linkedin-in"></i>
                                    </a>
                                    <a href="#" class="share-icon twitter">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                    <a href="#" class="share-icon instagram">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="info">
                                <span><a href="team-details.html">Ahmad Mawardi Hakim</a></span>
                                <!-- <p>Chief Business Officer</p> -->
                                <p> Universitas Gunadarma</p>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="single-item col-lg-2 col-md-6">
                        <div class="item">
                            <div class="thumb card">
                                <img src="assets/img/saddam.png" alt="Thumb" class="img-fluid">
                                <div class="social">
                                    <input type="checkbox" id="toggle3" class="share-toggle" hidden>
                                    <label for="toggle3" class="share-button">
                                        <i class="fas fa-plus"></i>
                                    </label>
                                    <a href="https://www.linkedin.com/in/saddam-satria-ardhi-837570170/" class="share-icon facebook">
                                        <i class="fab fa-linkedin-in"></i>
                                    </a>
                                    <a href="#" class="share-icon twitter">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                    <a href="https://instagram.com/saddamsatria_12" class="share-icon instagram">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="info">
                                <span><a href="team-details.html">Saddam Satria Ardhi</a></span>
                                <!-- <p>Chief Financial Officer</p> -->
                                <p> Universitas Bina Sarana Informatika</p>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="single-item col-lg-2 col-md-6">
                        <div class="item">
                            <div class="thumb card">
                                <img src="assets/img/abdur.png" alt="Thumb" class="img-fluid">
                                <div class="social">
                                    <input type="checkbox" id="toggle4" class="share-toggle" hidden>
                                    <label for="toggle4" class="share-button">
                                        <i class="fas fa-plus"></i>
                                    </label>
                                    <a href="#" class="share-icon facebook">
                                        <i class="fab fa-linkedin-in"></i>
                                    </a>
                                    <a href="#" class="share-icon twitter">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                    <a href="#" class="share-icon instagram">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="info">
                                <span><a href="team-details.html">Abdurrahman Sembiring</a></span>
                                <!-- <p>Chief Technology Officer</p> -->
                                <p> Universitas Gunadarma</p>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="single-item col-lg-2 col-md-6">
                        <div class="item">
                            <div class="thumb card">
                                <img src="assets/img/alan.png" alt="Thumb" class="img-fluid">
                                <div class="social">
                                    <input type="checkbox" id="toggle5" class="share-toggle" hidden>
                                    <label for="toggle5" class="share-button">
                                        <i class="fas fa-plus"></i>
                                    </label>
                                    <a href="#" class="share-icon facebook">
                                        <i class="fab fa-linkedin-in"></i>
                                    </a>
                                    <a href="#" class="share-icon twitter">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                    <a href="#" class="share-icon instagram">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="info">
                                <span><a href="team-details.html">Alvan Nauval Rahmat</a></span>
                                <!-- <p>Machine Learning Lead</p> -->
                                <p> Institut Teknologi Sepuluh Nopember</p>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="single-item col-lg-2 col-md-6">
                        <div class="item">
                            <div class="thumb card">
                                <img src="assets/img/bhara.png" alt="Thumb" class="img-fluid">
                                <div class="social">
                                    <input type="checkbox" id="toggle6" class="share-toggle" hidden>
                                    <label for="toggle6" class="share-button">
                                        <i class="fas fa-plus"></i>
                                    </label>
                                    <a href="#" class="share-icon facebook">
                                        <i class="fab fa-linkedin-in"></i>
                                    </a>
                                    <a href="#" class="share-icon twitter">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                    <a href="#" class="share-icon instagram">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="info">
                                <span><a href="team-details.html">Bhara Ayong Purna Mustika</a></span>
                                <!-- <p>Cloud Computing Lead</p> -->
                                <p> Universitas Bina Sarana Informatika</p>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Team Area -->

    <!-- Start Testimonials
    ============================================= -->
    <div class="testimonials-area text-light shadow dark bg-fixed carousel-shadow default-padding" style="background-image: url(assets/img/shape/2.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="site-heading text-center">
                        <h2>Apa Mereka Katakan Mengenai Medicify?</h2>
                        <div class="devider"></div>
                        <p>
Dengarkan testimonial langsung dari para pengguna dan pihak yang terlibat. Temukan bagaimana Medicify merubah pandangan mereka terhadap layanan kesehatan dengan pendekatan inovatif dan teknologi yang mudah diakses. Kesaksian ini mencerminkan dampak positif yang telah kami bawa ke komunitas dan bagaimana Medicify menjembatani kebutuhan kesehatan dengan solusi yang efektif.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="testimonial-items">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="testimonial-carousel owl-carousel owl-theme">
                            <!-- Single Item -->
                            <div class="item">
                                <div class="provider">
                                    <img src="assets/img/logo.png" alt="Author">
                                    <div class="content">
                                        <h4>Dilla Nur'aini Athaher</h4>
                                        <span> Persatuan TunaNetra Indonesia</span>
                                    </div>
                                </div>
                                <div class="info">
                                    <p>
                                        harapannya besar dari aplikasi ini. Terkadang di Indonesia banyak jenis obat dengan banyak jenis.
                                        Mudahan dengan aplikasi ini diberikan penjelasan detail.
                                        Bisa menambah kemandirian sebagai tunanetra.
                                        Tambahan: mengawal obat-obatan yang dianggap berbahaya
                                    </p>
                                </div>
                                <div class="reason">
                                    <h5>Pertuni</h5>
                                    <div class="rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Item -->
                            <!-- Single Item -->
                            <div class="item">
                                <div class="provider">
                                    <img src="assets/img/logo.png" alt="Author">
                                    <div class="content">
                                        <h4>Eli Yuniati</h4>
                                        <span>  Persatuan TunaNetra Indonesia</span>
                                    </div>
                                </div>
                                <div class="info">
                                    <p>
                                        semoga aplikasi ini bisa dipakai ke semua masyarakat dan membantu untuk teman netra
                                    </p>
                                </div>
                                <div class="reason">
                                    <h5>Pertuni</h5>
                                    <div class="rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Item -->
                            <!-- Single Item -->
                            <div class="item">
                                <div class="provider">
                                    <img src="assets/img/logo.png" alt="Author">
                                    <div class="content">
                                        <h4>Koyel Anderson</h4>
                                        <span>  </span>
                                    </div>
                                </div>
                                <div class="info">
                                    <p>
                                        Medicify luar biasa! Layanan kesehatan yang praktis dan terjangkau benar-benar membuat hidup saya lebih mudah. Dengan berbagai fitur canggih dan integrasi layanan yang lengkap, Medicify memberikan kemudahan tanpa batas. Solusi modern untuk semua kebutuhan kesehatan Anda!
                                </div>
                                <div class="reason">
                                    <h5>Masyarakat</h5>
                                    <div class="rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Item -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Testimonials Area -->



   <!-- Start Blog
    ============================================= -->
<div id="blog" class="blog-area default-padding bottom-less">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <div class="site-heading text-center">
                    <h2>Medicify Blog</h2>
                    <div class="devider"></div>
                    <p>

Medicify Blog: Pengetahuan Kesehatan Terkini

Jelajahi dunia kesehatan melalui Medicify Blog, sumber informasi andal untuk berita terkini, tips kesehatan, dan artikel informatif lainnya. Dibuat oleh para ahli kesehatan dan penulis berpengalaman, blog kami memberikan wawasan mendalam tentang berbagai topik kesehatan.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">

            @foreach ($post as $item)
            <!-- Single item -->
            <div class="single-item col-lg-4 col-md-6">
                <div class="item">
                    <div class="thumb">
                        <a href="{{ route('blog.single', $item->slug) }}">
                            <img src="{{ asset('upload/post/' . $item->sampul) }} "width="200px" alt="Thumb">
                        </a>
                        <div class="date"><strong>{{ date('d', strtotime($item->created_at)) }}</strong> <span>{{ date('M', strtotime($item->created_at)) }}</span></div>
                    </div>
                    <div class="info">
                        <div class="meta">
                            <ul>
                                <li>
                                    <a href="#"><i class="fas fa-user-circle"></i> {{ $item->user->name }}</a>
                                </li>
                                <li>
                                    {{-- <a href="#"><i class="fas fa-comments"></i> {{ $item->comments->count() }} Comments</a> --}}
                                </li>
                            </ul>
                        </div>
                        <h4>
                            <a href="{{ route('blog.single', $item->slug) }}">{{ $item->judul }}</a>
                        </h4>
                        <p>
                            {{ substr($item->konten, 0, 100) }}{{ strlen($item->konten) > 100 ? '...' : '' }}
                        </p>
                    </div>
                </div>
            </div>
            <!-- End Single item -->
            @endforeach

        </div>
    </div>
</div>
<!-- End Blog -->


    <!-- Start Free Trial
    ============================================= -->
    <div class="free-trial-area text-light text-center relative">
        <div class="trial-box" style="background-image: url(assets/img/shape/8.png);">
            <div class="container">
                <p> <strong> Didukung Oleh </strong></p>
                <div class="row">
                    <!-- Your content here -->

                    <!-- Add the image tag in the center -->
                    <div class="col-lg-12">
                        <img src="sponsor3.png" alt="Your Image Description">
                    </div>

                    <!-- End of your content -->
                </div>
            </div>
            <div class="illustration">
                <img src="assets/img/illustration/1.png" alt="illustration">
            </div>
        </div>
    </div>
    <!-- End Free Trial -->
@endsection
