<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Trang đăng nhập quản trị hệ thống nội thất">
    <meta name="author" content="Nhóm Laravel Nội Thất">

    <title>Đăng nhập quản trị</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="{{ asset('admin/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet">

    <!-- Custom Style -->
    <style>
        body {
            background: linear-gradient(120deg, #4e73df, #224abe);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .login-box {
            background: #fff;
            border-radius: 15px;
            box-shadow: 0 4px 20px rgba(0,0,0,0.1);
            padding: 40px 30px;
            width: 100%;
            max-width: 400px;
        }
        .login-box h3 {
            text-align: center;
            margin-bottom: 25px;
            color: #333;
        }
    </style>
</head>

<body>

<div class="login-box">
    <h3><i class="fas fa-user-shield me-2"></i>Đăng nhập quản trị</h3>

    <!-- Hiển thị lỗi từ Laravel -->
    @if ($errors->any())
        <div class="alert alert-danger p-2">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @if (session('error'))
        <div class="alert alert-danger">{{ session('error') }}</div>
    @endif

    <form method="POST" action="{{ route('admin.login.post') }}" enctype="multipart/form-data" > @csrf 
         <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" name="email" id="email"
                    placeholder="Nhập email..." required>
                <div id="emailError" class="error-message"></div>
            </div> 

        <div class="mb-3">
                <label for="password" class="form-label">Mật khẩu</label>
                <input type="password" class="form-control" name="password" id="password"
                    placeholder="Nhập mật khẩu..." required>
                <div id="passwordError" class="error-message"></div>
            </div> 

        <button type="submit" class="btn btn-primary btn-user btn-block"> Login </button> 
    </form>
</div>


</body>
</html>
