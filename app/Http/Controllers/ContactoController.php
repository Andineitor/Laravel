<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactoController extends Controller
{
    public function dataContact(Request $request)
    {
        
        (!request()->name) ? $name='Usuario': $name = request()->name;
        
        return view('nosotros',compact('name'));
    }
}
