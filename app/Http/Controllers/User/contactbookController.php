<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class contactbookcontroller extends Controller
{
    //ユーザー連絡帳記入
     public function add()
     {
         return view('user.contactbook.create');
     }
     public function create()
     {
         return redirect('user.contactbook.create');
     }
     public function edit()
     {
         return view('user.contactbook.edit');
     }
     public function update()
     {
         return redirect('user.contactbook.edit');
     }
     
}
