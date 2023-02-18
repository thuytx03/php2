<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <!-- <link rel="stylesheet" href="../../public/css/style.css"> -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Quản lý nhân viên</title>
    <!-- <link rel="shortcut icon" href="" type="image/x-icon"> -->

    @include('layout.style')

</head>

<body>
    <div class="sidebar close" style="opacity: 1; ">
        <div class="logo-details">
            <!-- <i class='bx bxl-c-plus-plus'></i> -->
            <!-- <img src="./public/images/logo.png"  width="100" alt=""> -->
            <a href="{{ BASE_URL }}"><i class="fa-solid fa-droplet"></i></a>
            <span class="logo_name">Xuân Thuỷ</span>
        </div>
        <ul class="nav-links">
            <li>
                <a href="{{ BASE_URL }}">
                    <i class='bx bx-grid-alt'></i>
                    <span class="link_name">Trang chủ</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="{{ BASE_URL }}">Trang chủ</a></li>
                </ul>
            </li>

            @if($_SESSION['auth']['role']==1)
            <li>
                <div class="iocn-link">
                    <a href="listPosition">
                        <i class='bx bx-collection'></i>
                        <span class="link_name">Chức vụ</span>
                    </a>
                    <i class='bx bxs-chevron-down arrow'></i>
                </div>
                <ul class="sub-menu">
                    <li><a class="link_name" href="listPosition"> Chức vụ</a></li>
                    <li><a href="?url=listPosition">Danh sách</a></li>
                    <li><a href="?url=addPosition">Thêm mới</a></li>
                </ul>
            </li>
            <li>
                <div class="iocn-link">
                    <a href="listDepartment">
                        {{-- <i class='bx bx-book-alt'></i> --}}
                        <i class="fa-regular fa-building"></i>
                        <span class="link_name">Phòng ban</span>
                    </a>
                    <i class='bx bxs-chevron-down arrow'></i>
                </div>
                <ul class="sub-menu">
                    <li><a class="link_name" href="listDepartment">Phòng ban</a></li>
                    <li><a href="listDepartment">Danh sách</a></li>
                    <li><a href="addDepartment">Thêm mới</a></li>
                </ul>
            </li>
            <li>
                <div class="iocn-link">
                    <a href="listStaff">
                        {{-- <i class='bx bx-book-alt'></i> --}}
                        <i class="fa-solid fa-clipboard-user"></i>
                        <span class="link_name">Nhân viên</span>
                    </a>
                    <i class='bx bxs-chevron-down arrow'></i>
                </div>
                <ul class="sub-menu">
                    <li><a class="link_name" href="listStaff">Nhân viên</a></li>
                    <li><a href="listStaff">Danh sách</a></li>
                    <li><a href="addStaff">Thêm mới</a></li>
                </ul>
            </li>

            <li>
                <div class="iocn-link">
                    <a href="listSalary">
                        {{-- <i class='bx bx-book-alt'></i> --}}
                        <i class="fa-solid fa-sack-dollar"></i>
                        <span class="link_name">Lương</span>
                    </a>
                    <i class='bx bxs-chevron-down arrow'></i>
                </div>
                <ul class="sub-menu">
                    <li><a class="link_name" href="listSalary">Lương</a></li>
                    <li><a href="listSalary">Danh sách</a></li>
                    <li><a href="addSalary">Tính lương</a></li>
                </ul>
            </li>
            <li>
                <div class="iocn-link">
                    <a href="listAccount">
                        {{-- <i class='bx bx-book-alt'></i> --}}
                        <i class="fa-regular fa-user"></i>
                        <span class="link_name">Tài khoản</span>
                    </a>
                    <i class='bx bxs-chevron-down arrow'></i>
                </div>
                <ul class="sub-menu">
                    <li><a class="link_name" href="listAccount">Tài khoản</a></li>
                    <li><a href="listAccount">Danh sách</a></li>
                    <li><a href="addAccount">Thêm mới</a></li>
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
            @endif

            @if($_SESSION['auth']['role']==2)
            <li>
                <div class="iocn-link">
                    <a href="listSalary">
                        {{-- <i class='bx bx-book-alt'></i> --}}
                        <i class="fa-solid fa-sack-dollar"></i>
                        <span class="link_name">Lương</span>
                    </a>
                    <i class='bx bxs-chevron-down arrow'></i>
                </div>
                <ul class="sub-menu">
                    <li><a class="link_name" href="listSalary">Lương</a></li>
                    <li><a href="listSalary">Danh sách</a></li>
                    <li><a href="addSalary">Tính lương</a></li>
                </ul>
            </li>
            @endif

            <li>
                <div class="profile-details">
                    <div class="profile-content">
                        <!--<img src="image/profile.jpg" alt="profileImg">-->
                    </div>
                    <div class="name-job">
                        <div class="profile_name">{{$_SESSION['auth']['name']}}</div>
                        <div class="job">Web Desginer</div>
                    </div>
                    <a href="{{route('logOut')}}"><i class='bx bx-log-out'></i>
                    </a>
                </div>
            </li>
        </ul>
    </div>

    <section class="home-section" style="background: white">
        <div class="home-content">
            <i class='bx bx-menu'></i>
            <span class="text">Hello, welcome back!

            </span>
            <!-- <span> Your business dashboard</span> -->
        </div>

        <div class="container">
            @yield('home-section')
        </div>

    </section>



    <script>
        let arrow = document.querySelectorAll(".arrow");
        for (var i = 0; i < arrow.length; i++) {
            arrow[i].addEventListener("click", (e) => {
                let arrowParent = e.target.parentElement.parentElement; //selecting main parent of arrow
                arrowParent.classList.toggle("showMenu");
            });
        }
        let sidebar = document.querySelector(".sidebar");
        let sidebarBtn = document.querySelector(".bx-menu");
        console.log(sidebarBtn);
        sidebarBtn.addEventListener("click", () => {
            sidebar.classList.toggle("close");
        });
    </script>

</body>

</html>
