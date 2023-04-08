@extends('layouts.master')
@section('content')
<div class="whole-wrap">
    <div class="container box_1170">
        <div class="section-top-border">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <h3 class="mb-30">Ưng Tuyển Bài Viết</h3>
                    <form action="{{ route('postApply') }}"  method ="POST" enctype="multipart/form-data">
                        @csrf @method('POST')
                        <div class="mt-10">
                            <input type="text" name="name" placeholder="Nhập Tên Của Bạn" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Last Name'" required="" class="single-input">
                        </div>
                        <div class="mt-10">
                            <input type="hidden" name="id_post"  value="{{$id}}">
                        </div>
                        <div class="mt-10">
                            <input type="email" name="email" placeholder="Nhập Địa Chỉ Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email address'" required="" class="single-input">
                        </div>
                        <div class="mt-10">
                            <input type="text" name="numberPhone" placeholder="Nhập Số Điện Thoại" onfocus="this.placeholder = ''" onblur="this.placeholder = ''" required="" class="single-input">
                        </div>
                        <div class="mt-10">
                            <label for="">Nộp CV Vào</label>
                            <input type="file" name="fileCV" class="single-input">
                        </div>
                        <div class="mt-10">
                            <button type="submit" class="single-input-secondary bg-success">Ứng Tuyển  </button>
                        </div>
                    </form>
                </div>
               
            </div>
        </div>
    </div>
</div>
@endsection