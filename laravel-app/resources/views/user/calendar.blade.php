@extends('user.layout.sidebar')
@section('container')
    <input id="email" value="{{$user->email}}" style="display: none"/>
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
    <div class="popup" style="display: none; position: absolute; top: 50%; left: 50%;
    transform: translate(-50%, -50%); background: white; width: 500px; padding: 20px;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2); z-index: 100;">
        <h2>Đăng ký lịch khám </h2>
        <p id="popup-date" style="font-weight: bold">Ngày: </p>
        <input id="popup-event" style="width: 100%"  placeholder="Nhập nội dung đặt lịch..."/>
        <div class="popup-footer d-flex" style="margin-top: 20px;">
            <button class="btn btn-success" style="margin-right: 10px" id="save-date">Đăng ký</button>
            <button class="btn btn-danger" style="margin-right: 10px" id="delete-event">Xoá lịch</button>
            <button class="btn btn-warning" style="margin-right: 10px" id="close-popup">Đóng</button>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var calendarEl = document.getElementById('calendar');
            var x = document.querySelector('.popup');
            var popupDate = document.getElementById('popup-date');
            var popupEvent = document.getElementById('popup-event');
            var closeButton = document.getElementById('close-popup');
            var deleteButton = document.getElementById('delete-event');
            var saveButton = document.getElementById('save-date');
            var selectedEventId = null;

            var calendar = new FullCalendar.Calendar(calendarEl, {
                initialView: 'dayGridMonth',
                events: function (fetchInfo, successCallback, failureCallback) {
                    var email = document.getElementById('email').value;
                    // Sử dụng fetch hoặc axios để gọi API
                    fetch('/api/get-appointments/${email}')
                        .then(response => response.json())
                        .then(data => {
                            // Xử lý dữ liệu từ API và trả về cho FullCalendar
                            var events = data.appointments.map(appointment => {
                                return {
                                    id: appointment.id,
                                    title: appointment.title,
                                    start: appointment.start
                                };
                            });

                            successCallback(events);
                        })
                        .catch(error => {
                            console.error(error);
                            failureCallback(error);
                        });
                },
            // {
            //     id: '1',
            //         title: 'Lịch khám 1',
            //     start: '2023-11-01'
            // },
                eventClick: function (info) {
                    selectedEventId = info.event.id;
                    popupDate.textContent = 'Ngày: ' + info.event.startStr;
                    popupEvent.textContent = 'Sự kiện: ' + info.event.title;
                    deleteButton.style.display = 'block';
                    x.style.display = 'block';
                },
                dateClick: function (info) {
                    selectedEventId = null;
                    popupDate.textContent = 'Ngày: ' + info.dateStr;
                    popupEvent.textContent = '';
                    deleteButton.style.display = 'none';
                    x.style.display = 'block';
                }
            });


            closeButton.addEventListener('click', function () {
                x.style.display = 'none';
            });

            deleteButton.addEventListener('click', function () {
                if (selectedEventId) {
                    // Xoá sự kiện với id tương ứng
                    var event = calendar.getEventById(selectedEventId);
                    if (event) {
                        event.remove();
                    }
                }
                x.style.display = 'none';
            });
            saveButton.addEventListener('click', function () {
                // Lấy dữ liệu cần lưu (ngày và nội dung)
                var appointmentDate = popupDate.textContent.replace('Ngày: ', '');
                var appointmentContent = popupEvent.textContent.replace('Sự kiện: ', '');
                var email = document.getElementById('email').value

                // Gọi API để lưu dữ liệu
                fetch('/api/register-appointment', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json'
                    },
                    body: JSON.stringify({
                        appointment_date: appointmentDate,
                        appointment_content: appointmentContent ? appointmentContent : 'Lịch khám',
                        patient_email: email,
                    })
                })
                    .then(response => response.json())
                    .then(data => {
                        // Xử lý kết quả từ API (nếu cần)
                        console.log(data);
                    })
                    .catch(error => {
                        // Xử lý lỗi (nếu có)
                        console.error(error);
                    });
                x.style.display = 'none';
            });

            calendar.render();
        });
    </script>
@endsection()
