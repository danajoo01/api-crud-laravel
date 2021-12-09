<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pajak;

class PajakController extends Controller
{
    public function index()
    {
        //
       return Pajak::all();
    }

    public function store(Request $request)
    {
        //
        $request->validate([
            'id'=>'required|numeric',
            'name'=>'required',
            'rate'=>'required|numeric',
        ]);
       return Pajak::create($request->all());
    }

    public function create(Request $request){
        $pajak = new Pajak;
        $pajak->id = $request->id;
        $pajak->nama = $request->nama;
        $pajak->rate = $request->rate;
        $pajak->save();

        return $pajak;
    }

    public function update(Request $request, $id){
        $nama = $request->nama;
        $rate = $request->rate;

        $pajak = Pajak::find($id);
        $pajak->nama = $nama;
        $pajak->rate = $rate;
        $pajak->save();

        return "Data berhasil di update";
    }

    public function delete($id){
        $pajak = Pajak::find($id);
        $pajak->delete();

        return "Data berhasil di hapus";
    }
}
