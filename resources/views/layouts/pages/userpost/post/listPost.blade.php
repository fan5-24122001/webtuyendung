@extends('layouts.master')
@section('content')
    <div class="whole-wrap">
        <div class="container box_1170">
            <div class="section-top-border">
                <h3 class="mb-30">Danh Sách Bài Đăng</h3>
                <div class="progress-table-wrap">
                    <div class="progress-table">
                        <div class="table-head">
                            <div class="serial">STT</div>
                            <div class="country">Tên Bài Viết</div>
                            <div class="country">Ngày Kết Thúc</div>
                            <div class="visit">Số Lượng</div>
                            <div class="percentage">Trạng Thái</div>
                         
                            <div class="percentage"></div>
                        </div>
                        @foreach ($data as $key => $item)
                            <div class="table-row">
                                <div class="serial">{{ $key++ }}</div>
                                <div class="country"> {{ $item->title }}</div>
                                <div class="country">{{ $item->timeEnd }}</div>
                                <div class="visit">{{ $item->amount }}</div>
                                <div class="visit">
                                    @if ($item->status == 0)
                                        Chưa Duyệt
                                    @endif
                                    @if ($item->status == 1)
                                        Đã Duyệt
                                    @endif
                                    </td>
                                  
                                </div>
                             
                                <div class="percentage">
                                    <a href="{{ route('PostDelete', ['id' => $item->id]) }}">
                                        <button class="btn btn-danger btn-sm">Xóa</button>
                                    </a>
                                    <a href="{{ route('showapplypost', ['id' => $item->id]) }}">
                                        <button class="btn btn-danger btn-sm">Kiểm Tra</button>
                                    </a>
                                    <a href="{{ route('PEdit', ['id' => $item->id]) }}">
                                        <button class="btn btn-danger btn-sm">Sửa</button>
                                    </a>
                                    <a href="{{ route('viewPost', ['id' => $item->id]) }}">
                                        <button class="btn btn-danger btn-sm">Xem</button>
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
