@extends('layout.main')
@section('home-section')
    <div class="container">
        <h1 class="mt-2">Cập nhật thông tin chức vụ</h1>
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

        <form action="{{ route('saveUpdatePosition/' . $getOnePosition->id) }}" method="post" enctype="multipart/form-data">
            <input type="hidden" name="id" value="{{ $getOnePosition->id }}  ">
            <div class="form-group">
                <label>Chức vụ:</label>
                <input type="text" name="name" class="form-control" value="{{ $getOnePosition->name }}"
                    placeholder="Vui lòng nhập chức vụ">

                <div class="form-group mt-3">
                    <button type="submit" class="btn btn-primary" name="update_position">Cập nhật</button>
                    <button type="reset" class="btn btn-danger">Nhập lại</button>
                    <a href="listPosition" class="btn btn-success">Danh sách</a>
                </div>
        </form>
    </div>
@endsection
