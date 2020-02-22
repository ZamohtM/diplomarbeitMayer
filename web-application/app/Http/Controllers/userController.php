<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class userController extends Controller
{

    public function onOpenNewUser()
    {
        $workers = DB::select('select * from workers');
        $permissions = DB::select('select * from permissions');
        return view('users.new_user', ['workers' => $workers, 'permissions' => $permissions]);
    }

    public function onSubmitNewUser(Request $request)
    {
        $query = DB::table('workers')->where('id', $request->workerOption)->get();

        $user = new User();

        $user->worker = implode(',', $request->workerOption);
        $user->accountName = $request->accountName;
        $user->firstName = $query[0]->firstName;
        $user->lastName = $query[0]->lastName;

        if (isset($request->yourBox)) {
            $user->email = $query[0]->internalEmail;
        } else {
            $user->email = $request->yourText;

            DB::table('workers')->where('id', $request->workerOption)->update([
                'internalEmail' => $request->yourText
            ]);
        }

        $user->password = Hash::make($request->password);
        $user->permissions = implode(',', $request->permissionOption);
        $user->picture = "http://localhost/upload/workers/".$query[0]->firstName.'-'.$query[0]->lastName."/picture.jpg";

        $user->save();

        return redirect('/');
    }

    public function onOpenManageUsers()
    {
        $users = DB::select('select * from users');
        return view('users.manage_users', ['users' => $users]);
    }

    public function onOpenManageUserDelete($id)
    {
        DB::table('users')->where('id', $id)->delete();
        return redirect('/');
    }

    public function onOpenManageUserEdit($id)
    {
        $permissions = DB::select('select * from permissions');
        $workers = DB::select('select * from workers');
        $user = DB::table('users')->where('id', $id)->get();
        return view('users.edit_user', ['permissions' => $permissions, 'workers' => $workers, 'user' => $user]);
    }

    public function onSaveManageUserEdit($id, Request $request)
    {
        DB::table('users')->where('id', $id)->update([
            'firstName' => $request->firstName,
            'lastName' => $request->lastName,
            'accountName' => $request->accountName,
            'email' => $request->email
        ]);

        if (isset($request->yourBox)) {
            DB::table('users')->where('id', $id)->update([
                'permissions' => implode(',', $request->permissionOption)
            ]);
        }

        return redirect('/');
    }

    public function onClickResetPassword($id)
    {
        DB::table('users')->where('id', $id)->update([
            'password' => Hash::make('123')
        ]);

        return redirect('/');
    }
}
