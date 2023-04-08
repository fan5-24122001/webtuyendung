
@extends('layouts.master')
@section('content')
<main>
    <div class="slider-area ">
        <!-- Mobile Menu -->
        <div class="slider-active">
            <div class="single-slider slider-height d-flex align-items-center" data-background="{{asset('user/assets/img/hero/h1_hero.jpg')}}">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 col-lg-9 col-md-10">
                            <div class="hero__caption">
                                <h1>Tìm Công Việc Khởi Nghiệp Thú Vị Nhất</h1>
                            </div>
                        </div>
                    </div>
                    <!-- Search Box -->
                    <div class="row">
                        <div class="col-xl-8">
                            <!-- form -->

                            {{-- tìm kiếm --}}
                            <form action="{{ route('search') }}" method="post" class="search-box" style="background-color: none">
                                @csrf
                                 <div class="select-form col-3"  style="background-color: none">
                                    <div class="select-itms">
                                        <select name="skill" id="select1">
                                            @foreach($category as $item)
                                            <option value="{{$item->id}}">{{$item->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="select-form col-3" style="background-color: none">
                                    <div class="select-itms">
                                        <select name="location" id="select1">
                                            <option value="Intern">Intern</option>
                                            <option value="Fresher">Fresher</option>
                                            <option value="Leader">Leader</option>
                                            <option value="Junior">Junior</option>
                                            <option value="Full Level">Full Level</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="select-form col-3" style="background-color: none">
                                    <div class="select-itms" style="background-color: none">
                                        <select name="type" id="select1" style="background-color: none">
                                            <option value="Full time">Full time</option>
                                            <option value="Part time">Part time</option>
                                            <option value="Remote">Remote</option>
                                            <option value="Freelance">Freelance</option>
                                        </select>
                                    </div>
                                </div>
                                	
                            
                                <div class="search-form" >
                                    <div class="select-itms">
                                       <button class="btn" style="margin:7px" type="submit">Tìm Kiếm </button>
                                    </div>
                                    
                                </div>
                             
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider Area Start-->

    <!-- slider Area End-->
    <!-- Our Services Start -->
    <div class="our-services section-pad-t30">
        <div class="container">
            <!-- Section Tittle -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-tittle text-center">
                        
                        <h2>Các Danh Mục Hàng Đấu </h2>
                    </div>
                </div>
            </div>
            <div class="row d-flex justify-contnet-center">
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                    <div class="single-services text-center mb-30">
                        <div class="services-ion">
                            <span class="flaticon-tour"></span>
                        </div>
                        <div class="services-cap">
                            <h5><a href="job_listing.html">Thiết kế & Sáng tạo
                                </a></h5>
                            <span>(653)</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                    <div class="single-services text-center mb-30">
                        <div class="services-ion">
                            <span class="flaticon-cms"></span>
                        </div>
                        <div class="services-cap">
                            <h5><a href="job_listing.html">Phát triển Thiết kết</a></h5>
                            <span>(658)</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                    <div class="single-services text-center mb-30">
                        <div class="services-ion">
                            <span class="flaticon-report"></span>
                        </div>
                        <div class="services-cap">
                            <h5><a href="job_listing.html">Bán hàng & Tiếp thị  </a></h5>
                            <span>(658)</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                    <div class="single-services text-center mb-30">
                        <div class="services-ion">
                            <span class="flaticon-app"></span>
                        </div>
                        <div class="services-cap">
                            <h5><a href="job_listing.html">Ứng dụng di động</a></h5>
                            <span>(658)</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                    <div class="single-services text-center mb-30">
                        <div class="services-ion">
                            <span class="flaticon-helmet"></span>
                        </div>
                        <div class="services-cap">
                            <h5><a href="job_listing.html">Công nghệ thông tin</a></h5>
                            <span>(658)</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                    <div class="single-services text-center mb-30">
                        <div class="services-ion">
                            <span class="flaticon-high-tech"></span>
                        </div>
                        <div class="services-cap">
                            <h5><a href="job_listing.html">Sự thi công</a></h5>
                            <span>(658)</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                    <div class="single-services text-center mb-30">
                        <div class="services-ion">
                            <span class="flaticon-real-estate"></span>
                        </div>
                        <div class="services-cap">
                            <h5><a href="job_listing.html">Địa ốc</a></h5>
                            <span>(658)</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                    <div class="single-services text-center mb-30">
                        <div class="services-ion">
                            <span class="flaticon-content"></span>
                        </div>
                        <div class="services-cap">
                            <h5><a href="job_listing.html">Nội dung viết</a></h5>
                            <span>(658)</span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- More Btn -->
            <!-- Section Button -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="browse-btn2 text-center mt-50">
                        <a href="job_listing.html" class="border-btn2">Việc làm nổi bật</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
   <hr>
    <section class="featured-job-area feature-padding">
        <div class="container">
            <!-- Section Tittle -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-tittle text-center">
                        
                        <h2>Việc làm nổi bật</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-xl-10">
                    <!-- single-job-content -->
                    @foreach ($data as $item)
                    
                    @if($item->status == 0)
                   
                    @endif
                    @if($item->status == 1)
                    <div class="single-job-items mb-30">
                        <div class="company-img">
                            <a href="#"><img src="{{asset('user/assets/img/icon/job-list1.png')}}" alt=""></a>
                        </div>
                        <div class="job-items">
                            <div class="job-tittle job-tittle2">
                                <a  href="{{ route('viewPost', ['id'=>$item->id]) }}">
                                    <h4>{{$item->title}}</h4>
                                </a>
                                <ul>
                                    <li> <a class="p"><span style="
                                        display:inline-block;
                                        white-space: nowrap;
                                        overflow: hidden;
                                        text-overflow: ellipsis;
                                        max-width: 15ch;">
                                    {{$item->name}}
                                      </span></a></li>
                                    <li><i ></i>Số Lượng: {{$item->amount}}</li>
                                    <li>${{$item->minMoney}}.USD - ${{$item->maxMoney}}.USD</li>
                                </ul>
                            </div>
                        </div>
                        <div class="items-link items-link2 f-right">
                            <a href="job_details.html" class="p"><span style="
                                display:inline-block;
                                white-space: nowrap;
                                overflow: hidden;
                                text-overflow: ellipsis;
                                max-width: 9ch;">
                            {{$item->type}}
                              </span></a>

                            @auth
                            @if (Auth::user()->is_admin == 0)
                            <a href="{{ route('viewPost', [$item->id,'id_user'=>Auth::User()->id]) }}" >Ứng Tuyển</a>
                                       
                               @elseif(Auth::user()->is_admin == 2) 
                                        {{-- nhaf tuyeern dung --}}
                                      
                             @endif
                           
                            @else
                            
                            <a href="{{ route('login') }}"  >Ứng Tuyển</a>
                            @endauth
                           
                        </div>
                    </div>
                    @endif
                      
                    @endforeach
                </div>
                {{ $data->links() }}
            </div>
        </div>
    </section>
    <!-- Featured_job_end -->
    <!-- How  Apply Process Start-->
    <div class="apply-process-area apply-bg pt-150 pb-150" data-background="{{asset('user/assets/img/gallery/how-applybg.png')}}">
        <div class="container">
            <!-- Section Tittle -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-tittle white-text text-center">
                        <span>ÁP DỤNG QUY TRÌNH</span>
                        <h2> Làm thế nào nó hoạt động</h2>
                    </div>
                </div>
            </div>
            <!-- Apply Process Caption -->
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single-process text-center mb-30">
                        <div class="process-ion">
                            <span class="flaticon-search"></span>
                        </div>
                        <div class="process-cap">
                            <h5>1. Tìm kiếm một công việc</h5>
                            <p>Trao đổi và xác định nhu cầu tuyển dụng của đối tác thông qua cuộc họp trực tiếp hoặc trực tuyến.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-process text-center mb-30">
                        <div class="process-ion">
                            <span class="flaticon-curriculum-vitae"></span>
                        </div>
                        <div class="process-cap">
                            <h5>2. Xin việc</h5>
                            <p>Trao đổi và xác định nhu cầu tuyển dụng của đối tác thông qua cuộc họp trực tiếp hoặc trực tuyến.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-process text-center mb-30">
                        <div class="process-ion">
                            <span class="flaticon-tour"></span>
                        </div>
                        <div class="process-cap">
                            <h5>3. Nhận công việc của bạn</h5>
                            <p>Trao đổi và xác định nhu cầu tuyển dụng của đối tác thông qua cuộc họp trực tiếp hoặc trực tuyến.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- How  Apply Process End-->
    <!-- Testimonial Start -->
   
    <!-- Testimonial End -->
    <!-- Support Company Start-->
<hr>    
    <div class="support-company-area support-padding fix">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-tittle text-center">
                        
                        <h2>CHÚNG TÔI ĐANG LÀM GÌ</h2>
                    </div>
                </div>
            </div>
            <div class="row align-items-center">
                
                <div class="col-xl-6 col-lg-6">
                    <div class="right-caption">
                        <!-- Section Tittle -->
                        <div class="section-tittle section-tittle2">
                            <span>CHÚNG TÔI ĐANG LÀM GÌ</span>
                            <h2>24k Người tài năng đang nhận được việc làm</h2>
                        </div>
                        <div class="support-caption">
                            
                            <a href="about.html" class="btn post-btn">Đăng Tuyển</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="support-location-img">
                        <img src="{{asset('user/assets/img/service/support-img.jpg')}}" alt="">
                        <div class="support-img-cap text-center">
                            <p>Since</p>
                            <span>1994</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Support Company End-->
    <!-- Blog Area Start -->
   
    <!-- Blog Area End -->

</main>


@endsection