@extends('admin.layout.sidebar')
@section('container')
    <div style="position: absolute; right: -370px; top: 70px;">
        <div id='calendar' style="width: 1200px;"></div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var calendarEl = document.getElementById('calendar');
            var calendar = new FullCalendar.Calendar(calendarEl, {
                initialView: 'dayGridMonth'
            });
            calendar.render();
        });

    </script>
@endsection()



