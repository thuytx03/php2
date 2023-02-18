@extends('layout.main')
@section('home-section')
    <div class="container">
        <h1 class="mt-2">Danh sách phòng ban</h1>
        <p>
        <div class="d-flex justify-content-end">
            <a href="addDepartment" class="btn btn-success">Thêm mới</a>
        </div>
        @isset($_SESSION['success'])
        <div class="alert alert-success mt-2" role="alert">
            <strong>Thành công!</strong> {{ $_SESSION['success'] }}
        </div>
        @unset($_SESSION['success'])
    @endisset
        <table class="table table-striped table-inverse  text-center mt-4 ">
            <thead class="thead-inverse">
                <tr>
                    <th scope="col">ID</th>
                    <th>Phòng ban</th>
                    <th>Hành động</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($departments as $value)
                    <tr>
                        <td scope="row">{{ $value->id }}</td>
                        <td>{{ $value->name }}</td>
                        <td>
                            <a href="{{route('deleteDepartment/'.$value->id) }}"
                                onclick="return confirm('Bạn có chắc chắn muốn xoá Phòng Ban {{ $value->name }} ? Hành động này có thể xoá toàn bộ dữ liệu về Phòng Ban này !' )"
                                class="btn btn-danger">Xoá</a>
                            <a href="{{route('updateDepartment/'.$value->id) }}" class="btn btn-primary">Sửa</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
