<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Attachments;

class UsersController extends Controller
{
    /**
     * Users List
     */

    public function index()
    {
        $users = User::paginate(15);
        
        return view('admin.users', [
            'users' => $users,
        ]);
    }

    /**
     * Profile page View
     */

    public function view(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $attach = Attachments::where([
            ['post_id', $id],
            ['post_type', 'users']
        ])->get();

        return view('admin.user-update', [
            'user' => $user,
            'attach' => $attach
        ]);
    }

    /**
     * Profile request Update
     */

    public function update(Request $request, $id)
    {

        $user = User::findOrFail($id);

        if ( $request->form_type == 'main' ) {
            
            $user->name = $request->name;
            $user->email = $request->email;
            $user->gender = $request->gender;

            $user->update();

            return response()->redirectToRoute('user.view', $id)->with('success','Профиль обновлен');

        } elseif ( $request->form_type == 'image' ) {
            
            $uploadedFile = $request->file('image');

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
                $file->user_id = $user->id;
                $file->post_id = $id;
                $file->size = $uploadedFile->getSize();
                $file->alt = $request->name;
                $file->post_type = 'users';
                $file->url = 'storage/' . $storage;

                $file->save();
            }

            $user->update();

            return response()->redirectToRoute('user.view', $id)->with('success','Аватар обновлен');

        } elseif ( $request->form_type == 'password' ) {

            $user->password = bcrypt($request->password);
            $user->update();

            return response()->redirectToRoute('user.view', $id)->with('success','Пароль обновлен');
        }
    }
}
