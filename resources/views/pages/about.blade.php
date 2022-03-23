@extends('main')

@section('content')

        <!-- ========================== -->
        <!-- ABOUT - HEADER -->
        <!-- ========================== -->
        <section class="top-header about-header with-bottom-effect transparent-effect dark">
            <div class="bottom-effect"></div>
            <div class="header-container">	
                <div class="header-title wow fadeInUp"> 
                    <div class="header-icon"><span class="icon icon-Wheelbarrow"></span></div>
                    <div class="title">about us</div>
                    <em>Digylink in a Nutshell</em>
                </div>
            </div><!--container-->
        </section>  

        <!-- ========================== -->
        <!-- ABOUT - LAPTOPS -->
        <!-- ========================== -->
        <!-- <section class="laptops-section">
            <div class="container">
                <div class="laptops text-center">
                    <img src="img/laptop2.png" alt="" class="img-responsive" />
                </div>
            </div>
        </section> -->

        <!-- ========================== -->
        <!-- ABOUT - LATEST NEWS -->
        <!-- ========================== -->
        <section class="latest-news-section clearfix">
            <div class="container">
                <div class="section-heading">
                    <div class="section-title">about Digilynk</div>
                    <div class="section-subtitle">We love it when you get to know about us</div>
                    <div class="design-arrow"></div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-4 wow fadeInUp">
                        <div class="news-item">
                            <div class="image">
                                <a href="#">
                                    <img src="img/images/About.jpg" alt="" />
                                    <div class="image-content">
                                        <!-- <span class="read-more">read more</span>   -->
                                    </div>
                                </a> 
                            </div> 
                            <div class="user-avatar clearfix">
                            </div>
                            <div class="news-body">
                                <h5>Who we are</h5>
                                <p>
                                    Digilynk is a Kenyan Based Branding, Digital Marketing & Business Development Agency. We constantly craft creative strategies to get your business known to your portential customers and enable it get the customer traffic it deserves.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 wow fadeInUp">
                        <div class="news-item">
                            <div class="image">
                                <a href="#">
                                    <img src="img/images/philosophy.jpg" alt="" />
                                    <div class="image-content">
                                        <!-- <span class="read-more">read more</span>   -->
                                    </div>
                                </a> 
                            </div> 
                            <div class="user-avatar clearfix">
                            </div>
                            <div class="news-body">
                                <h5>our philosophy</h5>
                                <p>
                                    We are dedicated to diligently serve our customers ensuring we give then quality services and always be available to take care of any glitches that might arise along the way.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 wow fadeInUp">
                        <div class="news-item">
                            <div class="image">
                                <a href="#">
                                    <img src="img/images/mission.jpg" alt="" />
                                    <div class="image-content">
                                        <!-- <span class="read-more">read more</span>   -->
                                    </div>
                                </a> 
                            </div> 
                            <div class="user-avatar clearfix">
                            </div>
                            <div class="news-body">
                                <h5>mission & vision</h5>
                                <p>
                                To create the best (business to market) marketing platform for all relevant types of businesses. <br>
                                To be the first choice, one stop shop marketing organization in Kenya and Africa 
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ========================== -->
        <!-- ABOUT - ACHIEVEMENTS -->
        <!-- ========================== -->
        <section class="achievements-section with-bottom-effect dark dark-strong">
            <div class="bottom-effect"></div>
            <div class="container dark-content">
                <div class="row list-achieve">
                    <div class="col-md-3 col-sm-3 col-xs-6 wow zoomIn" data-wow-delay="0.5s">
                        <article>
                            <div class="achieve-item">
                                <div class="achieve-icon">
                                    <span class="icon icon-Wallet"></span>
                                </div>
                                <div class="count">21</div>
                                <div class="name">projects delivered</div>
                            </div>
                        </article>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-6 wow zoomIn" data-wow-delay="1.5s">
                        <article>
                            <div class="achieve-item">
                                <div class="achieve-icon">
                                    <span class="icon icon-Cup"></span>
                                </div>
                                <div class="count">150+</div>
                                <div class="name"> Ambassadors</div>
                            </div>
                        </article>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-6 wow zoomIn" data-wow-delay="2.5s">
                        <article>
                            <div class="achieve-item">
                                <div class="achieve-icon">
                                    <span class="icon icon-Like"></span>
                                </div>
                                <div class="count">100</div>
                                <div class="name">happy clients</div>
                            </div>
                        </article>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-6 wow zoomIn" data-wow-delay="3.5s">
                        <article>
                            <div class="achieve-item">
                                <div class="achieve-icon">
                                    <span class="icon icon-Users"></span>
                                </div>
                                <div class="count">10</div>
                                <div class="name">employees working</div>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </section>

        <!-- ========================== -->
        <!-- ABOUT - TEAM -->
        <!-- ========================== -->
        <!-- <section class="team-section with-bottom-effect">
            <div class="bottom-effect"></div>
            <div class="container">
                <div class="section-heading">
                    <div class="section-title">experienced team</div>
                    <div class="section-subtitle">Lorem ipsum dolor amet consectetur adipisic elit</div>
                    <div class="design-arrow"></div>
                </div>
            </div>
            <div class="container">
                <div class="wrap-team-slider"> 
                    <div class="prev-btn"><span class="icon invertX icon-Goto"></span></div>
                    <div class="next-btn"><span class="icon icon-Goto"></span></div>
                    <div class="team-slider enable-stick-slider" data-slick='{"slidesToShow": 3, "slidesToScroll": 1, "prevArrow" : ".prev-btn", "nextArrow": ".next-btn" }'>
                        <div class="slide-item">
                            <div class="image">
                                <img src="img/team/member-1.png" alt="" />
                            </div>
                            <div class="slide-description">
                                <div class="member-info">
                                    <div class="name">dan tarkist</div>
                                    <div class="position">Creative Director</div>
                                </div>
                                <div class="contacts">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                        <li><a href="#"><i class="fa fa-envelope"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="slide-item">
                            <div class="image">
                                <img src="img/team/member-3.png" alt="" />
                            </div>
                            <div class="slide-description">
                                <div class="member-info">
                                    <div class="name">sarina ken</div>
                                    <div class="position">Creative Director</div>
                                </div>
                                <div class="contacts">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                        <li><a href="#"><i class="fa fa-envelope"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="slide-item">
                            <div class="image">
                                <img src="img/team/member-2.png" alt="" />
                            </div>
                            <div class="slide-description">
                                <div class="member-info">
                                    <div class="name">ana mes</div>
                                    <div class="position">Product Manager</div>
                                </div>
                                <div class="contacts">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                        <li><a href="#"><i class="fa fa-envelope"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div> 
                        <div class="slide-item">
                            <div class="image">
                                <img src="img/team/member-1.png" alt="" />
                            </div>
                            <div class="slide-description">
                                <div class="member-info">
                                    <div class="name">dan tarkist</div>
                                    <div class="position">Creative Director</div>
                                </div>
                                <div class="contacts">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                        <li><a href="#"><i class="fa fa-envelope"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="slide-item">
                            <div class="image">
                                <img src="img/team/member-3.png" alt="" />
                            </div>
                            <div class="slide-description">
                                <div class="member-info">
                                    <div class="name">sarina ken</div>
                                    <div class="position">Creative Director</div>
                                </div>
                                <div class="contacts">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                        <li><a href="#"><i class="fa fa-envelope"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </section> -->


        <!-- ========================== -->
        <!-- ABOUT - HISTORY -->
        <!-- ========================== -->
        <!-- <section class="history-section">
            <div class="container">
                <div class="section-heading">
                    <div class="section-title">company history</div>
                    <div class="section-subtitle">Lorem ipsum dolor amet consectetur adipisic elit</div>
                    <div class="design-arrow"></div>
                </div>
            </div>

            <div class="wrap-timeline">
                <div class="container">
                    <div class="row top-row">
                        <div class="col-md-12">
                            <div class="time-title" id="timel"> <br />
                                <div class="round-ico"><span class="icon icon-Flag"></span></div>
                            </div>
                        </div>
                    </div>
                    <div class="row left-row">
                        <div class="round-ico little"></div>
                        <div class="col-md-6 col-sm-6 time-item wow fadeInUp" data-wow-duration="2s" >
                            <div class="date">October 2015</div>
                            <div class="title">5 New Projects Launched</div>
                            <p>Amco laboris nisi ut aliquip xea commodo consequt. Duis aute irure
                                dolor reprehenderit voluptate velit esse cillum dolore fugiat lore
                                ipsum dolor sit amet consectetur adipisicing elit sed do </p>
                        </div>
                    </div>
                    <div class="row right-row">
                        <div class="round-ico big"></div>
                        <div class="col-md-6 col-sm-6"></div>
                        <div class="col-md-6 col-sm-6 time-item wow fadeInUp" data-wow-duration="2s" >
                            <div class="date">September 2015</div>
                            <div class="title">Celebrating 10 years of Creativity</div>
                            <div class="time-image">
                                <img src="img/img10.jpg" alt="" />
                            </div>
                            <p>Amco laboris nisi ut aliquip xea commodo consequt. Duis aute irure
                                dolor reprehenderit voluptate velit esse cillum</p>
                        </div>
                    </div>
                    <div class="row left-row">
                        <div class="round-ico little"></div>
                        <div class="col-md-6 col-sm-6 time-item wow fadeInUp" data-wow-duration="2s" >
                            <div class="date">August 2015</div>
                            <div class="title">New Jobs Opening : Apply Now!</div>
                            <p>Amco laboris nisi ut aliquip xea commodo consequt. Duis aute irure
                                dolor reprehenderit voluptate velit esse cillum dolore fugiat lore
                                ipsum dolor sit amet consectetur adipisicing elit sed do </p>
                        </div>
                    </div>
                    <div class="plus">
                        <a href="#" class="plus-ico">+</a>
                    </div>
                </div>
            </div>
        </section> -->

        <!-- ========================== -->
        <!-- ABOUT - VIDEO SECTION -->
        <!-- ========================== -->
        <!-- <section class="video-section with-bottom-effect dark dark-strong">
            <div class="video-play" id="video-play" data-property="{videoURL:'https://www.youtube.com/watch?v=MFQ1CBz4sv4',containment:'#video-play',autoPlay:true, mute:true, startAt:0, opacity:1}"></div>
            <div class="bottom-effect"></div>
            <div class="container dark-content">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <div class="title">Watch our Intro Video</div>
                        <em>Lorem ipsum dolor sit amet consectetur elit</em>
                        <button type="button" class="btn-play"></button>
                        <div class="duration">Duration : <span>4:35</span></div>
                    </div>
                </div>
            </div>
        </section> -->

      
        <!-- ========================== -->
        <!-- ABOUT - CREATE IDEAS -->
        <!-- ========================== -->
        <section class="create-ideas-section with-icon with-top-effect clearfix">
            <div class="section-icon"><span class="icon icon-Umbrella"></span></div>
            <div class="container">
                <div class="section-heading">
                    <div class="section-title">we create beautiful brands</div>
                    <div class="section-subtitle">Talk to us today and have that project you have well implimented</div>
                    <div class="design-arrow"></div>
                </div>
            </div>
            <div class="container">
                <div class="idea-image">
                    <img src="img/images/1.jpg" alt="" />
                </div>
            </div>
        </section>

@endsection