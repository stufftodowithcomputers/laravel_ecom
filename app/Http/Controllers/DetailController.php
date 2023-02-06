<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class DetailController extends Controller
{
    //
    function index($id) {
        $data = Product::find($id);
        return view('detail', ['product'=>$data]);
    }
}
