<?php

namespace App\Http\Controllers;

use App\Models\FullCalendar;
use App\Models\MessageModel;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index() {

    }
    public function managerUsers() {
        $title ='Quản lí bệnh nhân';
        $nonAdminUsers = User::where('is_admin', '<>', 2)->get();
//        dd($nonAdminUsers);
        return view('admin.managerUser', compact(['title', 'nonAdminUsers']));
    }
    public function managerCalendar() {
        $title ='Quản lí lịch khám ';
        return view('admin.calendar', compact('title'));
    }

    public function addUser() {
        $title ='Thêm bệnh nhân ';
        return view('admin.addUser', compact('title'));
    }
    public function setAddUser(Request $request) {
        $request->validate(
            [
                'username' => 'required',
                'address' => 'required',
                'tel' => 'required',
                'Email' => 'required|email',
                'Male' => 'required',
                'birth' => 'required',
                'datemedic' => 'required',
                'idcard' => 'required',
                'work' => 'required',
                'deseasecontent' => 'required',
                'medicinecontent' => 'required',
                'password' => 'required|min:8',
                'repeatPassword' => 'required|min:8',

            ],[
                'username.required' => 'Họ tên bắt buộc phải nhập',
                'address.required' => 'Địa chỉ bắt buộc phải nhập',
                'tel.required' => 'Số điện thoại bắt buộc phải nhập',
                'Email.required' => 'Email bắt buộc phải nhập',
                'Email.email' => 'Xin vui lòng kiểm tra lại email',
                'Male.required' => 'Vui lòng xác minh giới tính',
                'birth.required' => 'Vui lòng nhập ngày sinh',
                'datemedic.required' => 'Vui lòng nhập ngày khám',
                'idcard.required' => 'Số thẻ bảo hiểm bắt buộc phải nhập',
                'work.required' => 'Vui lòng nhập công việc của bạn',
                'deseasecontent.required' => 'Nội dung bệnh bắt buộc nhập',
                'medicinecontent.required' => 'Nội dung thuốc bắt buộc nhập',
                'password.required' => 'Mật khẩu bắt buộc phải nhập',
                'password.min' => 'Mật khẩu phải lớn hơn 8 ký tự',
                'repeatPassword.required' => 'Nhập lại mật khẩu không được bỏ trống',
                'repeatPassword.min' => 'Nhập lại mật khẩu phải lớn hơn 8 ký tự',

            ]
        );
        $hashedPassword = password_hash($request->password, PASSWORD_BCRYPT);
        $data = [
            'name' => $request->username,
            'is_admin' => '1',
            'email' => $request->Email,
            'tel' => $request->tel,
            'birth' => $request->birth,
            'date_medic' => $request->datemedic,
            'id_card' => $request->idcard,
            'work' => $request->work,
            'deseasecontent' => $request->medicinecontent,
            'medicinecontent' =>  $request->medicinecontent,
            'password' => $hashedPassword,
            'address' => $request->address,
            'note' => $request->note,

        ];

        User::create($data);

        return redirect('/admin/home')->with('add-message', 'Thêm mới bệnh nhân thành công');
    }
    public function message() {
        $title ='Tư vấn bệnh nhân ';
        $users = User::where('is_admin', '<>', 2)->get();
        return view('admin.message', compact('title', 'users'));
    }

    public function inforUser($email) {
        $user = User::where('email', $email)->first();
        $title ='Thông tin bệnh nhân';
        return view('admin.infor', compact('title', 'user'));
    }

    public function updateInforUser(Request $request, $email) {

        $request->validate(
            [
                'username' => 'required',
                'address' => 'required',
                'tel' => 'required',
                'Email' => 'required|email',
                'Male' => 'required',
                'birth' => 'required',
                'datemedic' => 'required',
                'idcard' => 'required',
                'work' => 'required',
                'deseasecontent' => 'required',
                'medicinecontent' => 'required',

            ],[
                'user_name.required' => 'Họ tên bắt buộc phải nhập',
                'address.required' => 'Địa chỉ bắt buộc phải nhập',
                'tel.required' => 'Số điện thoại bắt buộc phải nhập',
                'Email.required' => 'Email bắt buộc phải nhập',
                'Email.email' => 'Xin vui lòng kiểm tra lại email',
                'Male.required' => 'Vui lòng xác minh giới tính',
                'birth.required' => 'Vui lòng nhập ngày sinh',
                'datemedic.required' => 'Vui lòng nhập ngày khám',
                'idcard.required' => 'Số thẻ bảo hiểm bắt buộc phải nhập',
                'work.required' => 'Vui lòng nhập công việc của bạn',
                'deseasecontent.required' => 'Nội dung bệnh bắt buộc nhập',
                'medicinecontent.required' => 'Nội dung thuốc bắt buộc nhập',


            ]
        );
        $dataUpdate = [
            'name' => $request->username,
            'email' => $request->email,
            'tel' => $request->tel,
            'birth' => $request->birth,
            'date_medic' => $request->datemedic,
            'id_card' => $request->idcard,
            'work' => $request->work,
            'note' => $request->note,
            'deseasecontent' => $request->medicinecontent,
            'medicinecontent' =>  $request->medicinecontent,

        ];

        User::where('email', $email)->update($dataUpdate);

        // Optionally, you can return a success message or redirect
        return redirect()->back()->with('message-success', 'Thông tin cập nhật thành công');
    }

    public function deleteUser(Request $request) {

        $email = $request->email;
        $user = User::where('email', $email)->first();

        if ($user) {
            $user->delete();
            return response()->json(['message' => 'Xóa bệnh nhân thành công']);
        } else {
            return response()->json(['message' => 'Không tìm thấy bệnh nhân']);
        }
    }
    public function getAllAppointment() {
        $res =  FullCalendar::get();
        return response()->json(['calendar' => $res]);
    }

    public function sendMessage(Request $request) {
        $user_send = $request->user_send;
        $user_to = $request->user_to;
        $content_message = $request->content_message;

        $data = [
            'from_user_id' => $user_send,
            'content_message' => $content_message,
            'to_user_td' => $user_to,
        ];

        MessageModel::create($data);

        $res = MessageModel::where('from_user_id', $user_send)->get();
        return response()->json(['message' => $res]);
    }

    public function getAllMessage($send, $to) {

        $res = MessageModel::where('from_user_id', $send)->where('to_user_td', $to)->get();

        return response()->json(['messages' => $res])->header('Content-Type', 'application/json');

    }

    public function searchUser(Request $request) {
        $keySearch = $request->searchUser;
        $users = User::where('name', $keySearch)->where('is_admin', 1)->get();

        if ($users->isEmpty()) {
            return redirect('admin/home')->with('');
        } else {
            return view('your.view.name', ['users' => $users, 'nonAdminUsers' => $keySearch]);
        }
    }
}
