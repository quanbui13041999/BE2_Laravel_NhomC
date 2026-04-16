<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lập trình web - Chi tiết</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #fff;
        }
        /* Header và Footer khung đen mảnh */
        .border-frame {
            border: 3px solid #333;
            padding: 10px;
            text-align: center;
            margin-bottom: 40px;
        }
        .footer-frame {
            border: 3px solid #333;
            padding: 10px;
            text-align: center;
            margin-top: 60px;
        }
        /* Khung nội dung chính ở giữa */
        .detail-card {
            border: 2px solid #333;
            padding: 40px;
            max-width: 600px;
            margin: 0 auto;
            position: relative;
        }
        .detail-title {
            text-align: center;
            font-size: 24px;
            margin-bottom: 30px;
        }
        .info-row {
            display: flex;
            margin-bottom: 20px;
        }
        .info-label {
            width: 120px;
            font-weight: normal;
        }
        .info-value {
            font-weight: bold;
        }
        /* Nút chỉnh sửa màu xanh */
        .btn-edit {
            background-color: #0d6efd;
            color: white;
            border: none;
            padding: 8px 25px;
            border-radius: 4px;
            float: right;
            text-decoration: none;
        }
        .btn-edit:hover {
            background-color: #0b5ed7;
            color: white;
        }
        .clearfix::after {
            content: "";
            clear: both;
            display: table;
        }
    </style>
</head>
<body>

<div class="container mt-3">
    <div class="border-frame">
        <a href="#" style="text-decoration: none; color: #333;">Home</a> | 
        <a href="{{ route('signout') }}" style="text-decoration: none; color: #333;"><b>Đăng xuất</b></a>
    </div>

    <div class="detail-card">
        <h2 class="detail-title">Màn hình chi tiết</h2>
        
        <div class="info-row">
            <div class="info-label">Username</div>
            <div class="info-value">{{ $user->name }}</div>
        </div>

        <div class="info-row">
            <div class="info-label">Email</div>
            <div class="info-value">{{ $user->email }}</div>
        </div>

        <div class="clearfix">
            <a href="{{ route('user.updateUser', ['id' => $user->id]) }}" class="btn-edit">Chỉnh sửa</a>
        </div>
    </div>

    <div class="footer-frame">
        Lập trình web @01/2024
    </div>
</div>

</body>
</html>