<?php

namespace App\Http\Controllers;


use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index() {

    }

    public function welcome() {
        $title ='Bệnh viện Hồng Ngọc';
        return view('welcome', compact('title'));
    }


    public function login() {
        $title ='Đăng nhập hệ thống';
        return view('layouts.login', compact('title'));
    }

    public function setLogin(Request $request)
    {
        $validator = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:8',
        ], [
            'email.required' => 'Email bắt buộc phải nhập',
            'email.email' => 'Xin vui lòng kiểm tra lại email',
            'password.required' => 'Mật khẩu bắt buộc phải nhập',
            'password.min' => 'Mật khẩu phải lớn hơn 8 ký tự',

        ]);
        $users = DB::table('users')->get();
        $email = $request->email;
        $password = $request->password;
        if ($validator == true) {
           foreach ($users as $user) {
               if ($email == $user->email) {
                   if ($password == $user->password) {
                      if ($user->is_admin == 1) {
                          return redirect('admin/home')->with('message', 'Đăng nhập thành công');
                      } else {
                          return redirect('user/calendar')->with('message', 'Đăng nhập thành công');
                      }
                   }
               }
           }
        }



    }
    public function register() {
        $title ='Đăng ký tài khoản';
        return view('layouts.register', compact('title'));
    }

    public function setRegister(Request $request) {
        $validator = $request->validate([
            'firstName' => 'required',
            'userName' => 'required',
            'tel' => 'required',
            'address' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:8',
            'repeatPassword' => 'required|min:8',
        ], [
            'firstName.required' => 'Họ đệm bắt buộc phải nhập',
            'userName.required' => 'Tên bắt buộc phải nhập',
            'tel.required' => 'Số điện thoại bắt buộc phải nhập',
            'address.required' => 'Địa chỉ bắt buộc phải nhập',
            'email.required' => 'Email bắt buộc phải nhập',
            'email.email' => 'Xin vui lòng kiểm tra lại email',
            'password.required' => 'Mật khẩu bắt buộc phải nhập',
            'password.min' => 'Mật khẩu phải lớn hơn 8 ký tự',
            'repeatPassword.required' => 'Nhập lại mật khẩu không được bỏ trống',
            'repeatPassword.min' => 'Nhập lại mật khẩu phải lớn hơn 8 ký tự',

        ]);
        $firstName = $request->firstName;
        $userName = $request->userName;
        $tel = $request->tel;
        $address = $request->address;
        $email = $request->email;
        $password = $request->password;
        $repeatPassword = $request->repeatPassword;

        $data = [
            'name' => $firstName.' '.$userName,
            'email' => $email,
            'password' => $password,
            'tel' => $tel,
            'address' => $address,
            'is_admin' => '1',
            'email_verified_at' => Carbon::today(),
            'sex' => '1',
            'birth' =>  Carbon::today(),
            'birth_medic' =>  Carbon::today(),
            'id-card' => '',
            'work' => '',
        ];

        if ($validator) {
            if ($password == $repeatPassword) {
                User::create($data);
                return redirect('/login')->with('message', 'Đăng ký thành công, vui lòng đăng nhập');
            }

        }

    }

    public function calendar() {
        $title ='Đặt lịch khám';
        return view('user/calendar', compact('title'));
    }

    public function inforCaseRecord() {
        $title ='Xem hồ sơ bệnh án ';
        return view('user/infor', compact('title'));
    }

    public function message() {
        $title = 'Tư vấn bác sĩ';
        return view('user/message', compact('title'));
    }

    public function consultative() {
        return view('user/calendar');
    }

    function getUser()
    {

    }
}
