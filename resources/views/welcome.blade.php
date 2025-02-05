<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="img/favicon.png" type="image/png">
    <title>Andra Portfolio</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="vendors/linericon/style.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="vendors/nice-select/css/nice-select.css">
    <!-- main css -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <!--================ Start Header Area =================-->
    <header class="header_area">
        <div class="main_menu">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <a class="navbar-brand logo_h" href="index.html">
                        <h2 style="color: #854fee">Andra Elja Prama</h2>
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                        <ul class="nav navbar-nav menu_nav justify-content-end">
                            <li class="nav-item active"><a class="nav-link" href="#">Beranda</a></li>
                            <li class="nav-item"><a class="nav-link" href="#">Tentang</a></li>
                            <li class="nav-item"><a class="nav-link" href="#">Resume</a></li>
                            <li class="nav-item"><a class="nav-link" href="#">Portfolio</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <!--================ End Header Area =================-->

    <!--================ Start Home Banner Area =================-->
    <section class="home_banner_area">
        <div class="banner_inner">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="banner_content">
                            <h3 class="text-uppercase">Hello</h3>
                            <h1 class="text-uppercase">Saya Andra Elja Prama</h1>
                            <h5 class="text-uppercase">Junior Web Developer</h5>
                            <div class="d-flex align-items-center">
                                <a class="primary_btn" href="#"><span>Rekrut Saya</span></a>
                                <a class="primary_btn tr-bg" href="#"><span>Dapatkan CV</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="home_right_img">
                            <img class="mx-5" src="img/andra.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================ End Home Banner Area =================-->

    <!--================ Start About Us Area =================-->
    <section class="about_area section_gap">
        <div class="container">
            <div class="row justify-content-start align-items-center">
                <div class="col-lg-5">
                    <div class="about_img">
                        <img class="" src="img/about-us.png" alt="">
                    </div>
                </div>

                <div class="offset-lg-1 col-lg-5">
                    <div class="main_title text-left">
                        <h2>Ayo <br>
                            Berkenalan dengan<br>
                            Saya!</h2>
                        <p>
                            Saya adalah seorang mahasiswa semester 6 di Politeknik Negeri Padang dengan spesialisasi
                            di bidang pengembangan web, terutama menggunakan framework Laravel. Selama perjalanan
                            akademik dan profesional saya, saya berkesempatan untuk meningkatkan keterampilan Laravel 10
                            melalui program MSIB Batch 6, di mana saya mengerjakan berbagai proyek yang membutuhkan
                            kemampuan backend dan frontend.
                        </p>
                        <a class="primary_btn" href="#"><span>Download CV</span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================ End About Us Area =================-->

    <!-- Resume Section -->
    <section id="resume" class="resume section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Resume</h2>
            <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint
                consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat
                sit in iste officiis commodi quidem hic quas.</p>
        </div><!-- End Section Title -->

        <div class="container">

            <div class="row">

                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                    <h3 class="resume-title">Ringkasan</h3>

                    <div class="resume-item pb-0">
                        <h4>Andra Elja Prama</h4>
                        <p><em>Saya seorang mahasiswa dengan jurusan sistem informasi dengan fokus di bidang web
                                developer.</em></p>
                        <ul>
                            <li>Tempat, Tanggal lahir : Duri, 12 Januari 2004</li>
                            <li>No HP : 0831-7388-6797</li>
                            <li>Email : andraeljaprama@gmail.com</li>
                        </ul>
                    </div><!-- Edn Resume Item -->

                    <h3 class="resume-title">Pendidikan</h3>
                    @foreach ($pendidikan as $item)
                        <div class="resume-item">
                            <h4>{{ $item->nama_instansi }}</h4>
                            <h5>{{ $item->tahun }}</h5>
                            <p><em>{{ $item->jurusan }}</em></p>
                            <p>{{ $item->deskripsi }}</p>
                        </div>
                    @endforeach

                </div>

                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                    <h3 class="resume-title">Pelatihan</h3>

                    @foreach ($pelatihan as $item)
                        <div class="resume-item">
                            <h4>{{ $item->judul_pelatihan }}</h4>
                            <h5>{{ $item->tahun }}</h5>
                            <p>
                                    @foreach (explode("\n", trim($item->keterangan)) as $line)
                                        • {{ $line }}<br>
                                    @endforeach
                            </p>

                        </div><!-- End Resume Item -->
                    @endforeach
                </div>
            </div>
        </div>

    </section><!-- /Resume Section -->

    <!--================ Srart Brand Area =================-->
    <section class="brand_area section_gap_bottom">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <div class="single-brand-item d-table">
                                <div class="d-table-cell text-center">
                                    <img src="img/html5.png" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <div class="single-brand-item d-table">
                                <div class="d-table-cell text-center">
                                    <img src="img/css3.png" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <div class="single-brand-item d-table">
                                <div class="d-table-cell text-center">
                                    <img src="img/js.png" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <div class="single-brand-item d-table">
                                <div class="d-table-cell text-center">
                                    <img src="img/bootstrap.png" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <div class="single-brand-item d-table">
                                <div class="d-table-cell text-center">
                                    <img src="img/php.png" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <div class="single-brand-item d-table">
                                <div class="d-table-cell text-center">
                                    <img src="img/mysql.png" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <div class="single-brand-item d-table">
                                <div class="d-table-cell text-center">
                                    <img src="img/laravel.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="offset-lg-2 col-lg-4 col-md-6">
                    <div class="client-info">
                        <div class="d-flex mb-50">
                            <span class="lage">1</span>
                            <span class="smll">Years Experience Working</span>
                        </div>
                        <div class="call-now d-flex">
                            <div>
                                <span class="fa fa-phone"></span>
                            </div>
                            <div class="ml-15">
                                <p>call us now</p>
                                <h3>(+62)-831-7388-6797</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================ End Brand Area =================-->

    <!--================ Start Features Area =================-->
    <section class="features_area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <div class="main_title">
                        <h2>service offers </h2>
                        <p>
                            Is give may shall likeness made yielding spirit a itself togeth created
                            after sea <br> is in beast beginning signs open god you're gathering ithe
                        </p>
                    </div>
                </div>
            </div>
            <div class="row feature_inner">
                <div class="col-lg-3 col-md-6">
                    <div class="feature_item">
                        <img src="img/services/s1.png" alt="">
                        <h4>Wp developing</h4>
                        <p>Creeping for female light years that lesser can't evening heaven isn't bearing tree</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="feature_item">
                        <img src="img/services/s2.png" alt="">
                        <h4>UI/ux design</h4>
                        <p>Creeping for female light years that lesser can't evening heaven isn't bearing tree</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="feature_item">
                        <img src="img/services/s3.png" alt="">
                        <h4>Web design</h4>
                        <p>Creeping for female light years that lesser can't evening heaven isn't bearing tree</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="feature_item">
                        <img src="img/services/s4.png" alt="">
                        <h4>seo optimize</h4>
                        <p>Creeping for female light years that lesser can't evening heaven isn't bearing tree</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================ End Features Area =================-->

    <!--================Start Portfolio Area =================-->
    <section class="portfolio_area" id="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="main_title text-left">
                        <h2>Portofolio Saya</h2>
                    </div>
                </div>
            </div>

            <div class="filters-content">
                <div class="row portfolio-grid justify-content-center">
                    @foreach ($projek as $project)
                        <div class="col-lg-4 col-md-6 all latest">
                            <div class="portfolio_box">
                                <div class="single_portfolio">
                                    <img class="img-fluid w-100" src="{{ asset('storage/' . $project->foto) }}"
                                        alt="{{ $project->judul_projek }}">
                                    <div class="overlay"></div>
                                    <a href="{{ asset('storage/' . $project->foto) }}" class="img-gal">
                                        <div class="icon">
                                            <span class="lnr lnr-cross"></span>
                                        </div>
                                    </a>
                                </div>
                                <div class="short_info">
                                    <p>{{ $project->deskripsi_projek }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <!--================End Portfolio Area =================-->

    <!--================Footer Area =================-->
    <footer class="footer_area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="footer_top flex-column">
                        <div class="footer_logo">
                            <h4>Follow Me</h4>
                        </div>
                        <div class="footer_social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-dribbble"></i></a>
                            <a href="#"><i class="fa fa-behance"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row footer_bottom justify-content-center">
                <p class="col-lg-8 col-sm-12 footer-text">
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy;
                    <script>
                        document.write(new Date().getFullYear());
                    </script> All rights reserved | This template is made with <i class="fa fa-heart-o"
                        aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Andra</a>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                </p>
            </div>
        </div>
    </footer>
    <!--================End Footer Area =================-->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/stellar.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="vendors/nice-select/js/jquery.nice-select.min.js"></script>
    <script src="vendors/isotope/imagesloaded.pkgd.min.js"></script>
    <script src="vendors/isotope/isotope-min.js"></script>
    <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/mail-script.js"></script>
    <!--gmaps Js-->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
    <script src="js/gmaps.min.js"></script>
    <script src="js/theme.js"></script>
</body>

</html>
