<div class="dlabnav">
    <div class="dlabnav-scroll">
        <ul class="metismenu" id="menu">

            @guest
            @if (Route::has('login'))
            <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
            </li>
            @endif


            @else
            <li class="dropdown header-profile">
                <a class="nav-link" href="javascript:void(0);" role="button" data-bs-toggle="dropdown">
                   
                    <div class="header-info ms-3">
                        <span class="font-w600 ">Hi , {{ Auth::user()->name }}<b>


                            </b></span>
                        <small class="text-end font-w400">admin@admin.com</small>
                    </div>
                </a>
                <div class="dropdown-menu dropdown-menu-end">
                    <a href="app-profile.html" class="dropdown-item ai-icon">
                        <svg id="icon-user1" xmlns="http://www.w3.org/2000/svg" class="text-primary" width="18" height="18" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                            <circle cx="12" cy="7" r="4"></circle>
                        </svg>
                        <span class="ms-2">Profile </span>
                    </a>
                    <a href="email-inbox.html" class="dropdown-item ai-icon">
                        <svg id="icon-inbox" xmlns="http://www.w3.org/2000/svg" class="text-success" width="18" height="18" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                            <polyline points="22,6 12,13 2,6"></polyline>
                        </svg>
                        <span class="ms-2">Inbox </span>
                    </a>
                    <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        <svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" class="text-danger" width="18" height="18" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                            <polyline points="16 17 21 12 16 7"></polyline>
                            <line x1="21" y1="12" x2="9" y2="12"></line>
                        </svg>
                        <span>
                            {{ __('Logout') }}
                        </span>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </a>
                </div>
            </li>
            @endguest







            <li><a class="has-arrow ai-icon" href="{{route('admin.home')}}" aria-expanded="false">
                    <i class="flaticon-025-dashboard"></i>
                    <span class="nav-text">Home</span>
                </a>


            </li>
            <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="flaticon-050-info"></i>
                    <span class="nav-text">  Danh Mục</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{route('Category.create')}}">Thêm Danh Mục</a></li>
                    <li><a href="{{route('Category.index')}}">Danh Sách Danh Mục</a></li>



                </ul>
            
            <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                <i class="flaticon-050-info"></i>
                <span class="nav-text">Bài Viết </span>
            </a>
            <ul aria-expanded="false">
                <li><a href="{{route('PostAdmin.create')}}"></a></li>
                <li><a href="{{route('PostAdmin.index')}}">Danh Sách Bài Viết</a></li>
                
                


            </ul>
        </li>
        <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
            <i class="flaticon-050-info"></i>
            <span class="nav-text">Phân Quyền User</span>
        </a>
        <ul aria-expanded="false">
            
            <li><a href="{{route('CheckUser.index')}}">Danh Sách Phân Quyền User</a></li>
            
            


        </ul>
  
        </ul>
        <div class="copyright">
            <p><strong> Phan Thị Thuận</strong> © 2022 </p>
            <p class="fs-12"> Phan Thị Thuận <span class="heart"></span> Phan Thị Thuận</p>
        </div>
    </div>
</div>