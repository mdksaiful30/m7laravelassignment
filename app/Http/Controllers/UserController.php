<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class UserController extends Controller
{
    public function sayHello()
    {
        return '<h2 style="text-align: center;margin-top: 30px;color: darkviolet">Hello, Ostad Team!</h2> ';
    }
}

