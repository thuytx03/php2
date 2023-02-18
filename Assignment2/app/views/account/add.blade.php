@extends('layout.main')
@section('home-section')
    <div class="container">
        <h1 class="mt-2">Thêm tài khoản</h1>
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
        <strong>Thành công!</strong> {{$_SESSION['success']}}
       </div>
       @unset($_SESSION['success'])

        @endisset


        <form action="{{route('saveAddAccount')}}" method="POST" enctype="multipart/form-data">
            <div class="row">
                <div class="form-group col-6 mt-3 ">
                    <label>Họ và tên:</label>
                    <input type="text" name="name" class="form-control" placeholder="Vui lòng nhập họ và tên">
                </div>
                <div class="form-group col-6 mt-3">
                    <label>Email:</label>
                    <input type="email" name="email" class="form-control" placeholder="Vui lòng nhập email">

                </div>
                <div class="form-group col-6 mt-3">
                    <label>Mật khẩu:</label>
                    <input type="password"  name="password" class="form-control"
                        placeholder="Vui lòng nhập mật khẩu">
                </div>
                <div class="form-group col-6 mt-3">
                    <label>Vai trò:</label>
                    <br>
                    <fieldset class="form-control">
                        <input type="radio" name="role" class="" placeholder="" value="1"> Chủ tịch
                        <input type="radio" name="role" class="" placeholder="" value="2"> Kế toán
                    </fieldset>

                </div>
               
                <div class="form-group mt-3">
                    <button type="submit" class="btn btn-primary" name="add_account">Thêm mới</button>
                    <button type="reset" class="btn btn-danger">Nhập lại</button>
                    <a href="listAccount" class="btn btn-success">Danh sách</a>
                </div>
            </div>
        </form>


    </div>
@endsection
