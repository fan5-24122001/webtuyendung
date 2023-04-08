
@extends('layouts.master')
@section('content')

<section class="contact-section">
    <div class="container">


        <div class="row">
            <div class="col-12">
                <h2 class="contact-title"> Gửi Mail Cho User</h2>
            </div>
            @if(session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
        @endif
            <div class="col-lg-8">

                <form action="{{ route('send.email') }}" method="post">
                    @csrf

                    <input value="{{$id}}" type="hidden" id="hidden" name="id_apply">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="inputName">Tên Cty</label>
                                    <input type="text" name="name" class="form-control" placeholder="Nhập Tên Cty ">
                                    @error('name')
                                    <span class="text-danger"> {{ $message }} </span>
                                    @enderror
                                </div>
                            </div>
                           
                        </div>            
                        <div class="form-group">
                            <label for="inputSubject">Tiêu Đề</label>
                            <input type="text" name="subject"  class="form-control" placeholder="Nhập Tiêu Đề">
                            @error('subject')
                            <span class="text-danger"> {{ $message }} </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="inputMessage">Thông Tin</label>
                            <textarea name="content" rows="5" class="form-control" placeholder=" Nhập Thông Tin "></textarea>
                            @error('content')
                            <span class="text-danger"> {{ $message }} </span>
                            @enderror
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary"><i class="fa fa-paper-plane"></i> Gửi Mail</button>
                        </div>            
                    </form>
            </div>
           
        </div>
    </div>
</section>
@endsection