<?php

namespace App\Http\Controllers;


use App\Models\User;
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

        //dd($validator);die;
        if ($validator == true) {
           foreach ($users as $user) {
               if ($email == $user->email) {
                   if ($password == $user->password) {
                       return  redirect('admin/home');
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

        if ($validator) {
            if ($password == $repeatPassword) {

                $user = User::create(request(['name', 'email', 'password']));
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
