<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function index()
    {
        return view('productos.index');
    }

    public function create()
    {
        return view('productos.create');
    }

    public function store()
    {
        
    }

    public function edit()
    {
        return view('productos.edit');
    }

    public function update()
    {
        
    }

    public function destroy()
    {
        
    }

}
