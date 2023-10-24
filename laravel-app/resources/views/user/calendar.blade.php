@extends('user.layout.sidebar')
@section('container')
    <style>
        .popup {
            top: 200px;
            position: absolute;
            margin-left: auto;
            margin-right: auto;
            left: 0;
            right: 0;
            text-align: center;
            width: 500px;
            height: 500px;
            background: white;
            z-index: 900;
            display: none;
        }
    </style>
    @if (\Session::has('message'))
        <div class="alert alert-success">
            <ul>
                <li>{!! \Session::get('message') !!}</li>
            </ul>
        </div>
    @endif
    <div style="position: absolute; left: 350px; top: 70px;">
        <div id='calendar' style="width: 1200px;"></div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var calendarEl = document.getElementById('calendar');
            var calendar = new FullCalendar.Calendar(calendarEl, {
                initialView: 'dayGridMonth',
                dateClick: function (info) {
                    var x = document.querySelector('.popup')
                    console.log(x)
                }
            });
            calendar.render();
        });
    </script>
@endsection()



