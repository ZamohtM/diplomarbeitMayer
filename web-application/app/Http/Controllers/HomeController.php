<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $users = User::all();
        $countUsers = User::all()->count();
        foreach ($users as $user)
        {
            if($user->isOnline())
            {
                $user->update([
                    'status' => '1'
                ]);
            }
            else
                {
                    $user->update([
                        'status' => '0'
                    ]);
                    $countUsers--;
                }
        }
        return view('home', compact('users'),['countUsers' => $countUsers]);
    }

    public function getStates($id)
    {
        $states = DB::table('states')->where('country',$id)->pluck('name','id');
        return json_encode($states);
    }
}
