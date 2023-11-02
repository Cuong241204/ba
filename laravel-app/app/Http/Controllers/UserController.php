<?php

namespace App\Http\Controllers;


use App\Events\PusherBroadcast;
use App\Models\FullCalendar;
use App\Models\MessageModel;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Validator;

class UserController extends Controller
{
    public function index() {

    }

    public function welcome() {
        $title ='Bệnh viện Hồng Ngọc';
        return view('welcome', compact('title'));
    }

    public function calendar($email) {
        $user = User::where('email', $email)->first();
        $title ='Đặt lịch khám';
        return view('user/calendar', compact('title', 'user'));
    }

    public function registerAppointment(Request $request) {

        $email = $request->patient_email;
        $content = $request->appointment_content;
        $date = $request->appointment_date;

        $data = [
            'email' => $email,
            'content_calendar' => $content,
            'date_pick_ticket' => $date
        ];

        FullCalendar::create($data);

        return response()->json(['message' => 'Đã đăng ký lịch khám thành công.'], 201);

    }
    public function deleteAppointment(Request $request) {
        $id = $request->id;
        $res =  FullCalendar::find($id);
        if ($res) {
            $res->delete();
            return response()->json(['message' => 'Xoá thành công'], 200);
        } else {
            return response()->json(['message' => 'Lỗi'], 400);
        }
    }
    public function getAppointment($email) {
        $res =  FullCalendar::where('email', $email)->get();
        return response()->json(['calendar' => $res]);
    }

    public function inforCaseRecord() {
        $user = Auth::user();
        $title ='Xem hồ sơ bệnh án ';
        return view('user/infor', compact('title', 'user'));
    }

    public function message($email) {
        $user = User::where('email', $email)->first();
        $listAdmins = User::where('is_admin', 2)->get();
        $title = 'Tư vấn bác sĩ';
        return view('user/message', compact('title', 'user', 'listAdmins'));
    }

    public function broadcast(Request $request) {
        $title = 'Tư vấn bác sĩ';
        broadcast(new PusherBroadcast($request->get('message')))->toOthers();

        return view('user/message', ['message'=> $request->get('message'), 'title'=>$title]);
    }
    public function receive(Request $request) {
        $title = 'Tư vấn bác sĩ';
        return view('admin/message', ['message'=> $request->get('message'), 'title'=>$title]);
    }
    public function consultative() {
        return view('user/calendar');
    }

    function getUser()
    {

    }

    public function updateUsers(Request $request, $email) {
        $request->validate(
            [
                'username' => 'required',
                'address' => 'required',
                'tel' => 'required',
                'Email' => 'required|email',
                'Male' => 'required',
                'birth' => 'required',
                'date_medic' => 'required',
                'id_card' => 'required',
                'work' => 'required',

            ],[
                'user_name.required' => 'Họ tên bắt buộc phải nhập',
                'address.required' => 'Địa chỉ bắt buộc phải nhập',
                'tel.required' => 'Số điện thoại bắt buộc phải nhập',
                'Email.required' => 'Email bắt buộc phải nhập',
                'Email.email' => 'Xin vui lòng kiểm tra lại email',
                'Male.required' => 'Vui lòng xác minh giới tính',
                'birth.required' => 'Vui lòng nhập ngày sinh',
                'date_medic.required' => 'Vui lòng nhập ngày khám',
                'id_card.required' => 'Số thẻ bảo hiểm bắt buộc phải nhập',
                'work.required' => 'Vui lòng nhập công việc của bạn',


            ]
        );
        $dataUpdate = [
            'name' => $request->username,
            'email' => $request->email,
            'tel' => $request->tel,
            'birth' => $request->birth,
            'date_medic' => $request->date_medic,
            'id_card' => $request->id_card,
            'work' => $request->work,
            'note' => $request->note,
        ];

        User::where('email', $email)->update($dataUpdate);

        // Optionally, you can return a success message or redirect
        return redirect()->back()->with('message-success', 'Thông tin cập nhật thành công');

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

}
