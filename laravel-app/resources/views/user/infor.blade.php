@include('layouts.head')
<div class="row d-flex justify-content-end">
    <div class="">
        @include('user.layout.sidebar')
    </div>
    <div class="col-10">
        <div class="add-user" style="width: 1300px; margin: 30px auto 0px;
        outline: 1px solid #dadada; border-radius: 10px;
        padding: 10px"> <h3>Thông tin bệnh nhân</h3>
            <form action="#" method="POST">
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
                            <input type="text" id="form12" class="form-control" name="user-name" value="Cuong"/>
                            <label class="form-label" for="form12">Tên bệnh nhân</label>
                        </div>
                        @error('address')
                        <span style="color: red; font-style: italic; font-size: 15px" >{{$message}}</span>
                        @enderror
                        <div class="form-outline">
                            <input type="text" id="form12" class="form-control" name="address"/>
                            <label class="form-label" for="form12">Địa chỉ</label>
                        </div>
                        @error('tel')
                        <span style="color: red; font-style: italic; font-size: 15px" >{{$message}}</span>
                        @enderror
                        <div class="form-outline">
                            <input type="text" id="form12" class="form-control" name="tel"/>
                            <label class="form-label" for="form12">Số điện thoại</label>
                        </div>
                        @error('Email')
                        <span style="color: red; font-style: italic; font-size: 15px" >{{$message}}</span>
                        @enderror
                        <div class="form-outline">
                            <input type="text" id="form12" class="form-control" name="Email"/>
                            <label class="form-label" for="form12">Email</label>
                        </div>
                        <label>
                            Giới tính
                        </label>
                        @error('Male')
                        <span style="color: red; font-style: italic; font-size: 15px" >{{$message}}</span>
                        @enderror
                        <div class="form-check">
                            <input class="form-check-input" type="radio"  id="flexRadioDefault1" name="Male"/>
                            <label class="form-check-label" for="flexRadioDefault1"> Nam </label>
                        </div>

                        <!-- Default checked radio -->
                        @error('Female')
                        <span style="color: red; font-style: italic; font-size: 15px" >{{$message}}</span>
                        @enderror
                        <div class="form-check " style="margin-bottom: 15px">
                            <input class="form-check-input" type="radio" name="Female" id="flexRadioDefault2"
                                   checked/>
                            <label class="form-check-label" for="flexRadioDefault2"> Nữ</label>
                        </div>
                    </div>
                    <div class="col-6">
                        @error('birth')
                        <span style="color: red; font-style: italic; font-size: 15px" >{{$message}}</span>
                        @enderror
                        <div class="form-outline">
                            <input type="text" id="form12" class="form-control" name="birth"/>
                            <label class="form-label" for="form12">Ngày sinh</label>
                        </div>
                        @error('date-medic')
                        <span style="color: red; font-style: italic; font-size: 15px" >{{$message}}</span>
                        @enderror
                        <div class="form-outline">
                            <input type="text" id="form12" class="form-control" name="date-medic"/>
                            <label class="form-label" for="form12">Ngày khám</label>
                        </div>
                        @error('id-card')
                        <span style="color: red; font-style: italic; font-size: 15px" >{{$message}}</span>
                        @enderror
                        <div class="form-outline">
                            <input type="text" id="form12" class="form-control" name="id-card"/>
                            <label class="form-label" for="form12">Số thẻ bảo hiểm y tế</label>
                        </div>
                        @error('work')
                        <span style="color: red; font-style: italic; font-size: 15px" >{{$message}}</span>
                        @enderror
                        <div class="form-outline">
                            <input type="text" id="form12" class="form-control" name="work"/>
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
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="desease-content"></textarea>
                    </div>
                    @error('medicine-content')
                    <span style="color: red; font-style: italic; font-size: 15px" >{{$message}}</span>
                    @enderror
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Nội dung thuốc</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="medicine-content"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Ghi chú</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="note" ></textarea>
                    </div>
                    @csrf
                    <button class="btn btn-primary"><i class="fas fa-save"></i>Lưu lại</button>
                </div>
            </form>
        </div>
    </div>
</div>
<style>
    .form-outline {
        margin-bottom: 30px;
    }
    form input.active,form textarea.active {
        color: black !important;
    }
    form input, form textarea {
        color: white !important;
    }

</style>

@include('layouts.footer')

