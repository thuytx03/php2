@extends('layout.main')
@section('home-section')
    <div class="container">
        <h1 class="mt-2">Cập nhật thông tin nhân viên</h1>
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
        <form action="saveUpdateStaff" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="id" value="{{ $getOneStaff->id }}">
            <div class="row">
                <div class="form-group col-6 ">
                    <label>Họ và tên:</label>
                    <input type="text" name="full_name" value="{{ $getOneStaff->full_name }}" class="form-control"
                        placeholder="Vui lòng nhập họ và tên">
                </div>
                <div class="form-group col-6 ">
                    <label for="my-input">Chức vụ:</label>
                    <select name="position_id" id="" class="form-control">
                        <option value="">Vui lòng chọn chức vụ</option>
                        @foreach ($position as $value)
                            <option @if ($getOneStaff->position_id == $value->id) selected @endif value="{{ $value->id }}">
                                {{ $value->name }} </option>
                        @endforeach
                    </select>

                </div>
                <div class="form-group col-6 mt-3">
                    <label for="my-input">Phòng ban:</label>
                    <select name="department_id" id="" class="form-control">
                        <option value="">Vui lòng chọn phòng ban</option>

                        @foreach ($department as $value)
                            <option @if ($getOneStaff->department_id == $value->id) selected @endif value="{{ $value->id }}">
                                {{ $value->name }} </option>
                        @endforeach
                    </select>

                </div>
                <div class="form-group col-6 mt-3">
                    <label>Ảnh đại diện:</label>
                    <input type="file" name="avatar" class="form-control" placeholder="">

                </div>
                <div class="form-group col-6 mt-3">
                    <label>Giới tính:</label>
                    <br>
                    <fieldset class="form-control">
                        <input type="radio" name="gender" class="" placeholder="" value="Nam"
                            {{ $getOneStaff->gender == 'Nam' ? 'checked' : '' }}> Nam
                        <input type="radio" name="gender" class="" placeholder="" value="Nữ"
                            {{ $getOneStaff->gender == 'Nữ' ? 'checked' : '' }}> Nữ
                    </fieldset>

                </div>
                <div class="form-group col-6 mt-3">
                    <label>Số điện thoại:</label>
                    <input type="number" min="0" name="numberphone" class="form-control"
                        placeholder="Vui lòng nhập số điện thoại" value="{{ $getOneStaff->numberphone }}">

                </div>
                <div class="form-group col-6 mt-3">
                    <label>Email:</label>
                    <input type="email" name="email" value="{{ $getOneStaff->email }}" class="form-control"
                        placeholder="Vui lòng nhập email">

                </div>
                <div class="form-group col-6 mt-3">
                    <label>Số CMND || CCCD:</label>
                    <input type="number" min="0" value="{{ $getOneStaff->cmnd }}" name="cmnd"
                        class="form-control" placeholder="Vui lòng nhập số CMND || CCCD">

                </div>
                <div class="form-group col-6 mt-3">
                    <label>Địa chỉ:</label>
                    <input type="text" name="address" value="{{ $getOneStaff->address }}" class="form-control"
                        placeholder="Vui lòng nhập địa chỉ">

                </div>
                <div class="form-group col-6 mt-3">
                    <label>Ngày sinh:</label>
                    <input type="date" name="birthday" class="form-control" value="{{ $getOneStaff->birthday }}">

                </div>
                <div class="form-group mt-3">
                    <button type="submit" class="btn btn-primary" name="update_staff">Cập nhật</button>
                    <button type="reset" class="btn btn-danger">Nhập lại</button>
                    <a href="{{ route('listStaff') }}" class="btn btn-success">Danh sách</a>
                </div>
            </div>
        </form>


    </div>
@endsection
