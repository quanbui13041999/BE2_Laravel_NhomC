
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
        display: flex;
        align-items: center;
        margin-bottom: 15px;
    }

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
        <a href="/">Home</a> | 
        <a href="{{ route('login') }}">Đăng nhập</a> | 
        <a href="#">Đăng ký</a>
    </div>

    <div class="main-content">
        <div class="update-box">
            <h3>Màn hình cập nhật</h3>

            <form action="{{ route('user.postUpdateUser') }}" method="POST">
                @csrf
                <input type="hidden" name="id" value="{{ $user->id }}">

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
                    <label>Nhập lại mật khẩu</label>
                    <input type="password" name="password_confirmation">
                </div>

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
                </div>
            </form>
        </div>
    </div>

    <div class="footer-bottom">
        Lập trình web @01/2024
    </div>
</div>
@endsection