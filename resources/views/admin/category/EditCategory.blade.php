@extends('admin.master')
@section('content')
<div class="content-body">
    <div class="container-fluid">

        <div class="row page-titles">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active"><a href="javascript:void(0)"> Danh Mục</a></li>
                <li class="breadcrumb-item"><a href="javascript:void(0)">Sửa Danh Mục</a></li>
            </ol>
        </div>

        <!-- row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">

                        <div class="email-box ms-0 ms-sm-0 ms-sm-0">
                            <div class="p-0">
                                <a href="email-compose.html" class="btn btn-primary ">Sửa Danh Mục</a>
                            </div>
                            <div class="toolbar mb-4" role="toolbar">
                            </div>
                            @if(session()->has('massage'))
                        
                        <div class="alert alert-success">
                            {{ session()->get('massage') }}
                        </div>
                        @endif
                            <div class="compose-content">
                                <form action="{{route('Category.update',$cate->id)}}" method="POST">
                                @csrf
                                @method('PUT')
                                    <div class="mb-3">
                                        <input type="text" value="{{$cate ->name}}" name="name" class="form-control bg-transparent" placeholder=" Tên Danh Mục">
                                    </div>
                                    
                                    <div class="text-start mt-4 mb-3">
                                    <button class="btn btn-primary btn-sl-sm me-2" type="submit"><span class="me-2"><i class="fa fa-paper-plane"></i></span>Cập Nhật</button>
                                </div>
                                </form>

                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection