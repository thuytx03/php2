@extends('layout.main')
@section('content')
<table border="1">
    <thead>
        <th>ID</th>
        <th>Product name</th>
        <th>Giá</th>
        <th>Action</th>
        <th><a href="{{route('addProduct')}}">Them</a></th>
    </thead>
    <tbody>
         @foreach($products as $p)
            <tr>
                <td>{{ $p->id }}</td>
                <td>{{ $p->ten_sp }}</td>
                <td>{{ $p->gia }}</td>
                <th>
                    <a href="{{ route('updateProduct/'.$p->id) }}">Sửa</a>
                    <a href="{{route('deleteProduct/'.$p->id)}}">Xóa</a>
                </th>
            </tr>
        @endforeach
    </tbody>

</table>
@endsection
