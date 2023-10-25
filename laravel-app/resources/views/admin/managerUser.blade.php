@extends('admin.layout.sidebar')
@section('container')
    <style>
        table tbody tr td {
            border: 1px solid #dadada;
            padding: 10px;
            border-radius: 10px;

        }

        table tbody tr td:first-child {
            border-left: none;
        }

        table tbody tr:last-child td {
            border-bottom: none;
        }

        table tbody tr td:last-child {
            border-right: none;
        }

        table thead tr th {
            border-right: 1px solid #dadada;
            padding: 10px;
        }

        table thead tr th:last-child {
            border-right: none;
        }

        table thead.bg-head {
            background: #f2f3f7;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
        }


    </style>

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
    @if (\Session::has('add-message'))
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
            {!! \Session::get('add-message') !!}
        </div>
    @endif
    <div style="position: absolute; right: -110px; top: 70px;">
        <div class="">
            <div class="add-medic"
                 style="width: 1300px; margin: 30px auto 0px; border-bottom: 1px solid #dadada; padding-bottom: 10px">
                <a href="{{route('addUser')}}" class="btn btn-primary"><i class="fas fa-address-card"
                                                                          style="padding-right: 10px"></i>Thêm bệnh
                    nhân
                </a>
            </div>
            <div class="filter-search d-flex" style="width: 1300px; margin: 30px auto 0px;">
                <div class="form-outline" style="width: 50%">
                    <input type="text" id="form12" class="form-control"/>
                    <label class="form-label" for="form12">Nhập tên bệnh nhân... </label>
                </div>
                <button class="btn btn-primary"><i class="fas fa-search"></i></button>
            </div>
            <div style="outline: 1px solid #dadada;
         border-radius: 10px; width: 1300px;
         margin: 30px auto; max-height: 600px; overflow-y: auto">
                <table class="align-middle mb-0 bg-white rounded-6" style="margin: 0 auto;width: 1300px;">
                    <thead class="bg-head" style="position: sticky; top: 0">
                    <tr>
                        <th>Họ tên bệnh nhân</th>
                        <th>Ngày khám</th>
                        <th>Ngày ra viện</th>
                        <th>Bác sĩ</th>
                        <th>Bệnh án</th>
                        <th>Hành động</th>
                        <th>Ghi chú</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($nonAdminUsers as $user)
                    <tr>
                        <td>
                            <div class="d-flex align-items-center">
                                <img
                                    src="https://mdbootstrap.com/img/new/avatars/8.jpg"
                                    alt=""
                                    style="width: 45px; height: 45px"
                                    class="rounded-circle"
                                />
                                <div class="ms-3">
                                    <p class="fw-bold mb-1">{{$user->name}}</p>
                                    <p class="text-muted mb-0">{{$user->email}}</p>
                                </div>
                            </div>
                        </td>
                        <td>
                            <p class="fw-normal mb-1">{{$user->birth_medic}}</p>
                        </td>
                        <td>
                            <span class="badge badge-success rounded-pill d-inline">Active</span>
                        </td>
                        <td>Senior</td>
                        <td>
                            <a href="{{route('admin.infor', ['email' => $user->email])}}" class="btn btn-success">
                                <i class="fas fa-eye"></i> Xem infor
                            </a>
                            <button onclick="deleteUser({{$user->email}})" class="btn btn-danger">
                                <i class="fas fa-user-times"></i> Xóa
                            </button>
                        </td>
                        <td>{{$user->note}}</td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </div>
    <script>
        function deleteUser() {
            let message = 'Bạn có chắc muốn xoá bệnh nhân này không ?';
            if (confirm(message) == true) {
                ;
            }
        }
    </script>

@endsection()
