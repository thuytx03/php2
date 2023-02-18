<div class="container">
    <h1 class="mt-2">Cập nhật chấm công</h1>
    <?php if (isset($thongbao) && ($thongbao != "")) echo $thongbao; ?>

    <form action="?url=updateTimekeeping" method="post" enctype="multipart/form-data">
      <input type="hidden" name="staff_id" value="<?= $_GET['id']?> ">
      <div class="form-group">
      <div class="form-group">
        <label>Số ngày công:</label>
        <input type="text" name="work_day" value="<?= $getOne['work_day'] ?>" class="form-control" placeholder="Vui lòng nhập số ngày công">
      </div>
      <div class="form-group">
        <label>Số ngày nghỉ phép:</label>
        <input type="text" name="on_leave" value="<?= $getOne['on_leave'] ?>" class="form-control" placeholder="Vui lòng nhập số ngày nghỉ phép">
      </div>
      <div class="form-group">
        <label>Số ngày nghỉ không phép:</label>
        <input type="text" name="unexcused_leave" value="<?= $getOne['unexcused_leave'] ?>" class="form-control" placeholder="Vui lòng nhập số ngày nghỉ không phép">
      </div>
      <div class="form-group">
        <label>Tháng:</label>
        <input type="month" name="month" value="<?= $getOne['month'] ?>" class="form-control" placeholder="Vui lòng nhập tháng">
      </div>
      
      <div class="form-group">
        <button type="submit" class="btn btn-primary" name="update_timekeeping">Cập nhật</button>
        <button type="reset" class="btn btn-danger">Nhập lại</button>
        <a href="?url=listTimekeeping" class="btn btn-success">Danh sách</a>
      </div>
    </form>
  </div>