@include('layouts.head')
<div class="row d-flex justify-content-end">
    <div class="">
        @include('admin.layout.sidebar')
    </div>
    <div class="col-10">
        <div class="add-medic"
             style="width: 1300px; margin: 30px auto 0px; border-bottom: 1px solid #dadada; padding-bottom: 10px">
            <a href="{{route('addUser')}}" class="btn btn-primary"><i class="fas fa-address-card" style="padding-right: 10px"></i>Thêm bệnh
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
                    <th>Bác sĩ</th>
                    <th>Bệnh án</th>
                    <th>Hành động</th>
                    <th>Ghi chú</th>
                </tr>
                </thead>
                <tbody>
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
                                <p class="fw-bold mb-1">John Doe</p>
                                <p class="text-muted mb-0">john.doe@gmail.com</p>
                            </div>
                        </div>
                    </td>
                    <td>
                        <p class="fw-normal mb-1">Software engineer</p>
                        <p class="text-muted mb-0">IT department</p>
                    </td>
                    <td>
                        <span class="badge badge-success rounded-pill d-inline">Active</span>
                    </td>
                    <td>Senior</td>
                    <td>
                        <button class="btn btn-primary">
                            <i class="fas fa-edit"></i> Sửa
                        </button>
                        <button class="btn btn-danger">
                            <i class="fas fa-user-times"></i> Xóa
                        </button>
                    </td>
                    <td>Junior</td>
                </tr>
                <tr>
                    <td>
                        <div class="d-flex align-items-center">
                            <img
                                    src="https://mdbootstrap.com/img/new/avatars/6.jpg"
                                    class="rounded-circle"
                                    alt=""
                                    style="width: 45px; height: 45px"
                            />
                            <div class="ms-3">
                                <p class="fw-bold mb-1">Alex Ray</p>
                                <p class="text-muted mb-0">alex.ray@gmail.com</p>
                            </div>
                        </div>
                    </td>
                    <td>
                        <p class="fw-normal mb-1">Consultant</p>
                        <p class="text-muted mb-0">Finance</p>
                    </td>
                    <td>
        <span class="badge badge-primary rounded-pill d-inline"
        >Onboarding</span
        >
                    </td>
                    <td>Junior</td>
                    <td>
                        <button class="btn btn-primary">
                            <i class="fas fa-edit"></i> Sửa
                        </button>
                        <button class="btn btn-danger">
                            <i class="fas fa-user-times"></i> Xóa
                        </button>
                    </td>
                    <td>Junior</td>
                </tr>
                <tr>
                    <td>
                        <div class="d-flex align-items-center">
                            <img
                                    src="https://mdbootstrap.com/img/new/avatars/7.jpg"
                                    class="rounded-circle"
                                    alt=""
                                    style="width: 45px; height: 45px"
                            />
                            <div class="ms-3">
                                <p class="fw-bold mb-1">Kate Hunington</p>
                                <p class="text-muted mb-0">kate.hunington@gmail.com</p>
                            </div>
                        </div>
                    </td>
                    <td>
                        <p class="fw-normal mb-1">Designer</p>
                        <p class="text-muted mb-0">UI/UX</p>
                    </td>
                    <td>
                        <span class="badge badge-warning rounded-pill d-inline">Awaiting</span>
                    </td>
                    <td>Senior</td>
                    <td>
                        <button class="btn btn-primary">
                            <i class="fas fa-edit"></i> Sửa
                        </button>
                        <button class="btn btn-danger">
                            <i class="fas fa-user-times"></i> Xóa
                        </button>
                    </td>
                    <td>Junior</td>
                </tr>
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
                                <p class="fw-bold mb-1">John Doe</p>
                                <p class="text-muted mb-0">john.doe@gmail.com</p>
                            </div>
                        </div>
                    </td>
                    <td>
                        <p class="fw-normal mb-1">Software engineer</p>
                        <p class="text-muted mb-0">IT department</p>
                    </td>
                    <td>
                        <span class="badge badge-success rounded-pill d-inline">Active</span>
                    </td>
                    <td>Senior</td>
                    <td>
                        <button class="btn btn-primary">
                            <i class="fas fa-edit"></i> Sửa
                        </button>
                        <button class="btn btn-danger">
                            <i class="fas fa-user-times"></i> Xóa
                        </button>
                    </td>
                    <td>Junior</td>
                </tr>
                <tr>
                    <td>
                        <div class="d-flex align-items-center">
                            <img
                                    src="https://mdbootstrap.com/img/new/avatars/6.jpg"
                                    class="rounded-circle"
                                    alt=""
                                    style="width: 45px; height: 45px"
                            />
                            <div class="ms-3">
                                <p class="fw-bold mb-1">Alex Ray</p>
                                <p class="text-muted mb-0">alex.ray@gmail.com</p>
                            </div>
                        </div>
                    </td>
                    <td>
                        <p class="fw-normal mb-1">Consultant</p>
                        <p class="text-muted mb-0">Finance</p>
                    </td>
                    <td>
        <span class="badge badge-primary rounded-pill d-inline"
        >Onboarding</span
        >
                    </td>
                    <td>Junior</td>
                    <td>
                        <button class="btn btn-primary">
                            <i class="fas fa-edit"></i> Sửa
                        </button>
                        <button class="btn btn-danger">
                            <i class="fas fa-user-times"></i> Xóa
                        </button>
                    </td>
                    <td>Junior</td>
                </tr>
                <tr>
                    <td>
                        <div class="d-flex align-items-center">
                            <img
                                    src="https://mdbootstrap.com/img/new/avatars/7.jpg"
                                    class="rounded-circle"
                                    alt=""
                                    style="width: 45px; height: 45px"
                            />
                            <div class="ms-3">
                                <p class="fw-bold mb-1">Kate Hunington</p>
                                <p class="text-muted mb-0">kate.hunington@gmail.com</p>
                            </div>
                        </div>
                    </td>
                    <td>
                        <p class="fw-normal mb-1">Designer</p>
                        <p class="text-muted mb-0">UI/UX</p>
                    </td>
                    <td>
                        <span class="badge badge-warning rounded-pill d-inline">Awaiting</span>
                    </td>
                    <td>Senior</td>
                    <td>
                        <button class="btn btn-primary">
                            <i class="fas fa-edit"></i> Sửa
                        </button>
                        <button class="btn btn-danger">
                            <i class="fas fa-user-times"></i> Xóa
                        </button>
                    </td>
                    <td>Junior</td>
                </tr>
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
                                <p class="fw-bold mb-1">John Doe</p>
                                <p class="text-muted mb-0">john.doe@gmail.com</p>
                            </div>
                        </div>
                    </td>
                    <td>
                        <p class="fw-normal mb-1">Software engineer</p>
                        <p class="text-muted mb-0">IT department</p>
                    </td>
                    <td>
                        <span class="badge badge-success rounded-pill d-inline">Active</span>
                    </td>
                    <td>Senior</td>
                    <td>
                        <button class="btn btn-primary">
                            <i class="fas fa-edit"></i> Sửa
                        </button>
                        <button class="btn btn-danger">
                            <i class="fas fa-user-times"></i> Xóa
                        </button>
                    </td>
                    <td>Junior</td>
                </tr>
                <tr>
                    <td>
                        <div class="d-flex align-items-center">
                            <img
                                    src="https://mdbootstrap.com/img/new/avatars/6.jpg"
                                    class="rounded-circle"
                                    alt=""
                                    style="width: 45px; height: 45px"
                            />
                            <div class="ms-3">
                                <p class="fw-bold mb-1">Alex Ray</p>
                                <p class="text-muted mb-0">alex.ray@gmail.com</p>
                            </div>
                        </div>
                    </td>
                    <td>
                        <p class="fw-normal mb-1">Consultant</p>
                        <p class="text-muted mb-0">Finance</p>
                    </td>
                    <td>
        <span class="badge badge-primary rounded-pill d-inline"
        >Onboarding</span
        >
                    </td>
                    <td>Junior</td>
                    <td>
                        <button class="btn btn-primary">
                            <i class="fas fa-edit"></i> Sửa
                        </button>
                        <button class="btn btn-danger">
                            <i class="fas fa-user-times"></i> Xóa
                        </button>
                    </td>
                    <td>Junior</td>
                </tr>
                <tr>
                    <td>
                        <div class="d-flex align-items-center">
                            <img
                                    src="https://mdbootstrap.com/img/new/avatars/7.jpg"
                                    class="rounded-circle"
                                    alt=""
                                    style="width: 45px; height: 45px"
                            />
                            <div class="ms-3">
                                <p class="fw-bold mb-1">Kate Hunington</p>
                                <p class="text-muted mb-0">kate.hunington@gmail.com</p>
                            </div>
                        </div>
                    </td>
                    <td>
                        <p class="fw-normal mb-1">Designer</p>
                        <p class="text-muted mb-0">UI/UX</p>
                    </td>
                    <td>
                        <span class="badge badge-warning rounded-pill d-inline">Awaiting</span>
                    </td>
                    <td>Senior</td>
                    <td>
                        <button class="btn btn-primary">
                            <i class="fas fa-edit"></i> Sửa
                        </button>
                        <button class="btn btn-danger">
                            <i class="fas fa-user-times"></i> Xóa
                        </button>
                    </td>
                    <td>Junior</td>
                </tr>
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
                                <p class="fw-bold mb-1">John Doe</p>
                                <p class="text-muted mb-0">john.doe@gmail.com</p>
                            </div>
                        </div>
                    </td>
                    <td>
                        <p class="fw-normal mb-1">Software engineer</p>
                        <p class="text-muted mb-0">IT department</p>
                    </td>
                    <td>
                        <span class="badge badge-success rounded-pill d-inline">Active</span>
                    </td>
                    <td>Senior</td>
                    <td>
                        <button class="btn btn-primary">
                            <i class="fas fa-edit"></i> Sửa
                        </button>
                        <button class="btn btn-danger">
                            <i class="fas fa-user-times"></i> Xóa
                        </button>
                    </td>
                    <td>Junior</td>
                </tr>
                <tr>
                    <td>
                        <div class="d-flex align-items-center">
                            <img
                                    src="https://mdbootstrap.com/img/new/avatars/6.jpg"
                                    class="rounded-circle"
                                    alt=""
                                    style="width: 45px; height: 45px"
                            />
                            <div class="ms-3">
                                <p class="fw-bold mb-1">Alex Ray</p>
                                <p class="text-muted mb-0">alex.ray@gmail.com</p>
                            </div>
                        </div>
                    </td>
                    <td>
                        <p class="fw-normal mb-1">Consultant</p>
                        <p class="text-muted mb-0">Finance</p>
                    </td>
                    <td>
        <span class="badge badge-primary rounded-pill d-inline"
        >Onboarding</span
        >
                    </td>
                    <td>Junior</td>
                    <td>
                        <button class="btn btn-primary">
                            <i class="fas fa-edit"></i> Sửa
                        </button>
                        <button class="btn btn-danger">
                            <i class="fas fa-user-times"></i> Xóa
                        </button>
                    </td>
                    <td>Junior</td>
                </tr>
                <tr>
                    <td>
                        <div class="d-flex align-items-center">
                            <img
                                    src="https://mdbootstrap.com/img/new/avatars/7.jpg"
                                    class="rounded-circle"
                                    alt=""
                                    style="width: 45px; height: 45px"
                            />
                            <div class="ms-3">
                                <p class="fw-bold mb-1">Kate Hunington</p>
                                <p class="text-muted mb-0">kate.hunington@gmail.com</p>
                            </div>
                        </div>
                    </td>
                    <td>
                        <p class="fw-normal mb-1">Designer</p>
                        <p class="text-muted mb-0">UI/UX</p>
                    </td>
                    <td>
                        <span class="badge badge-warning rounded-pill d-inline">Awaiting</span>
                    </td>
                    <td>Senior</td>
                    <td>
                        <button class="btn btn-primary">
                            <i class="fas fa-edit"></i> Sửa
                        </button>
                        <button class="btn btn-danger">
                            <i class="fas fa-user-times"></i> Xóa
                        </button>
                    </td>
                    <td>Junior</td>
                </tr>
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
                                <p class="fw-bold mb-1">John Doe</p>
                                <p class="text-muted mb-0">john.doe@gmail.com</p>
                            </div>
                        </div>
                    </td>
                    <td>
                        <p class="fw-normal mb-1">Software engineer</p>
                        <p class="text-muted mb-0">IT department</p>
                    </td>
                    <td>
                        <span class="badge badge-success rounded-pill d-inline">Active</span>
                    </td>
                    <td>Senior</td>
                    <td>
                        <button class="btn btn-primary">
                            <i class="fas fa-edit"></i> Sửa
                        </button>
                        <button class="btn btn-danger">
                            <i class="fas fa-user-times"></i> Xóa
                        </button>
                    </td>
                    <td>Junior</td>
                </tr>
                <tr>
                    <td>
                        <div class="d-flex align-items-center">
                            <img
                                    src="https://mdbootstrap.com/img/new/avatars/6.jpg"
                                    class="rounded-circle"
                                    alt=""
                                    style="width: 45px; height: 45px"
                            />
                            <div class="ms-3">
                                <p class="fw-bold mb-1">Alex Ray</p>
                                <p class="text-muted mb-0">alex.ray@gmail.com</p>
                            </div>
                        </div>
                    </td>
                    <td>
                        <p class="fw-normal mb-1">Consultant</p>
                        <p class="text-muted mb-0">Finance</p>
                    </td>
                    <td>
        <span class="badge badge-primary rounded-pill d-inline"
        >Onboarding</span
        >
                    </td>
                    <td>Junior</td>
                    <td>
                        <button class="btn btn-primary">
                            <i class="fas fa-edit"></i> Sửa
                        </button>
                        <button class="btn btn-danger">
                            <i class="fas fa-user-times"></i> Xóa
                        </button>
                    </td>
                    <td>Junior</td>
                </tr>
                <tr>
                    <td>
                        <div class="d-flex align-items-center">
                            <img
                                    src="https://mdbootstrap.com/img/new/avatars/7.jpg"
                                    class="rounded-circle"
                                    alt=""
                                    style="width: 45px; height: 45px"
                            />
                            <div class="ms-3">
                                <p class="fw-bold mb-1">Kate Hunington</p>
                                <p class="text-muted mb-0">kate.hunington@gmail.com</p>
                            </div>
                        </div>
                    </td>
                    <td>
                        <p class="fw-normal mb-1">Designer</p>
                        <p class="text-muted mb-0">UI/UX</p>
                    </td>
                    <td>
                        <span class="badge badge-warning rounded-pill d-inline">Awaiting</span>
                    </td>
                    <td>Senior</td>
                    <td>
                        <button class="btn btn-primary">
                            <i class="fas fa-edit"></i> Sửa
                        </button>
                        <button class="btn btn-danger">
                            <i class="fas fa-user-times"></i> Xóa
                        </button>
                    </td>
                    <td>Junior</td>
                </tr>
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
                                <p class="fw-bold mb-1">John Doe</p>
                                <p class="text-muted mb-0">john.doe@gmail.com</p>
                            </div>
                        </div>
                    </td>
                    <td>
                        <p class="fw-normal mb-1">Software engineer</p>
                        <p class="text-muted mb-0">IT department</p>
                    </td>
                    <td>
                        <span class="badge badge-success rounded-pill d-inline">Active</span>
                    </td>
                    <td>Senior</td>
                    <td>
                        <button class="btn btn-primary">
                            <i class="fas fa-edit"></i> Sửa
                        </button>
                        <button class="btn btn-danger">
                            <i class="fas fa-user-times"></i> Xóa
                        </button>
                    </td>
                    <td>Junior</td>
                </tr>
                <tr>
                    <td>
                        <div class="d-flex align-items-center">
                            <img
                                    src="https://mdbootstrap.com/img/new/avatars/6.jpg"
                                    class="rounded-circle"
                                    alt=""
                                    style="width: 45px; height: 45px"
                            />
                            <div class="ms-3">
                                <p class="fw-bold mb-1">Alex Ray</p>
                                <p class="text-muted mb-0">alex.ray@gmail.com</p>
                            </div>
                        </div>
                    </td>
                    <td>
                        <p class="fw-normal mb-1">Consultant</p>
                        <p class="text-muted mb-0">Finance</p>
                    </td>
                    <td>
        <span class="badge badge-primary rounded-pill d-inline"
        >Onboarding</span
        >
                    </td>
                    <td>Junior</td>
                    <td>
                        <button class="btn btn-primary">
                            <i class="fas fa-edit"></i> Sửa
                        </button>
                        <button class="btn btn-danger">
                            <i class="fas fa-user-times"></i> Xóa
                        </button>
                    </td>
                    <td>Junior</td>
                </tr>
                <tr>
                    <td>
                        <div class="d-flex align-items-center">
                            <img
                                    src="https://mdbootstrap.com/img/new/avatars/7.jpg"
                                    class="rounded-circle"
                                    alt=""
                                    style="width: 45px; height: 45px"
                            />
                            <div class="ms-3">
                                <p class="fw-bold mb-1">Kate Hunington</p>
                                <p class="text-muted mb-0">kate.hunington@gmail.com</p>
                            </div>
                        </div>
                    </td>
                    <td>
                        <p class="fw-normal mb-1">Designer</p>
                        <p class="text-muted mb-0">UI/UX</p>
                    </td>
                    <td>
                        <span class="badge badge-warning rounded-pill d-inline">Awaiting</span>
                    </td>
                    <td>Senior</td>
                    <td>
                        <button class="btn btn-primary">
                            <i class="fas fa-edit"></i> Sửa
                        </button>
                        <button class="btn btn-danger">
                            <i class="fas fa-user-times"></i> Xóa
                        </button>
                    </td>
                    <td>Junior</td>
                </tr>
                </tbody>
            </table>
        </div>

    </div>
</div>
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

@include('layouts.footer')
