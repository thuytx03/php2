@extends('layout.main')
@section('home-section')
    <div class="container">
        <h1>Quản lý Lương Nhân Viên</h1>
        <div class="d-flex justify-content-end">
            <a href="{{route('addSalary')}}" class="btn btn-success">Tính lương</a>
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
                    <th>ID Nhân viên</th>
                    <th>Họ và tên</th>
                    <th>Lương cơ bản</th>
                    <th>Số ngày công</th>
                    <th>Thưởng</th>
                    <th>Phụ cấp</th>
                    <th>VAT</th>
                    <th>Tổng lương</th>
                    <th>Hành động</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($getAllSalarys as $key => $value)
                    <tr>
                        <td scope="row">{{ $value->id }}</td>
                        <td>{{ $value->staff_id }}</td>
                        <td>{{ $value->staff_name }}</td>
                        <td>{{ $value->basic_salary }}</td>
                        <td>{{ $value->work_day }}</td>
                        <td>{{ $value->bonus }}</td>
                        <td>{{ $value->allowance }}</td>
                        <td>{{ $value->vat }}</td>
                        <td>{{ $value->total_salary }}</td>
                        <td>
                            <a href="{{route('deleteSalary/'.$value->id)}}"
                                onclick="return confirm('Bạn có chắc chắn muốn xoá Lương của {{ $value->staff_name }} ? Hành động này có thể xoá toàn bộ dữ liệu về Lương của {{ $value->staff_name }} !' )"
                                class="btn btn-danger">Xoá</a>
                            <a href="{{route('updateSalary&id='.$value->id)}}" class="btn btn-primary">Sửa</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
