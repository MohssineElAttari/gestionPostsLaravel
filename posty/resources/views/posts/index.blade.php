@extends('layouts.app')
@section('content')
    <div class="flex justify-center">
        <div class="w-8/12 bg-white p-6 rounded-lg">
            @if (Session::has('success'))
                <p class="text-success"> {{session('success')}} </p>
            @endif
            <form action="{{ route('posts') }}" method="post">
            @csrf
                <div class="mb-4">
                    @auth
                    <label for="body" class="sr-only" > Body </label>
                    <textarea name="body" id="body" cols="10" rows="1" class="bg-gray-100 border-2
                    w-full p-4 rounded-lg @error('body') border-red-500

                    @enderror" placeholder="Your Post!"></textarea>
                    @error('body')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="">
                    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-lg">Post</button>
                </div>
                    @endauth
            </form>

            @if ($posts->count())


                @foreach($posts as $post)
                    <div class="mb-4 p-1">
                        <a href="" class="font-bold">{{ $post->user->name }}</a><span class="text-gray-600 text-sm p-4">{{$post->created_at->diffForHumans()}}</span>
                        <p class="mb-2">{{$post->body}}</p>
                        @auth
                        <div class="">
                            @if ($post->ownedBy(auth()->user()) || auth()->user()->is_admin===1)
                                <form action="{{ route('posts.destroy', $post) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="bg-red-500 text-white px-4 mb-2 py-2 rounded-lg">Delete</button>
                                </form>
                                <form action="{{ route('posts.edit', $post) }}" method="get">
                                    <button type="submit" class="bg-yellow-500 text-white px-4 mb-2 py-2 rounded-lg">Edit
                                </form>
                                @endif
                            </div>
                            @if(!$post->ownedBy(auth()->user()))
                            <div class="flex items-center">
                                <form action="" method="POST" class="mr-1">
                                    <input type="text" name="comment"class="bg-gray-100 border-2 w-full p-4 rounded-lg">
                                    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-lg">Comment</button>
                                </form>
                            </div>
                            @endif
                        </div>
                        @endauth
                @endforeach
                {{ $posts->links() }}
            @else
                <p>There Are none!</p>
            @endif
        </div>
    </div>
@endsection
