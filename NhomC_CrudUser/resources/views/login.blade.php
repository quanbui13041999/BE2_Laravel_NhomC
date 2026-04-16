<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    body {
        font-family: Arial, sans-serif;
        background: #f5f5f5;
    }

    .container {
        width: 800px;
        margin: 30px auto;
        border: 1px solid #999;
        background: white;
    }

    .header {
        padding: 10px;
        border-bottom: 1px solid #999;
    }

    .nav {
        border-bottom: 1px solid #999;
        padding: 8px;
        text-align: center;
    }

    .login-box {
        width: 300px;
        margin: 50px auto;
        border: 1px solid #999;
        padding: 20px;
    }

    .login-box h3 {
        text-align: center;
        margin-bottom: 20px;
    }

    .form-group {
        margin-bottom: 10px;
    }

    label {
        display: inline-block;
        width: 80px;
    }

    input[type="text"],
    input[type="email"],
    input[type="password"] {
        width: 180px;
        padding: 5px;
    }

    .actions {
        margin-top: 10px;
        text-align: right;
    }

    button {
        background: #1e88e5;
        color: white;
        border: none;
        padding: 6px 12px;
        cursor: pointer;
    }

    .error-message {
        background: #ffcccc;
        color: #cc0000;
        padding: 8px;
        margin-bottom: 10px;
        border: 1px solid #cc0000;
        border-radius: 3px;
    }

    .error-list {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .error-list li {
        padding: 3px 0;
    }

    .footer {
        border-top: 1px solid #999;
        padding: 8px;
        text-align: center;
        margin-top: 40px;
    }
    .nav {
    display: flex;            
    list-style: none;         
    padding: 0;
    margin: 0;
    justify-content: center;  
    align-items: center;      
}


.nav-item {
    display: inline;          
}

.nav-link {
    text-decoration: none;    
    color: #000;           
    padding: 0 10px;         
}


</style>

<body>
    <div class="container">

        <div class="header">
            Lập trình web
        </div>

      <div class="nav">
            <li class="nav-item">
                <a class="nav-link" href="">Home</a>
            </li> | <li class="nav-item">
                <a class="nav-link" href="">Đăng Nhập</a>
            </li>| <li class="nav-item">
                <a class="nav-link" href="{{ route('user.register') }}">Đăng ký</a>
            </li>
        </div>

        <div class="login-box">
            <h3>Màn hình đăng nhập</h3>
            <form method="POST" action="/login">
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="email" value="" required>
                </div>

                <div class="form-group">
                    <label>Mật khẩu</label>
                    <input type="password" name="password" required>
                </div>

                <div class="form-group">
                    <input type="checkbox" name="remember"> Ghi nhớ đăng nhập
                </div>

                <div class="actions">
                    <a href="#">Quên mật khẩu</a>
                    <button type="submit">Đăng nhập</button>
                </div>
            </form>
        </div>

        <div class="footer">
            Lập trình web @01/2024
        </div>

    </div>
</body>

</html>