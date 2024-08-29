
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="/css/style_index.css">
    <link rel="stylesheet" href="/css/responsive_index.css">
</head>
<body>
    <div class="container">
       <p>jjassdqewqeqeqeqeqeqeq</p>
        <h1 class="heading" >Danh Sách Sinh viên</h1>
        @if(session('success'))
            <h2 class="notify">
                <i class="fa-solid fa-circle-check"></i>
                {{ session('success') }}
            </h2>
        @endif
        <div class="container-link">
            <a href="{{ route('student.search') }}" class="link__find">
                <i class="fa-solid fa-magnifying-glass"></i>    
                Tìm kiếm sinh viên
            </a>
            <a href="{{ route('student.create') }}" class="link__add">
                <i class="fa-solid fa-upload"></i>
                Thêm sinh viên
            </a>
        </div>
        <table>
            <tr>
                <th>Id</th>
                <th>Mã SV</th>
                <th>Tên SV</th>
                <th>Ngày sinh</th>
                <th>Số điện thoại</th>
                <th>Giới tính</th>
            </tr>
            @foreach ($students as $student)
            <tr>
                <td>{{$student->id}}</td>
                <td>{{$student->masv}}</td>
                <td>{{$student->ten}}</td>
                <td>{{$student->ngaysinh}}</td>
                <td>{{$student->sdt}}</td>
                <td>{{$student->gioitinh}}</td>
            </tr>
            @endforeach
        </table>
    </div>
</body>
</html>