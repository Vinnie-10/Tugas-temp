<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Data;

class DataController extends Controller
{
    public function index(){
        $employees = Data::all();

        return view('welcome', compact('employees'));
    }

    function seeData(){
        $data = Data::all();
        return view('welcome', compact('data'));
    }

    function getcreateData(){
        return view('createData');
    }

    function createData(Request $request){
        Data::create([
            'name' => $request->name,
            'age' => $request->age,
            'address' => $request->address,
            'phone_number' => $request->phone_number
        ]);
        return view('welcome');
    }

}
