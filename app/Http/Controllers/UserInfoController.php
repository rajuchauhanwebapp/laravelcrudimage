<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserInfo;

class UserInfoController extends Controller
{
    public function home()
    {
        $users = UserInfo::latest()->get();
        $context = [
            'user_list'=> $users,
        ];
        return view('home', $context);
    }
    
    public function create_user_form()
    {
        return view('create');
    }
    
    public function create_user_store(Request $request)
    {
        $validated = $request->validate([
            'name'=> 'required',
            'mobile'=> 'required|numeric|digits:10',
            'email'=> 'required|email',
            'photo'=> 'required|mimes:jpeg,png,jpg',
        ]);

        if ($request->hasFile('photo')) {
            $file_name = time().'.'.$request->photo->extension();
            $request->file('photo')->move(public_path('profile_images'), $file_name);
            $file_path = 'profile_images/'.$file_name;

            $user_info = new UserInfo();
            $user_info->name = $request->name;
            $user_info->mobile = $request->mobile;
            $user_info->email = $request->email;
            $user_info->photo = $file_path;
            $user_info->save();

            return redirect(route('home'));
        }
    }

    public function user_edit($id)
    {
        $user_edit = UserInfo::find($id);
        $context = [
            'user'=> $user_edit,
        ];
        return view('edit', $context);
    }

    public function update_user(Request $request, $id)
    {
        $validated = $request->validate([
            'name'=> 'required',
            'mobile'=> 'required|numeric|digits:10',
            'email'=> 'required|email',
            'photo'=> 'nullable',
        ]);

        $user_update = UserInfo::find($id);
        if ($request->hasFile('photo')) 
        {
            $file_name = time().'.'.$request->photo->extension();
            $request->file('photo')->move(public_path('profile_images'), $file_name);
            $file_path = 'profile_images/'.$file_name;
            $user_update->photo = $file_path;
        }
        $user_update->name = $request->name;
        $user_update->mobile = $request->mobile;
        $user_update->email = $request->email;
        $user_update->save();

        return redirect(route('home'));
        
    }

    public function delete_user($id)
    {
        $user_deleted = UserInfo::find($id)->delete();
        if($user_deleted)
        {
            return redirect(route('home'));
        }
    }
}
