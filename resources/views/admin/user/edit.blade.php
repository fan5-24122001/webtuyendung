@extends('admin.master')
@section('content')
    <div class="content-body">
        <div class="container-fluid">

            <div class="row page-titles">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Phân Quyền User</a></li>
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Trạng Thái</a></li>
                </ol>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">

                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            @if (session()->has('massage'))
                                <div class="alert alert-success">
                                    {{ session()->get('massage') }}
                                </div>
                            @endif
                            <div class="email-box ms-0 ms-sm-0 ms-sm-0">
                                <div class="p-0">
                                    <a href="email-compose.html" class="btn btn-primary ">Trạng Thái</a>
                                </div>
                                <br>
                                <div class="basic-form">


                                    <form action="{{ route('CheckUser.update', $user->id) }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                        <div class="toolbar mb-4" role="toolbar">
                                        </div>


                                        <div class="compose-content">
                                            <div class="mb-3 row">
                                                <label class="col-sm-1 col-form-label">Quyền User </label>
                                                <div class="col-lg-6">
                                                    <select class="default-select  form-control wide" name="is_admin">
                                                        @if ($user->is_admin == 0)
                                                            <option selected value="0"> Chưa Duyệt</option>
                                                            <option value="2"> Đã Duyệt</option>
                                                        @endif
                                                        @if ($user->is_admin == 2)
                                                        <option value="0"> Chưa Duyệt</option>
                                                        <option selected value="2"> Đã Duyệt</option>
                                                        @endif
                                                      

                                                    </select>
                                                </div>
                                            </div>
                                           


                                        </div>
                                        <div class="text-start mt-4 mb-3">
                                            <button class="btn btn-primary btn-sl-sm me-2" type="submit"><span
                                                    class="me-2"><i
                                                        class="fa fa-paper-plane"></i></span>Cập Nhật</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    @endsection
