<div class="container">
    <h1 class="mt-2">Thêm chức vụ</h1>
    <?php if (isset($thongbao) && ($thongbao != "")) echo $thongbao; ?>

    <form action="?url=addDepartment" method="post" enctype="multipart/form-data">
      <div class="form-group">
        <label>Chức vụ:</label>
        <input type="text" name="name" class="form-control" placeholder="Vui lòng nhập phòng ban">
        <?php if(isset($error_name)) : ?>
                    <span class='error text-danger mt-2 fw-bold'><?= $error_name ?></span>
                <?php endif ?>
      </div>
      <div class="form-group">
        <button type="submit" class="btn btn-primary" name="add_department">Thêm mới</button>
        <button type="reset" class="btn btn-danger">Nhập lại</button>
        <a href="?url=listDepartment" class="btn btn-success">Danh sách</a>
      </div>
    </form>
  </div>