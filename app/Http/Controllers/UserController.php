<?php

namespace App\Http\Controllers;

use App\Models\UsahaUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function showProfile()
    {
        $dataUsaha = UsahaUser::where('user_id', Auth::user()->id)->get();
        return view('profile', compact('dataUsaha'));
    }
}
