@extends('layouts.master')
@section('content')
    <div class="job-listing-area pt-120 pb-120">
        <div class="container">
            <div class="row">
                <!-- Left content -->
                <div class="col-xl-3 col-lg-3 col-md-4">
                    <div class="row">
                        <div class="col-12">
                            <div class="small-section-tittle2 mb-45">
                              
                            </div>
                        </div>
                    </div>
                   
                    <!-- Job Category Listing start -->
                    
                    <!-- Job Category Listing End -->
                </div>
                <!-- Right content -->
                <div class="col-xl-9 col-lg-9 col-md-8">
                    <!-- Featured_job_start -->
                    <section class="featured-job-area">
                        <div class="container">
                            <!-- Count of Job list Start -->
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="count-job mb-35">
                                        <span> Jobs Find </span>
                                        <!-- Select job items start -->
                                        <div class="select-job-items">
                                          
                                            <span><a href="{{ URL::to('sorta') }}" style="color: black"> Sắp Xếp Lương Cao - Thấp    ::</a></span>
                                            <span><a href="{{ URL::to('sortprice1') }}" style="color: black">  Sắp Xếp Lương Thấp - Cao </a></span>
                                           
                                       
                                           
                                       
                                        </div>
                                        <!--  Select job items End-->
                                    </div>
                                </div>
                            </div>
                            <!-- Count of Job list End -->
                            <!-- single-job-content -->
                            
                                @foreach ($data as $item)
                                    @if ($item->status == 0)
                                    @endif
                                    @if ($item->status == 1)
                                        <div class="single-job-items mb-30">
                                            <div class="company-img">
                                                <a href="#"><img src="{{ asset('./user/assets/img/icon/job-list1.png') }}"
                                                        alt=""></a>
                                            </div>
                                            <div class="job-items">
                                                <div class="job-tittle job-tittle2">
                                                <a  href="{{ route('viewPost', ['id'=>$item->id]) }}">
                                                        <h4>{{ $item->title }}</h4>
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
                                                        <li><i class="fas fa-map-marker-alt"></i>Số Lượng :
                                                            {{ $item->amount }}
                                                        </li>
                                                        <li>${{ $item->minMoney }} - ${{ $item->maxMoney }}</li>
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
                              
                                {{ $data->links() }}
                            <!-- single-job-content -->

                        </div>
                    </section>
                   
                    <!-- Featured_job_end -->
                </div>
            </div>
        </div>
    </div>
@endsection
