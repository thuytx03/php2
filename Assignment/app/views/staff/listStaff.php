
    <div class="container-fluid">
    <h1>Danh sách nhân viên</h1>
    <p>
    <div class="d-flex justify-content-end">
        <a href="?url=addStaff" class="btn btn-success">Thêm mới</a>
    </div>
    <?php if (isset($thongbao) && ($thongbao != "")) echo $thongbao; ?>

    <table class="table table-striped table-inverse  text-center mt-4 ">
        <thead class="thead-inverse">
            <tr>
                <th scope="col">ID</th>
                <th>Họ và tên</th>
                <th>Ảnh đại diện</th>
                <th>Chức vụ</th>
                <th>Phòng ban</th>
                <th>Giới tính</th>
                <th>Địa chỉ </th>
                <th>Số điện thoại</th>
                <th>Số CMND || CCCD</th>
                <th>Hành động</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ( $all as $key => $value) : ?>
                <tr>
                    <td scope="row"><?= $value['id'] ?></td>
                    <td ><?= $value['full_name'] ?></td>
                    <td><img src="public/uploads/<?= $value['avatar'] ?>" class="" width="60" alt=""></td>
                    <td><?= $value['name_position'] ?></td>
                    <td><?= $value['name_department'] ?></td>
                    <td><?= $value['gender'] ?></td>
                    <td><?= $value['address'] ?></td>
                    <td><?= $value['numberphone'] ?></td>
                    <td><?= $value['cmnd'] ?></td>
                    <td>
                        <a href="?url=deleteStaff&id=<?= $value['id'] ?>" class="btn btn-danger">Xoá</a>
                        <a href="?url=editStaff&id=<?= $value['id'] ?>" class="btn btn-primary">Sửa</a>
                    </td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>


<!-- Optional JavaScript -->
    </div>
