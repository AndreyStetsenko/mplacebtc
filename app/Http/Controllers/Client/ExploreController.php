<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Products;
use App\Models\Attachments;

class ExploreController extends Controller
{
    public function index() {
        $products = Products::orderBy('id', 'desc')->get();
        $attach = Attachments::where('post_type', 'products')->get();

        return view('site.pages.products-filter', [
            'products' => $products,
            'attach' => $attach
        ]);
    }
}
