        
        <!-- ========================== -->
        <!-- Navigation -->
        <!-- ========================== -->

<header class="header scrolling-header">
            <nav id="nav" class="navbar navbar-default navbar-fixed-top" role="navigation">
                <div class="container relative-nav-container">
                    <a class="toggle-button visible-xs-block" data-toggle="collapse" data-target="#navbar-collapse">
                        <i class="fa fa-navicon"></i>
                    </a>
                    <a class="navbar-brand scroll" href="{{url('/')}}">
                        <img class="normal-logo hidden-xs" src="img/digilynk-logo2.png" alt="logo" />
                        <img class="scroll-logo hidden-xs" src="img/digilynk-logo2.png" alt="logo" />
                        <img class="scroll-logo visible-xs-block" src="img/digilynk-logo2.png" alt="logo" />
                    </a>
                    <ul class="nav navbar-nav navbar-right nav-icons wrap-user-control">
                        <li>
                            <a id="search-open" href="#fakelink"><i class="fa fa-search"></i></a>
                        </li>
                        <li class="open-signup">
                            <a href="#fakelink"><i class="fa fa-user"></i></a>
                        </li>
                    </ul>
                    <div class="navbar-collapse collapse floated" id="navbar-collapse">
                        <ul class="nav navbar-nav navbar-with-inside clearfix navbar-right with-border"> 
                            <li class="active">
                                <a href="{{url('/')}}">home</a>
                            </li>
                            <li>
                                <a href="{{url('about')}}">about</a>
                            </li>
                            <li>
                                <a href="{{url('services')}}">Services</a>
                                <!-- <div class=" wrap-inside-nav">
                                    <div class="inside-col">
                                        <ul class="inside-nav">
                                            <li><a href="portfolio.html">Digital Marketing</a></li>
                                            <li><a href="portfolio-2.html">Content Creation</a></li>
                                            <li><a href="portfolio-3.html">Website Development</a></li>
                                            <li><a href="portfolio-single.html">Ads development</a></li>
                                            
                                        </ul>
                                    </div>
                                </div> -->
                            </li>
              
                            <li>
                                <a href="{{url('contact')}}">contact us</a>
                            </li>
                            <li>
                                <a href="{{url('https://backend.digi-lynk.com/register')}}" class="btn btn-info "> Sign Up</a>
                            </li>
                            <li>
                                <a href="{{url('https://backend.digi-lynk.com/login')}}" class="btn btn-primary "> Log In</a>
                            </li>
                            
                        </ul>
                    </div>

                </div>
                <div class="navbar-search ">
                    <div class="container">
                        <form>
                            <div class="input-group">
                                <input type="text" placeholder="Type your search..." class="form-control" autocomplete="off">
                                <span class="input-group-btn">
                                    <button type="reset" class="btn search-close" id="search-close">
                                        <i class="fa fa-close"></i>
                                    </button>
                                </span>
                            </div>
                        </form>
                    </div>
                </div>
            </nav>
        </header><!--./navigation -->