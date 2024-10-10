<?php

namespace App\Http\Controllers;

use App\Models\User;

class FooController extends Controller
{
    public function foobar(): string
    {
        return User::first()->foo;
    }
}
