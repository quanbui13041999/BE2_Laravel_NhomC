<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Đăng ký</title>
    <style>
        body {
            font-family: 'Segoe UI', Arial, sans-serif;
            background: #f0f2f5;
            margin: 0;
            display: flex;
            justify-content: center;
        }

        .container {
            width: 800px;
            margin: 30px auto;
            background: white;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            border-radius: 8px;
            overflow: hidden;
        }

        .header {
            padding: 15px;
            background: #fff;
            font-weight: bold;
            border-bottom: 1px solid #eee;
        }

        /* Tối ưu thanh Navigation */
        .nav {
            border-bottom: 1px solid #eee;
            background: #fafafa;
        }

        .nav ul {
            list-style: none;
            padding: 0;
            margin: 0;
            display: flex;
            justify-content: center;
        }

        .nav ul li a {
            display: block;
            padding: 12px 20px;
            text-decoration: none;
            color: #555;
            transition: 0.3s;
        }

        .nav ul li a:hover {
            background: #eee;
            color: #000;
        }

        /* Box đăng ký */
        .register-box {
            width: 380px;
            margin: 40px auto;
            padding: 30px;
            border: 1px solid #eee;
            border-radius: 8px;
        }

        .register-box h3 {
            text-align: center;
            margin-top: 0;
            color: #333;
        }

        .form-group {
            margin-bottom: 15px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-size: 14px;
            font-weight: 600;
        }

        input {
            width: 100%;
            padding: 8px 12px;
            box-sizing: border-box; /* Quan trọng để input không tràn */
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        /* Căn chỉnh các nút hành động */
        .actions {
            margin-top: 25px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .actions a {
            text-decoration: none;
            color: #666;
            font-size: 14px;
            transition: 0.3s;
        }

        .actions a:hover {
            color: #1e88e5;
            text-decoration: underline;
        }

        /* Làm đẹp nút Đăng ký */
        button {
            background: #1e88e5;
            color: white;
            padding: 8px 20px;
            border: none;
            border-radius: 4px;
            font-weight: bold;
            cursor: pointer;
            transition: 0.3s;
        }

        button:hover {
            background: #1565c0;
            box-shadow: 0 2px 5px rgba(0,0,0,0.2);
        }

        .footer {
            padding: 15px;
            text-align: center;
            font-size: 13px;
            color: #888;
            border-top: 1px solid #eee;
            background: #fafafa;
        }
    </style>
</head>
<body>

    <div class="container">

        <div class="nav">
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="/login">Đăng nhập</a></li>
                <li><a href="/register">Đăng ký</a></li>
            </ul>
        </div>

        <div class="register-box">
            <h3>Màn hình đăng ký</h3>

            <form method="POST" action="/register">
                @csrf

                @if($errors->any())
                <div style="color:red; font-size: 13px; margin-bottom: 10px;">
                    @foreach($errors->all() as $error)
                        <div>• {{ $error }}</div>
                    @endforeach
                </div>
                @endif

                <div class="form-group">
                    <label>Username</label>
                    <input type="text" name="name" value="{{ old('name') }}">
                </div>

                <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="email" value="{{ old('email') }}">
                </div>

                <div class="form-group">
                    <label>Mật khẩu</label>
                    <input type="password" name="password">
                </div>

                <div class="form-group">
                    <label>Nhập lại mật khẩu</label>
                    <input type="password" name="password_confirmation">
                </div>

                <div class="actions">
                    <a href="/login">Đã có tài khoản?</a>
                    <button type="submit">Đăng ký</button>
                </div>
            </form>
        </div>

        <div class="footer">
            Nhóm C @ 2026
        </div>
    </div>

</body>
</html>