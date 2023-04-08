@extends('layouts.master')
@section('content')
    <?php
    use App\Models\categoryModel;
    $types = ['Full time', 'Part time', 'Remote', 'Freelance'];
    $type = explode(',', $id->type);
    $types = array_diff($types, $type);
    $locations = ['Intern', 'Fresher', 'Junior', 'Middel', 'Leader'];
    $location = explode(',', $id->location);
    $locations = array_diff($locations, $location);
    $skillll = categoryModel::all();
    $skills = categoryModel::all();
    $dataSkill = [];
    foreach ($skills as $key => $value) {
        array_push($dataSkill, $value->id);
    }
    $skill = explode(',', $id->skill);
    $skills = array_diff($dataSkill, $skill);
    ?>
    <div class="whole-wrap">
        <div class="container box_1170">
            <div class="section-top-border">
                <div class="row">
                    <div class="col-lg-8 col-md-8">
                        <h3 class="mb-30">Sửa Bài Đăng{{ $id->title }}</h3>
                        <form action="{{ route('PostEdit') }}" method="POST" enctype="multipart/form-data">
                            @csrf @method('POST')
                            <input type="hidden" name="id" value="{{ $id->id }}" value="1">
                            <div class="mt-10 row">
                                <div class="col-4">
                                    <span class="mb-30">Thời Gian Làm Việc </span>
                                    @foreach ($type as $item)
                                        <div class="form-check">
                                            <input class="form-check-input" name="type[]" type="checkbox"
                                                value="{{ $item }}" id="flexCheckDefault" checked>
                                            <label class="form-check-label" for="flexCheckDefault">
                                                {{ $item }}
                                            </label>
                                        </div>
                                    @endforeach
                                    @foreach ($types as $ty)
                                        <div class="form-check">
                                            <input class="form-check-input" name="type[]" type="checkbox"
                                                value="{{ $ty }}" id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                {{ $ty }}
                                            </label>
                                        </div>
                                    @endforeach
                                </div>
                                <div class="col-4">
                                    <span class="mb-30">Danh Mục</span>
                                    @foreach ($skill as $item)
                                        <div class="form-check">
                                            @foreach ($skillll as $sk)
                                                @if ($item == $sk->id)
                                                    <input class="form-check-input" name="skill[]" type="checkbox"
                                                        value="{{ $item }}" id="flexCheckDefault" checked>
                                                    <label class="form-check-label" for="flexCheckDefault">
                                                        {{ $sk->name }}
                                                    </label>
                                                @endif
                                            @endforeach
                                        </div>
                                    @endforeach
                                    @foreach ($dataSkill as $sk)
                                        <div class="form-check">
                                            @foreach ($skillll as $skk)
                                                @if ($sk == $skk->id)
                                                    <input class="form-check-input" name="skill[]" type="checkbox"
                                                        value="{{ $sk }}" id="flexCheckDefault">
                                                    <label class="form-check-label" for="flexCheckDefault">
                                                        {{ $skk->name }}
                                                    </label>
                                                @endif
                                            @endforeach

                                            </label>
                                        </div>
                                    @endforeach
                                </div>
                                <div class="col-4">
                                    <span class="mb-30">Vị Trí Đăng Tuyển</span>
                                    @foreach ($location as $item)
                                        <div class="form-check">
                                            <input class="form-check-input" name="location[]" type="checkbox"
                                                value="{{ $item }}" id="flexCheckDefault" checked>
                                            <label class="form-check-label" for="flexCheckDefault">
                                                {{ $item }}
                                            </label>
                                        </div>
                                    @endforeach
                                    @foreach ($locations as $l)
                                        <div class="form-check">
                                            <input class="form-check-input" name="location[]" type="checkbox"
                                                value="{{ $l }}" id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                {{ $l }}
                                            </label>
                                        </div>
                                    @endforeach
                                </div>

                            </div>
                            <div class="mt-10">
                                <input type="text" name="name" value="{{ $id->name }}" placeholder="Name"
                                    onfocus="this.placeholder = ''" onblur="this.placeholder = 'Last Name'" required=""
                                    class="single-input">
                            </div>
                            <div class="mt-10">
                                <input type="hidden" name="id_user" value="{{ $id->id_user }}">
                            </div>
                            <div class="mt-10">
                                <input type="email" name="email" value="{{ $id->email }}" placeholder="Email address"
                                    onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email address'" required=""
                                    class="single-input">
                            </div>
                            <div class="mt-10">
                                <input type="text" name="numberPhone" value="{{ $id->numberPhone }}"
                                    placeholder="Number Phone" onfocus="this.placeholder = ''"
                                    onblur="this.placeholder = 'Email address'" required="" class="single-input">
                            </div>
                            <div class="mt-10">
                                <input type="text" name="address" value="{{ $id->address }}" placeholder="Address"
                                    onfocus="this.placeholder = ''" onblur="this.placeholder = 'Address'" required=""
                                    class="single-input">
                            </div>
                            <div class="mt-10">
                                <input type="number" name="amount" value="{{ $id->amount }}" placeholder="Amount apply"
                                    required="" class="single-input">
                            </div>
                            <div class="mt-10">
                                <input type="number" name="minMoney" value="{{ $id->minMoney }}"
                                    placeholder="Min Money apply" required="" class="single-input">
                            </div>
                            <div class="mt-10">
                                <input type="number" name="maxMoney" value="{{ $id->maxMoney }}"
                                    placeholder="Max Money apply" required="" class="single-input">
                            </div>
                            <div class="mt-10">
                                <input type="text" name="title" value="{{ $id->title }}" placeholder="Title" required=""
                                    class="single-input">
                            </div>
                            <div class="mt-10">
                                <textarea class="single-textarea" name="content" placeholder="Content" required="">{{ $id->content }}</textarea>
                            </div>
                            <div class="mt-10">
                          
                               
                                <input type="date" name="timeEnd" class="form-control" value="{{ $id->timeEnd }}" placeholder=" nhập ngày kết thúc : 2022-12-04" id="mdate" required data-dtp="dtp_HwDDi">
                          
                        </div>
                            <div class="mt-10">
                                <button type="submit" class="single-input-secondary bg-success">Cập nhật</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
