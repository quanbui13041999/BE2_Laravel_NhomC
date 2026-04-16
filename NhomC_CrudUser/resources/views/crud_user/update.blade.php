@extends('dashboard')


@section('content')
    <main class="signup-form">
        <div class="cotainer">
            <div class="row justify-content-center">
                <div class="col-md-4">
                    <div class="card">
                        <h3 class="card-header text-center">Update User</h3>
                        <div class="card-body">
                            <form action="{{ route('user.postUpdateUser') }}" method="POST">
                                @csrf
                                <input name="id" type="hidden" value="{{$user->id}}">
                                <div class="form-group mb-3">
                                    <input type="text" placeholder="Name" id="name" class="form-control" name="name"
                                           value="{{ $user->name }}"
                                           required autofocus>
                                    @if ($errors->has('name'))
                                        <span class="text-danger">{{ $errors->first('name') }}</span>
                                    @endif
                                </div>


                                <div class="form-group mb-3">
                                    <input type="text" placeholder="Name" id="phone" class="form-control" name="phone"
                                           value="{{ $user->phone }}"
                                           required autofocus>
                                    @if ($errors->has('phone'))
                                        <span class="text-danger">{{ $errors->first('phone') }}</span>
                                    @endif
                                </div>


                                <div class="form-group mb-3">
                                    <input type="text" placeholder="Email" id="email_address" class="form-control"
                                           value="{{ $user->email }}"
                                           name="email" required autofocus>
                                    @if ($errors->has('email'))
                                        <span class="text-danger">{{ $errors->first('email') }}</span>
                                    @endif
                                </div>
                                <div class="form-group mb-3">
                                    <input type="password" placeholder="Password" id="password" class="form-control"
                                           name="password" required>
                                    @if ($errors->has('password'))
                                        <span class="text-danger">{{ $errors->first('password') }}</span>
                                    @endif
                                </div>

                                <div class="d-grid mx-auto">
                                    <button type="submit" class="btn btn-dark btn-block">Update</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection

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

