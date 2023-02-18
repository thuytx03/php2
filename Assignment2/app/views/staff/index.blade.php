@extends('layout.main')
@section('home-section')
    <div class="container">
        <h1>Quản lý nhân viên</h1>
        <div class="d-flex justify-content-end">
            <a href="addStaff" class="btn btn-success">Thêm mới</a>
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
                    <th>Ảnh đại diện</th>
                    <th>Chức vụ</th>
                    <th>Phòng ban</th>
                    <th>Giới tính</th>
                    <th>Số điện thoại</th>
                    <th>Địa chỉ</th>
                    <th>Hành động</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($staffs as $value)
                    <tr>
                        <td scope="row">{{ $value->id }}</td>
                        <td>{{ $value->full_name }}</td>
                        <td><img src="{{ $value->avatar }}" width="70" alt=""></td>
                        <td>{{ $value->name_position }}</td>
                        <td>{{ $value->name_department }}</td>
                        <td>{{ $value->gender }}</td>
                        <td>{{ $value->numberphone }}</td>
                        <td>{{ $value->address }}</td>
                        <td>
                            <a href="{{route('deleteStaff/'.$value->id) }}"
                                onclick="return confirm('Bạn có chắc chắn muốn xoá Nhân Viên {{ $value->full_name }}? Hành động này có thể xoá toàn bộ dữ liệu về Nhân viên này !' )"
                                class="btn btn-danger">Xoá</a>
                            <a href="updateStaff&id={{$value->id}}" class="btn btn-primary">Sửa</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
