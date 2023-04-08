@extends('admin.master')
@section('content')
<div class="content-body">
    <div class="container-fluid">

        <div class="row page-titles">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Bài Viết</a></li>
                <li class="breadcrumb-item"><a href="javascript:void(0)">Danh Sách Bài Viết</a></li>
            </ol>
        </div>
        <!-- row -->


        <div class="row">

            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Danh Sách Bài Viết</h4>
                    </div>
                    <div class="card-body">
                    @if(session()->has('status'))
                        
                        <div class="alert alert-success">
                            {{ session()->get('status') }}
                        </div>
                        @endif
                        <div class="table-responsive">
                            <table id="example3" class="display" style="min-width: 845px">
                                <thead>
                                    <tr>
                                        <th>Stt</th>
                                        <th>Tên</th>
                                        <th>Trạng Thái</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($post as $key => $p)
                                    <tr>

                                        <td>{{$key}}</td>
                                        <td>{{$p ->name}}</td>
                                        <td>
                                            
                                            
                                            @if($p->status == 0)
                                            Chưa Duyệt
                                            @endif
                                            @if($p->status == 1)
                                            Đã Duyệt
                                            @endif</td>
                                        <td>
                                            <div class="d-flex"> 
                                            <a href="{{route('PostAdmin.edit',$p->id)}}" >
                                                    
                                                        <button type="submit" class="btn btn-danger btn-sm">Sửa</button>
                                                  
                                                </a>   ||   
                                               
                                                    <form method="post" action="{{route('PostAdmin.destroy',$p->id)}}">
                                                        @method('delete')
                                                        @csrf
                                                       
                                                        <button type="submit" class="btn btn-danger btn-sm">Xóa</button>
                                   
                                                      
                                                    </form>
                                              
                                            </div>
                                        </td>
                                        @endforeach
                                    </tr>

                                </tbody>
                            </table>

                           
                       
                    </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

@endsection