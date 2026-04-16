<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class DeleteUserController extends Controller
{
    /**
     * Xử lý xóa user
     */
    public function deleteUser(Request $request)
    {
        $user_id = $request->get('id');
        
        $user = User::find($user_id);
        if ($user) {
            $user->delete();
            return redirect("list")->withSuccess('Đã xóa người dùng thành công');
        }

        return redirect("list")->withErrors('Không tìm thấy người dùng để xóa');
    }
}