@extends('layout.main')
@section('content')
@if(isset($_SESSION['errors']) && isset($_GET['msg']))
    <ul>
            @foreach($_SESSION['errors'] as $error)
                <li style="color: red">{{ $error }}</li>
            @endforeach
    </ul>
    @endif
    @if(isset($_SESSION['success']) && isset($_GET['msg']))
        <span style="color: green">{{ $_SESSION['success'] }}</span>
    @endif

        <h1>Thêm sản phẩm</h1>
            <form action="{{route('post-product')}}" method="POST">
                <div class="form-group">
                    <label for="my-input">Tên sản phẩm</label>
                    <input id="my-input" class="form-control" type="text" name="ten_sp" placeholder="Vui lòng nhập tên sản phẩm">
                </div>
                <div class="form-group">
                    <label for="my-input">Đơn giá</label>
                    <input id="my-input" class="form-control" type="text" name="gia" placeholder="Vui lòng nhập giá sản phẩm">
                </div>
                <input type="submit" value="Thêm sản phẩm" name="add" class="btn btn-primary">
                <a href="test" class="btn btn-primary">Danh sách</a>
        </form>

@endsection