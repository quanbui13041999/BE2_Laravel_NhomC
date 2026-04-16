
<<<<<<< HEAD
@section('content')
<style>
    /* CSS để tái tạo giao diện giống hệt hình mẫu */
    .wrapper-container {
        width: 800px;
        margin: 30px auto;
        border: 1px solid #000; /* Viền đen mỏng xung quanh */
        background: white;
        font-family: sans-serif;
    }

    .header-top {
        padding: 10px;
        border-bottom: 1px solid #000;
        display: flex;
        align-items: center;
    }

    .nav-bar {
        border-bottom: 1px solid #000;
        padding: 10px;
        text-align: center;
        font-size: 14px;
        font-weight: bold;
    }

    .nav-bar a {
        text-decoration: none;
        color: black;
        margin: 0 10px;
    }

    .main-content {
        padding: 50px 0;
        min-height: 400px;
    }

    /* Khung box cập nhật chính giữa */
    .update-box {
        width: 400px;
        margin: 0 auto;
        border: 1px solid #000; /* Viền đen xung quanh form */
        padding: 40px 20px;
    }

    .update-box h3 {
        text-align: center;
        margin-top: 0;
        margin-bottom: 30px;
        font-weight: normal;
    }

    .form-group {
=======


<style>
    /* Reset và định dạng chung */
    body {
        background-color: #f0f0f0;
        margin: 0;
        padding: 0;
        font-family: Arial, sans-serif;
    }

    /* Container bao ngoài 800px */
    .wrapper {
        width: 800px;
        margin: 40px auto;
        border: 1px solid #999;
        background-color: #fff;
    }

    /* Phần Header phía trên */
    .header-box {
        padding: 10px;
        border-bottom: 1px solid #999;
        font-weight: normal;
    }

    /* Thanh điều hướng */
    .nav-box {
        padding: 10px;
        border-bottom: 1px solid #999;
        text-align: center;
        font-size: 14px;
    }
    .nav-box a {
        text-decoration: none;
        color: #000;
        margin: 0 5px;
    }

    /* Vùng chứa form Cập nhật */
    .content-area {
        padding: 60px 0;
        display: flex;
        justify-content: center;
    }

    .update-container {
        width: 380px;
        border: 1px solid #999;
        padding: 30px 20px;
        background-color: #fff;
    }

    .update-container h3 {
        text-align: center;
        margin-top: 0;
        margin-bottom: 30px;
        font-size: 20px;
        font-weight: normal;
    }

    /* Định dạng các hàng nhập liệu */
    .form-row {
>>>>>>> Quan/update
        display: flex;
        align-items: center;
        margin-bottom: 15px;
    }

<<<<<<< HEAD
    .form-group label {
        width: 120px; /* Độ rộng nhãn bên trái */
        font-size: 14px;
    }

    .form-group input {
        flex: 1;
        padding: 5px;
        border: 1px solid #000; /* Viền input đen mỏng */
        outline: none;
    }

    .actions {
        display: flex;
        justify-content: flex-end;
        align-items: center;
        margin-top: 25px;
        gap: 20px;
    }

    .actions a {
        font-size: 13px;
        color: #444;
        text-decoration: none;
    }

    .btn-update {
        background-color: #0d6efd; /* Màu xanh nút Đăng ký/Cập nhật */
        color: white;
        border: none;
        padding: 8px 25px;
        cursor: pointer;
        border-radius: 4px;
    }

    .footer-bottom {
        border-top: 1px solid #000;
        padding: 10px;
        text-align: center;
        font-size: 14px;
        font-weight: bold;
    }

    .text-danger {
        color: red;
        font-size: 12px;
        display: block;
        margin-left: 120px; /* Thụt lề bằng đúng độ rộng của Label */
    }
</style>

<div class="wrapper-container">
    <div class="header-top">
        <span style="margin-left: 10px;">📄 Lập trình web</span>
    </div>

    <div class="nav-bar">
        <a href="#">Home</a> | 
        <a href="{{ route('login') }}">Đăng nhập</a> | 
        <a href="{{ route('user.register') }}">Đăng ký</a>
    </div>

    <div class="main-content">
        <div class="update-box">
=======
    .form-row label {
        width: 120px;
        font-size: 14px;
    }

    .form-row input {
        flex: 1;
        padding: 6px;
        border: 1px solid #999;
        outline: none;
    }

    /* Vùng các nút bấm */
    .button-group {
        display: flex;
        justify-content: flex-end;
        align-items: center;
        gap: 15px;
        margin-top: 20px;
    }

    .button-group a {
        font-size: 13px;
        color: #3366cc;
        text-decoration: none;
    }

    .btn-submit {
        background-color: #1a73e8;
        color: white;
        border: none;
        padding: 8px 18px;
        cursor: pointer;
        border-radius: 2px;
    }

    /* Phần Footer */
    .footer-box {
        padding: 10px;
        border-top: 1px solid #999;
        text-align: center;
        font-size: 14px;
        margin-top: 20px;
    }

    /* Thông báo lỗi */
    .error-text {
        color: red;
        font-size: 12px;
        margin-left: 120px;
        display: block;
        margin-top: -10px;
        margin-bottom: 10px;
    }
</style>

<div class="wrapper">
    <div class="header-box">
        📄 Lập trình web
    </div>

    <div class="nav-box">
        <a href="/">Home</a> | <a href="/login">Đăng nhập</a> | <a href="#">Đăng ký</a>
    </div>

    <div class="content-area">
        <div class="update-container">
>>>>>>> Quan/update
            <h3>Màn hình cập nhật</h3>

            <form action="{{ route('user.postUpdateUser') }}" method="POST">
                @csrf
                <input type="hidden" name="id" value="{{ $user->id }}">

<<<<<<< HEAD
                <div class="form-group">
                    <label>Username</label>
                    <input type="text" name="name" value="{{ old('name', $user->name) }}">
                </div>
                @if ($errors->has('name'))
                    <span class="text-danger">{{ $errors->first('name') }}</span>
                @endif

                <div class="form-group">
                    <label>Mật khẩu</label>
                    <input type="password" name="password">
                </div>
                @if ($errors->has('password'))
                    <span class="text-danger">{{ $errors->first('password') }}</span>
                @endif

                <div class="form-group">
=======
                <div class="form-row">
                    <label>Username</label>
                    <input type="text" name="name" value="{{ old('name', $user->name) }}">
                </div>
                @error('name') <span class="error-text">{{ $message }}</span> @enderror

                <div class="form-row">
                    <label>Mật khẩu</label>
                    <input type="password" name="password">
                </div>
                @error('password') <span class="error-text">{{ $message }}</span> @enderror

                <div class="form-row">
>>>>>>> Quan/update
                    <label>Nhập lại mật khẩu</label>
                    <input type="password" name="password_confirmation">
                </div>

<<<<<<< HEAD
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="email" value="{{ old('email', $user->email) }}">
                </div>
                @if ($errors->has('email'))
                    <span class="text-danger">{{ $errors->first('email') }}</span>
                @endif

                <div class="actions">
                    <a href="{{ route('login') }}">Đã có tài khoản</a>
                    <button type="submit" class="btn-update">Cập nhật</button>
=======
                <div class="form-row">
                    <label>Email</label>
                    <input type="email" name="email" value="{{ old('email', $user->email) }}">
                </div>
                @error('email') <span class="error-text">{{ $message }}</span> @enderror

                <div class="button-group">
                    <a href="#">Đã có tài khoản</a>
                    <button type="submit" class="btn-submit">Cập nhật</button>
>>>>>>> Quan/update
                </div>
            </form>
        </div>
    </div>

<<<<<<< HEAD
    <div class="footer-bottom">
        Lập trình web @01/2024
    </div>
</div>
@endsection
=======
    <div class="footer-box">
        Lập trình web @01/2024
    </div>
</div>
>>>>>>> Quan/update
