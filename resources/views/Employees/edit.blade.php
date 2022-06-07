@extends('layout.app')

@section('content')


<div class="container">
    <div class="mt-6 ml-2">
        <h2>
            <a class="bg-blue-500 text-white px-4 py-2 p-2 m-2 rounded font-medium" href="{{url('companies')}}">go back</a>
        </h2>
    </div>

    <div class="mt-6 ml-6">
        <div class="flex justify-center" >
            <div class="w-4/12 bg-white p-6 rounded-lg">
                
                <form action="{{url('update-employess/'.$Employess->id)}}" method="post" enctype="multipart/form-data">

                    @csrf
                    @method('PUT')
                    <div class="mb-4">
                        <label for="firstname" class="sr-only">firstname: </label>
                        <input type="text" name="firstname" value="{{$Employess->Firstname}}" id="firstname" placeholder="Enter firstname"
                        class="bg-gray-100 border-2 w-full p-4 rounded-lg" value="{{old('name')}}">    
                    </div>
    
                    <div class="mb-4">
                        <label for="lastname" class="sr-only">lastname: </label>
                        <input type="text" name="lastname" value="{{$Employess->lastname}}" id="lastname" placeholder="Enter lastname"
                        class="bg-gray-100 border-2 w-full p-4 rounded-lg" value="{{old('name')}}">    
                    </div>

                    <div class="mb-4">
                        <label for="company" class="sr-only">company: </label>
                        <input type="text" name="company" value="{{$Employess->company}}" id="company" placeholder="Enter company"
                        class="bg-gray-100 border-2 w-full p-4 rounded-lg" value="{{old('name')}}">    
                    </div>

                    <div class="mb-4">
                        <label for="email" class="sr-only">email: </label>
                        <input type="text" name="email" value="{{$Employess->email}}" id="email" placeholder="Enter email"
                        class="bg-gray-100 border-2 w-full p-4 rounded-lg" value="{{old('name')}}">    
                    </div>

                    <div class="mb-4">
                        <label for="phone" class="sr-only">phone: </label>
                        <input type="text" name="phone" value="{{$Employess->phone}}" id="phone" placeholder="Enter phone"
                        class="bg-gray-100 border-2 w-full p-4 rounded-lg" value="{{old('name')}}">    
                    </div>

                   

                    <div>
                        <button type="submit" class="bg-blue-500 text-white px-4 py-2 p-2 m-2 rounded font-medium"> Update</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>


@endsection