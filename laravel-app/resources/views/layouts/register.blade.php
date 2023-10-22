@extends('layouts.head')
<!-- Section: Design Block -->
<section class="background-radial-gradient overflow-hidden" style="height: 100vh">
    <style>
        .background-radial-gradient {
            background-color: hsl(218, 41%, 15%);
            background-image: radial-gradient(650px circle at 0% 0%,
            hsl(218, 41%, 35%) 15%,
            hsl(218, 41%, 30%) 35%,
            hsl(218, 41%, 20%) 75%,
            hsl(218, 41%, 19%) 80%,
            transparent 100%),
            radial-gradient(1250px circle at 100% 100%,
                hsl(218, 41%, 45%) 15%,
                hsl(218, 41%, 30%) 35%,
                hsl(218, 41%, 20%) 75%,
                hsl(218, 41%, 19%) 80%,
                transparent 100%);
        }

        #radius-shape-1 {
            height: 220px;
            width: 220px;
            top: -60px;
            left: -130px;
            background: radial-gradient(#44006b, #ad1fff);
            overflow: hidden;
        }

        #radius-shape-2 {
            border-radius: 38% 62% 63% 37% / 70% 33% 67% 30%;
            bottom: -60px;
            right: -110px;
            width: 300px;
            height: 300px;
            background: radial-gradient(#44006b, #ad1fff);
            overflow: hidden;
        }

        .bg-glass {
            background-color: hsla(0, 0%, 100%, 0.9) !important;
            backdrop-filter: saturate(200%) blur(25px);
        }
    </style>

    <div class="container px-4 py-5 px-md-5 text-center text-lg-start my-5">
        <div class="row gx-lg-5 align-items-center mb-5">
            <div class="col-lg-6 mb-5 mb-lg-0" style="z-index: 10">
                <h1 class="my-5 display-5 fw-bold ls-tight" style="color: hsl(218, 81%, 95%)">
                    BỆNH VIỆN ĐA KHOA  <br />
                    <span style="color: hsl(218, 81%, 75%)"> HỒNG NGỌC </span>
                </h1>
                <p class="mb-4 opacity-70" style="color: hsl(218, 81%, 85%)">
                    Thăm khám và điều trị tại Bệnh viện Đa khoa Hồng Ngọc, khách hàng sẽ được trải nghiệm các dịch vụ chăm sóc sức khỏe chất lương cao đạt tiêu chuẩn quốc tế.
                </p>
            </div>

            <div class="col-lg-6 mb-5 mb-lg-0 position-relative">
                <div id="radius-shape-1" class="position-absolute rounded-circle shadow-5-strong"></div>
                <div id="radius-shape-2" class="position-absolute shadow-5-strong"></div>

                <div class="card bg-glass">
                    <div class="card-body px-4 py-5 px-md-5">
                        <form action="#" method="POST">
                            @csrf
                            @if($errors -> any())
                                <div class="alert alert-danger text-center  container">
                                    Vui lòng kiểm tra dữ liệu đầu vào
                                </div>
                            @endif
                            <!-- 2 column grid layout with text inputs for the first and last names -->
                            <div class="row">
                                <div class="col-md-6 mb-4">
                                    @error('first-name')
                                    <span style="color: red; font-style: italic; font-size: 15px" >{{$message}}</span>
                                    @enderror
                                    <div class="form-outline">
                                        <input type="text" id="form3Example1" class="form-control" name="firstName" />
                                        <label class="form-label" for="form3Example1">Họ và tên đệm</label>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    @error('user-name')
                                    <span style="color: red; font-style: italic; font-size: 15px" >{{$message}}</span>
                                    @enderror
                                    <div class="form-outline">
                                        <input type="text" id="form3Example2" name="userName" class="form-control" />
                                        <label class="form-label" for="form3Example2">Tên</label>
                                    </div>
                                </div>
                            </div>

                            <!-- Email input -->
                            @error('tel')
                            <span style="color: red; font-style: italic; font-size: 15px" >{{$message}}</span>
                            @enderror
                            <div class="form-outline mb-4">
                                <input type="email" id="form3Example3" name="tel" class="form-control" />
                                <label class="form-label" for="form3Example3">Số điện thoại</label>
                            </div>
                            @error('address')
                            <span style="color: red; font-style: italic; font-size: 15px" >{{$message}}</span>
                            @enderror
                            <!-- Email input -->
                            <div class="form-outline mb-4">
                                <input type="email" id="form3Example3" name="address" class="form-control" />
                                <label class="form-label" for="form3Example3">Địa chỉ</label>
                            </div>
                            @error('email')
                            <span style="color: red; font-style: italic; font-size: 15px" >{{$message}}</span>
                            @enderror
                            <!-- Email input -->
                            <div class="form-outline mb-4">
                                <input type="text" id="form3Example3" name="email" class="form-control" />
                                <label class="form-label" for="form3Example3">Địa chỉ Email</label>
                            </div>

                            <!-- Password input -->
                            @error('password')
                            <span style="color: red; font-style: italic; font-size: 15px" >{{$message}}</span>
                            @enderror
                            <div class="form-outline mb-4">
                                <i class="show-pass fas fa-eye"></i>
                                <i class="show-pass far fa-eye-slash"></i>
                                <input type="password" id="form3Example4" name="password" class="form-control password" />
                                <label class="form-label" for="form3Example4">Mật khẩu</label>
                            </div>
                            @error('repeat-password')
                            <span style="color: red; font-style: italic; font-size: 15px" >{{$message}}</span>
                            @enderror
                            <div class="form-outline mb-4">
                                <input type="password" id="form3Example4" name="repeatPassword" class="form-control" />
                                <label class="form-label" for="form3Example4">Nhập lại mật khẩu</label>
                            </div>

                            <!-- Submit button -->
                            <button type="submit" class="btn btn-primary btn-block mb-4">
                                Sign up
                            </button>
                            <a href="{{route('login')}}">Bạn đã có tài khoản ? đăng nhập</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Section: Design Block -->
@extends('layouts.footer')
<style type="text/css">
    .show-pass {
        position: absolute;
        right: 45px;
        top: 13px;
    }

</style>
<script type="text/javascript">
    $(document).ready(function () {
        $('.show-pass').click(function () {
            var value = $('.password').val();
            console.log(value);
        });
    });
</script>
