<div class="container">
    <h1 class="mt-2">Cập nhật thông tin chức vụ</h1>
    <?php if (isset($thongbao) && ($thongbao != "")) echo $thongbao; ?>

    <form action="?url=updatePosition" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?= $getOnePosition['id'] ?>">
      <div class="form-group">
        <label>Chức vụ:</label>
        <input type="text" name="name" class="form-control" value="<?= $getOnePosition['name'] ?>" placeholder="Vui lòng nhập chức vụ">
        <?php if(isset($error_name)) : ?>
                    <span class='error text-danger mt-2 fw-bold'><?= $error_name ?></span>
                <?php endif ?>
      </div>
      <div class="form-group">
        <button type="submit" class="btn btn-primary" name="update_position">Cập nhật</button>
        <button type="reset" class="btn btn-danger">Nhập lại</button>
        <a href="?url=listPosition" class="btn btn-success">Danh sách</a>
      </div>
    </form>
  </div>