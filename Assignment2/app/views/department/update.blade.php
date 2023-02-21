@extends('layout.main')
@section('home-section')
    <div class="container">
        <h1 class="mt-2">Cập nhật thông tin phòng ban</h1>
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
        <form action="{{ route('saveUpdateDepartment/' . $getOneDepartment->id) }}" method="post" enctype="multipart/form-data">
            <input type="hidden" name="id" value="{{ $getOneDepartment->id }}">
            <div class="form-group">
                <label>Phòng ban:</label>
                <input type="text" name="name" class="form-control" value="{{ $getOneDepartment->name }}"
                    placeholder="Vui lòng nhập phòng ban">

            </div>
            <div class="form-group mt-3">
                <button type="submit" class="btn btn-primary" name="update_department">Cập nhật</button>
                <button type="reset" class="btn btn-danger">Nhập lại</button>
                <a href="{{route('listDepartment')}}" class="btn btn-success">Danh sách</a>
            </div>
        </form>
    </div>
@endsection
