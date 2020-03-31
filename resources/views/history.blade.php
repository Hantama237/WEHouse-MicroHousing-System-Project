@extends('master')
@section('content')



    <!-- PAGE WRAP -->
    <div id="page-wrap">
        <!-- PRELOADER -->
        <div class="preloader"></div>
        <!-- END / PRELOADER -->

        
        <!-- HEADER PAGE -->
        <header id="header-page">
            <div class="header-page__inner">
                <div class="container">
                    <!-- LOGO -->
                    <div class="logo">
                        <a href="index.html"><img src="images/logo.png" alt=""></a>
                    </div>
                    <!-- END / LOGO -->
                    
                   <!-- NAVIGATION -->
                   <nav class="navigation awe-navigation-hamburger">
                    <ul class="menu-list">
                        <li class="menu-item-has-children current-menu-parent">
                            <a href="index.html">Information</a>
                            <ul class="sub-menu">
                                <li><a href="index.html">Account</a></li>
                                <li><a href="index2.html">Applicant</a></li>
                                <li class="current-menu-item"><a href="index3.html">House Officer</a></li>
                            </ul>
                        </li>
                      
                    </ul>
                </nav>
                <!-- END / NAVIGATION -->
               
                    
                    <!-- SEARCH BOX -->
                    <div class="search-box">
                        <span class="searchtoggle"><i class="awe-icon awe-icon-search"></i></span>
                        <form class="form-search">
                            <div class="form-item">
                                <input type="text" value="Search &amp; hit enter">
                            </div>
                        </form>
                    </div>
                    <!-- END / SEARCH BOX -->


                    <!-- TOGGLE MENU RESPONSIVE -->
                    <a class="toggle-menu-responsive" href="#">
                        <div class="hamburger">
                            <span class="item item-1"></span>
                            <span class="item item-2"></span>
                            <span class="item item-3"></span>
                        </div>
                    </a>
                    <!-- END / TOGGLE MENU RESPONSIVE -->
                </div>
            </div>
        </header>
        <!-- END / HEADER PAGE -->

        <!-- HEADING PAGE -->
        <section class="awe-parallax category-heading-section-demo">
            <div class="awe-overlay"></div>
            <div class="container">
                <div class="category-heading-content category-heading-content__2 text-uppercase">
                  
                   <H3>Ads space</H3>
                </div>
            </div>
        </section>
        <!-- END / HEADING PAGE -->

        
        <section class="filter-page">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="page-top">
                            <select class="awe-select">
                                <option>Sort by Date</option>
                                <option>Sort by Price</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-9 col-md-push-3">
                        <div class="filter-page__content">
                            <div class="filter-item-wrapper">
                                <!-- ITEM -->
                                <div class="flight-item">
                                    <div class="item-media">
                                        <div class="image-cover">
                                            <img src="images/flight/1.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="item-body">
                                        <div class="item-title">
                                            <h2>
                                                <a href="flight-detail.html">Lufthansa : Hanoi - NYC</a>
                                            </h2>
                                        </div>
                                        <table class="item-table">
                                            <thead>
                                                <tr>
                                                    <th class="route">Route</th>
                                                    <th class="depart">Depart</th>
                                                    <th class="arrive">Arrive</th>
                                                    <th class="duration">Duration</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="route">
                                                        <ul>
                                                            <li>HAN <i class="awe-icon awe-icon-arrow-right"></i></li>
                                                            <li>SVO <i class="awe-icon awe-icon-arrow-right"></i></li>
                                                            <li>JFK <i class="awe-icon awe-icon-arrow-right"></i></li>
                                                        </ul>
                                                    </td>
                                                    <td class="depart">
                                                        <span>10:25</span>
                                                        <span class="date">14 Feb</span>
                                                    </td>
                                                    <td class="arrive">
                                                        <span>12:30</span>
                                                    </td>
                                                    <td class="duration">
                                                        <span>38h5m</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="route">
                                                        <ul>
                                                            <li>JFK <i class="awe-icon awe-icon-arrow-right"></i></li>
                                                            <li>SVO <i class="awe-icon awe-icon-arrow-right"></i></li>
                                                            <li>HAN <i class="awe-icon awe-icon-arrow-right"></i></li>
                                                        </ul>
                                                    </td>
                                                    <td class="depart">
                                                        <span>10:25</span>
                                                    </td>
                                                    <td class="arrive">
                                                        <span>12:30</span>
                                                        <span class="date">15 MAr</span>
                                                    </td>
                                                    <td class="duration">
                                                        <span>38h5m</span>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="item-price-more">
                                        <div class="price">
                                            <span class="amount">$5,923</span>
                                            exclude Fare
                                        </div>
                                        <a href="flight-detail.html" class="awe-btn">Book now</a>
                                    </div>
                                </div>
                                <!-- END / ITEM -->

                                <!-- ITEM -->
                                <div class="flight-item">
                                    <div class="item-media">
                                        <div class="image-cover">
                                            <img src="images/flight/2.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="item-body">
                                        <div class="item-title">
                                            <h2>
                                                <a href="flight-detail.html">Qatar : Hanoi - NYC</a>
                                            </h2>
                                        </div>
                                        <table class="item-table">
                                            <thead>
                                                <tr>
                                                    <th class="route">Route</th>
                                                    <th class="depart">Depart</th>
                                                    <th class="arrive">Arrive</th>
                                                    <th class="duration">Duration</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="route">
                                                        <ul>
                                                            <li>HAN <i class="awe-icon awe-icon-arrow-right"></i></li>
                                                            <li>SVO <i class="awe-icon awe-icon-arrow-right"></i></li>
                                                            <li>JFK <i class="awe-icon awe-icon-arrow-right"></i></li>
                                                        </ul>
                                                    </td>
                                                    <td class="depart">
                                                        <span>10:25</span>
                                                        <span class="date">14 Feb</span>
                                                    </td>
                                                    <td class="arrive">
                                                        <span>12:30</span>
                                                    </td>
                                                    <td class="duration">
                                                        <span>38h5m</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="route">
                                                        <ul>
                                                            <li>JFK <i class="awe-icon awe-icon-arrow-right"></i></li>
                                                            <li>SVO <i class="awe-icon awe-icon-arrow-right"></i></li>
                                                            <li>HAN <i class="awe-icon awe-icon-arrow-right"></i></li>
                                                        </ul>
                                                    </td>
                                                    <td class="depart">
                                                        <span>10:25</span>
                                                    </td>
                                                    <td class="arrive">
                                                        <span>12:30</span>
                                                        <span class="date">15 MAr</span>
                                                    </td>
                                                    <td class="duration">
                                                        <span>38h5m</span>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="item-price-more">
                                        <div class="price">
                                            <span class="amount">$5,923</span>
                                            exclude Fare
                                        </div>
                                        <a href="flight-detail.html" class="awe-btn">Book now</a>
                                    </div>
                                </div>
                                <!-- END / ITEM -->

                                <!-- ITEM -->
                                <div class="flight-item">
                                    <div class="item-media">
                                        <div class="image-cover">
                                            <img src="images/flight/3.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="item-body">
                                        <div class="item-title">
                                            <h2>
                                                <a href="flight-detail.html">Cathay Pacific : Hanoi - NYC</a>
                                            </h2>
                                        </div>
                                        <table class="item-table">
                                            <thead>
                                                <tr>
                                                    <th class="route">Route</th>
                                                    <th class="depart">Depart</th>
                                                    <th class="arrive">Arrive</th>
                                                    <th class="duration">Duration</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="route">
                                                        <ul>
                                                            <li>HAN <i class="awe-icon awe-icon-arrow-right"></i></li>
                                                            <li>SVO <i class="awe-icon awe-icon-arrow-right"></i></li>
                                                            <li>JFK <i class="awe-icon awe-icon-arrow-right"></i></li>
                                                        </ul>
                                                    </td>
                                                    <td class="depart">
                                                        <span>10:25</span>
                                                        <span class="date">14 Feb</span>
                                                    </td>
                                                    <td class="arrive">
                                                        <span>12:30</span>
                                                        <span class="date">14 Feb</span>
                                                    </td>
                                                    <td class="duration">
                                                        <span>38h5m</span>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="item-price-more">
                                        <div class="price">
                                            <span class="amount">$5,923</span>
                                            exclude Fare
                                        </div>
                                        <a href="flight-detail.html" class="awe-btn">Book now</a>
                                    </div>
                                </div>
                                <!-- END / ITEM -->

                                <!-- ITEM -->
                                <div class="flight-item">
                                    <div class="item-media">
                                        <div class="image-cover">
                                            <img src="images/flight/1.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="item-body">
                                        <div class="item-title">
                                            <h2>
                                                <a href="flight-detail.html">Qatar : Hanoi - NYC</a>
                                            </h2>
                                        </div>
                                        <table class="item-table">
                                            <thead>
                                                <tr>
                                                    <th class="route">Route</th>
                                                    <th class="depart">Depart</th>
                                                    <th class="arrive">Arrive</th>
                                                    <th class="duration">Duration</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="route">
                                                        <ul>
                                                            <li>HAN <i class="awe-icon awe-icon-arrow-right"></i></li>
                                                            <li>SVO <i class="awe-icon awe-icon-arrow-right"></i></li>
                                                            <li>JFK <i class="awe-icon awe-icon-arrow-right"></i></li>
                                                        </ul>
                                                    </td>
                                                    <td class="depart">
                                                        <span>10:25</span>
                                                        <span class="date">14 Feb</span>
                                                    </td>
                                                    <td class="arrive">
                                                        <span>12:30</span>
                                                    </td>
                                                    <td class="duration">
                                                        <span>38h5m</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="route">
                                                        <ul>
                                                            <li>JFK <i class="awe-icon awe-icon-arrow-right"></i></li>
                                                            <li>SVO <i class="awe-icon awe-icon-arrow-right"></i></li>
                                                            <li>HAN <i class="awe-icon awe-icon-arrow-right"></i></li>
                                                        </ul>
                                                    </td>
                                                    <td class="depart">
                                                        <span>10:25</span>
                                                    </td>
                                                    <td class="arrive">
                                                        <span>12:30</span>
                                                        <span class="date">15 MAr</span>
                                                    </td>
                                                    <td class="duration">
                                                        <span>38h5m</span>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="item-price-more">
                                        <div class="price">
                                            <span class="amount">$5,923</span>
                                            exclude Fare
                                        </div>
                                        <a href="flight-detail.html" class="awe-btn">Book now</a>
                                    </div>
                                </div>
                                <!-- END / ITEM -->

                                <!-- ITEM -->
                                <div class="flight-item">
                                    <div class="item-media">
                                        <div class="image-cover">
                                            <img src="images/flight/2.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="item-body">
                                        <div class="item-title">
                                            <h2>
                                                <a href="flight-detail.html">Cathay Pacific : Hanoi - NYC</a>
                                            </h2>
                                        </div>
                                        <table class="item-table">
                                            <thead>
                                                <tr>
                                                    <th class="route">Route</th>
                                                    <th class="depart">Depart</th>
                                                    <th class="arrive">Arrive</th>
                                                    <th class="duration">Duration</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="route">
                                                        <ul>
                                                            <li>HAN <i class="awe-icon awe-icon-arrow-right"></i></li>
                                                            <li>SVO <i class="awe-icon awe-icon-arrow-right"></i></li>
                                                            <li>JFK <i class="awe-icon awe-icon-arrow-right"></i></li>
                                                        </ul>
                                                    </td>
                                                    <td class="depart">
                                                        <span>10:25</span>
                                                        <span class="date">14 Feb</span>
                                                    </td>
                                                    <td class="arrive">
                                                        <span>12:30</span>
                                                    </td>
                                                    <td class="duration">
                                                        <span>38h5m</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="route">
                                                        <ul>
                                                            <li>JFK <i class="awe-icon awe-icon-arrow-right"></i></li>
                                                            <li>SVO <i class="awe-icon awe-icon-arrow-right"></i></li>
                                                            <li>HAN <i class="awe-icon awe-icon-arrow-right"></i></li>
                                                        </ul>
                                                    </td>
                                                    <td class="depart">
                                                        <span>10:25</span>
                                                    </td>
                                                    <td class="arrive">
                                                        <span>12:30</span>
                                                        <span class="date">15 MAr</span>
                                                    </td>
                                                    <td class="duration">
                                                        <span>38h5m</span>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="item-price-more">
                                        <div class="price">
                                            <span class="amount">$5,923</span>
                                            exclude Fare
                                        </div>
                                        <a href="flight-detail.html" class="awe-btn">Book now</a>
                                    </div>
                                </div>
                                <!-- END / ITEM -->
                            </div>


                            <!-- PAGINATION -->
                            <div class="page__pagination">
                                <span class="pagination-prev"><i class="fa fa-caret-left"></i></span>
                                <span class="current">1</span>
                                <a href="#">2</a>
                                <a href="#">3</a>
                                <a href="#">4</a>
                                <a href="#" class="pagination-next"><i class="fa fa-caret-right"></i></a>
                            </div>
                            <!-- END / PAGINATION -->
                        </div>
                    </div>
                    
                </div>
            </div>
        </section>



        <!-- FOOTER PAGE -->
        <footer id="footer-page">
            <div class="container">
                <div class="row">
                    <!-- WIDGET -->
                    <div class="col-md-3">
                        <div class="widget widget_contact_info">
                            <div class="widget_background">
                                <div class="widget_background__half">
                                    <div class="bg"></div>
                                </div>
                                <div class="widget_background__half">
                                    <div class="bg"></div>
                                </div>
                            </div>
                            <div class="logo">
                                <img src="images/logo-footer.png" alt="">
                            </div>
                            <div class="widget_content">
                              
                            </div>
                        </div>
                    </div>
                    <!-- END / WIDGET -->

                    <!-- WIDGET -->
                    <div class="col-md-2">
                        <div class="widget widget_about_us">
                            <h3>About Us</h3>
                            <div class="widget_content">
                            </div>
                        </div>
                    </div>
                    <!-- END / WIDGET -->

                    <!-- WIDGET -->
                    <div class="col-md-2">
                        <div class="widget widget_categories">
                            <h3>Categiries</h3>
                            <ul>
                                
                            </ul>
                        </div>
                    </div>
                    <!-- END / WIDGET -->

                    

                    
                </div>
                <div class="copyright">
                    <p>©2015 GOFAR travel™ All rights reserved.</p>
                </div>
            </div>
        </footer>
        <!-- END / FOOTER PAGE -->

    </div>
    <!-- END / PAGE WRAP -->

    <!-- LOAD JQUERY -->
    <script type="text/javascript" src="js/lib/jquery-1.11.2.min.js"></script>
    <script type="text/javascript" src="js/lib/masonry.pkgd.min.js"></script>
    <script type="text/javascript" src="js/lib/jquery.parallax-1.1.3.js"></script>
    <script type="text/javascript" src="js/lib/jquery.owl.carousel.js"></script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?v=3"></script>
    <script type="text/javascript" src="js/lib/md-map-extend.js"></script>
    <script type="text/javascript" src="js/lib/jquery.magnific-popup.min.js"></script>
    <script type="text/javascript" src="js/lib/perfect-scrollbar.min.js"></script>
    <script type='text/javascript' src="js/lib/jquery-ui.js"></script>
    <script type="text/javascript" src="js/scripts.js"></script>

@endsection