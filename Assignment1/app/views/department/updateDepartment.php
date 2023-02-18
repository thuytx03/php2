<div class="container">
    <h1 class="mt-2">Cập nhật thông tin phòng ban</h1>
    <?php if (isset($thongbao) && ($thongbao != "")) echo $thongbao; ?>

    <form action="?url=updateDepartment" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?= $getOneDepartment['id'] ?>">
      <div class="form-group">
        <label>Phòng ban:</label>
        <input type="text" name="name" class="form-control" value="<?= $getOneDepartment['name'] ?>" placeholder="Vui lòng nhập phòng ban">
        <?php if(isset($error_name)) : ?>
                    <span class='error text-danger mt-2 fw-bold'><?= $error_name ?></span>
                <?php endif ?>
      </div>
      <div class="form-group">
        <button type="submit" class="btn btn-primary" name="update_department">Cập nhật</button>
        <button type="reset" class="btn btn-danger">Nhập lại</button>
        <a href="?url=listPosition" class="btn btn-success">Danh sách</a>
      </div>
    </form>
  </div>