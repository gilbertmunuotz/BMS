<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function usercheck()
    {
        if (auth::id()) {
            if (Auth::user()->usertype == '1') {
                return view('doctor.index');
            } elseif (Auth::user()->usertype == '2') {
                return view('nurse.index');
            } else {
                return view('admin.index');
            }
        }
    }
}
