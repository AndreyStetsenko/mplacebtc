<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class AuthorController extends Controller
{
    public function index($id) {
        $user = User::find($id);

        return view('site.pages.author', [
            'user' => $user
        ]);
    }
}
