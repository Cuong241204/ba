<?php

namespace App\Http\Controllers;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthencationController extends Controller
{
    //
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
        $email = $request->email;
        $password = $request->password;

//        if ($validator->fails()) {
//            return redirect()->back()->withErrors($validator)->withInput();
//        }


        $user = User::where('email', $email)->first();

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            if ($user->is_admin == 2) {
                return redirect('admin/home')->with('message', 'Đăng nhập thành công');
            } else {
                return redirect('user/infor')->with('message', 'Đăng nhập thành công');
            }
        }

        return redirect()->back()->with('error', 'Email hoặc mật khẩu không đúng');



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

        if ($validator) {
            $firstName = $request->firstName;
            $userName = $request->userName;
            $tel = $request->tel;
            $address = $request->address;
            $email = $request->email;
            $password = $request->password;
            $repeatPassword = $request->repeatPassword;

            if ($password == $repeatPassword) {
                // Check if the email address already exists
                $existingUser = User::where('email', $email)->first();

                if ($existingUser) {
                    return redirect()->back()->withInput()->with('error', 'Email đã tồn tại, vui lòng sử dụng một email khác.');
                }

                // Hash the password securely
                $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

                $data = [
                    'name' => $firstName . ' ' . $userName,
                    'email' => $email,
                    'password' => $hashedPassword,
                    'tel' => $tel,
                    'address' => $address,
                    'is_admin' => '1',
                    'email_verified_at' => Carbon::now(),
                    'sex' => '1',
                ];

                User::create($data);

                return redirect('/login')->with('message', 'Đăng ký thành công, vui lòng đăng nhập');
            }
        }

        return redirect()->back()->withInput()->withErrors($validator);
    }
}
