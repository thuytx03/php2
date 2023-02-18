@extends('layout.main')
@section('content')

<h1>Quản lý sản phẩm</h1>
<div class="d-flex justify-content-end">
    <a href="add-product" class="btn btn-success">Thêm mới</a>
</div>
<table class="table table-striped table-inverse mt-4 text-center ">
    <thead class="thead-inverse ">
            <tr>
                <th scope="col">ID</th>
                <th>Tên</th>
                <th>Giá</th>
                <th>Hành động</th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $pr)
            <tr>
                <td scope="row">{{$pr->id}}</td>
                <td>{{$pr->ten_sp}}</td>
                <td>{{$pr->gia}}</td>
                <td><a href="" class="btn btn-danger">Xoá</a>
                    <a href="{{route('edit-product/'.$pr->id)}}" class="btn btn-primary">Chỉnh sửa</a>
                </td>
            </tr>
            @endforeach
        </tbody>
</table>



    
@endsection