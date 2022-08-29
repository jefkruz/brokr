<header id="header" class="header-effect-shrink" data-plugin-options="{'stickyEnabled': true, 'stickyEffect': 'shrink', 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': false, 'stickyChangeLogo': true, 'stickyStartAt': 120, 'stickyHeaderContainerHeight': 70}">
    <div class="header-body border-top-0">
        <div class="header-top">
            <div class="container">
                <div class="header-row py-2">
                    <div class="header-column justify-content-start">
                        <div class="header-row">
                            <nav class="header-nav-top">
                                <ul class="nav nav-pills">
                                     <li class="nav-item nav-item-left-border nav-item-left-border-remove nav-item-left-border-sm-show">
   <select class="form-select form-control" onchange="doGTranslate(this);"><option class='form-control' value="">Select Language</option><option value="en|af">Afrikaans</option><option value="en|sq">Albanian</option><option value="en|ar">Arabic</option><option value="en|hy">Armenian</option><option value="en|az">Azerbaijani</option><option value="en|eu">Basque</option><option value="en|be">Belarusian</option><option value="en|bg">Bulgarian</option><option value="en|ca">Catalan</option><option value="en|zh-CN">Chinese (Simplified)</option><option value="en|zh-TW">Chinese (Traditional)</option><option value="en|hr">Croatian</option><option value="en|cs">Czech</option><option value="en|da">Danish</option><option value="en|nl">Dutch</option><option value="en|en">English</option><option value="en|et">Estonian</option><option value="en|tl">Filipino</option><option value="en|fi">Finnish</option><option value="en|fr">French</option><option value="en|gl">Galician</option><option value="en|ka">Georgian</option><option value="en|de">German</option><option value="en|el">Greek</option><option value="en|ht">Haitian Creole</option><option value="en|iw">Hebrew</option><option value="en|hi">Hindi</option><option value="en|hu">Hungarian</option><option value="en|is">Icelandic</option><option value="en|id">Indonesian</option><option value="en|ga">Irish</option><option value="en|it">Italian</option><option value="en|ja">Japanese</option><option value="en|ko">Korean</option><option value="en|lv">Latvian</option><option value="en|lt">Lithuanian</option><option value="en|mk">Macedonian</option><option value="en|ms">Malay</option><option value="en|mt">Maltese</option><option value="en|no">Norwegian</option><option value="en|fa">Persian</option><option value="en|pl">Polish</option><option value="en|pt">Portuguese</option><option value="en|ro">Romanian</option><option value="en|ru">Russian</option><option value="en|sr">Serbian</option><option value="en|sk">Slovak</option><option value="en|sl">Slovenian</option><option value="en|es">Spanish</option><option value="en|sw">Swahili</option><option value="en|sv">Swedish</option><option value="en|th">Thai</option><option value="en|tr">Turkish</option><option value="en|uk">Ukrainian</option><option value="en|ur">Urdu</option><option value="en|vi">Vietnamese</option><option value="en|cy">Welsh</option><option value="en|yi">Yiddish</option></select><div id="google_translate_element2"></div>

                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="header-column justify-content-end">
                        <div class="header-row mt-2">
                            <ul class="header-extra-info d-flex align-items-center">
                                <li>
                                    <div class="header-extra-info-icon">
                                        <i class="fab fa-whatsapp text-color-primary text-4 position-relative bottom-1"></i>
                                    </div>
                                    <div class="header-extra-info-text">
                                        <label>CALL US NOW</label>
                                        <strong><a href="tel:+234 912 544 3001" class="text-decoration-none text-color-hover-primary">+234 912 544 3001</a></strong>
                                    </div>
                                </li>
                                <li class="d-none d-sm-inline-flex">
                                    <div class="header-extra-info-icon">
                                        <i class="far fa-envelope text-color-primary text-4 position-relative bottom-2"></i>
                                    </div>
                                    <div class="header-extra-info-text">
                                        <label>SEND US AN EMAIL</label>
                                        <strong><a href="mailto:info@brokr.ng" class="text-decoration-none text-color-hover-primary">INFO@BROKR.NG</a></strong>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-container container">
            <div class="header-row">
                <div class="header-column">
                    <div class="header-row">
                        <div class="header-logo">
                            <a href="{{route('index')}}">
                                <img alt="Porto" width="150"  data-sticky-width="100" src="{{asset('logo.png')}}">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="header-column justify-content-end">
                    <div class="header-row">
                        <div class="header-nav header-nav-line header-nav-top-line header-nav-top-line-with-border order-2 order-lg-1">
                            <div class="header-nav-main header-nav-main-square header-nav-main-effect-2 header-nav-main-sub-effect-1">
                                <nav class="collapse">
                                    <ul class="nav nav-pills" id="mainNav">
                                        <li class="dropdown">
                                            <a class="dropdown-item dropdown-toggle active" href="{{route('index')}}">
                                                <i class="fa fa-home "> </i>
                                            </a>

                                        </li>

                                        <li class="dropdown ">
                                            <a class="dropdown-item dropdown-toggle" href="{{route('about-us')}}">
                                                About Us
                                            </a>

                                        </li>

                                        <li class="dropdown">
                                            <a class="dropdown-item dropdown-toggle" href="{{route('property')}}">
                                                Properties
                                            </a>

                                        </li>

{{--                                        <li class="dropdown">--}}
{{--                                            <a class="dropdown-item dropdown-toggle" href="">--}}
{{--                                                Shop--}}
{{--                                            </a>--}}

{{--                                        </li>--}}
                                        <li class="dropdown">
                                            <a class="dropdown-item dropdown-toggle" href="{{route('contact')}}">
                                                Contact Us
                                            </a>

                                        </li>
                                        @guest
                                            @if (Route::has('login'))
                                                <li class="dropdown ms-lg-auto">
                                                    <a href="{{route('login')}}" class="dropdown-item">
                                                        Login
                                                    </a>
                                                </li>
                                            @endif
                                            @if (Route::has('register'))
                                                <li class="dropdown">
                                                    <a href="{{route('register')}}" class="dropdown-item">
                                                        Register
                                                    </a>
                                                </li>
                                            @endif
                                        @else
                                            <li class="dropdown ">
                                                <a class="dropdown" href="{{route('home')}}" >
                                                    Welcome,   {{ Auth::user()->username }}
                                                </a>

                                            </li>
                                            <li>
                                                <a class="dropdown-item text-color-danger" href="{{ route('logout') }}"
                                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                    {{ __('Logout') }}
                                                </a>

                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                    @csrf
                                                </form>

                                            </li>
                                        @endguest


                                    </ul>
                                </nav>
                            </div>
                            <button class="btn header-btn-collapse-nav" data-bs-toggle="collapse" data-bs-target=".header-nav-main nav">
                                <i class="fas fa-bars"></i>
                            </button>
                        </div>
                        <div class="header-nav-features header-nav-features-no-border header-nav-features-lg-show-border order-1 order-lg-2">
                            <div class="header-nav-feature header-nav-features-search d-inline-flex">
                                <a href="#" class="header-nav-features-toggle text-decoration-none" data-focus="headerSearch"><i class="fas fa-search header-nav-top-icon"></i></a>
                                <div class="header-nav-features-dropdown" id="headerTopSearchDropdown">
                                    <form role="search" action="#" method="get">
                                        <div class="simple-search input-group">
                                            <input class="form-control text-1" id="headerSearch" name="q" type="search" value="" placeholder="Search...">
                                            <button class="btn" type="submit">
                                                <i class="fas fa-search header-nav-top-icon"></i>
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
{{--                            <div class="header-nav-feature header-nav-features-cart d-inline-flex ms-2">--}}
{{--                                <a href="{{ route('cart.index') }}" >--}}
{{--                                    <img src="{{asset('img/icons/icon-cart.svg')}}" width="14" alt="" class="header-nav-top-icon-img">--}}
{{--                                    <span class="cart-info">--}}
{{--													<span class="cart-qty">@auth--}}
{{--                                                            {{Cart::session(auth()->id())->getContent()->count()}}--}}
{{--                                                        @else--}}
{{--                                                            0--}}
{{--                                                        @endauth</span>--}}
{{--												</span>--}}
{{--                                </a>--}}

{{--                            </div>--}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
