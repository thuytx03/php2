<div class="container-fluid">
    <h1 class="mt-2">Danh sách chấm công</h1>
    <p>
    <div class="d-flex justify-content-end">
        <!-- <a href="?url=addPosition" class="btn btn-success">Chấm công</a> -->
    </div>
    <?php if (isset($thongbao) && ($thongbao != "")) echo $thongbao; ?>

    <table class="table table-striped table-inverse text-center mt-4 ">
        <thead class="thead-inverse">
            <tr>
                <th scope="col">STT</th>
                <th>ID Nhân viên</th>
                <th>Tên Nhân viên</th>
                <th>Số ngày công</th>
                <th>Nghỉ phép</th>
                <th>Nghỉ không phép </th>
                <th>Năm/Tháng</th>
                <th>Hành động</th>
            </tr>
        </thead>
        <tbody>

        <?php foreach ($timekeeping as $index => $time) { ?>
                <tr>
                <td scope="row"><?= $index + 1 ?></td>
                <td><?= $time['staff_id'] ?></td>
                <td><?= $time['staff_name'] ?></td>
                <td><?= $time['work_day'] ?></td>
                <td><?= $time['on_leave'] ?></td>
                <td><?= $time['unexcused_leave'] ?></td>
                <td><?= $time['month'] ?></td>

                    <td>
                        <!-- <a href="?url=deletePosition&id=<?= $value['id'] ?>" class="btn btn-danger">Xoá</a> -->
                        <a href="?url=editTimekeeping&id=<?= $time['staff_id'] ?>" class="btn btn-danger">Chỉnh sửa</a>
                        <a href="?url=addTimekeeping&id=<?= $time['staff_id']  ?>" class="btn btn-primary" name="chamcong">Chấm công</a>
                    </td>   
                </tr>
                <?php } ?>

           
        </tbody>
    </table>


    <!-- Optional JavaScript -->
</div>