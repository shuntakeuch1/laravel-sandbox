<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\User;

class UserController extends Controller
{
    //
    public function postUpdate(Request $request){
        $now = Carbon::now();
//        $update_columns = [
//            'member_target.updated_at' => $now,
//        ];
        $user = new User();
//        $user->timestamps = false;
        $user->joins('poosts','posts.user_id','=','user.id')
            ->get();
//        update($update_columns);
    }
}
