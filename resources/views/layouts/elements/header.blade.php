<div id="preloader-active">
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="preloader-inner position-relative">
            <div class="preloader-circle"></div>
            <div class="preloader-img pere-text">
                <img src="{{ asset('user/assets/img/logo/logo.png') }}" alt="">
            </div>
        </div>
    </div>
</div>
<header>
    <!-- Header Start -->
    <div class="header-area header-transparrent">
        <div class="headder-top header-sticky">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-2">
                        <!-- Logo -->
                        <div class="logo">
                            <a href="index.html"><img src="{{ asset('user/assets/img/logo/oo.jpg') }}" width="200px" height="100px" alt=""></a>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-9">
                        <div class="menu-wrapper">
                            <!-- Main-menu -->
                            <div class="main-menu">
                                <nav class="d-none d-lg-block">
                                    <ul id="navigation">
                                        <li><a href="{{ URL::to('/home') }}">Trang Chủ</a></li>
                                        <li><a href="{{ URL::to('/Post') }}">Bài Viết </a></li>
                                        <li><a href="{{ URL::to('/about') }}">Liên Hệ</a></li>


                                    </ul>
                                </nav>
                            </div>
                            <!-- Header-btn -->

                            @guest
                                @if (Route::has('login'))
                                    <div class="header-btn d-none f-right d-lg-block">
                                        <a href="{{ route('register') }}" class="btn head-btn1">Đăng Ký</a>
                                        <a href="{{ route('login') }}" class="btn head-btn2">Đăng Nhập</a>
                                    </div>
                                @endif
                            @else
                                <div class="main-menu">
                                    <nav class="d-none d-lg-block">
                                        <ul id="navigation">
                                            @if (Auth::user()->is_admin == 0)
                                                {{-- usser --}}
                                                <li><a href=""> <img src="{{ asset('admin/images/profile/pic1.jpg') }}"
                                                            width="40" alt=""> {{ Auth::user()->name }}</a>
                                                    <ul class="submenu">
                                                        <li><a href="{{ URL::to('/profile/show') }}"> Thông Tin Của Bạn</a>
                                                        </li>
                                                        <li><a href="{{ URL::to('/love/show') }}"> Yêu Thích</a></li>


                                                        <li><a href="{{ URL::to('/Show-Apply') }}">Đã Ứng Tuyển</a></li>
                                                        <li>
                                                            <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                                                <svg id="icon-logout" xmlns="http://www.w3.org/2000/svg"
                                                                    class="text-danger" width="18" height="18"
                                                                    viewbox="0 0 24 24" fill="none" stroke="currentColor"
                                                                    stroke-width="2" stroke-linecap="round"
                                                                    stroke-linejoin="round">
                                                                    <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4">
                                                                    </path>
                                                                    <polyline points="16 17 21 12 16 7"></polyline>
                                                                    <line x1="21" y1="12" x2="9" y2="12"></line>
                                                                </svg>
                                                                <span>
                                                                    {{ __('Logout') }}
                                                                </span>
                                                                <form id="logout-form" action="{{ route('logout') }}"
                                                                    method="POST" class="d-none">
                                                                    @csrf
                                                                </form>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </li>
                                            @elseif(Auth::user()->is_admin == 2)
                                                {{-- nhaf tuyeern dung --}}
                                                <li><a href=""> <img src="{{ asset('admin/images/profile/pic1.jpg') }}"
                                                            width="40" alt=""> {{ Auth::user()->name }}</a>
                                                    <ul class="submenu">
                                                        <li><a href="{{ URL::to('/profile/show') }}"> Thông Tin Của Bạn</a>
                                                        </li>
                                                        <li><a href="{{ route('PostAdd') }}">Đăng Bài Tuyển Dụng</a></li>
                                                        <li><a href="{{ route('PostList') }}">QLý Bài Tuyển Dụng</a></li>

                                                        <li>
                                                            <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                                                <svg id="icon-logout" xmlns="http://www.w3.org/2000/svg"
                                                                    class="text-danger" width="18" height="18"
                                                                    viewbox="0 0 24 24" fill="none" stroke="currentColor"
                                                                    stroke-width="2" stroke-linecap="round"
                                                                    stroke-linejoin="round">
                                                                    <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4">
                                                                    </path>
                                                                    <polyline points="16 17 21 12 16 7"></polyline>
                                                                    <line x1="21" y1="12" x2="9" y2="12"></line>
                                                                </svg>
                                                                <span>
                                                                    {{ __('Logout') }}
                                                                </span>
                                                                <form id="logout-form" action="{{ route('logout') }}"
                                                                    method="POST" class="d-none">
                                                                    @csrf
                                                                </form>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </li>
                                            @endif


                                        </ul>
                                    </nav>
                                </div>





                            @endguest

                        </div>
                    </div>
                    <!-- Mobile Menu -->
                    <div class="col-12">
                        <div class="mobile_menu d-block d-lg-none"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->
</header>
