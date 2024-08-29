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
    <link rel="stylesheet" href="/css/style_search.css">
    <link rel="stylesheet" href="/css/responsive_search.css">
<body>
    <div class="main">
        <div class="container">
            <a href="{{ route('student.all')}}" class="btn-back">
                <i class="fa-solid fa-reply"></i>
            </a>
            <div class="info">
                <div class="info__content">
                    <label class="primary info__content-label masv">Mã sinh viên:</label>
                    <form action="{{ route('student.search') }}" method="">
                        <input type="text" class="inf__content-input" name="search" id="id-info-input" placeholder="Nhập mã sinh viên">
                        <button type="submit" class="info__content-btn">
                            <i class="fa-solid fa-magnifying-glass"></i>
                            Tìm kiếm
                        </button>
                    </form>
                </div>
                <div class="info__view">
                        @isset($students)
                        <table id="search_student">
                            <tr>
                                <th>Mã SV</th>
                                <th>Tên SV</th>
                                <th>Ngày sinh</th>
                                <th>Số điện thoại</th>
                                <th>Giới tính</th>
                            </tr>
                            @foreach ($students as $student)
                            <tr>
                                <td>{{$student->masv}}</td>
                                <td>{{$student->ten}}</td>
                                <td>{{$student->ngaysinh}}</td>
                                <td>{{$student->sdt}}</td>
                                <td>{{$student->gioitinh}}</td>
                            </tr>
                            @endforeach
                        </table>
                        @if($students->isEmpty())
                                <h2>Chưa có sinh viên nào</h2>
                            @endif
                        @endif

                </div>
            </div>
        </div>
    </div>


    <script src="//cdn.datatables.net/2.1.4/js/dataTables.min.js"></script>
    <script>
        $(document).ready(function(){
            $('#search_student').DataTable();
        })
    </script>

</body>
</html>