
    <div class="container-fluid">
    <h1 class="mt-2">Danh sách chức vụ</h1>
    <p>
    <div class="d-flex justify-content-end">
        <a href="?url=addPosition" class="btn btn-success">Thêm mới</a>
    </div>
    <?php if (isset($thongbao) && ($thongbao != "")) echo $thongbao; ?>

    <table class="table table-striped table-inverse  text-center mt-4 ">
        <thead class="thead-inverse">
            <tr>
                <th scope="col">ID</th>
                <th>Chức vụ</th>
                <th>Hành động</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ( $getAllPosition as $key => $value) : ?>
                <tr>
                    <td scope="row"><?= $value['id'] ?></td>
                    <td><?= $value['name'] ?></td>
                    <td>
                        <a href="?url=deletePosition&id=<?= $value['id'] ?>" onclick="return confirm('Bạn có chắc chắn muốn xoá Chức vụ <?= $value['name'] ?> ? Hành động này có thể xoá toàn bộ dữ liệu về Chức Vụ này !' )"  class="btn btn-danger">Xoá</a>
                        <a href="?url=editPosition&id=<?= $value['id'] ?>" class="btn btn-primary">Sửa</a>
                    </td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>


<!-- Optional JavaScript -->
    </div>
