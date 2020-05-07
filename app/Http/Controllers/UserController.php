<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index(){
    	$title = 'List User';
    	$data = User::get();

    	return view('user.index',compact('title','data'));
    }
}
