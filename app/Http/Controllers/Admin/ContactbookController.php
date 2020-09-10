<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Contactbookcontroller extends Controller
{
    //保育者連絡帳返信
    public function add()
    {
        return view('admin.Contactbook.create');
    }
    public function create()
    {
        return redirect('admin.Contactbook.create');
    }
    public function edit()
    {
        return view('admin.Contactbook.edit');
        
    }
    public function update()
    {
        return view('admin.Contactbook.edit');
    }
}
