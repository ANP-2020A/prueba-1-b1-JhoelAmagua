<?php

namespace App\Http\Controllers;

use App\Customers;
use Illuminate\Http\Request;

class CustomersController extends Controller
{
    public function index()
    {
        return Customers::all();
    }

    public function show($id){
        return Customers::find($id);
    }

    public function store(Request $request){
        return
            Customers::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $article = Customers::findOrFail($id);
        $article->update($request->all());
        return $article;
    }

    public function delete(Request $request, $id)
    {
        $article = Customers::findOrFail($id);
        $article->delete();
        return 204;
    }
}
