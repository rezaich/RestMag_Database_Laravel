<?php

namespace App\Http\Controllers\API\V1\admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        
        return response(['users' => User::all()]);
    }
    public function registers(Request $request)
    {
        $user = new User();
        $user ->user_name = $request -> user_name;
        $user ->password = Hash::make($request -> password);
        $user ->api_token = null;
        $user -> save();

        return response(['id'=>$user->id,'user_name'=>$user->user_name]);
    }
}
