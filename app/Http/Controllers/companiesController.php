<?php

namespace App\Http\Controllers;

use App\Models\companies;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class companiesController extends Controller
{
    public function company()
    {
        $Companies= companies::all();

        return view('companies.index', compact('Companies'));
    }

    public function create()
    {
        return view('companies.create');
    }

    public function store(Request $request)
    {
        $Companies= new companies;
        $Companies->Name = $request->input('name');
        $Companies->email = $request->input('email');
        $Companies->website = $request->input('website');

        if($request->hasFile('logo')){
            $file = $request->file('logo');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('storage/app/public', $filename);
            $Companies->logo = $filename;
        }
        $Companies->save();

        return redirect()->route('companies');

    }

    public function edit($id){
        $Companies= companies::find($id);
        return view('companies.edit', compact('Companies'));
    }

    public function update(Request $request, $id)
    {
        $Companies= companies::find($id);
        $Companies->Name = $request->input('name');
        $Companies->email = $request->input('email');
        $Companies->website = $request->input('website');

        if($request->hasFile('logo'))
        {
            $destination = 'storage/app/public/'.$Companies->logo;
            if(File::exists($destination))
            {
                File::delete($destination);
            }
            $file = $request->file('logo');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('storage/app/public', $filename);
            $Companies->logo = $filename;
        }
        $Companies->update();

        return redirect()->route('companies');
    }

    public function destroy($id){
        $Companies= companies::find($id);
        $destination = 'storage/app/public/'.$Companies->logo;
        if(File::exists($destination))
        {
            File::delete($destination);
        }
        $Companies->delete();
        return redirect()->back();
    }
    
}
