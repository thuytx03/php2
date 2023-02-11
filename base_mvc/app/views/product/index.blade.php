<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Tên</th>
                <th>Giá</th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $pr)
            <tr>
                <td>{{$pr->id}}</td>
                <td>{{$pr->ten_sp}}</td>
                <td>{{$pr->gia}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>