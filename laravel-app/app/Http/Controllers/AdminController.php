<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index() {

    }
    public function managerUsers() {
        $title ='Quản lí bệnh nhân ';
        return view('admin.managerUser', compact('title'));
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
                'user-name' => 'required',
                'address' => 'required',
                'tel' => 'required',
                'Email' => 'required|email',
                'Male' => 'required',
                'Female' => 'required',
                'birth' => 'required',
                'date-medic' => 'required',
                'id-card' => 'required',
                'work' => 'required',
                'desease-content' => 'required',
                'medicine-content' => 'required',

            ],[
                'user-name.required' => 'Họ tên bắt buộc phải nhập',
                'address.required' => 'Địa chỉ bắt buộc phải nhập',
                'tel.required' => 'Số điện thoại bắt buộc phải nhập',
                'Email.required' => 'Email bắt buộc phải nhập',
                'Email.email' => 'Xin vui lòng kiểm tra lại email',
                'Male.required' => 'Vui lòng xác minh giới tính',
                'Female.required' => 'Vui lòng xác minh giới tính',
                'birth.required' => 'Vui lòng nhập ngày sinh',
                'date-medic.required' => 'Vui lòng nhập ngày khám',
                'id-card.required' => 'Số thẻ bảo hiểm bắt buộc phải nhập',
                'work.required' => 'Vui lòng nhập công việc của bạn',
                'desease-content.required' => 'Nội dung bệnh bắt buộc nhập',
                'medicine-content.required' => 'Nội dung thuốc bắt buộc nhập',


            ]
        );
    }
    public function message() {
        $title ='Tư vấn bệnh nhân ';
        return view('admin.message', compact('title'));
    }


}
