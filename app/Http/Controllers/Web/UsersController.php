<?php

namespace App\Http\Controllers\Web;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UsersController extends Controller
{
    //展示个人界面
    public function show(User $user){
        return view('users.show',compact('user'));
    }
}
