@extends('layouts.master')
@section('content')
<div class="whole-wrap">
    <div class="container box_1170">
<div class="section-top-border">
    <h3 class="mb-30">Danh Sách Yêu Thích</h3>
    <div class="progress-table-wrap">
        <div class="progress-table">
            <div class="table-head">
                <div class="serial">Stt</div>
                <div class="country">Tiêu Đề </div>
                <div class="visit">Số Lượng</div>
                <div class="percentage">Trạng Thái</div>
            </div>
            @foreach ($data as $da)
            @foreach ($post as $item)
                @if ($da->post_id == $item->id)
                <div class="table-row">
                    <div class="serial">{{$item->id}}</div>
                    <div class="country"> {{$item->title}}</div>
                    <div class="visit">{{$item->amount}}</div>
    
                    <div class="percentage">
                            <a  href="{{ route('deletelove', ['id'=>$da->id]) }}">               
                                <button class="btn btn-danger btn-sm">Xóa</button>
                            </a>
                         
                            <a  href="{{ route('viewPost', ['id' => $item->id]) }}">               
                                <button class="btn btn-danger btn-sm">Xem   </button>
                            </a>
                    </div>
                </div>
                @endif
            @endforeach
            @endforeach
        </div>
    </div>
</div>
</div>
</div>
@endsection