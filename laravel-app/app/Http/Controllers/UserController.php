<?php

namespace App\Http\Controllers;


use App\Events\PusherBroadcast;
use App\Models\FullCalendar;
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
    public function getAppointment($email) {
        $res =  FullCalendar::where('email', $email)->get();
        return response()->json(['calendar' => $res]);
    }

    public function inforCaseRecord() {
        $user = Auth::user();
        $title ='Xem hồ sơ bệnh án ';
        return view('user/infor', compact('title', 'user'));
    }

    public function message() {
        $title = 'Tư vấn bác sĩ';
        return view('user/message', compact('title'));
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
}
