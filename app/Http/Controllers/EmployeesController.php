<?php

namespace App\Http\Controllers;

use App\Models\employees;
use Illuminate\Http\Request;

class EmployeesController extends Controller
{
    //make view page
    public function employ()
    {
        $Employess= employees::all();
        return view('Employees.index', compact('Employess'));
    }
    //make create function
    public function Createemploy()
    {
        return view('Employees.create');
    }
    // store employees

    public function storeemploy(Request $request)
    {
        $Employess= new employees;
        $Employess->Firstname = $request->input('firstname');
        $Employess->lastname = $request->input('lastname');
        $Employess->company = $request->input('company');
        $Employess->email = $request->input('email');
        $Employess->phone = $request->input('phone');

        $Employess->save();

        return redirect()->route('employess');
    }

    //edit employes view

    public function edit($id){
        $Employess= employees::find($id);
        return view('Employees.edit', compact('Employess'));
    }

    //update new data

    public function update(Request $request, $id)
    {
        $Employess= employees::find($id);
        $Employess->Firstname = $request->input('firstname');
        $Employess->lastname = $request->input('lastname');
        $Employess->company = $request->input('company');
        $Employess->email = $request->input('email');
        $Employess->phone = $request->input('phone');

        $Employess->update();

        return redirect()->route('employess');
    }


    public function destroy($id){
        $Employess= employees::find($id);
        $Employess->delete();
        return redirect()->route('employess');
    }





}



