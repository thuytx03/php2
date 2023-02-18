<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    @include('layout.style')
    @include('layout.script')
    <title>{{ $title }}</title>
</head>
<body>
<div class="container">
    <header>
        <div class="header-main">
            <ul class="menu">
                <li><a href="{{ BASE_URL."test" }}">Quản lý sản phẩm</a></li>
                <li><a href="">Quản lý danh mục</a></li>

            </ul>

        </div>
    </header>
    <section class="content">
        @yield('content')
    </section>
    <footer>
        <span>FPT POLYTECHNIC</span>
    </footer>
</div>
</body>
</html>