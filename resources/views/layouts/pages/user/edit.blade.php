
@extends('layouts.master')
@section('content')

<section class="contact-section">
    <div class="container">


        <div class="row">
            <div class="col-12">
                <h2 class="contact-title"> Thông Tin Của Bạn</h2>
            </div>
            
            <div class="col-lg-8">
                <form class="form-contact contact_form" action="{{ route('editprofile') }}" method="post"  >
                    @csrf
                    <div class="row">
                        <input class="form-control valid"  id="name" name="id" value="{{$user->id}}" type="hidden" >
                        <div class="col-sm-12">
                            <label for="email" class="col-md-4 ">{{ __('Email') }}</label>
                            <div class="form-group">
                                <input class="form-control valid" name="email" id="name" value="{{$user->email}}" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" placeholder="Enter your name">
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <label for="email" class="col-md-4 ">{{ __('Name') }}</label>
                            <div class="form-group">
                                <input class="form-control valid" name="name" id="name" value="{{$user->name}}" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" placeholder="Enter your name">
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <label for="email" class="col-md-4 ">{{ __('Level') }}</label>
                            <div class="form-group">
                                @if ($user->is_admin==0)
                                <label>User </label>
                                <input class="form-control valid"  id="name" name="is_admin" value="{{$user->is_admin}}" type="hidden" >
                                @elseif ($user->is_admin==2)
                                <label>Nhà Tuyển Dụng </label>
                                <input class="form-control valid"  id="name" name="is_admin" value="{{$user->is_admin}}" type="hidden" >
                                @endif
                            </div>
                        </div>
                    </div>
                    
                        <button type="submit"
                        class="btn btn-danger btn-sm">Cập nhật</button>
                    
                </form>
            </div>
           
        </div>
    </div>
</section>
@endsection