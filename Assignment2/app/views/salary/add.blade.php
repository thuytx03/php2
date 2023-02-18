@extends('layout.main')
@section('home-section')
    <div class="container">
        <h1 class="mt-2">Tính lương nhân viên</h1>
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

        <form action="{{ route('saveAddSalary') }}" method="post" enctype="multipart/form-data">
            <div class="row">
                <div class="form-group col-6 mt-3 ">
                    <label>Họ và tên:</label>
                    <select name="staff_id" class="form-control" id="">
                        <option value="">Vui lòng chọn nhân viên</option>
                        @foreach($staffs as $value)
                            <option value="{{$value->id}}">{{$value->full_name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group col-6 mt-3 ">
                    <label>Lương cơ bản:</label>
                    <input type="text" name="basic_salary" class="form-control" placeholder="Vui lòng nhập lương cơ bản">
                </div>
                <div class="form-group col-6 mt-3">
                    <label>Số ngày công:</label>
                    <input type="text" name="work_day" class="form-control" placeholder="Vui lòng nhập số ngày công">
                </div>
                <div class="form-group col-6 mt-3">
                    <label>Thưởng:</label>
                    <input type="text" name="bonus" class="form-control" placeholder="Vui lòng nhập thưởng">
                </div>
                <div class="form-group col-6 mt-3">
                    <label>Phụ cấp:</label>
                    <input type="text" name="allowance" class="form-control" placeholder="Vui lòng nhập phụ cấp">
                </div>
                <div class="form-group col-6 mt-3">
                    <label>VAT: <i>10% = 0.1</i></label>
                    <input type="text" name="vat" value="0.1" class="form-control" placeholder="Vui lòng nhập VAT">
                </div>
                <div class="form-group mt-3">
                    <button type="submit" class="btn btn-primary" name="add_salary">Tính lương</button>
                    <button type="reset" class="btn btn-danger">Nhập lại</button>
                    <a href="{{ route('listSalary') }}" class="btn btn-success">Danh sách</a>
                </div>
            </div>
        </form>
    </div>
@endsection
