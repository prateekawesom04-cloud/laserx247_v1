<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Symfony\Component\HttpFoundation\Response;
use App\Models\User;

class AdminDataController extends Controller
{
    //
    public function index(){
        $user = User::whereIn('status', [1,2,3])->count();
        $userTotal = User::all()->count();
        return view('admin.pages.index',compact('user','userTotal'));
    }

    public function user_downline_list(){

        $users = User::whereIn('status', [1,2])->get();

        return view('admin.pages.user_downline_list',compact('users'));
    }
}
