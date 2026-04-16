<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lập trình web</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #fff;
        }
        /* Header và Footer theo kiểu khung đen mảnh trong ảnh */
        .border-frame {
            border: 3px solid #333;
            padding: 10px;
            text-align: center;
            margin-bottom: 20px;
        }
        .footer-frame {
            border: 3px solid #333;
            padding: 10px;
            text-align: center;
            margin-top: 40px;
        }
        /* Style cho bảng giống ảnh mẫu */
        .table-custom {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        .table-custom th, .table-custom td {
            border: 1px solid #333;
            padding: 8px;
            text-align: center;
        }
        .table-custom th {
            font-weight: bold;
        }
        .title-page {
            text-align: center;
            margin: 30px 0;
            font-size: 24px;
        }
        /* Link thao tác */
        .action-links a {
            text-decoration: none;
            color: #333;
            font-size: 14px;
        }
        .action-links a:hover {
            text-decoration: underline;
        }
        /* Phân trang kiểu nút bấm trắng */
        .pagination-custom {
            display: flex;
            justify-content: center;
            gap: 5px;
            margin-top: 20px;
        }
        .page-btn {
            border: 1px solid #ccc;
            padding: 5px 12px;
            text-decoration: none;
            color: #0d6efd;
            border-radius: 4px;
        }
        .page-btn.active {
            background-color: #fff;
            color: #333;
            border-color: #333;
        }
    </style>
</head>
<body>

<div class="container mt-3">
    <div class="border-frame">
        <a href="#" style="text-decoration: none; color: #333;">Home</a> | 
        <a href="{{ route('signout') }}" style="text-decoration: none; color: #333;"><b>Đăng xuất</b></a>
    </div>

    <h2 class="title-page">Danh sách user</h2>

    <table class="table-custom">
        <thead>
            <tr>
                <th style="width: 50px;">#</th>
                <th>Username</th>
                <th>Email</th>
                <th>Thao tác</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $index => $user)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td class="action-links">
                    <a href="{{ route('user.updateUser', ['id' => $user->id]) }}">Edit</a> | 
                    <a href="{{ route('user.viewUser', ['id' => $user->id]) }}">View</a> | 
                    <a href="{{ route('user.deleteUser', ['id' => $user->id]) }}" onclick="return confirm('Bạn có chắc chắn muốn xóa không?');" >Delete</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <div class="pagination-custom">
        <a href="#" class="page-btn">Previous</a>
        <a href="#" class="page-btn active">1</a>
        <a href="#" class="page-btn">2</a>
        <a href="#" class="page-btn">3</a>
        <a href="#" class="page-btn">Next</a>
    </div>

    <div class="footer-frame">
        Lập trình web @01/2024
    </div>
</div>

</body>
</html>