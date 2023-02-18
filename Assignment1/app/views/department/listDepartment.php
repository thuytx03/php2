
    <div class="container-fluid">
    <h1 class="mt-2">Danh sách phòng ban</h1>
    <p>
    <div class="d-flex justify-content-end">
        <a href="?url=addDepartment" class="btn btn-success">Thêm mới</a>
    </div>
    <?php if (isset($thongbao) && ($thongbao != "")) echo $thongbao; ?>

    <table class="table table-striped table-inverse  text-center mt-4 ">
        <thead class="thead-inverse">
            <tr>
                <th scope="col">ID</th>
                <th>Phòng ban</th>
                <th>Hành động</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ( $getAllDepartment as $key => $value) : ?>
                <tr>
                    <td scope="row"><?= $value['id'] ?></td>
                    <td><?= $value['name'] ?></td>
                    <td>
                        <a href="?url=deleteDepartment&id=<?= $value['id'] ?>" onclick="return confirm('Bạn có chắc chắn muốn xoá Phòng Ban <?= $value['name'] ?> ? Hành động này có thể xoá toàn bộ dữ liệu về Phòng Ban này !' )"  class="btn btn-danger">Xoá</a>
                        <a href="?url=editDepartment&id=<?= $value['id'] ?>" class="btn btn-primary">Sửa</a>
                    </td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>


<!-- Optional JavaScript -->
    </div>
