<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class UserController extends Controller
{
    function login(Request $req)
    {
        // return $req->all();
        $user = User::where(['email' => $req->email])
        ->where(['password' => $req->password])->first();

        // return 'User:' . $user;

        if(!$user)
        {
            return "Username or password is not matched";
        }
        else
        {
            $req->session()->put('user',$user);
            // return redirect('/?success=true').
            return view('home');
        }
    }

    function getuser(Request $req)
    {
        $data= DB::table('users')
        //->join('table', 'table2.id','=', 'users.id')
        ->where('id', $req->rid)
        ->first();

        return view('edituser',['users'=>$data]);
    }

    function edituser(Request $req)
    {
        DB::table('users')->where('id', $req->rid)
        ->update(array(
        'name' => $req->fullname,
        'password' => $req->password,
        'email' => $req->email,
        'updated_at' => DB::raw('now()')
        ));

        return redirect('editmyuser?rid='.$req->rid. '&success=1');
    }

    function register(Request $req)
    {
        // return $req->input();
        // try {
            DB::insert('insert into users
            (name, email, password, created_at)
            values (?,?,?,?)',
            [$req->fullname,$req->email,$req->password, now()]);
        // }

        // catch (\Exception) {
        //     return "Failed to register";
        // }
        // return "Successfully register";
        return redirect('login' .$req->id. '$success=1');
    }

    function listuser()
    {
        return view('viewuser',['users' => DB::table('users')->paginate(10)]);
    }

    function deleteuser(Request $req)
    {
        //return $req->input();
        DB::table('users')->where('id', $req->rid)->delete();

        // return "Successfully deleted";
        // return view('viewuser');
        return redirect('userlist?rid='.$req->rid. '&deleted=1');
    }

    function search(Request $req)
    {
        return view(
            'viewuser',
            ['users' => DB::table('users')
            ->select(DB::raw('id, name, email, password, created_at'))
            ->where('email', 'like', '%'. $req->search .'%')
            ->orwhere('name', 'like', '%'. $req->search .'%')->paginate(10)
            ]
        );
    }
}