@extends('layouts.app')

@section('content')
    <div class="flex justify-center py-6">
        <div class="w-4/12 bg-white p-6 rounded-lg pt-6">
            <h1 class="text-center p-4 text-4xl uppercase"> Login Here </h1>
            @if (session('status'))
                <div class="bg-red-600 p-4 rounded-lg mb-6 text-white">
                    {{ session('status') }}
                </div> 
            @endif
            <form action="{{ route('login') }}" method="POST">
                @csrf

                <div class="mb-4">
                    <label for="email" class="sr-only"> Email </label>
                    <input type="text" name="email" id="email" placeholder="Your email: "  value="{{ old('email')}}" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('email') border-red-500 @enderror">
                    @error('email')
                        <div class="text-red-600 mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="password" class="sr-only"> Password </label>
                    <input type="password" name="password" id="password" placeholder="Your password: " value="{{ old('password')}}" class="bg-gray-100 border-2 w-full p-4 rounded-lg">
                </div>
                
                <div>
                    <button type="submit" class="bg-blue-600 text-white px-4 py-3 w-full">
                        Login
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection