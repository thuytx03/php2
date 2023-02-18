@extends('layout.main')
@section('home-section')
    <div class="container">
        <h1 class="mt-2">Danh sách chức vụ</h1>
        <p>
        <div class="d-flex justify-content-end">
            <a href="addPosition" class="btn btn-success">Thêm mới</a>
        </div>
        @isset($_SESSION['success'])
            <div class="alert alert-success" role="alert">
                <strong>Thành công!</strong> {{ $_SESSION['success'] }}
            </div>
            @unset($_SESSION['success'])
        @endisset

        <table class="table table-striped table-inverse  text-center mt-4 ">
            <thead class="thead-inverse">
                <tr>
                    <th scope="col">ID</th>
                    <th>Chức vụ</th>
                    <th>Hành động</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($positions as $value)
                    <tr>
                        <td scope="row">{{ $value->id }}</td>
                        <td>{{ $value->name }}</td>
                        <td>
                            <a href="{{route('deletePosition/'.$value->id)}}"
                                onclick="return confirm('Bạn có chắc chắn muốn xoá Chức vụ {{ $value->name }} ? Hành động này có thể xoá toàn bộ dữ liệu về Chức Vụ này !' )"
                                class="btn btn-danger">Xoá</a>
                            <a href="{{route('updatePosition/'. $value->id)}}" class="btn btn-primary">Sửa</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>


        <!-- Optional JavaScript -->
    </div>
@endsection
