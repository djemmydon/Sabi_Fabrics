<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class FrontEndController extends Controller
{
   public function index() {
       return view('admin.index');
   }

   public function user()
   {
     $users = User::all();
     return view('admin.user.index', compact('users'));
   }
}
