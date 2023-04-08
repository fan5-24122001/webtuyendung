@extends('layouts.master')
@section('content')

<main>

    <!-- Hero Area Start-->
    <div class="slider-area ">
    <div class="single-slider section-overly slider-height2 d-flex align-items-center" data-background="assets/img/hero/about.jpg">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="hero-cap text-center">
                        <h2>Hãy Về Với Chúng Tôi</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- Hero Area End -->
    <!-- job post company Start -->
    <div class="job-post-company pt-120 pb-120">
        <div class="container">
            <div class="row justify-content-between">
                <!-- Left Content -->
                <div class="col-xl-8 col-lg-8">
                    <!-- job single -->
                    <div class="single-job-items mb-50">
                        <div class="job-items">
                            <div class="company-img company-img-details">
                                <a href="#"><img src="{{asset('user/assets/img/icon/job-list1.png')}}" alt=""></a>
                            </div>
                            <div class="job-tittle">
                                <a href="#">
                                    <h4>{{$id->name}}</h4>
                                </a>
                                <ul>
                                    <li>Creative Agency</li>
                                    <li><i class="fas fa-map-marker-alt"></i>{{$id->address}}</li>
                                    <li>${{$id->minMoney}} - ${{$id->maxMoney}}</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                      <!-- job single End -->
                   
                    <div class="job-post-details">
                        <div class="post-details1 mb-50">
                            <!-- Small Section Tittle -->
                            <div class="small-section-tittle">
                                <h4>Mô tả công việc</h4>
                            </div>
                            <p>{{$id->content}}</p>
                        </div>
                        <div class="post-details2  mb-50">
                             <!-- Small Section Tittle -->
                            <div class="small-section-tittle">
                                <h4>Kiến thức, kỹ năng và năng lực cần thiết   </h4>
                            </div>
                          
                        </div>
                        <div class="post-details2  mb-50">
                             <!-- Small Section Tittle -->
                            <div class="small-section-tittle">
                                <h4>Học vấn + Kinh nghiệm</h4>
                            </div>
                           <ul>
                               <li>{{$id->type}}</li>
                               
                               <li>{{$id->location}}</li>
                               <li>Quen thuộc với các ứng dụng web và thiết bị di động được ưu tiên</li>
                               <li>Trải nghiệm sử dụng Invision một điểm cộng</li>
                           </ul>
                        </div>
                    </div>
    
                </div>
                <!-- Right Content -->
                <div class="col-xl-4 col-lg-4">
                    <div class="post-details3  mb-50">
                        <!-- Small Section Tittle -->
                       <div class="small-section-tittle">
                           <h4>Tổng quan về công việc</h4>
                       </div>
                      <ul>
                          <li>Ngày đăng: : <span>{{$id->created_at}}</span></li>
                          <li>Địa điểm : <span>{{$id->address}}</span></li>
                          <li>Số Lượng Ứng Tuyển : <span>{{$id->amount}}</span></li>
                          <li>Vi Trí Ứng Tuyển : <span>{{$id->location}}</span></li>
                          <li>Lương :  <span>${{$id->maxMoney}} yearly</span></li>
                          <li>Ngày nộp hồ sơ : <span>{{$id->created_at}}</span></li>
                      </ul>
                     <div class="apply-btn2">
                        <ul>
                            @auth
                                                  @if (Auth::user()->is_admin == 0)
                                                  <li>  <a href="{{ route('apply', ['id'=>$id->id]) }}" class="btn">Ứng Tuyển</a>|| <span><a href="{{ route('love', ['post_id'=>$id->id]) }}" class="btn">Yêu Thích</a></span></li>
                                                  @if(session()->has('success'))
                                                  <div class="alert alert-success">
                                                      {{ session()->get('success') }}
                                                  </div>
                                              @endif
                           
                                                             
                                                     @elseif(Auth::user()->is_admin == 2) 
                                                              {{-- nhaf tuyeern dung --}}
                                                            
                                                   @endif
                                                 
                                                  @else
                                                  
                                                  <a href="{{ route('login') }}"  >Ứng Tuyển</a>
                                                  @endauth
                     <li>Số Lượng Người Truy Cập Bài Viết<table></table> <span>{{$id->views}}</span></li>
                        </ul>
                      
                     </div>
                   </div>
                    <div class="post-details4  mb-50">
                        <!-- Small Section Tittle -->
                       <div class="small-section-tittle">
                           <h4>Thông tin công ty</h4>
                       </div>
                           <ul>
                            <li>Tên : <span>{{$id->name}}</span></li>
                            <li>Sdt : <span> {{$id->numberPhone}}</span></li>
                            <li>Email: <span>{{$id->email}}</span></li>
                        </ul>
                   </div>
                </div>
            </div>
        </div>
    </div>
    <!-- job post company End -->
    
    </main>


@endsection