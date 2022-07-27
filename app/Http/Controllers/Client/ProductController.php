<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Products;
use App\Models\Attachments;

class ProductController extends Controller
{
    public function index(Request $request, $id) {
        $product = Products::findOrFail($id);
        $attachUser = Attachments::where('post_type', 'users')->get();

        return view('site.pages.product', [
            'product' => $product,
            'attachUser' => $attachUser
        ]);
    }
}
