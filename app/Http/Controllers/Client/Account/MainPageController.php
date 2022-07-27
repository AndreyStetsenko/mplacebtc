<?php

namespace App\Http\Controllers\Client\Account;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class MainPageController extends Controller
{
    public function index() {
        $user = Auth::user();

        return view('site.account.index', [
            'user' => $user
        ]);
    }
}
