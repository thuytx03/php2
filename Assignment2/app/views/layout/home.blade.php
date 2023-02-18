@extends('layout.main')
@section('home-section')
    <style>
        .navHome:hover {
            text-decoration: underline;
        }
    </style>

    @isset($_SESSION['errors'])
        <ul style="display:grid; grid-template-columns: 1fr 1fr; gap:5px; margin-left:-25px ">
            @foreach ($_SESSION['errors'] as $error)
                <div class="alert alert-danger" role="alert">
                    Warning!{{ $error }}
                </div>
            @endforeach
            @unset($_SESSION['errors'])
        </ul>
    @endisset

    @isset($_SESSION['success'])
        <div class="alert alert-success" role="alert">
            <strong>Thành công!</strong> {{ $_SESSION['success'] }}
        </div>
        @unset($_SESSION['success'])
    @endisset
    <div class="container mt-5 ">
        <div class="row">
            <h2 class="text-center">Chào mừng bạn đến với giao diện quản lý website của {{$_SESSION['auth']['role']==1? "Chủ tịch" : "Kế toán" }}</h2>
            <br>
            <h3 class="text-center">Tại đây bạn có thể quản lý website tại mục lục</h3>
            <br>
            <h4 class="text-center">Chi tiết mục lục</h4>
            <br>

            <div class="d-flex justify-content-center">
                @if($_SESSION['auth']['role']==1)
                <ul class="navbar-nav  ">
                    <li class="nav-item active navHome  ">
                        <a class="nav-link" href="listPosition">- Chức vụ - Quản lý chức vụ</a>
                    </li>
                    <li class="nav-item active navHome">
                        <a class="nav-link" href="listDepartment">- Phòng ban - Quản lý phòng ban</a>
                    </li>
                    <li class="nav-item active navHome">
                        <a class="nav-link" href="listStaff">- Nhân viên - Quản lý nhân viên</a>
                    </li>
                    <li class="nav-item active navHome">
                        <a class="nav-link" href="listSalary">- Lương - Quản lý lương</a>
                    </li>
                    <li class="nav-item active navHome">
                        <a class="nav-link" href="listAccount">- Tài khoản - Quản lý tài khoản</a>
                    </li>

                </ul>
                @endif
                @if($_SESSION['auth']['role']==2)
                <ul class="navbar-nav  ">
                    <li class="nav-item active navHome">
                        <a class="nav-link" href="listSalary">- Lương - Quản lý lương</a>
                    </li>
                </ul>

                @endif

            </div>



        </div>

    </div>
@endsection
