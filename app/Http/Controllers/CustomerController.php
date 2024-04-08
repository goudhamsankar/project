<?php

namespace App\Http\Controllers;
use App\Models\customer;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index(){
        // return view('customer.index');      
          $customer = customer::get();
        return view('dashboard', compact('customer'));
    }

    public function store(Request $request){
        
        $newproduct = customer::create( $request->all());
    }
    public function destroy(customer $customer)
    {
        try {
            $customer->delete();
            return redirect()->route('customer.index');
        } catch (Exception $e) {
            return \redirect()->back();
        }
    }
}
