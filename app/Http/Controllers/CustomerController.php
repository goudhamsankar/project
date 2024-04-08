<?php

namespace App\Http\Controllers;
use App\Models\customer;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index(){
        return view('customer.index');
    }

    public function store(Request $request){
        
        $newproduct = customer::create( $request->all());
    }
}
