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

        <h1>Sửa sản phẩm</h1>
            <form action="{{BASE_URL.'updateProduct/'.$product->id}}" method="POST">
                <div class="form-group">
                    <label for="my-input">Tên sản phẩm</label>
                    <input id="my-input" class="form-control" value="{{$product->ten_sp}}" type="text" name="ten_sp" placeholder="Vui lòng nhập tên sản phẩm">
                </div>
                <div class="form-group">
                    <label for="my-input">Đơn giá</label>
                    <input id="my-input" class="form-control" type="text"value="{{$product->gia}}"  name="gia" placeholder="Vui lòng nhập giá sản phẩm">
                </div>
                <input type="submit" value="Thêm sản phẩm" name="edit" class="btn btn-primary">
        </form>

@endsection