@extends('dashboard')

@section('content')
<<<<<<< HEAD
    <main class="login-form">
        <div class="container">
            <div class="row justify-content-center">
                <table>
                    <thead>


<main class="login-form">
    <div class="container">
        <div class="header">
            Lập trình web
        </div>
        <div class="nav">
            Home | Đăng nhập | Đăng ký
        </div>
        <div class="update-box">
            <h3>Màn hình cập nhật</h3>
            <div class="form-group">
                <label>Username</label>
                <input type="text" value="xxx">
            </div>

            <div class="form-group">
                <label>Mật khẩu</label>
                <input type="password" value="xxx">
            </div>

            <div class="form-group">
                <label>Nhập lại mật khẩu</label>
                <input type="password" value="xxx">
            </div>

            <div class="form-group">
                <label>Email</label>
                <input type="email" value="xxx">
            </div>

            <div class="actions">
                <a href="#">Đã có tài khoản</a>
                <button>Cập nhật</button>
            </div>

        </div>

        <div class="footer">
            Lập trình web @01/2024
        </div>

    </div>

</main>
<main class="login-form">
    <div class="container">
        <div class="row justify-content-center">
            <table>
                <thead>

                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Action</th>
                    </tr>
<<<<<<< HEAD
                    </thead>
                    <tbody>
                    @foreach($users as $user)
                        <tr>
                            <th>{{ $user->id }}</th>
                            <th>{{ $user->name }}</th>
                            <th>{{ $user->email }}</th>
                            <th>
                                <a href="{{ route('user.readUser', ['id' => $user->id]) }}">View</a> |
                                <a href="{{ route('user.updateUser', ['id' => $user->id]) }}">Edit</a> |
                                <a href="{{ route('user.deleteUser', ['id' => $user->id]) }}">Delete</a>
                            </th>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </main>
@endsection

                </thead>
                <tbody>
                    @foreach($users as $user)
                    <tr>
                        <th>{{ $user->id }}</th>
                        <th>{{ $user->name }}</th>
                        <th>{{ $user->email }}</th>
                        <th>
                            <a href="{{ route('user.readUser', ['id' => $user->id]) }}">View</a> |
                            <a href="{{ route('user.updateUser', ['id' => $user->id]) }}">Edit</a> |
                            <a href="{{ route('user.deleteUser', ['id' => $user->id]) }}">Delete</a>
                        </th>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</main>
@endsection

