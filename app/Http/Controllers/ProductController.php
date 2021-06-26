<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class ProductController extends Controller
{
    public function showProduct(){
        $results=DB::table('product')->get();
        return view('pages.main')->with('results',$results);
    }

    public function details($pro_id){
        $results=DB::table('product')->where('pro_id',$pro_id)->get();
        return view('pages.details')->with('results',$results);
    }
}
