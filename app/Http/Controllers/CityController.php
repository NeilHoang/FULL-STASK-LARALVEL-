<?php

namespace App\Http\Controllers;

use App\Cities;
use Illuminate\Http\Request;

class CityController extends Controller
{
    public function index()
    {
        $cities = Cities::paginate(4);
        return view('cities.list', compact('cities'));
    }

    public function create()
    {
        return view('cities.create');
    }

    public function store(Request $request)
    {
        $city = new Cities();
        $city->cityName = $request->input('name');
        $city->save();
        return redirect()->route('cities.index');
    }

    public function edit($id)
    {
        $city = Cities::findOrFail($id);
        return view('cities.edit', compact('city'));
    }

    public function destroy($id)
    {
        $city = Cities::findOrFail($id);
        $city->delete();
        return redirect()->route('cities.index');
    }
}
