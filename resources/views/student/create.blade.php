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
    <link rel="stylesheet" href="/css/style_create.css">
</head>

<body>
    <div class="main">
        @if(session('error'))
        <div class="alert alert-error">
            {{ session('error') }}
        </div>
        @endif
        <div class="container">
            <a href="{{ route('student.all')}}" class="btn-back">
                <i class="fa-solid fa-reply"></i>
            </a>
            <form action="{{ route('student.store') }}" method="post">
                @csrf
            
                <div class="info">
                    <!-- Header -->
                    <div class="info-header">
                        <h3 class="info-header__heading">Thông tin</h3>
                    </div>

                    <!-- Body -->
                    <div class="info-body">
                        <div class="info-body__data">
                            <label for="" class="info-body__data-label">Mã SV:</label>
                            <input type="text" class="info-body__data-input" name="masv">
                        </div>                      
                            @error('masv')  
                                <div class="error">
                                    {{$message}}
                                </div>
                            @enderror
                        <div class="info-body__data">
                            <label for="" class="info-body__data-label">Họ tên:</label>
                            <input type="text" class="info-body__data-input" name="ten" >
                        </div>
                            @error('ten')
                                <div class="error">
                                    {{$message}}
                                </div>
                            @enderror
                        <div class="info-body__data">
                            <label for="" class="info-body__data-label">Ngày sinh:</label>
                            <input type="date" class="info-body__data-input" name="ngaysinh">
                        </div>
                            @error('ngaysinh')
                                <div class="error">
                                    {{$message}}
                                </div>
                            @enderror
                        <div class="info-body__data">
                            <label for="" class="info-body__data-label">Số điện thoại</label>
                            <input type="text" class="info-body__data-input" name="sdt">
                        </div>
                            @error('sdt')
                                <div class="error">
                                    {{$message}}
                                </div>
                            @enderror
                        <div class="info-body__data">
                            <label for="" class="info-body__data-label">Giới tính:</label>
                            <input type="text" class="info-body__data-input" name="gioitinh">
                        </div>
                            @error('gioitinh')
                                <div class="error">
                                    {{$message}}
                                </div>
                            @enderror
                    </div>

                    <!-- Footer -->
                    <div class="info-footer">
                        <div class="info-footer__btn">
                            <button type="reset" class="btn btn-clear">
                                <i class="fa-solid fa-rotate"></i>
                                Làm mới
                            </button>
                            <button type="submit" class=" btn btn-add">
                                <i class="fa-solid fa-upload"></i>
                                Thêm
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

</body>
</html>
