<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Attachments;
use App\Models\User;
use Auth;

class AttachmentsController extends Controller
{
    public function destroy(Request $request, $id) {
        Attachments::find($id)->delete();
        return session()->put('user_url',$request->segment(1));
    }
}
