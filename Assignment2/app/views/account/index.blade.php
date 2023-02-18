@extends('layout.main')
@section('home-section')
    <div class="container">
        <h1>Quản lý tài khoản</h1>
        <div class="d-flex justify-content-end">
            <a href="addAccount" class="btn btn-success">Thêm mới</a>
        </div>
        @isset($_SESSION['success'])
        <div class="alert alert-success mt-2" role="alert">
            <strong>Thành công!</strong> {{ $_SESSION['success'] }}
        </div>
        @unset($_SESSION['success'])
        @endisset
        <table class="table table-striped table-inverse table-responsive text-center mt-3">
            <thead class="thead-inverse">
                <tr>
                    <th>ID</th>
                    <th>Họ và tên</th>
                    <th>Email</th>
                    <th>Mật khẩu</th>
                    <th>Vai trò</th>
                    <th>Hành động</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($accounts as $value)
                    <tr>
                        <td scope="row">{{ $value->id }}</td>
                        <td>{{ $value->name }}</td>
                        <td>{{ $value->email }}</td>
                        <td>*****************</td>
                        <td>{{ $value->role==1? "Chủ tịch" : "Kế toán" }}</td>
                       
                        <td>
                            <a href="{{route('deleteAccount/'.$value->id) }}"
                                onclick="return confirm('Bạn có chắc chắn muốn xoá Tài khoản {{ $value->full_name }}? Hành động này có thể xoá toàn bộ dữ liệu về Tài khoản này !' )"
                                class="btn btn-danger">Xoá</a>
                            <a href="{{route('updateAccount/'.$value->id) }}" class="btn btn-primary">Sửa</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
