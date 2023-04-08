@extends('layouts.master')
@section('content')
    <div class="job-listing-area pt-120 pb-120">
        <div class="container">
            <div class="row">
                <!-- Right content -->
                <h3 class="mb-30">Danh Sách Ứng Viên Ứng Tuyển Vào Bài Đăng</h3>
                <div class="col-12">
                    <!-- Featured_job_start -->
                    <section class="featured-job-area">
                        <div class="container">
                            @if ($data->isNotEmpty())
                                @foreach ($data as $key => $item)
                                    <div class="single-job-items mb-30">
                                        <div class="job-items">
                                            <a href="#">
                                                <h4>{{ $key }}. </h4>
                                            </a>  
                                            <div class="job-tittle job-tittle2">
                                                
                                                <a href="#">
                                                    <h4>{{ $item->name }}</h4>
                                                </a>
                                                <ul>
                                                    <li>{{ $item->numberPhone }} </li>
                                                    {{-- <li>CV <embed src='{{ asset("/fileUploads/$item->fileCV") }}' /> {{$item->fileCV}}</li> --}}
                                                    <li>
                                                        <p><a href='{{ asset("/fileUploads/$item->fileCV") }}'><strong
                                                                    style="color: black">Xem CV</strong></a>
                                                    </li>
                                                    <li>


                                                        @auth
                                                        @if (Auth::user()->is_admin == 2)
                                                       
                                                        Gửi Mail Phản Hồi
                                                        @elseif(Auth::user()->is_admin == 0)
                                                        
                                                          Vui Lòng Kiểm Tra Mail Của Bạn
                                                        @endif
                                                    @endauth
                                                    </li>

                                                </ul>
                                            </div>
                                        </div>
                                        <div class="percentage">
                                            
                                            <a  href="{{ route('deleteapply', ['id'=>$item->id]) }}">               
                                                <button class="btn btn-danger btn-sm">Xóa</button>
                                             </a>
                                          @auth
                                              @if (Auth::user()->is_admin == 2)
                                              <a href="{{ route('email', ['id'=>$item->id]) }}">
                                                <button class="btn btn-danger btn-sm">Gửi Mail</button></a>
                                              @elseif(Auth::user()->is_admin == 0)
                                              <a href="{{ route('viewPost', ['id' => $item->id_post]) }}">
                                                <button class="btn btn-danger btn-sm">Xem Thông Tin Bài Viết</button></a> 
                                              @endif
                                          @endauth
                                           
                                    </div>
                                        
                                    </div>
                                @endforeach
                            @else
                                <div class="featured__item__text">

                                    <h5>Không tìm thấy ứng cử viên apply</h5>
                                </div>
                            @endif

                            <!-- single-job-content -->

                        </div>
                    </section>
                    <!-- Featured_job_end -->
                </div>
            </div>
        </div>
    </div>
@endsection
