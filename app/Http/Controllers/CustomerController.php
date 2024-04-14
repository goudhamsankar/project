<?php

namespace App\Http\Controllers;

use App\Models\customer;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     *
     */
    public function index()
    {
        $customer = customer::get();
        return view('dashboard', compact('customer'));
    }
    /**
     *
     */
    public function store(Request $request)
    {
        customer::create($request->all());
        return \redirect()->back();
    }
    /**
     *
     */
    public function edit(customer $customer)
    {
        return view('admin.adminActions', compact('customer'));
    }
    /**
     *
     */
    public function update(Request $request, $id)
    {
        $data = customer::findOrFail($id);
        $data->status = $request->status;
        $data->amount = $request->amount;
        $data->save();
        return redirect()->route('customer.index');
    }
    /**
     *
     */
    public function check()
    {
        $data = null;
        return view('customer.check-appointment', compact('data'));
    }
    /**
     *
     */
    public function checkSlote(Request $request)
    {
        $data = customer::where('email', $request->email)->where('status', 0)->first();
        if($data == null){
            $data = new customer(); // Create a new customer instance
            $data->name = "No appointment found";
        }
        // dd($data);
        return view('customer.check-appointment', compact('data'));
    }
    /**
     *
     */
    public function destroy(customer $customer)
    {
        $customer->delete();
        return redirect()->route('customer.index');
    }
    public function about()
    {
      return view('customer.about-us');
    }
    public function services()
    {
      return view('customer.services-2');
    }
    public function contact()
    {
      return view('customer.contact');
    }
}
