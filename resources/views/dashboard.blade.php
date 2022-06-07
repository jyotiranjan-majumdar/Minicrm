@extends('layout.app')

@section('content')

<div class="flex justify-center" >
    <div class="w-8/12 bg-white p-6 rounded-lg">

        <div class="mt-6 ml-2">
            <h2>
                Company CRM system for Companies: 
                <a class="bg-blue-500 text-white px-4 py-2 p-2 m-2 rounded font-medium" href="{{url('companies')}}">CRUD Companies</a>
            </h2>
        </div>
        <br><br>
        <div class="mt-6 ml-2">
            <h2>
                Company CRM system for Employees:   
                <a class="bg-blue-500 text-white px-4 py-2 p-2 m-2 rounded font-medium" href="{{url('employess')}}">CRUD Employees</a>
            </h2>
        </div>

        

        
    </div>


    
   
</div>

  

@endsection