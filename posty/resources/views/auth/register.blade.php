@extends('layouts.app')

@section('content')
    <div class="flex justify-center">
        <div class="w-4/12 bg-white p-6 rounded-lg">
            <h1 class="text-center p-4 text-4xl uppercase"> Register Here </h1>
            <form action="{{ route('register') }}" method="POST">
                @csrf
                <div class="mb-4">
                    <label for="name" class="sr-only"> Name </label>
                    <input type="text" name="name" id="name" value="{{ old('name')}}" placeholder="Your name: " class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('name') border-red-500 @enderror ">
                    @error('name')
                        <div class="text-red-600 mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="username" class="sr-only"> Username </label>
                    <input type="text" name="username" id="username" value="{{ old('username')}}" placeholder="Your username: " class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('username') border-red-500 @enderror">
                    @error('username')
                        <div class="text-red-600 mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
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
                    <input type="password" name="password" id="password" placeholder="Your password: " value="{{ old('password')}}" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('password') border-red-500 @enderror">
                    @error('password')
                        <div class="text-red-600 mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="password_confirmation" class="sr-only"> Re-Enter Password </label>
                    <input type="password" name="password_confirmation" id="password_confirmation" value="{{ old('password_verification')}}" placeholder="Re-Enter Your password: " class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('password_verification') border-red-500 @enderror">
                    @error('password_confirmation')
                        <div class="text-red-600 mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div>
                    <button type="submit" class="bg-blue-600 text-white px-4 py-3 w-full">
                        Register
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection