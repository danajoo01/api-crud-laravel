<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
use PhpParser\Node\Expr\FuncCall;

class ItemController extends Controller
{
    public function index()
    {
        //
       return Item::all();
    }

    public function store(Request $request)
    {
        //
        $request->validate([
            'id'=>'required',
            'name'=>'required',


        ]);
       return Item::create($request->all());
    }

    public function create(Request $request){
        $item = new Item;
        $item->id = $request->id;
        $item->nama = $request->nama;
        $item->save();

        return $item;
    }

    public function delete($id){
        $item = Item::find($id);
        $item->delete();

        return "Data berhasil di hapus";
    }
}
