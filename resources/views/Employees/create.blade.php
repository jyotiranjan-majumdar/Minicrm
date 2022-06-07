@extends('layout.app')

@section('content')

<div class="container">
    <div class="mt-6 ml-2">
        <h2>
            <a class="bg-blue-500 text-white px-4 py-2 p-2 m-2 rounded font-medium" href="{{url('employess')}}">go back</a>
        </h2>
    </div>

    <div class="mt-6 ml-6">
        <div class="flex justify-center" >
            <div class="w-4/12 bg-white p-6 rounded-lg">
                
                <form action="{{url('add-employess')}}" method="post">
                    @csrf
                    <div class="mb-4">
                        <label for="firstname" class="sr-only">firstname: </label>
                        <input type="text" name="firstname" id="firstname" placeholder="Enter firstname"
                        class="bg-gray-100 border-2 w-full p-4 rounded-lg" value="{{old('name')}}">    
                    </div>
    
                    <div class="mb-4">
                        <label for="lastname" class="sr-only">lastname: </label>
                        <input type="text" name="lastname" id="lastname" placeholder="Enter lastname"
                        class="bg-gray-100 border-2 w-full p-4 rounded-lg" value="{{old('name')}}">    
                    </div>

                    <div class="mb-4">
                        <label for="company" class="sr-only">company: </label>
                        <input type="text" name="company" id="company" placeholder="Enter company"
                        class="bg-gray-100 border-2 w-full p-4 rounded-lg" value="{{old('name')}}">    
                    </div>

                    <div class="mb-4">
                        <label for="email" class="sr-only">email: </label>
                        <input type="text" name="email" id="email" placeholder="Enter email"
                        class="bg-gray-100 border-2 w-full p-4 rounded-lg" value="{{old('name')}}">    
                    </div>

                    <div class="mb-4">
                        <label for="phone" class="sr-only">phone: </label>
                        <input type="text" name="phone" id="phone" placeholder="Enter phone"
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