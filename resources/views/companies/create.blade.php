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
                <form action="{{url('add-companes')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-4">
                        <label for="name" class="sr-only">Name: </label>
                        <input type="text" name="name" id="name" placeholder="Enter name"
                        class="bg-gray-100 border-2 w-full p-4 rounded-lg" value="{{old('name')}}">    
                    </div>
    
                    <div class="mb-4">
                        <label for="email" class="sr-only">Email: </label>
                        <input type="text" name="email" id="email" placeholder="Enter email"
                        class="bg-gray-100 border-2 w-full p-4 rounded-lg" value="{{old('name')}}">    
                    </div>

                    <div class="mb-4">
                        <label for="website" class="sr-only">website: </label>
                        <input type="text" name="website" id="website" placeholder="Enter website"
                        class="bg-gray-100 border-2 w-full p-4 rounded-lg" value="{{old('name')}}">    
                    </div>

                    <div class="mb-4">
                        <label for="logo" class="sr-only">Logo: </label>
                        <input type="file" name="logo" id="logo" placeholder="Enter logo"
                        class="bg-gray-100 border-2 w-full p-4 rounded-lg" value="{{old('name')}}">    
                    </div>

                    <div>
                        <button type="submit" class="bg-blue-500 text-white px-4 py-2 p-2 m-2 rounded font-medium"> Submit</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>


@endsection