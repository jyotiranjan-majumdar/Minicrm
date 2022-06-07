@extends('layout.app')

@section('content')

<style>
    table, th, td {
  border: 1px solid;
  padding: 5px;
}
</style>

<div class="container">
    <div class="mt-6 ml-2 mb-8">
        <h2>
            Company CRM
            <a class="bg-blue-500 text-white px-4 py-2 p-2 m-2 rounded font-medium" href="{{url('add-employess')}}">Add Companes Name</a>
        </h2>
    </div>

    <div>
        <div class="mt-12 ml-3">
        <div class="flex justify-center" >
        <div class="w-12/12 bg-white p-6 rounded-lg border-solid border-black-500">
        <table class=" ">

                <thead>
                <tr>
                    <th>id</th>
                    <th>Firstname</th>
                    <th>Lastname</th>
                    <th>company</th>
                    <th>email</th>
                    <th>phone</th>
                    <th>Delete</th>
                    <th>Update</th>
                </tr>
                </thead>
                
                <tbody>
                    @foreach ($Employess as $item)
                    <tr>
                        <td>{{ $item->id}}</td>
                        <td>{{ $item->Firstname}}</td>
                        <td>{{ $item->lastname}}</td>
                        <td>{{ $item->company}}</td>
                        <td>{{ $item->email}}</td>
                        <td>{{ $item->phone}}</td>
                        <td>
                            <a href="{{ url('delete-employes/'.$item->id) }}" class="bg-red-500 text-white px-4 py-2 p-2 m-2 rounded font-medium">Delete</a>
                        </td>
                        <td>
                            <a href="{{ url('edit-employess/'.$item->id) }}" class="bg-blue-500 text-white px-4 py-2 p-2 m-2 rounded font-medium">update</a>
                        </td>
                    </tr>
                    <br><br>
                    @endforeach 
                </tbody>
        </table>
        </div>
        </div>
        </div>
    </div>




</div>
@endsection