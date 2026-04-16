@extends('dashboard')
<style>
body{
    font-family: Arial, sans-serif;
    background:#f5f5f5;
}

.container{
    width:800px;
    margin:30px auto;
    border:1px solid #999;
    background:white;
}

.header{
    padding:10px;
    border-bottom:1px solid #999;
}

.nav{
    border-bottom:1px solid #999;
    padding:8px;
    text-align:center;
}

.update-box{
    width:350px;
    margin:50px auto;
    border:1px solid #999;
    padding:20px;
}

.update-box h3{
    text-align:center;
    margin-bottom:20px;
}

.form-group{
    margin-bottom:12px;
}

label{
    display:inline-block;
    width:120px;
}

input{
    width:180px;
    padding:5px;
}

.actions{
    margin-top:15px;
    text-align:right;
}

button{
    background:#1e88e5;
    color:white;
    border:none;
    padding:7px 14px;
    cursor:pointer;
}

.footer{
    border-top:1px solid #999;
    padding:8px;
    text-align:center;
    margin-top:40px;
}
</style>
@section('content')

<div class="container">
    <div class="header">
        Lập trình web
    </div>

    <div class="nav">
        Home | Đăng nhập | Đăng ký
    </div>

    <div class="update-box">
        <h3>Màn hình cập nhật</h3>

        <form action="{{ route('user.postUpdateUser') }}" method="POST">
            @csrf
            <input type="hidden" name="id" value="{{ $user->id }}">

            <div class="form-group">
                <label>Username</label>
                <input type="text" name="name" value="{{ $user->name }}">
                @if ($errors->has('name'))
                <span class="text-danger">{{ $errors->first('name') }}</span>
                @endif
            </div>

            <div class="form-group">
                <label>Mật khẩu</label>
                <input type="password" name="password">
                @if ($errors->has('password'))
                <span class="text-danger">{{ $errors->first('password') }}</span>
                @endif
            </div>

            <div class="form-group">
                <label>Nhập lại mật khẩu</label>
                <input type="password" name="password_confirmation">
            </div>


            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" value="{{ $user->email }}">
                @if ($errors->has('email'))
                <span class="text-danger">{{ $errors->first('email') }}</span>
                @endif
            </div>

            <div class="actions">
                <a href="#">Đã có tài khoản</a>
                <button type="submit">Cập nhật</button>
            </div>
        </form>
    </div>

    <div class="footer">
        Lập trình web @01/2024
    </div>
</div>

@endsection