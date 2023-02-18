@extends('layout.main')
@section('content')
      <form action="{{route('saveUpdateProduct/'.$getOneProduct->id)}}" method="post">
        <div class="form-group">
            <label for="my-input">Ten</label>
            <input id="my-input" class="form-control" type="text" value="{{$getOneProduct->ten_sp}}" name="ten_sp">
        </div>
        <div class="form-group">
            <label for="my-input">Gia</label>
            <input id="my-input" class="form-control" type="text" value="{{$getOneProduct->gia}}" name="gia">
        </div>
        <button type="submit" class="btn btn-primary" name="update">Cap nhat</button>
      </form>
@endsection
   