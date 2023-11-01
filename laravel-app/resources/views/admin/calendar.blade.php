@extends('admin.layout.sidebar')
@section('container')
    <div style="position: absolute; right: -370px; top: 70px;">
        <div id='calendar' style="width: 1200px;"></div>
    </div>
    <div class="popup" style="display: none; position: absolute; top: 50%; left: 50%;
    transform: translate(-50%, -50%); background: white; width: 500px; padding: 20px;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2); z-index: 100;">
        <h2>Thông tin lịch khám </h2>
        <p id="popup-date" style="font-weight: bold">Ngày: </p>
        <p id="email">Email bệnh nhân: </p>
        <div class="popup-footer d-flex" style="margin-top: 20px;">
            <button class="btn btn-warning" style="margin-right: 10px" id="close-popup">Đóng</button>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var calendarEl = document.getElementById('calendar');
            var x = document.querySelector('.popup');
            var popupDate = document.getElementById('popup-date');
            var popupEmail = document.getElementById('email');
            var closeButton = document.getElementById('close-popup');
            var selectedEventId = null;

            var calendar = new FullCalendar.Calendar(calendarEl, {
                initialView: 'dayGridMonth',
                events: function (fetchInfo, successCallback, failureCallback) {
                    // Sử dụng fetch hoặc axios để gọi API
                    fetch('/api/getall-appointments/', {method: 'get'})
                        .then(response => response.json())
                        .then(data => {
                            // Xử lý dữ liệu từ API và trả về cho FullCalendar
                            var events = data.calendar.map(appointment => {
                                return {
                                    id: appointment.id,
                                    title: (appointment.content_calendar) ? (appointment.content_calendar) :  'Lịch khám',
                                    start: appointment.date_pick_ticket,
                                    recurringDef: appointment.email,
                                };
                            });

                            successCallback(events);
                        })
                        .catch(error => {
                            console.error(error);
                            failureCallback(error);
                        });
                },
                eventClick: function (info) {
                    console.log(info)
                    selectedEventId = info.event.id;
                    popupDate.textContent = 'Ngày: ' + info.event.startStr;
                    popupEmail.textContent = 'Email bệnh nhân : '+ info.event.extendedProps.recurringDef;
                    x.style.display = 'block';
                },
            });


            closeButton.addEventListener('click', function () {
                x.style.display = 'none';
            });

            calendar.render();
        });
    </script>
@endsection()
