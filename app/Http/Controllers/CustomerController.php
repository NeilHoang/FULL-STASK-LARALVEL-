<?php

namespace App\Http\Controllers;

use App\Cities;
use App\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
        $customers = Customer::paginate(5);
        return view('customers.list', compact('customers'));
    }

    public function create()
    {
        $cities = Cities::all();
        return view('customers.create',compact('cities'));
    }

    public function store(Request $request)
    {
        $customer = new Customer();
        $customer->firstName = $request->firstName;
        $customer->lastname = $request->lastName;
        $customer->phone = $request->phone;
        $customer->address = $request->address;
        $image = $request->file('image');
        $path = $image->store('image', 'public');
        $customer->image = $path;
        $customer->city_id = $request->city_id;
        $customer->save();
        return redirect()->route('customer.index');
    }

    public function destroy($id)
    {
        $customers = Customer::findOrFail($id);
        if (file_exists(storage_path("app/public/image/$customers->image"))) {
            \Illuminate\Support\Facades\File::delete(storage_path("app/public/image/$customers->image"));
        }
        $customers->delete();
        return redirect()->route('customer.index');
    }
}
