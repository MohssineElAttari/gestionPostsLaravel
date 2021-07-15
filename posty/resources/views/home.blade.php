@extends('layouts.app')

@section('content')
    <header id="master-header" class="h-screen text-white flex flex-col justify-center  relative"
        style="background-image: linear-gradient(135deg, #d45a09 0%, #595e2c 50%, #6e3f33 100%); min-height: 660px">
        <div class="z-0 absolute top-0 left-0 w-full h-full bg-cover bg-no-repeat" style="">
        </div>
        <div class="z-10 relative py-12 mx-auto md:w-1/2 text-center">
            <h1 class="leading-tight mb-8 text-5xl text-center font-thin">
                Welcome To My Website
            </h1>

        </div>
    </header>


    <footer class="py-8 mx-auto container px-8">
        <div class="flex justify-center">
            <p class="text-gray-800 font-bold uppercase">
                Copyright &copy; 2021 Mohssine Elattari
            </p>
        </div>
    </footer>
@endsection
