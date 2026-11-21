<?php

namespace App\Http\Controllers;

use Hash;
use Session;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

/**
 * CRUD User controller
 */
class viewcontroler extends Controller
{

   /**
     * View user detail page
     */
   /* public function viewUser(Request $request)
    {
        $user_id = $request->get('id');
        $user = User::find($user_id);

        return view('view', ['user' => $user]);
    }
       */
public function viewUser(Request $request)
{
    $user_id = $request->get('id');
    $user = User::find($user_id);

    if (!$user) {
        return "Không tìm thấy User có ID là " . $user_id;
    }

    // Đảm bảo CÓ lệnh return view
    return view('view', ['user' => $user]); 
}
}