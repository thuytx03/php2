  <?php require_once './layouts/header.php'  ?>
      <div class="container">
        <h1>Danh sách nhân viên</h1>
        <p>
        <div class="d-flex justify-content-end">
            <a href="?url=addStaff" class="btn btn-success">Thêm mới</a>
        </div>
    <?php if (isset($thongbao) && ($thongbao != "")) echo $thongbao; ?>
  
      <table class="table table-striped table-inverse  text-center mt-4">
        <thead class="thead-inverse">
            <tr>
                <th scope="col">ID</th>
                <th>Họ và tên</th>
                <th>Ảnh đại diện</th>
                <th>Giới tính</th>
                <th>Địa chỉ </th>
                <th>Lương</th>
                <th>Hành động</th>
            </tr>
            </thead>
            <tbody>
                <?php foreach ($Staff as $key => $value) :?>
                <tr>
                    <td scope="row"><?= $value['id'] ?></td>
                    <td><?= $value['full_name'] ?></td>
                    <td><img src="<?= $value['avatar'] ?>" class="" width="60" alt=""></td>
                    <td><?= $value['gender']?></td>
                    <td><?= $value['address'] ?></td>
                    <td><?= $value['salary'] ?></td>
                    <td>
                        <a href="?url=removeStaff&id=<?= $value['id'] ?>" class="btn btn-danger">Xoá</a>
                        <a href="?url=editStaff&id=<?= $value['id'] ?>" class="btn btn-primary">Sửa</a>
                    </td>
                </tr>
                <?php endforeach ?>
            </tbody>
      </table>

      </div>
      <?php require_once './layouts/footer.php'  ?>
 