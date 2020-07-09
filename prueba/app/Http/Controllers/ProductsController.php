<?php

namespace App\Http\Controllers;

use App\Products;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index()
    {
        return Products::all();
    }

    public function show($id){
        return Products::find($id);
    }

    public function store(Request $request){
        return
            Products::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $article = Products::findOrFail($id);
        $article->update($request->all());
        return $article;
    }

    public function delete(Request $request, $id)
    {
        $article = Products::findOrFail($id);
        $article->delete();
        return 204;
    }
}
