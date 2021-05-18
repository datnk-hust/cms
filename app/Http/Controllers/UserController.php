<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function PostLogin(Request $request)
    {
        # code...
        dd($request->email);
    }
}
