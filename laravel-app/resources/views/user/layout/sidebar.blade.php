@extends('layouts.head')
@php
@endphp
@section('content')
    <div class="row">
        <div class="">
            <div class="">
                <div class="wrapper">
                    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
                        <!-- Left navbar links -->
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i
                                        class="fas fa-bars"></i></a>
                            </li>
                            <li class="nav-item d-none d-sm-inline-block">
                                <a href="../index3.html" class="nav-link">Home</a>
                            </li>
                            <li class="nav-item d-none d-sm-inline-block">
                                <a href="#" class="nav-link">Contact</a>
                            </li>
                        </ul>

                        <!-- Right navbar links -->
                        <ul class="navbar-nav ml-auto">
                            <!-- Navbar Search -->
                            <li class="nav-item">
                                <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                                    <i class="fas fa-search"></i>
                                </a>
                                <div class="navbar-search-block">
                                    <form class="form-inline">
                                        <div class="input-group input-group-sm">
                                            <input class="form-control form-control-navbar" type="search" placeholder="Search"
                                                   aria-label="Search">
                                            <div class="input-group-append">
                                                <button class="btn btn-navbar" type="submit">
                                                    <i class="fas fa-search"></i>
                                                </button>
                                                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                                                    <i class="fas fa-times"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </li>

                            <!-- Messages Dropdown Menu -->
                            <li class="nav-item dropdown">
                                <a class="nav-link" data-toggle="dropdown" href="#">
                                    <i class="far fa-comments"></i>
                                    <span class="badge badge-danger navbar-badge">3</span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                                    <a href="#" class="dropdown-item">
                                        <!-- Message Start -->
                                        <div class="media">
                                            <img src="../dist/img/user1-128x128.jpg" alt="User Avatar"
                                                 class="img-size-50 mr-3 img-circle">
                                            <div class="media-body">
                                                <h3 class="dropdown-item-title">
                                                    Brad Diesel
                                                    <span class="float-right text-sm text-danger"><i
                                                            class="fas fa-star"></i></span>
                                                </h3>
                                                <p class="text-sm">Call me whenever you can...</p>
                                                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                                            </div>
                                        </div>
                                        <!-- Message End -->
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <a href="#" class="dropdown-item">
                                        <!-- Message Start -->
                                        <div class="media">
                                            <img src="../dist/img/user8-128x128.jpg" alt="User Avatar"
                                                 class="img-size-50 img-circle mr-3">
                                            <div class="media-body">
                                                <h3 class="dropdown-item-title">
                                                    John Pierce
                                                    <span class="float-right text-sm text-muted"><i
                                                            class="fas fa-star"></i></span>
                                                </h3>
                                                <p class="text-sm">I got your message bro</p>
                                                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                                            </div>
                                        </div>
                                        <!-- Message End -->
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <a href="#" class="dropdown-item">
                                        <!-- Message Start -->
                                        <div class="media">
                                            <img src="../dist/img/user3-128x128.jpg" alt="User Avatar"
                                                 class="img-size-50 img-circle mr-3">
                                            <div class="media-body">
                                                <h3 class="dropdown-item-title">
                                                    Nora Silvester
                                                    <span class="float-right text-sm text-warning"><i
                                                            class="fas fa-star"></i></span>
                                                </h3>
                                                <p class="text-sm">The subject goes here</p>
                                                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                                            </div>
                                        </div>
                                        <!-- Message End -->
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
                                </div>
                            </li>
                            <!-- Notifications Dropdown Menu -->
                            <li class="nav-item dropdown">
                                <a class="nav-link" data-toggle="dropdown" href="#">
                                    <i class="far fa-bell"></i>
                                    <span class="badge badge-warning navbar-badge">15</span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                                    <span class="dropdown-item dropdown-header">15 Notifications</span>
                                    <div class="dropdown-divider"></div>
                                    <a href="#" class="dropdown-item">
                                        <i class="fas fa-envelope mr-2"></i> 4 new messages
                                        <span class="float-right text-muted text-sm">3 mins</span>
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <a href="#" class="dropdown-item">
                                        <i class="fas fa-users mr-2"></i> 8 friend requests
                                        <span class="float-right text-muted text-sm">12 hours</span>
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <a href="#" class="dropdown-item">
                                        <i class="fas fa-file mr-2"></i> 3 new reports
                                        <span class="float-right text-muted text-sm">2 days</span>
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                                    <i class="fas fa-expand-arrows-alt"></i>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
                                    <i class="fas fa-th-large"></i>
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <div class="">
                        <aside class="main-sidebar sidebar-dark-primary elevation-4">
                            <div class="sidebar">
                                <div class="user-panel mt-3 pb-3 mb-3 ">
                                    <div class="image d-block">
                                        <img id="click-avt" src="https://bootdey.com/img/Content/avatar/avatar1.png" class="img-circle elevation-2" alt="User Image">
                                    </div>

                                    <div class="info" style="color: white !important;">
                                        @yield('userData')

                                    <div id="div-info" class="info" style="display: none">

                                        <div class="sides" style="color:white">
                                            <div >
                                                <i class="far fa-eye"></i>
                                                Xem thông tin
                                            </div>
                                            <div>
                                                <i class="fas fa-lock"></i>
                                                Đổi mật khẩu
                                            </div>
                                            <div>
                                                <i class="fas fa-sign-out-alt"></i>
                                                Đăng xuất
                                            </div>
                                        </div>


                                    </div>

                                </div>

                                <!-- SidebarSearch Form -->
                                <div class="form-inline">
                                    <div class="input-group" data-widget="sidebar-search">
                                        <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                                               aria-label="Search">
                                        <div class="input-group-append">
                                            <button class="btn btn-sidebar">
                                                <i class="fas fa-search fa-fw"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>

                                <!-- Sidebar Menu -->
                                <nav class="mt-2">
                                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                                        data-accordion="false">

                                        <li class="nav-item">
                                            <a href="{{route('infor', ['email' => $user->email])}}"
                                               class="nav-link
                                           {{(request()->is("user/infor/*")) ? 'active' : ''}}

                                           ">
                                                <i class="nav-icon  fas fa-users"></i>
                                                <p>
                                                    Thông tin bệnh án
                                                </p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{route('calendar', ['email' => $user->email])}}"
                                               class="nav-link {{(request()->is("user/calendar/*")) ? 'active' : ''}}">
                                                <i class="nav-icon fas fa-calendar"></i>
                                                <p>
                                                     Đặt lịch khám
                                                </p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{route('message', ['email' => $user->email])}}"
                                               class="nav-link  {{(request()->is("user/message/*")) ? 'active' : ''}}">
                                                <i class="nav-icon fas fa-comment-dots"></i>
                                                <p>
                                                    Tư vấn bác sĩ
                                                </p>
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </aside>
                    </div>

                </div>
            </div>
        </div>
        @yield('container')

        <style>
            body {
                overflow-x: hidden;
            }

            body:not(.layout-fixed) .main-sidebar {
                height: 200vh;
            }
            .sides div:hover {
                color:#8babe0;

            }
        </style>
    </div>
    <script>
        var eventClick = document.getElementById('click-avt');
        var divInfo = document.getElementById('div-info');
        var isDivInfoVisible = false;

        eventClick.addEventListener('click', function(event) {
            if (isDivInfoVisible) {
                divInfo.style.display = 'none'; // Ẩn 'div-info' nếu nó đang hiển thị
            } else {
                divInfo.style.display = 'block'; // Hiển thị 'div-info' nếu nó đang ẩn
            }
            isDivInfoVisible = !isDivInfoVisible; // Đảo ngược trạng thái
        });


    </script>
@endsection
