


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
        display: flex;
        align-items: center;
        margin-bottom: 15px;
    }

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
        <a href="#">Home</a> | <a href="{{ route('login') }}">Đăng nhập</a> | <a href="{{ route('user.register') }}">Đăng ký</a>
    </div>

    <div class="content-area">
        <div class="update-container">
            <h3>Màn hình cập nhật</h3>

            <form action="{{ route('user.postUpdateUser') }}" method="POST">
                @csrf
                <input type="hidden" name="id" value="{{ $user->id }}">

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
                    <label>Nhập lại mật khẩu</label>
                    <input type="password" name="password_confirmation">
                </div>

                <div class="form-row">
                    <label>Email</label>
                    <input type="email" name="email" value="{{ old('email', $user->email) }}">
                </div>
                @error('email') <span class="error-text">{{ $message }}</span> @enderror

                <div class="button-group">
                    <a href="#">Đã có tài khoản</a>
                    <button type="submit" class="btn-submit">Cập nhật</button>
                </div>
            </form>
        </div>
    </div>

    <div class="footer-box">
        Lập trình web @01/2024
    </div>
</div>
