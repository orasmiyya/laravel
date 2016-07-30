@extends('layout')
@section('header')

        <meta charset="UTF-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

        <!-- PAGE TITLE -->
        <title>Trade - Business and Finance HTML5 Template</title>

        <!-- GOOGLE FONTS -->
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300%7CRoboto:400,100,300,700' rel='stylesheet' type='text/css'>

        <link rel="stylesheet" href="css/style.css">

@stop

@section('content')
<body class="trd-home-template">
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
                                <li class="active">
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
                                <li>
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



        <!-- HERO SLIDER SECTION -->
        <section class="trd-hero-slider-section">
            <div class="slider-pro trd-hero-slider" id="trd-hero-slider">
                <div class="sp-slides">

                    <!-- Slides -->
                    <div class="sp-slide trd-main-slides">
                        <!-- <div class="az-dark-color-overlay"></div> -->
                        <img class="sp-image" src="images/slider-img-1.jpg" alt="Slider Image"/>

                        <div class="sp-layer trd-slider-img trd-mac-img" data-position="bottomCenter" data-vertical="-25" data-horizontal="125" data-show-delay="500" data-hide-delay="200" data-show-transition="left" data-hide-transition="right">
                            <img src="images/shape.png" alt="Triangle Shape">
                        </div>
                        
                        <h1 class="sp-layer trd-slider-text-big"
                         data-position="center" data-vertical="-130"  data-horizontal="150"  data-show-transition="left" data-hide-transition="up" data-show-delay="1000" data-hide-delay="200">
                            Proper <span class="trd-highlight-text">Business</span><br> for success
                         </h1>

                        <p class="sp-layer trd-slider-text-small"
                         data-position="center" data-vertical="90" data-horizontal="315" data-show-delay="1500" data-hide-delay="200" data-show-transition="down" data-hide-transition="down">
                            Checkout and enjoy the biggest limited free explan <br>to you how all this mistaken idea
                        </p>

                        <div class="sp-layer trd-hero-header-btns" data-position="center" data-vertical="260" data-horizontal="-45" data-show-delay="2000" data-hide-delay="200" data-show-transition="down" data-hide-transition="up">
                            <a href="#" class="trd-btn">Details</a>
                        </div>
                    </div>
                    <!-- Slides End -->


                    <!-- Slides -->
                    <div class="sp-slide trd-main-slides">
                        <!-- <div class="az-dark-color-overlay"></div> -->
                        <img class="sp-image" src="images/slider-img-2.jpg" alt="Slider Image"/>

                        <div class="sp-layer trd-slider-img trd-mac-img" data-position="bottomCenter" data-vertical="-25" data-horizontal="125" data-show-delay="500" data-hide-delay="200" data-show-transition="left" data-hide-transition="right">
                            <img src="images/shape.png" alt="Triangle Shape">
                        </div>
                        
                        <h1 class="sp-layer trd-slider-text-big"
                         data-position="center" data-vertical="-130"  data-horizontal="310"  data-show-transition="left" data-hide-transition="up" data-show-delay="1000" data-hide-delay="200">
                            Proper <span class="trd-highlight-text">Business</span><br> for success
                         </h1>

                        <p class="sp-layer trd-slider-text-small"
                         data-position="center" data-vertical="90" data-horizontal="470" data-show-delay="1500" data-hide-delay="200" data-show-transition="down" data-hide-transition="down">
                            Checkout and enjoy the biggest limited free explan <br>to you how all this mistaken idea
                        </p>

                        <div class="sp-layer trd-hero-header-btns" data-position="center" data-vertical="260" data-horizontal="100" data-show-delay="2000" data-hide-delay="200" data-show-transition="down" data-hide-transition="up">
                            <a href="#" class="trd-btn">Details</a>
                        </div>
                    </div>
                    <!-- Slides End -->

                </div>
            </div>
        </section>
        <!-- HERO SLIDER SECTION END -->

        <!-- CTA SECTION -->
        <section class="trd-cta-section">
            <div class="container">
                <div class="row">
                    <div class="trd-cta-wrapper">
                        <h3>We help you to create the best <span class="trd-highlight-text">business</span> plan , resource &amp; execution</h3>
                        <a href="#" class="trd-btn trd-btn-alt">Get a Quote</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- CTA SECTION END -->

        <!-- SERVICE SECTION -->
        <section class="trd-service-section trd-section">
            <div class="container">
                <div class="row">
                    <!-- About Section -->
                    <div class="col-md-3 col-sm-3 col-xs-12 trd-about-section">
                        <h1 class="trd-section-tittle">Let’s make <br>a <span class="trd-highlight-text">better</span> business</h1>
                        <p>Checkout and enjoy the bigges free explain to you how mistakn good idea ever made</p>
                        <a href="#" class="trd-details-link">Details</a>
                    </div>
                    <!-- End -->

                    <!-- Icon with text -->
                    <div class="col-md-3 col-sm-3 col-xs-12 trd-icon-top-with-text">
                        <div class="trd-icon-wrapper">
                            <i class="tradeicon-trd-coffee-mug"></i>
                        </div>

                        <div class="trd-details">
                            <h3>
                                <a href="#">Financial Service</a>
                            </h3>

                            <p>Checkout an enjoy the biggest do our explain to you how an demon proper management</p>
                        </div>
                    </div>
                    <!-- End -->

                    <!-- Icon with text -->
                    <div class="col-md-3 col-sm-3 col-xs-12 trd-icon-top-with-text">
                        <div class="trd-icon-wrapper">
                            <i class="tradeicon-trd-trophy"></i>
                        </div>

                        <div class="trd-details">
                            <h3>
                                <a href="#">Best Consultancy</a>
                            </h3>

                            <p>Checkout an enjoy the biggest do our explain to you how an demon proper management</p>
                        </div>
                    </div>
                    <!-- End -->

                    <!-- Icon with text -->
                    <div class="col-md-3 col-sm-3 col-xs-12 trd-icon-top-with-text">
                        <div class="trd-icon-wrapper">
                            <i class="tradeicon-trd-chart-board"></i>
                        </div>

                        <div class="trd-details">
                            <h3>
                                <a href="#">Business Analysis</a>
                            </h3>

                            <p>Checkout an enjoy the biggest do our explain to you how an demon proper management</p>
                        </div>
                    </div>
                    <!-- End -->
                </div>
            </div>
        </section>
        <!-- SERVICE SECTION END -->

        <!-- KEY TO SUCCESS SECTION -->
        <section class="trd-key-success-section trd-section trd-gray-section">
            <div class="container">
                <div class="row">
                    <div class="trd-section-title-wrapper col-md-12 col-sm-12 col-xs-12">
                        <h1 class="trd-section-tittle">Key to <span class="trd-highlight-text">success</span></h1>
                        <a href="#" class="trd-details-link">Check All</a>
                    </div>


                    <div class="trd-key-to-success">
                        
                        <!-- Imagebox with Text -->
                        <div class="col-md-4 col-sm-4 col-xs-12 trd-imagebox-with-text-wrapper appear fadeIn" data-wow-duration="1s" data-wow-delay=".3s">
                            <div class="trd-imagebox-with-text">
                                <div class="trd-image-wrapper">
                                    <img src="images/imgbox-img-1.jpg" alt="Success Image">
                                </div>

                                <div class="trd-imagebox-details">
                                    <h3>
                                        <a href="#">Proper Planing</a>
                                    </h3>
                                    <p>Checkout and enjoy the biggest explain to you how is mistaken</p>
                                </div>
                            </div>
                        </div>
                        <!-- End -->

                        <!-- Imagebox with details -->
                        <div class="col-md-4 col-sm-4 col-xs-12 trd-imagebox-with-text-wrapper appear fadeIn" data-wow-duration="1s" data-wow-delay=".5s">
                            <div class="trd-imagebox-with-text">
                                <div class="trd-image-wrapper">
                                    <img src="images/category-img-3.jpg" alt="Success Image">
                                </div>

                                <div class="trd-imagebox-details">
                                    <h3>
                                        <a href="#">Easy Banking</a>
                                    </h3>
                                    <p>Checkout and enjoy the biggest explain to you how is mistaken</p>
                                </div>
                            </div>
                        </div>
                        <!-- End -->
                        
                        <!-- Imagebox with details -->
                        <div class="col-md-4 col-sm-4 col-xs-12 trd-imagebox-with-text-wrapper appear fadeIn" data-wow-duration="1s" data-wow-delay=".7s">
                            <div class="trd-imagebox-with-text">
                                <div class="trd-image-wrapper">
                                    <img src="images/imgbox-img-3.jpg" alt="Success Image">
                                </div>

                                <div class="trd-imagebox-details">
                                    <h3>
                                        <a href="#">Consulting</a>
                                    </h3>
                                    <p>Checkout and enjoy the biggest explain to you how is mistaken</p>
                                </div>
                            </div>
                        </div>
                        <!-- End -->
                        
                    </div>
                </div>
            </div>
        </section>
        <!-- KEY TO SUCCESS SECTION END -->


        <!-- ABOUT BUSINESS -->
        <section class="trd-about-business-section trd-section">
            <div class="container">
                <div class="row">
                    <!-- About Business -->
                    <div class="col-md-7 col-sm-6 col-xs-12 trd-about-business-wrapper">
                        <div class="trd-chart-wrapper">
                            <canvas id="chart1" height="235"></canvas>
                        </div>

                        <div class="trd-about-details">
                            <h1 class="trd-section-tittle">About <span class="trd-highlight-text">Business</span></h1>

                            <p>Checkout and enjoy the biggest eco claim free explain to you how an mistaken even some others me people can expect better for proper management system are good good idea ever made</p>

                            <a href="#" class="trd-details-link">Details</a>
                        </div>
                    </div>
                    <!-- End -->

                    <!-- Accordion -->
                    <div class="col-md-5 col-sm-6 col-xs-12 trd-accordion-wrapper">
                        <div class="panel-group" id="trd-accordion" role="tablist" aria-multiselectable="true">

                            <!-- Accordion item -->
                            <div class="panel panel-default trd-accordion-items">
                                <!-- header -->
                                <div class="trd-accordion-item-heading panel-heading" role="tab" id="trd-accordion-one">
                                    <a role="button" data-toggle="collapse" data-parent="#trd-accordion" href="#trd-accordion-one-body" aria-expanded="true" aria-controls="trd-accordion-one-body">
                                        <span class="trd-expandable-icon trd-expand">
                                            <i class="fa fa-minus"></i>
                                        </span>
                                        <h3>Market resarch</h3>
                                    </a>
                                </div>
                                <!-- END -->

                                <!-- Details -->
                                <div id="trd-accordion-one-body" class="panel-collapse collapse in trd-accordion-body" role="tabpanel" aria-labelledby="trd-accordion-one">
                                    <div class="panel-body">
                                        <p>Checkout and enjoy the biggest eco claim free explain to you how an mistaken even some others me people</p>
                                    </div>
                                </div>
                                <!-- END -->
                            </div>
                            <!-- End -->

                            <!-- Accordion item -->
                            <div class="panel panel-default trd-accordion-items">
                                <!-- header -->
                                <div class="trd-accordion-item-heading panel-heading" role="tab" id="trd-accordion-two">
                                    <a role="button" data-toggle="collapse" data-parent="#trd-accordion" href="#trd-accordion-two-body" aria-expanded="true" aria-controls="trd-accordion-two-body">
                                        <span class="trd-expandable-icon trd-collapsed">
                                            <i class="fa fa-plus"></i>
                                        </span>
                                        <h3>Investment planning</h3>
                                    </a>
                                </div>
                                <!-- END -->

                                <!-- Details -->
                                <div id="trd-accordion-two-body" class="panel-collapse collapse trd-accordion-body" role="tabpanel" aria-labelledby="trd-accordion-two">
                                    <div class="panel-body">
                                        <p>Checkout and enjoy the biggest eco claim free explain to you how an mistaken even some others me people</p>
                                    </div>
                                </div>
                                <!-- END -->
                            </div>
                            <!-- End -->

                            <!-- Accordion item -->
                            <div class="panel panel-default trd-accordion-items">
                                <!-- header -->
                                <div class="trd-accordion-item-heading panel-heading" role="tab" id="trd-accordion-three">
                                    <a role="button" data-toggle="collapse" data-parent="#trd-accordion" href="#trd-accordion-three-body" aria-expanded="true" aria-controls="trd-accordion-three-body">
                                        <span class="trd-expandable-icon trd-collapsed">
                                            <i class="fa fa-plus"></i>
                                        </span>
                                        <h3>Business growth</h3>
                                    </a>
                                </div>
                                <!-- END -->

                                <!-- Details -->
                                <div id="trd-accordion-three-body" class="panel-collapse collapse trd-accordion-body" role="tabpanel" aria-labelledby="trd-accordion-three">
                                    <div class="panel-body">
                                        <p>Checkout and enjoy the biggest eco claim free explain to you how an mistaken even some others me people</p>
                                    </div>
                                </div>
                                <!-- END -->
                            </div>
                            <!-- End -->

                            <!-- Accordion item -->
                            <div class="panel panel-default trd-accordion-items">
                                <!-- header -->
                                <div class="trd-accordion-item-heading panel-heading" role="tab" id="trd-accordion-four">
                                    <a role="button" data-toggle="collapse" data-parent="#trd-accordion" href="#trd-accordion-four-body" aria-expanded="true" aria-controls="trd-accordion-four-body">
                                        <span class="trd-expandable-icon trd-collapsed">
                                            <i class="fa fa-plus"></i>
                                        </span>
                                        <h3>Analysis</h3>
                                    </a>
                                </div>
                                <!-- END -->

                                <!-- Details -->
                                <div id="trd-accordion-four-body" class="panel-collapse collapse trd-accordion-body" role="tabpanel" aria-labelledby="trd-accordion-four">
                                    <div class="panel-body">
                                        <p>Checkout and enjoy the biggest eco claim free explain to you how an mistaken even some others me people</p>
                                    </div>
                                </div>
                                <!-- END -->
                            </div>
                            <!-- End -->

                        </div>
                    </div>
                    <!-- End -->
                </div>
            </div>
        </section>
        <!-- ABOUT BUSINESS END -->


        <!-- COUNTER SECTION -->
        <section class="trd-counter-section trd-section">
            <div class="container">
                <div class="row">
                    <!-- Counter Item -->
                    <div class="col-md-4 col-sm-4 col-xs-12 trd-counter">
                        <h3 class="trd-count" data-from="0" data-to="540">0</h3>
                        <p>Data &amp; Analysis</p>
                    </div>
                    <!-- End -->

                    <!-- Counter Item -->
                    <div class="col-md-4 col-sm-4 col-xs-12 trd-counter trd-count-client">
                        <h3 class="trd-count" data-from="0" data-to="40">0</h3>
                        <p>Happy Clients</p>
                    </div>
                    <!-- End -->

                    <!-- Counter Item -->
                    <div class="col-md-4 col-sm-4 col-xs-12 trd-counter">
                        <h3 class="trd-count" data-from="0" data-to="670">0</h3>
                        <p>Problem Solved</p>
                    </div>
                    <!-- End -->
                </div>
            </div>
        </section>
        <!-- COUNTER SECTION END -->


        <!-- CUSTOM SECTION -->
        <section class="trd-custom-section">
            <div class="container">
                <div class="row">
                    <div class="trd-custom-sec-details">
                        <h1>We are Expert !</h1>
                        <p>Checkout and enjoy the biggest limited free <span class="trd-highlight-text">explan</span> to you how all this mistaken idea in future is amazing with some awesomeness </p>
                    </div>

                    <div class="trd-custom-sec-img-wrapper">
                        <img src="images/custom-img.jpg" alt="We are Expert">
                    </div>
                </div>
            </div>

            <!-- CLIENT LOGO CAROUSAL -->
            <div class="trd-partners-logo-section">
                <div class="container">
                    <div class="row">
                        <ul>
                            <li><img src="images/client-logo-1.png" alt="Clients Logo"></li>
                            <li><img src="images/client-logo-2.png" alt="Clients Logo"></li>
                            <li><img src="images/client-logo-3.png" alt="Clients Logo"></li>
                            <li><img src="images/client-logo-4.png" alt="Clients Logo"></li>
                            <li><img src="images/client-logo-1.png" alt="Clients Logo"></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- CLIENT LOGO CAROUSAL END -->
        </section>
        <!-- CUSTOM SECTION END -->


        <!-- IMAGEBOX SECTION -->
        <section class="trd-category-section">
            <div class="container-fluid">
                <div class="row">
                    <!-- Imagebox -->
                    <div class="trd-image-with-overlay">
                        <img src="images/category-img-1.jpg" alt="Corporate Ledership">
                        <a href="#" class="trd-img-overlay">
                            <span>Corporate Ledership</span>
                        </a>
                    </div>
                    <!-- End -->

                    <!-- Imagebox -->
                    <div class="trd-image-with-overlay">
                        <img src="images/category-img-2.jpg" alt="Market Analysis">
                        <a href="#" class="trd-img-overlay">
                            <span>Market Analysis</span>
                        </a>
                    </div>
                    <!-- End -->

                    <!-- Imagebox -->
                    <div class="trd-image-with-overlay">
                        <img src="images/category-img-3.jpg" alt="Financial Planning">
                        <a href="#" class="trd-img-overlay">
                            <span>Financial Planning</span>
                        </a>
                    </div>
                    <!-- End -->
                </div>
            </div>
        </section>
        <!-- IMAGEBOX SECTION END -->


        <!-- CLIENT TESTIMONIAL SECTION -->
        <section class="trd-client-testimonial-section trd-section">
            <div class="container">
                <div class="row">
                    <!-- Section Title -->
                    <div class="trd-section-title-wrapper">
                        <h1 class="trd-section-tittle">Client’s <span class="trd-highlight-text">Testimonial</span></h1>
                    </div>
                    <!-- End -->

                    <div id="trd-testimonial" class="trd-testimonial">
                        <!-- Slides -->
                        <div class="trd-testimonial-slides">
                            <div class="trd-testimonial-text">
                                <p>I am really satisfied by their work a <span class="trd-highlight-text">creative</span> design can bring good change to business and personal sectors. Great idea</p>
                            </div>

                            <div class="trd-satisfied-user-info">
                                <div class="trd-user-img-wrapper">
                                    <img src="images/clients-img-1.png" alt="Clients Image">
                                </div>
                                <h3>Adrian</h3>
                                <p>Designer, Finance co</p>
                            </div>
                        </div>
                        <!-- End -->

                        <!-- Slides -->
                        <div class="trd-testimonial-slides">
                            <div class="trd-testimonial-text">
                                <p>I am really satisfied by their work a <span class="trd-highlight-text">creative</span> design can bring good change to business and personal sectors. Great idea</p>
                            </div>

                            <div class="trd-satisfied-user-info">
                                <div class="trd-user-img-wrapper">
                                    <img src="images/clients-img-2.png" alt="Clients Image">
                                </div>
                                <h3>David Paul</h3>
                                <p>Founder, Buz Daily</p>
                            </div>
                        </div>
                        <!-- End -->

                        <!-- Slides -->
                        <div class="trd-testimonial-slides">
                            <div class="trd-testimonial-text">
                                <p>I am really satisfied by their work a <span class="trd-highlight-text">creative</span> design can bring good change to business and personal sectors. Great idea</p>
                            </div>

                            <div class="trd-satisfied-user-info">
                                <div class="trd-user-img-wrapper">
                                    <img src="images/clients-img-3.png" alt="Clients Image">
                                </div>
                                <h3>Natasha</h3>
                                <p>Developer, Gossip</p>
                            </div>
                        </div>
                        <!-- End -->

                         <!-- Slides -->
                        <div class="trd-testimonial-slides">
                            <div class="trd-testimonial-text">
                                <p>I am really satisfied by their work a <span class="trd-highlight-text">creative</span> design can bring good change to business and personal sectors. Great idea</p>
                            </div>

                            <div class="trd-satisfied-user-info">
                                <div class="trd-user-img-wrapper">
                                    <img src="images/clients-img-4.png" alt="Clients Image">
                                </div>
                                <h3>Anida Neo</h3>
                                <p>Product Designer, Go studio</p>
                            </div>
                        </div>
                        <!-- End -->

                        <!-- Slides -->
                        <div class="trd-testimonial-slides">
                            <div class="trd-testimonial-text">
                                <p>I am really satisfied by their work a <span class="trd-highlight-text">creative</span> design can bring good change to business and personal sectors. Great idea</p>
                            </div>

                            <div class="trd-satisfied-user-info">
                                <div class="trd-user-img-wrapper">
                                    <img src="images/clients-img-5.png" alt="Clients Image">
                                </div>
                                <h3>Steve Smith</h3>
                                <p>Founder, Smash Co.</p>
                            </div>
                        </div>
                        <!-- End -->
                    </div>
                </div>
            </div>
        </section>
        <!-- CLIENT TESTIMONIAL SECTION END -->


        <!-- CONTACT SECTION -->
        <section class="trd-contact-section trd-section">
            <!-- Google Map -->
            <div class="trd-map-wrapper">
                <div id="trd-map"></div>
            </div>
            <!-- End -->

            <!-- Contact Form -->
            <div class="trd-contact-form-sec">
                <h1 class="trd-section-tittle">Stay <span class="trd-highlight-text">Connected</span></h1>

                <div class="trd-contact-form-wrapper">
                    <form action="#">
                        <input type="text" name="trd-name" id="trd-name" placeholder="Your name">
                        <input type="email" name="trd-email" id="trd-email" placeholder="Your email">
                        <input type="text" name="trd-subject" id="trd-subject" placeholder="I would like to discuss">
                        <input type="tel" name="trd-phone" id="trd-phone" placeholder="Phone number">

                        <button type="submit" class="trd-btn">Submit</button>
                    </form>
                </div>
            </div>
            <!-- End -->
        </section>
        <!-- CONTACT SECTION END -->
@stop

@section('footer')
<script src="js/vendors/jquery.min.js"></script>

        <!-- Plugins -->
        <script src="js/plugins.js"></script>

        <!-- Bar Chart -->
        <script src="js/barChart.js"></script>

        <!-- GOOGLE MAP -->
        <script src="https://maps.googleapis.com/maps/api/js"></script>
        <script src="js/google-map-init.js"></script>

         <!-- Main JS -->
        <script src="js/main.js"></script>


@stop