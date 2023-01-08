<!doctype html>
<html lang="en">

<head>
  <title>Cập nhật thông tin nhân viên</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>

  <div class="container">
    <h1>Cập nhật thông tin nhân viên</h1>
    <form action="?url=updateStaff" method="post" enctype="multipart/form-data">
      <input type="hidden" name="id" value="<?php if(isset($getOneStaff['id']) && ($getOneStaff['id']>0))  echo $getOneStaff['id'];  ?>">

      <div class="form-group">
        <label>Họ và tên:</label>
        <input type="text" name="full_name" value="<?php if (isset($getOneStaff['full_name']) && ($getOneStaff['full_name'] != "")) echo $getOneStaff['full_name'];  ?>" class="form-control" placeholder="Vui lòng nhập họ và tên">
        <span class='error text-danger mt-2 fw-bold'><?php echo isset($_SESSION['error_name']) ? $_SESSION['error_name'] : "" ?></span>
        <?php unset($_SESSION['error_name']);?>
        
      </div>
      <div class="form-group">
        <label>Ảnh đại diện:</label>
        <input type="file" name="avatar" class="form-control" placeholder="">
      
      </div>
      <div class="form-group">
        <label>Giới tính:</label>
        <br>
        <fieldset class="form-control">
          <input type="radio" name="gender" class="" placeholder="" value="Nam" <?= $getOneStaff['gender'] == "Nam" ? "checked" : "" ?>> Nam
          <input type="radio" name="gender" class="" placeholder="" value="Nữ" <?= $getOneStaff['gender'] == "Nữ" ? "checked" : "" ?>> Nữ
        </fieldset>
      

      </div>
      <div class="form-group">
        <label>Lương:</label>
        <input type="text" name="salary" value="<?php  echo $getOneStaff['salary']; ?>" class="form-control" placeholder="Vui lòng nhập lương">
        <span class='error text-danger mt-2 fw-bold'><?php echo isset($_SESSION['error_salary']) ? $_SESSION['error_salary'] : "" ?></span>
        <?php unset($_SESSION['error_salary']);?>
      </div>
      <div class="form-group">
        <label>Địa chỉ:</label>
        <input type="text" name="address" value="<?= $getOneStaff['address'] ?>" class="form-control" placeholder="Vui lòng nhập địa chỉ">
        <span class='error text-danger mt-2 fw-bold'><?php echo isset($_SESSION['error_address']) ? $_SESSION['error_address'] : "" ?></span>
        <?php unset($_SESSION['error_address']);?>
      </div>
      <div class="form-group">
        <button type="submit" class="btn btn-primary" name="update_staff">Cập nhật</button>
        <button type="reset" class="btn btn-danger">Nhập lại</button>
        <a href="?url=listStaff" class="btn btn-success">Danh sách</a>
      </div>


    </form>
  </div>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>