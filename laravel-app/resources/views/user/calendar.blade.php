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
    @section('userData')
        <div class="user-data">{{($user->name) ? $user->name : 'Xin chào' }}</div>
    @endsection
    <div style="position: absolute; left: 350px; top: 70px;">
        <div id='calendar' style="width: 1200px;"></div>
    </div>
    <div class="popup" style="display: none; position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); background: white; width: 400px; padding: 20px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2); z-index: 100;">
        <h2>Đăng ký lịch khám </h2>
        <p id="popup-date">Ngày: </p>
        <input id="popup-event"  placeholder="Nhập nội dung khám:"/>
        <button class="btn btn-success">Đăng ký</button>
        <button class="btn btn-warning" id="close-popup">Đóng</button>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var calendarEl = document.getElementById('calendar');
            var calendar = new FullCalendar.Calendar(calendarEl);
            calendar.render();

            var x = document.querySelector('.popup');
            var popupDate = document.getElementById('popup-date');
            var popupEvent = document.getElementById('popup-event');
            var closeButton = document.getElementById('close-popup');

            calendar.setOption('dateClick', function (info) {
                popupDate.textContent = 'Ngày: ' + info.dateStr;
                popupEvent.textContent = '';
                x.style.display = 'block';
            });

            closeButton.addEventListener('click', function () {
                x.style.display = 'none';
            });
            calendar.render();
        });

    </script>
@endsection()



