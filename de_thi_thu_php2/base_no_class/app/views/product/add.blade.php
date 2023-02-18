@extends('layout.main')
@section('content')
      <form action="{{route('saveAddProduct')}}" method="post">
        <div class="form-group">
            <label for="my-input">Ten</label>
            <input id="my-input" class="form-control" type="text" name="ten_sp">
        </div>
        <div class="form-group">
            <label for="my-input">Gia</label>
            <input id="my-input" class="form-control" type="text" name="gia">
        </div>
        <button type="submit" class="btn btn-primary" name="add">Them</button>
      </form>
@endsection
   