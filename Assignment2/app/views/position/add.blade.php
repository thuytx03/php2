@extends('layout.main')
@section('home-section')
    <div class="container">
        <h1 class="mt-2">Thêm chức vụ</h1>
        
        @isset($_SESSION['errors'])
            @foreach ($_SESSION['errors'] as $error)
                <div class="alert alert-danger" role="alert">
                    Warning!{{ $error }}
                </div>
            @endforeach
            @unset($_SESSION['errors'])
        @endisset

        @isset($_SESSION['success'])
            <div class="alert alert-success" role="alert">
                <strong>Thành công!</strong> {{ $_SESSION['success'] }}
            </div>
            @unset($_SESSION['success'])
        @endisset

        <form action="saveAddPosition" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label>Chức vụ:</label>
                <input type="text" name="name" class="form-control" placeholder="Vui lòng nhập chức vụ">
            </div>
            <div class="form-group mt-3">
                <button type="submit" class="btn btn-primary" name="add_position">Thêm mới</button>
                <button type="reset" class="btn btn-danger">Nhập lại</button>
                <a href="{{route('listPosition')}}" class="btn btn-success">Danh sách</a>
            </div>
        </form>
    </div>
@endsection
