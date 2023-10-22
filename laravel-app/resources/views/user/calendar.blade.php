@include('layouts.head')
<div class="row d-flex justify-content-end">
    <div class="">
        @include('user.layout.sidebar')
    </div>
    <div class="col-10">
        <div id='calendar' style="width: 1200px; margin: 0 auto;"></div>

    </div>
</div>

<script>

    document.addEventListener('DOMContentLoaded', function () {
        var calendarEl = document.getElementById('calendar');
        var calendar = new FullCalendar.Calendar(calendarEl, {
            initialView: 'dayGridMonth'
        });
        calendar.render();
    });
    $('#calendar').fullCalendar({

        height: 400
    })

</script>
@include('layouts.footer')

