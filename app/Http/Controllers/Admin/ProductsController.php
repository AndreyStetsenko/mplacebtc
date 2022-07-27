<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Attachments;
use App\Models\Products;
use App\Models\Categories;
use App\Models\CategoriesMake;
use Auth;
use Carbon\Carbon;

class ProductsController extends Controller
{
    public function index()
    {
        $products = Products::paginate(15);
        $categories = Categories::get();

        return view('admin.products', [
            'products' => $products,
            'categories' => $categories
        ]);
    }

    public function create()
    {
        $cb = Carbon::now();
        $categories = Categories::get();
        $users = User::get();
        $currentUser = Auth::user();
        $nowDate = [
            'date' => $cb->format('d M, Y'),
            'time' => $cb->format('H:m')
        ];

        return view('admin.product-create', [
            'users' => $users,
            'categories' => $categories,
            'currentUser' => $currentUser,
            'nowDate' => $nowDate
        ]);
    }

    public function stores(Request $request)
    {

        // Image
        $uploadedFile = $request->file('file');
        
        if ( $uploadedFile ) {
            $filename = time() . $uploadedFile->getClientOriginalName();

            Storage::disk('local')->putFileAs(
                'files/' . $filename,
                $uploadedFile,
                $filename
            );

            $file = new Attachments;
            $file->name = $filename;

            $file->save();
        }

        // Product
        $resp = $request->data;
        
        if ($resp) {
            $user_id = Auth::user()->id;

            $product = new Products();
            $product->user_create = $user_id;
            $product->user_author = $request->data['author'];
            $product->title = $request->data['title'];
            $product->visible = 1;
            $product->published = 1;
            $product->save();

            $file->user_id = $user_id;
            $file->post_id = $product->id;
            $file->post_type = 'products';
            $file->type = 'image';
            $file->url = 'storage/app/files/' . $filename . '/' . $filename;
            $file->path = 'storage/app/files/' . $filename . '/';
            $file->extension = '';
            $file->update();
        }

        return response()->json([
            'code' => 200,
            'message' => 'Success',
            'location' => route('dashboard.products'),
        ], 200);
    }

    public function store(Request $request)
    {
        $resp = $request->data;
        $user_id = Auth::user()->id;
        $product = new Products();
        $cats = new CategoriesMake();

        // $product->user_create = $user_id;
        // $product->user_author = $request->data['author'];
        // $product->title = $request->data['title'];
        // $product->description = $request->data['description'];
        // $product->short_description = $request->data['short_description'];
        // $product->visible = 1;
        // $product->published = $request->data['published'];
        // $product->price = $request->data['price'];
        // $product->price_sale = $request->data['price_sale'];

        $product->user_create = $user_id;
        $product->user_author = $request->input('author');
        $product->title = $request->input('title');
        $product->description = $request->input('description');
        $product->short_description = $request->input('short_description');
        $product->visible = 1;
        $product->published = $request->input('published') == 'on' ? 1 : 0;
        $product->price = $request->input('price');
        $product->price_sale = $request->input('price_sale');

        $product->save();

        // foreach ( $request->data['categories'] as $cat_id ) {
            $cats->product_id = $product->id;
            $cats->category_id = $request->input('categories');
            $cats->save();
        // }

        // Image
        // $upFile = $request->data['file'];
        // $uploadedFile = $request->file($upFile);
        
        //     $filename = time() . $uploadedFile->getClientOriginalName();

        //     Storage::disk('local')->putFileAs(
        //         'files/' . $filename,
        //         $uploadedFile,
        //         $filename
        //     );

        //     $file = new Attachments;
        //     $file->name = $filename;

        //     $file->save();

        // return response()->json([
        //     'code' => 200,
        //     'message' => 'Success',
        //     'location' => route('dashboard.products'),
        //     // 'data' => $product
        // ], 200);

        return response()->redirectToRoute('dashboard.products')->with('success','Товар "' . $request->input('title') . '" создан');
    }

    public function view(Request $request, $id)
    {
        $attach = Attachments::where([
            ['post_id', $id],
            ['post_type', 'products']
        ])->get();
        $product = Products::findOrFail($id);
        $categories = Categories::get();
        $cb = Carbon::now();
        $users = User::get();
        $currentUser = Auth::user();
        $nowDate = [
            'date' => $cb->format('d M, Y'),
            'time' => $cb->format('H:m')
        ];

        return view('admin.product-create', [
            'product' => $product,
            'categories' => $categories,
            'users' => $users,
            'currentUser' => $currentUser,
            'nowDate' => $nowDate,
            'attach' => $attach
        ]);
    }

    public function update(Request $request, $id)
    {
        $user_id = Auth::user()->id;
        $product = Products::find($id);
        $cats = new CategoriesMake();
        $attach = new Attachments();

        $product->update([
            'user_author' => $request->input('author'),
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'short_description' => $request->input('short_description'),
            'visible' => 1,
            'published' => $request->input('published') == 'on' ? 1 : 0,
            'price' => $request->input('price'),
            'price_sale' => $request->input('price_sale')
        ]);
        
        $cats->product_id = $product->id;
        $cats->category_id = $request->input('categories');
        $cats->save();

        $uploadedFile = $request->file('images');

        if ( $uploadedFile ) {
            $filename = time() . '-'. $uploadedFile->getClientOriginalName();

            $storage = Storage::disk('public')->putFileAs(
                $filename,
                $uploadedFile,
                $filename
            );

            $file = new Attachments;
            $file->name = $filename;
            $file->type = $uploadedFile->getMimeType();
            $file->user_id = $user_id;
            $file->post_id = $id;
            $file->size = $uploadedFile->getSize();
            $file->alt = $request->title;
            $file->post_type = 'products';
            $file->url = 'storage/' . $storage;

            $file->save();
        }

        // return response()->json([
        //     'code' => 200,
        //     'message' => 'Success',
        //     'location' => route('dashboard.products'),
        //     // 'data' => $product
        // ], 200);

        return response()->redirectToRoute('product.view', $id)->with('success','Товар "' . $request->input('title') . '" обновлен');
    }

    public function destroyAttach(Request $request, $product, $attach)
    {
        Attachments::find($attach)->delete();
        return response()->redirectToRoute('product.view', $product)->with('success','Изображение удалено');
    }

    public function destroy(Request $request, $id)
    {
        Products::find($id)->delete();
        return redirect()->route('dashboard.products')->with('success','User deleted successfully');
    }
}
