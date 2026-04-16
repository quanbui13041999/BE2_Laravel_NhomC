<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UpdateUserController extends Controller
{
    /**
     * Hiển thị form update user
     */
    public function showUpdateForm(Request $request)
    {
        $user_id = $request->get('id');
        $user = User::find($user_id);

        if (!$user) {
            return redirect('list')->withErrors('Người dùng không tồn tại');
        }

        return view('crud_user.update', ['user' => $user]);
    }

    /**
     * Xử lý lưu thông tin update
     */
    public function postUpdateUser(Request $request)
    {
        $input = $request->all();

        $request->validate([
            'id'       => 'required|exists:users,id',
            'name'     => 'required',
            'email'    => 'required|email|unique:users,email,' . $input['id'],
            'password' => 'nullable|min:6', // Cho phép để trống nếu không đổi pass
        ], [
            'name.required'  => 'Tên không được để trống',
            'email.required' => 'Email không được để trống',
            'email.unique'   => 'Email này đã được sử dụng',
            'password.min'   => 'Mật khẩu phải có ít nhất 6 ký tự',
        ]);

        $user = User::find($input['id']);
        $user->name = $input['name'];
        $user->email = $input['email'];

        // Chỉ cập nhật mật khẩu nếu người dùng có nhập mới
        if (!empty($input['password'])) {
            $user->password = Hash::make($input['password']);
        }

        $user->save();

        return redirect("list")->withSuccess('Cập nhật thông tin thành công');
    }
}