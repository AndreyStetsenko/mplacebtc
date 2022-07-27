<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Attachments;
use App\Models\User;
use App\Models\Products;

class HomeController extends Controller
{
    public function index() {
        $users = User::get();
        $attachUser = Attachments::where('post_type', 'users')->get();
        $attach = Attachments::where('post_type', 'products')->get();
        $products = Products::orderBy('id', 'desc')->get();

        return view('site.pages.index', [
            'users' => $users,
            'attachUser' => $attachUser,
            'attach' => $attach,
            'products' => $products
        ]);
    }
}
