@extand('layout')
@section('header')
        <meta charset="UTF-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

        <!-- PAGE TITLE -->
        <title>Trade - Consultancy</title>

        <!-- GOOGLE FONTS -->
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300%7CRoboto:400,100,300,700' rel='stylesheet' type='text/css'>

        <link rel="stylesheet" href="css/style.css">
   
 @stop   
@section('content')
    <body class="trd-service-template trd-consultancy">
        <!-- HEADER -->
        <header class="trd-header">
            <!-- Topbar -->
            <div class="trd-header-topbar">
                <div class="container">
                    <div class="row">
                        <!-- contact info -->
                        <div class="trd-contact-infos">
                            <ul>
                                <li class="trd-header-info-phn">0582 856 310</li>
                                <li class="trd-header-info-location">Lake Avenue, California</li>
                                <li class="trd-header-info-lang">
                                    <select class="trd-multilang-opt">
                                        <option value="Eng">English</option>
                                        <option value="Spn">Spanish</option>
                                        <option value="Ger">German</option>
                                        <option value="Rus">Russian</option>
                                    </select>
                                </li>
                            </ul>
                        </div>
                        <!-- End -->

                        <!-- Social Links -->
                        <div class="trd-social-links">
                            <ul>
                                <li class="trd-fb-icon">
                                    <a href="#">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                </li>
                                <li class="trd-twitter-icon">
                                    <a href="#">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                </li>
                                <li class="trd-behance-icon">
                                    <a href="#">
                                        <i class="fa fa-behance"></i>
                                    </a>
                                </li>
                                <li class="trd-dribbble-icon">
                                    <a href="#">
                                        <i class="fa fa-dribbble"></i>
                                    </a>
                                </li>
                                <li class="trd-vimeo-icon">
                                    <a href="#">
                                        <i class="fa fa-vimeo"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <!-- End -->
                    </div>
                </div>
            </div>
            <!-- End -->

            <!-- Bottombar -->
            <div class="trd-header-bottombar">
                <!-- Navigation Menu start-->
                <nav class="navbar trd-main-menu" role="navigation">
                  <div class="container">
                    <div class="row">
                      <!-- Navbar Toggle -->
                      <div class="navbar-header">
                          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                              <span class="icon-bar"></span>
                              <span class="icon-bar"></span>
                              <span class="icon-bar"></span>
                          </button>

                          <!-- Logo -->
                          <a class="navbar-brand" href="index.html"><img class="logo" src="images/logo-header.png" alt="TRADE"></a>
                      </div>
                      <!-- Navbar Toggle End -->

                        <!-- navbar-collapse start-->
                        <div id="nav-menu" class="navbar-collapse trd-menu-wrapper collapse" role="navigation">
                            <!-- Menu -->
                            <ul class="nav navbar-nav trd-menus">
                                <li>
                                    <a href="index.html">Home</a>
                                </li>
                                <li>
                                    <a href="about-us.html">About</a>
                                </li>
                                <li>
                                    <a href="blog.html">Blog</a>
                                    <ul class="trd-dropdown-menu">
                                        <li>
                                            <a href="blog-details.html">Blog Details</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="active">
                                    <a href="#">Services</a>
                                    <ul class="trd-dropdown-menu">
                                        <li>
                                            <a href="financial-service.html">Financial Services</a>
                                        </li>
                                        <li>
                                            <a href="business-plan.html">Business Plan</a>
                                        </li>
                                        <li>
                                            <a href="market-analysis.html">Market Analysis</a>
                                        </li>
                                        <li>
                                            <a href="marketing.html">Marketting</a>
                                        </li>
                                        <li>
                                            <a href="investment.html">Investment</a>
                                        </li>
                                        <li>
                                            <a href="consultancy.html">Consultancy</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="contact-us.html">Contact</a>
                                </li>
                            </ul>
                            <!-- End -->
                        </div>
                        <!-- navbar-collapse end-->

                        <!-- Search -->
                        <div class="trd-search-wrapper">
                            <a href="#" class="trd-search-icon">
                                <i class="fa fa-search"></i>
                            </a>
                        </div>
                        <!-- End -->
                    </div>
                  </div>
                </nav>
                <!-- Navigation Menu end-->
            </div>
            <!-- End -->
        </header>
        <!-- HEADER END -->

        <!-- PAGE HEADER -->
        <section class="trd-page-breadcumb-header">
            <div class="container">
                <div class="row">
                    <h1 class="trd-page-title">Services</h1>
                    <div class="trd-breadcumb-wrapper">
                        <a href="#">Home</a>
                        <a href="#">Services</a>
                        <span>Consultancy</span>
                    </div>
                </div>
            </div>
        </section>
        <!-- PAGE HEADER END -->

        <!-- PAGE CONTENTS -->
        <section class="trd-page-contents-wrapper">
            <div class="container">
                <div class="row">

                    <!-- Sidebar -->
                    <div class="trd-sidebar trd-sidebar-left col-md-3 col-sm-4 col-xs-12">
                        <!-- Widget -->
                        <div class="trd-sidebar-widget trd-pagelink-widget">
                            <ul>
                                <li>
                                    <a href="financial-service.html">Financial Services</a>
                                </li>
                                <li>
                                    <a href="business-plan.html">Business Plan</a>
                                </li>
                                <li>
                                    <a href="market-analysis.html">Market Analysis</a>
                                </li>
                                <li>
                                    <a href="marketing.html">Marketting</a>
                                </li>
                                <li>
                                    <a href="investment.html">Investment</a>
                                </li>
                                <li class="current">
                                    <a href="consultancy.html">Consultancy</a>
                                </li>
                            </ul>
                        </div>
                        <!-- End -->

                        <!-- Widget -->
                        <div class="trd-sidebar-widget trd-download-widget">
                            <p>Download <br>our <span class="trd-highlight-text">Brochure</span> from here</p>
                            <a href="#" class="trd-btn">Download</a>
                        </div>
                        <!-- End -->
                    </div>
                    <!-- Sidebar End -->

                    <!-- Page Contents -->
                    <div class="trd-page-contents col-md-9 col-sm-8 col-xs-12">
                        <div class="trd-inner-section">
                            <div class="trd-left-twothird">
                                <h2 class="trd-content-inner-title">Monthly <span class="trd-highlight-text">Servay</span></h2>
                                <p>
                                    On the other hand, we denounce with righteous indignation and among a men whos are of pleasure of the moment, so blinded by desire, that they cannot foresee the pain good On the other hand, we denounce with righteous indignation and dislike men whos areas of pleasure of the moment, so blinded by desire, that they cannot foresee the pain decio<br>
                                    <br>
                                    On the other hand, we denounce with righteous indignation and dislike men whos areas of pleasure of the moment, so blinded by desire, that they cannot foresee the pain antos On the other hand, we denounce
                                </p>
                            </div>

                            <div class="trd-right-onethird">
                                <div class="trd-image-wrapper">
                                    <img src="images/service-img-1.jpg" alt="Service">
                                </div>
                            </div>
                        </div>

                        <div class="trd-inner-section">
                            <div class="trd-left-twothird">
                                <div class="trd-image-wrapper">
                                    <img src="images/category-img-1.jpg" alt="About us">
                                </div>
                            </div>

                            <div class="trd-right-onethird">
                                <h2 class="trd-content-inner-title">About <span class="trd-highlight-text">Business</span></h2>
                                <p>
                                    Checkout and enjoy the biggest eco claim free explain to you how an mistaken even some others me people can expect better for proper management system are good Checkout and enjoy the biggest eco claim free<br>
                                    <br>
                                    free explain to you how an mistaken even some others me people can expect better for proper management system
                                </p>
                            </div>
                        </div>

                        <div class="trd-inner-section">
                            <div class="trd-left-twothird">
                                <h2 class="trd-content-inner-title">Rapid <span class="trd-highlight-text">Success</span></h2>
                                <p>
                                    Checkout and enjoy the biggest eco claim free explain to you how an mistaken even some others me people can expect better for proper management system are good Checkout and enjoy the biggest eco claim free explain to you how an mistaken even some others me people can expect better<br>
                                    <br>
                                    free explain to you how an mistaken even some others me people can expect better for proper management system are good good idea ever made
                                </p>
                            </div>

                            <div class="trd-right-onethird">
                                <div class="trd-image-wrapper">
                                    <img src="images/service-img-2.jpg" alt="Service">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End -->
                </div>
            </div>
        </section>
        <!-- PAGE CONTENTS END -->
@stop
@section('footer')
        <!-- FOOTER -->
        <footer>
            <div class="container">
                <div class="row">
                    <!-- Footer Top -->
                    <div class="trd-footer-top">
                        <!-- About Widget -->
                        <div class="col-md-3 col-sm-6 col-xs-12 trd-footer-widget trd-about-widget">
                            <div class="trd-logo-wrapper">
                                <img src="images/logo-footer.png" alt="Trade">
                            </div>

                            <p>Checkout and enjoy the biggest eco free explain you how an mistaken even some others me people expect better for proper management system are good idea ever made</p>
                        </div>
                        <!-- End -->

                        <!-- Useful Link Widget -->
                        <div class="col-md-3 col-sm-6 col-xs-12 trd-footer-widget trd-useful-link-widget">
                            <h3 class="trd-footer-widget-title">Useful Link</h3>

                            <div class="trd-footer-widget-content">
                                <ul>
                                    <li><a href="#">About Us</a></li>
                                    <li><a href="#">Recent term</a></li>
                                    <li><a href="#">History</a></li>
                                    <li><a href="#">History</a></li>
                                    <li><a href="#">Career goal</a></li>
                                    <li><a href="#">Management</a></li>
                                    <li><a href="#">Company info</a></li>
                                    <li><a href="#">Company</a></li>
                                    <li><a href="#">Process</a></li>
                                    <li><a href="#">Marketing</a></li>
                                    <li><a href="#">Account</a></li>
                                    <li><a href="#">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- End -->

                        <!-- Recent Post Widget -->
                        <div class="col-md-3 col-sm-6 col-xs-12 trd-footer-widget trd-recent-post-widget">
                            <h3 class="trd-footer-widget-title">Recent Post</h3>

                            <div class="trd-footer-widget-content">
                                <div class="trd-recent-post-wrapper">
                                    <!-- Post Item -->
                                    <div class="trd-recent-post-item">
                                        <h3 class="trd-post-title">
                                            <a href="#">Financial express anounced the share list from candites</a>
                                        </h3>

                                        <span class="trd-post-date">April 25, 2016</span>
                                    </div>
                                    <!-- End -->

                                    <!-- Post Item -->
                                    <div class="trd-recent-post-item">
                                        <h3 class="trd-post-title">
                                            <a href="#">Financial express anounced the share list from candites</a>
                                        </h3>

                                        <span class="trd-post-date">April 25, 2016</span>
                                    </div>
                                    <!-- End -->
                                </div>
                            </div>
                        </div>
                        <!-- End -->

                        <!-- Subscribe For Widget -->
                        <div class="col-md-3 col-sm-6 col-xs-12 trd-footer-widget trd-subscribe-widget">
                            <h3 class="trd-footer-widget-title">Subscribe</h3>

                            <div class="trd-footer-widget-content">
                                <p>Checkout and enjoy the biggest eco free explain you how </p>

                                <form action="#">
                                    <input type="email" name="trd-subscription" id="trd-subscription" placeholder="Your email">
                                    <button type="submit" class="trd-btn">Submit</button>
                                </form>
                            </div>
                        </div>
                        <!-- End -->
                    </div>
                    <!-- End -->

                    <!-- Footer Bottom -->
                    <div class="trd-footer-bottom">
                        <div class="trd-footer-menu">
                            <ul>
                                <li>
                                    <a href="#">Home</a>
                                </li>
                                <li>
                                    <a href="#">About</a>
                                </li>
                                <li>
                                    <a href="#">Blog</a>
                                </li>
                                <li>
                                    <a href="#">Contact</a>
                                </li>
                            </ul>
                        </div>

                        <div class="trd-copyright-info">
                            <p>Copyright &copy; 2016 by <a href="#" class="trd-author-link">ThemeBeer</a></p>
                        </div>
                    </div>
                    <!-- End -->
                </div>
            </div>
            <!-- End -->
        </footer>
        <!-- FOOTER END -->

        <!-- jQuery -->
        <script src="js/vendors/jquery.min.js"></script>

        <!-- Plugins -->
        <script src="js/plugins.js"></script>

         <!-- Main JS -->
        <script src="js/main.js"></script>
@stop
