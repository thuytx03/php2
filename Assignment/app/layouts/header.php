<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <!-- <link rel="stylesheet" href="../../public/css/style.css"> -->
  <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Quản lý nhân viên</title>
  <link rel="shortcut icon" href="" type="image/x-icon">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/regular.min.css" integrity="sha512-k2UAKyvfA7Xd/6FrOv5SG4Qr9h4p2oaeshXF99WO3zIpCsgTJ3YZELDK0gHdlJE5ls+Mbd5HL50b458z3meB/Q==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <style>
    /* Google Fonts Import Link */
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');

    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Poppins', sans-serif;
    }

    .sidebar {
      position: fixed;
      top: 0;
      left: 0;
      height: 100%;
      width: 260px;
      background: #11101d;
      z-index: 100;
      transition: all 0.5s ease;
    }

    .sidebar.close {
      width: 78px;
    }

    .sidebar .logo-details {
      height: 60px;
      width: 100%;
      display: flex;
      align-items: center;
    }

    .sidebar .logo-details i {
      font-size: 30px;
      color: #fff;
      height: 50px;
      min-width: 78px;
      text-align: center;
      line-height: 50px;
    }

    .sidebar .logo-details .logo_name {
      font-size: 22px;
      color: #fff;
      font-weight: 600;
      transition: 0.3s ease;
      transition-delay: 0.1s;
    }

    .sidebar.close .logo-details .logo_name {
      transition-delay: 0s;
      opacity: 0;
      pointer-events: none;
    }

    .sidebar .nav-links {
      height: 100%;
      padding: 30px 0 150px 0;
      overflow: auto;
    }

    .sidebar.close .nav-links {
      overflow: visible;
    }

    .sidebar .nav-links::-webkit-scrollbar {
      display: none;
    }

    .sidebar .nav-links li {
      position: relative;
      list-style: none;
      transition: all 0.4s ease;
    }

    .sidebar .nav-links li:hover {
      background: #1d1b31;
    }

    .sidebar .nav-links li .iocn-link {
      display: flex;
      align-items: center;
      justify-content: space-between;
    }

    .sidebar.close .nav-links li .iocn-link {
      display: block
    }

    .sidebar .nav-links li i {
      height: 50px;
      min-width: 78px;
      text-align: center;
      line-height: 50px;
      color: #fff;
      font-size: 20px;
      cursor: pointer;
      transition: all 0.3s ease;
    }

    .sidebar .nav-links li.showMenu i.arrow {
      transform: rotate(-180deg);
    }

    .sidebar.close .nav-links i.arrow {
      display: none;
    }

    .sidebar .nav-links li a {
      display: flex;
      align-items: center;
      text-decoration: none;
    }

    .sidebar .nav-links li a .link_name {
      font-size: 18px;
      font-weight: 400;
      color: #fff;
      transition: all 0.4s ease;
    }

    .sidebar.close .nav-links li a .link_name {
      opacity: 0;
      pointer-events: none;
    }

    .sidebar .nav-links li .sub-menu {
      padding: 6px 6px 14px 80px;
      margin-top: -10px;
      background: #1d1b31;
      display: none;
    }

    .sidebar .nav-links li.showMenu .sub-menu {
      display: block;
    }

    .sidebar .nav-links li .sub-menu a {
      color: #fff;
      font-size: 15px;
      padding: 5px 0;
      white-space: nowrap;
      opacity: 0.6;
      transition: all 0.3s ease;
    }

    .sidebar .nav-links li .sub-menu a:hover {
      opacity: 1;
    }

    .sidebar.close .nav-links li .sub-menu {
      position: absolute;
      left: 100%;
      top: -10px;
      margin-top: 0;
      padding: 10px 20px;
      border-radius: 0 6px 6px 0;
      opacity: 0;
      display: block;
      pointer-events: none;
      transition: 0s;
    }

    .sidebar.close .nav-links li:hover .sub-menu {
      top: 0;
      opacity: 1;
      pointer-events: auto;
      transition: all 0.4s ease;
    }

    .sidebar .nav-links li .sub-menu .link_name {
      display: none;
    }

    .sidebar.close .nav-links li .sub-menu .link_name {
      font-size: 18px;
      opacity: 1;
      display: block;
    }

    .sidebar .nav-links li .sub-menu.blank {
      opacity: 1;
      pointer-events: auto;
      padding: 3px 20px 6px 16px;
      opacity: 0;
      pointer-events: none;
    }

    .sidebar .nav-links li:hover .sub-menu.blank {
      top: 50%;
      transform: translateY(-50%);
    }

    .sidebar .profile-details {
      position: fixed;
      bottom: 0;
      width: 260px;
      display: flex;
      align-items: center;
      justify-content: space-between;
      background: #1d1b31;
      padding: 12px 0;
      transition: all 0.5s ease;
    }

    .sidebar.close .profile-details {
      background: none;
    }

    .sidebar.close .profile-details {
      width: 78px;
    }

    .sidebar .profile-details .profile-content {
      display: flex;
      align-items: center;
    }

    .sidebar .profile-details img {
      height: 52px;
      width: 52px;
      object-fit: cover;
      border-radius: 16px;
      margin: 0 14px 0 12px;
      background: #1d1b31;
      transition: all 0.5s ease;
    }

    .sidebar.close .profile-details img {
      padding: 10px;
    }

    .sidebar .profile-details .profile_name,
    .sidebar .profile-details .job {
      color: #fff;
      font-size: 18px;
      font-weight: 500;
      white-space: nowrap;
    }

    .sidebar.close .profile-details i,
    .sidebar.close .profile-details .profile_name,
    .sidebar.close .profile-details .job {
      display: none;
    }

    .sidebar .profile-details .job {
      font-size: 12px;
    }

    .home-section {
      position: relative;
      /* background: #E4E9F7; */
      height: 100vh;
      left: 260px;
      width: calc(100% - 260px);
      transition: all 0.5s ease;
    }

    .sidebar.close~.home-section {
      left: 78px;
      width: calc(100% - 78px);
    }

    .home-section .home-content {
      height: 60px;
      display: flex;
      align-items: center;
    }

    .home-section .home-content .bx-menu,
    .home-section .home-content .text {
      color: #11101d;
      font-size: 35px;
    }

    .home-section .home-content .bx-menu {
      margin: 0 15px;
      cursor: pointer;
    }

    .home-section .home-content .text {
      font-size: 26px;
      font-weight: 600;
    }

    @media (max-width: 400px) {
      .sidebar.close .nav-links li .sub-menu {
        display: none;
      }

      .sidebar {
        width: 78px;
      }

      .sidebar.close {
        width: 0;
      }

      .home-section {
        left: 78px;
        width: calc(100% - 78px);
        z-index: 100;
      }

      .sidebar.close~.home-section {
        width: 100%;
        left: 0;
      }
    }
  </style>
</head>

<body>
  <div class="sidebar close" style="opacity: 1; ">
    <div class="logo-details">
      <!-- <i class='bx bxl-c-plus-plus'></i> -->
      <!-- <img src="./public/images/logo.png"  width="100" alt=""> -->
      <i class="fa-solid fa-droplet"></i>
      <span class="logo_name">Xuân Thuỷ</span>
    </div>
    <ul class="nav-links">
      <li>
        <a href="#">
          <i class='bx bx-grid-alt'></i>
          <span class="link_name">Trang chủ</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">Trang chủ</a></li>
        </ul>
      </li>
      <li>
        <div class="iocn-link">
          <a href="#">
            <i class='bx bx-collection'></i>
            <span class="link_name">Quản lý chức vụ</span>
          </a>
          <i class='bx bxs-chevron-down arrow'></i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="#">Quản lý chức vụ</a></li>
          <li><a href="#" >HTML & CSS</a></li>
          <li><a href="#">JavaScript</a></li>
          <li><a href="#">PHP & MySQL</a></li>
        </ul>
      </li>
      <li>
        <div class="iocn-link">
          <a href="#">
            <i class='bx bx-book-alt'></i>
            <span class="link_name">Quản lý phòng ban</span>
          </a>
          <i class='bx bxs-chevron-down arrow'></i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="#">Quản lý phòng ban</a></li>
          <li><a href="#">Web Design</a></li>
          <li><a href="#">Login Form</a></li>
          <li><a href="#">Card Design</a></li>
        </ul>
      </li>
      <li>
        <div class="iocn-link">
          <a href="?url=listStaff">
            <i class='bx bx-book-alt'></i>
            <span class="link_name">Quản lý nhân viên</span>
          </a>
          <i class='bx bxs-chevron-down arrow'></i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="?url=listStaff">Quản lý nhân viên</a></li>
          <li><a href="?url=listStaff">Danh sách nhân viên</a></li>
          <li><a href="?url=addStaff">Thêm mới nhân viên</a></li>
        </ul>
      </li>
      <li>
        <div class="iocn-link">
          <a href="#">
            <i class='bx bx-book-alt'></i>
            <span class="link_name">Quản lý chấm công</span>
          </a>
          <i class='bx bxs-chevron-down arrow'></i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="#">Quản lý chấm công</a></li>
          <li><a href="#">Web Design</a></li>
          <li><a href="#">Login Form</a></li>
          <li><a href="#">Card Design</a></li>
        </ul>
      </li>
      <li>
        <div class="iocn-link">
          <a href="#">
            <i class='bx bx-book-alt'></i>
            <span class="link_name">Quản lý tài khoản</span>
          </a>
          <i class='bx bxs-chevron-down arrow'></i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="#">Quản lý tài khoản</a></li>
          <li><a href="#">Web Design</a></li>
          <li><a href="#">Login Form</a></li>
          <li><a href="#">Card Design</a></li>
        </ul>
      </li>
      <li>
        <a href="#">
          <i class='bx bx-line-chart'></i>
          <span class="link_name">Chart</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">Chart</a></li>
        </ul>
      </li>
      <li>
        <div class="iocn-link">
          <a href="#">
            <i class='bx bx-plug'></i>
            <span class="link_name">Plugins</span>
          </a>
          <i class='bx bxs-chevron-down arrow'></i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="#">Plugins</a></li>
          <li><a href="#">UI Face</a></li>
          <li><a href="#">Pigments</a></li>
          <li><a href="#">Box Icons</a></li>
        </ul>
      </li>
      <li>
        <a href="#">
          <i class='bx bx-compass'></i>
          <span class="link_name">Explore</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">Explore</a></li>
        </ul>
      </li>
      <li>
        <a href="#">
          <i class='bx bx-history'></i>
          <span class="link_name">History</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">History</a></li>
        </ul>
      </li>
      <li>
        <a href="#">
          <i class='bx bx-cog'></i>
          <span class="link_name">Setting</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">Setting</a></li>
        </ul>
      </li>
      <li>
        <div class="profile-details">
          <div class="profile-content">
            <!--<img src="image/profile.jpg" alt="profileImg">-->
          </div>
          <div class="name-job">
            <div class="profile_name">Prem Shahi</div>
            <div class="job">Web Desginer</div>
          </div>
          <i class='bx bx-log-out'></i>
        </div>
      </li>
    </ul>
  </div>

  <section class="home-section">
    <div class="home-content">
      <i class='bx bx-menu'></i>
      <span class="text">Hello, welcome back!
     
      </span>
      <!-- <span> Your business dashboard</span> -->
    </div>