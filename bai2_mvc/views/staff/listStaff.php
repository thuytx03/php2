<!doctype html>
<html lang="en">
  <head>
    <title>Danh sách nhân viên</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
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
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>