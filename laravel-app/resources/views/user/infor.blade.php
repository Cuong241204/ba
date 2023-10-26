 @extends('user.layout.sidebar')
@section('container')
    @if (\Session::has('message'))
        <div class="alert alert-success"
             style="position: absolute;
             top: 50px ; z-index: 10000;
             width: 500px;
             margin-left: auto;
             margin-right: auto;
             left: 0;
             right: 0;
             text-align: center;
        ">
            {!! \Session::get('message') !!}
        </div>
    @endif
    <div style="position: absolute; left: 265px; top: 70px;">
        <div class="col-10">
            <div class="add-user" style="width: 1300px; margin: 30px auto 0px;
        outline: 1px solid #dadada; border-radius: 10px;
        padding: 10px">
                <h3 style="padding-bottom: 20px">Thông tin bệnh nhân</h3>
                <form action="#" method="POST">
                    @csrf
                    @if($errors -> any())
                        <div class="alert alert-danger text-center  container">
                            Vui lòng kiểm tra dữ liệu đầu vào
                        </div>
                    @endif
                    <div class="row">
                        <div class="col-6">
                            @error('user-name')
                            <span style="color: red; font-style: italic; font-size: 15px" >{{$message}}</span>
                            @enderror
                            <div class="form-outline">
                                <input type="text" id="form12" class="form-control" name="user-name" value="{{$user->name}}"/>
                                <label class="form-label" for="form12">Tên bệnh nhân</label>
                            </div>
                            @error('address')
                            <span style="color: red; font-style: italic; font-size: 15px" >{{$message}}</span>
                            @enderror
                            <div class="form-outline">
                                <input type="text" id="form12" class="form-control" name="address" value="{{$user->address}}"/>
                                <label class="form-label" for="form12">Địa chỉ</label>
                            </div>
                            @error('tel')
                            <span style="color: red; font-style: italic; font-size: 15px" >{{$message}}</span>
                            @enderror
                            <div class="form-outline">
                                <input type="text" id="form12" class="form-control" name="tel" value="{{$user->tel}}"/>
                                <label class="form-label" for="form12">Số điện thoại</label>
                            </div>
                            @error('Email')
                            <span style="color: red; font-style: italic; font-size: 15px" >{{$message}}</span>
                            @enderror
                            <div class="form-outline">
                                <input type="text" id="form12" class="form-control" name="Email" value="{{$user->email}}"/>
                                <label class="form-label" for="form12">Email</label>
                            </div>
                            <label>
                                Giới tính
                            </label>
                            @error('Male')
                            <span style="color: red; font-style: italic; font-size: 15px" >{{$message}}</span>
                            @enderror
                            <div class="form-check">
                                <input type="radio" class="form-check-input" id="radio1" name="Male" value="0" checked>Nam
                                <label class="form-check-label" for="radio1"></label>
                            </div>
                            <div class="form-check">
                                <input type="radio" class="form-check-input" id="radio2" name="Male" value="1">Nữ
                                <label class="form-check-label" for="radio2"></label>
                            </div>

                        </div>
                        <div class="col-6">
                            @error('birth')
                            <span style="color: red; font-style: italic; font-size: 15px" >{{$message}}</span>
                            @enderror
                            <div class="form-outline">
                                <input type="text" id="form12" class="form-control" name="birth" value="{{$user->birth}}"/>
                                <label class="form-label" for="form12">Ngày sinh</label>
                            </div>
                            @error('date-medic')
                            <span style="color: red; font-style: italic; font-size: 15px" >{{$message}}</span>
                            @enderror
                            <div class="form-outline">
                                <input type="text" id="form12" class="form-control" name="date-medic" value="{{$user->birth_medic}}"/>
                                <label class="form-label" for="form12">Ngày khám</label>
                            </div>
                            @error('id-card')
                            <span style="color: red; font-style: italic; font-size: 15px" >{{$message}}</span>
                            @enderror
                            <div class="form-outline">
                                <input type="text" id="form12" class="form-control" name="id-card" value="{{$user->id_card}}"/>
                                <label class="form-label" for="form12">Số thẻ bảo hiểm y tế</label>
                            </div>
                            @error('work')
                            <span style="color: red; font-style: italic; font-size: 15px" >{{$message}}</span>
                            @enderror
                            <div class="form-outline">
                                <input type="text" id="form12" class="form-control" name="work" value="{{$user->work}}"/>
                                <label class="form-label" for="form12">Nghề nghiêp</label>
                            </div>
                        </div>
                    </div>
                    <div style="border-top: 1px solid #dadada" >
                        <h4 style="margin-top:30px">Thông tin khám sàng lọc </h4>
                        @error('desease-content')
                        <span style="color: red; font-style: italic; font-size: 15px" >{{$message}}</span>
                        @enderror
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Nội dung bệnh</label>
                            <textarea <?php if ($user->is_admin == 2) { echo "disabled";} ?> class="form-control <?php if ($user->is_admin == 2) { echo "not-edit";} ?>" id="exampleFormControlTextarea1" rows="3" name="desease-content"></textarea>
                        </div>
                        @error('medicine-content')
                        <span style="color: red; font-style: italic; font-size: 15px" >{{$message}}</span>
                        @enderror
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Nội dung thuốc</label>
                            <textarea <?php if ($user->is_admin == 2) { echo "disabled";} ?> class="form-control <?php if ($user->is_admin == 2) { echo "not-edit";} ?>" id="exampleFormControlTextarea1" rows="3" name="medicine-content"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Ghi chú</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="note" ></textarea>
                        </div>
                        @csrf
                        <button class="btn btn-primary">
                            <i class="fas fa-save"></i>
                            Lưu lại
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <style>
        .form-outline {
            margin-bottom: 30px;
        }

    </style>
@endsection()

