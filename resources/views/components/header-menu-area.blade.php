<header class="header_area">
    <div class="top_menu row m0">
        <div class="container">
            <div class="float-left">
                <ul class="left_side">
                    <li>
                        <a href="#">
                            <i class="fa fa-facebook-f"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-twitter"></i>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="float-right">
                <ul class="right_side">
                    <li>
                        <a href="#">
                            <i class="lnr lnr-phone-handset"></i>
                            (61) 3003-1403
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="lnr lnr-envelope"></i>
                            emergency@lifeplus.com
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="main_menu">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <a class="navbar-brand logo_h" href="{{url('/')}}">
                    <img src="{{asset('template/img/medicPlus-logo.png')}}" alt="" style="max-height: 80px">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                    <div class="row ml-0 w-100">
                        <div class="col-lg-12 pr-0">
                            <ul class="nav navbar-nav center_nav pull-right">
                                <li class="nav-item active">
                                    <a class="nav-link" href="#home">Home</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="#services-contact">Contact</a>
                                </li>

                                @auth
                                    <li class="nav-item submenu dropdown">
                                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="false" aria-expanded="false">{{isset(Auth::user()->name)}}</a>
                                        <ul class="dropdown-menu">
                                            <li class="nav-item">
                                                <a class="nav-link" href="services.html">Logout</a>
                                            </li>

                                        </ul>
                                    </li>
                                @endauth

                                @guest
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Login</a>
                                    </li>
                                @endguest


                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</header>