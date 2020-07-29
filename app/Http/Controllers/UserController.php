<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use App\User;

class UserController extends Controller
{
    public function uploadAvatar(Request $request) {
        
        if ($request->hasFile('image')) {
            User::uploadAvatar($request->image);
            return \redirect()->back()->with('message', 'Image Uploaded');
        }
        
        return \redirect()->back()->with('error', 'Oops looks like something is wrong.');
    }

   

    public function index() {

        $data = [
            'name' => 'Lawal',
            'email' => 'lawal001@gmail.com',
            'password' => 'password',
        ];
        // User::create($data);
        return User::all();

        // $user = new User();
        // $user->name = 'Nasir';
        // $user->email = 'nasirlawal001@gmail.com';
        // $user->password = bcrypt('password');
        // $user->save();
        // User::where('id', 3)->update(['name' => 'Nasirrrrrr']);

        // return $user = User::all();
        // User::where('id', 2)->delete();
        
        // DB::insert('insert into users (name, email, password) values(?,?,?)', [
        //     'Nasir', 'nasirlawal001@gmail.com', 'password',
        // ]);
        // $users = DB::select('select * from users');
        // return $users;
        // DB::update('update users set name = ? where id = 1', ['Lawal']);
        // DB::delete('delete from users where id = 1');
        // $users = DB::select('select * from users');
        // return $users;
        return view('home');
    }
}
