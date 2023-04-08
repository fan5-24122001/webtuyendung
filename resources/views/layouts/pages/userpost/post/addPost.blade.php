@extends('layouts.master')
@section('content')

<div class="whole-wrap">
    <div class="container box_1170">
        <div class="section-top-border">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <h3 class="mb-30"> Đăng Bài Tuyển Dụng</h3>
                    <form action="{{ route('PostDataPost') }}"  method ="POST" enctype="multipart/form-data">
                        @csrf @method('POST')
                        <div class="mt-10 row">
                            <div class="col-4">
                                <span class="mb-30"> Thời Gian Làm Việc</span>
                                <div class="form-check">
                                    <input class="form-check-input" name="type[]" type="checkbox" value="Full time" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                    Full time
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" name="type[]" type="checkbox" value="Part time" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Part time
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" name="type[]" type="checkbox" value="Remote" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Remote
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" name="type[]" type="checkbox" value="Freelance" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Freelance
                                    </label>
                                </div>
                            </div >
                                <div class="col-4">
                                    <span class="mb-30"> Danh Mục</span>
                                    <div class="default-select" id="default-select"  "="">
                                        @foreach ($category as $item)
                                        <div class="form-check">
                                            <input class="form-check-input" name="skill[]" type="checkbox" value="{{$item->id}}" id="flexCheckChecked" >
                                            <label class="form-check-label" for="flexCheckChecked">
                                                {{$item->name}}
                                            </label>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                              
                                <div class="col-4">
                                    <span class="mb-30"> Vị Trí Tuyển</span>
                                    <div class="form-check">
                                        <input class="form-check-input" name="location[]" type="checkbox" value="Intern" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">
                                        Intern
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" name="location[]" type="checkbox" value="Fresher" id="flexCheckChecked" >
                                        <label class="form-check-label" for="flexCheckChecked">
                                        Fresher
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" name="location[]" type="checkbox" value="Junior" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">
                                        Junior
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" name="location[]" type="checkbox" value="Middel"  id="flexCheckChecked" >
                                        <label class="form-check-label" for="flexCheckChecked">
                                        Middel
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" name="location[]" type="checkbox" value="Leader" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">
                                        Leader
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" name="location[]" type="checkbox" value="Full Level" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">
                                        Full Level
                                        </label>
                                    </div>
                                </div>
                            </div>
                          
                        <div class="mt-10">
                            <input type="text" name="name" placeholder="Nhập Tên Cty" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nhập tên công ty'" required="" class="single-input">
                        </div>
                        
                        <div class="mt-10">
                            <input type="email" name="email" placeholder="Nhập Địa Chỉ Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nhập địa chỉ email'" required="" class="single-input">
                        </div>
                        <div class="mt-10">
                            <input type="text" name="numberPhone" placeholder=" Nhập Số Điện Thoại" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nhập số điện thoại'" required="" class="single-input">
                        </div>
                        <div class="mt-10">
                            <input type="text" name="address" placeholder="Địa Chỉ Cty Của Bạn" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nhập địa chỉ'" required="" class="single-input">
                        </div>
                        <div class="mt-10">
                            <input type="number" name="amount" placeholder=" Số Lượng Thành Viên Muốn Tuyển Dụng"  required="" class="single-input">
                        </div>
                        <div class="mt-10">
                            <input type="number" name="minMoney" placeholder="Số Tiền Thấp Nhấp" required="" class="single-input">
                        </div>
                        <div class="mt-10">
                            <input type="number" name="maxMoney" placeholder="Số Tiền Cao Nhất" required="" class="single-input">
                        </div>
                        <div class="mt-10">
                            <input type="text" name="title" placeholder=" Nhập Tên Hiển Thị"  required="" class="single-input">
                        </div>
                        <div class="mt-10">
                            <textarea class="single-textarea" name="content"  placeholder="Nhập Thông Tin Bài Viết" required=""></textarea>
                        </div>
                        <div class="mt-10">
                          
                               
                                <input type="date" name="timeEnd" class="form-control" placeholder=" nhập ngày kết thúc : 2022-12-04" id="mdate" required data-dtp="dtp_HwDDi">
                          
                        </div>
                        <div class="mt-10">
                            <button type="submit" class="single-input-secondary bg-success">Đăng bài</button>
                        </div>
                    </form>
                </div>
               
            </div>
        </div>
    </div>
</div>
@endsection