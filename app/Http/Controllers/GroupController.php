<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
use App\Models\Pajak;
use DB;
use PhpParser\Node\Expr\FuncCall;

class GroupController extends Controller
{
    public function index()
    {
        $get_item = Item::select('id','nama')->groupBy('id','nama')->get();
        $get_pajak = Pajak::select('id','nama')->groupBy('id','nama','rate')->get();
        $data = [
            'data' => $get_item,
            'Pajak' => [
                $get_pajak
            ]    
        ];
        return $data;
           
    }
}
