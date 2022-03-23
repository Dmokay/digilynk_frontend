@extends('main')

@section('content')

<!-- ========================== -->
        <!-- CONTACT - HEADER -->
        <!-- ========================== -->
        <section class="top-header countact-us-header with-bottom-effect transparent-effect dark dark-strong">
            <div class="bottom-effect"></div>
            <div class="header-container">	
                <div class="header-title">
                    <div class="header-icon"><span class="icon icon-Wheelbarrow"></span></div>
                    <div class="title">contact us</div>
                    <em>Get in touch with us</em>
                </div>
            </div><!--container-->
        </section>  

        <section class="countact-us-section contact-us-reverse-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-6">
                        <div class="row">
                            <div class="col-md-12 col-sm-12">
                                <div class="contact-block">

                                    <div class="contact-block-heading">
                                        <h3>keep in touch</h3>
                                        <em>We are here for you, talk to us anytime</em>
                                        <p>Our customer service agents are available around the clock to handle any issues you may have.</p>
                                    </div>
                                    <div class="row contacts-list">
                                        <div class="col-md-12 clearfix">
                                            <div class="type-info pull-left">
                                                <i class="icon icon-House"></i>
                                                address
                                            </div>
                                            <div class="info pull-right text-right">
                                                <p class="no-margin">Nairobi, Along Waiyaki way</p>
                                            </div>
                                        </div>
                                        <div class="col-md-12 clearfix">
                                            <div class="type-info pull-left">
                                                <i class="icon icon-Phone2"></i>
                                                phone
                                            </div>
                                            <div class="info pull-right text-right">
                                                <p class="no-margin">+254 712 753 255</p>
                                            </div>
                                        </div>
                                        <div class="col-md-12 clearfix">
                                            <div class="type-info pull-left">
                                                <i class="icon icon-Mail"></i>
                                                email
                                            </div>
                                            <div class="info pull-right text-right">
                                                <p class="no-margin">support@digi-lynk.com</p>
                                            </div>
                                        </div>
                                        <div class="col-md-12 clearfix">
                                            <div class="type-info pull-left">
                                                <i class="icon icon-Mouse"></i>
                                                Live Chat
                                            </div>
                                            <div class="info pull-right text-right">
                                                <p class="no-margin">digi-lynk.live</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-7 col-md-offset-1 col-sm-6">
                        <div class="contact-form">
                            <div class="form-heading">
                                <h5>send a message</h5>
                            </div>
                            <form method="post" action="sendEmail.php" name="contact-form" id="contact-form">
                                <div id="response"></div>
                                <div class="row"> 
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" name="firstName" id="firstName"  placeholder="YOUR NAME" class="form-control" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" name="lastName" id="lastName" placeholder="YOUR NAME" class="form-control" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" name="phone" id="phone" placeholder="PHONE NO." class="form-control" />
                                        </div>
                                    </div> 
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" name="email" required id="email" placeholder="EMAIL" class="form-control" />
                                        </div>
                                    </div> 
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="text" name="subject" required id="subject" placeholder="SUBJECT" class="form-control" />
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <textarea class="form-control" name="message" id="message" placeholder="MESSAGE"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group"> 
                                            <button type="submit" id="submit" class="btn btn-default">send message</button>
                                        </div>
                                    </div> 
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="socials-list">
                            <div class="row">
                                <div class="col-md-2 col-sm-4">
                                    <a href="#" class="social-item facebook-item">facebook</a>
                                </div>
                                <div class="col-md-2 col-sm-4">
                                    <a href="{{url('https://twitter.com/DIGILYNK1?s=20')}}" target="_blank" class="social-item twitter-item">twitter</a>
                                </div>
                                <div class="col-md-2 col-sm-4">
                                    <a href="#" class="social-item google-plus-item"> Youtube</a>
                                </div>
                                <div class="col-md-2 col-sm-4">
                                    <a href="#" class="social-item linkedin-item">linkedin</a>
                                </div>
                                <div class="col-md-2 col-sm-4">
                                    <a href="{{url('https://www.instagram.com/invites/contact/?i=4ffgu6qzzozk&utm_content=mq0rvmy')}}" target="_blank" class="social-item pinterest-item">Instagram</a>
                                </div>
                                <div class="col-md-2 col-sm-4">
                                    <a href="#" class="social-item behance-item">Tiktok</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ========================== -->
        <!-- CONTACT 2 - MAP -->
        <!-- ========================== -->
        <!-- <section class="contact-map-section">
            <div class="map" id="bigMap"></div>
        </section> -->

@endsection