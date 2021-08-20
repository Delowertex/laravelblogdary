@extends('layouts.app')

@section('content')
    <div class="w-4/5 m-auto text-center">
        <div class="border-b border-gray-200 py-15">
            <h1 class="text-6xl">
                Blog Posts
            </h1>
        </div>
    </div>                                                      

    @if(Session::has('message'))
        <div class="w-4/5 m-auto mt-10 ml-22">
            <p class="w-2/6 px-4 py-4 bg-green-500 text-gray-50 rounded-2xl">
                {{Session::get('message')}}
            </p>
        </div>
    @endif

    @if(Auth::check())
        <div class="w-4/5 m-auto pt-15">
            <a href="/blog/create" class="px-5 py-3 text-xs font-extrabold text-gray-100 uppercase bg-transparent bg-blue-500 rounded-3xl">Create Post</a>
        </div>
    @endif

    @foreach($posts as $post)
    
    <div class="w-4/5 grid-cols-2 gap-20 mx-auto border-b border-gray-200 sm:grid py-15">
        <div>
            <img src="{{asset('images/'.$post->image_path)}}" width="700" alt="">
        </div>
        <div>
            <h2 class="pb-4 text-5xl font-bold text-gray-700">
                {{$post->title}}
            </h2>
            <span class="text-gray-500">
                By <span class="italic font-bold text-gray-800">{{$post->user->name}}</span>, Created On {{ date ('jS M Y', strtotime($post->updated_at))}}
            </span>
            <p class="pt-8 pb-10 text-xl font-light leading-8 text-gray-700">
            {{$post->description}}
            </p>
            <a href="" class="px-8 py-4 text-lg font-extrabold text-gray-100 uppercase bg-blue-500 rounded-3xl"> Keep reading</a>
            @if(isset(Auth::user()->id) && Auth::user()->id == $post->user_id)
            <span class="float-right">
                <a href="/blog/{{$post->slug}}/edit" class="pb-1 italic text-gray-700 border-b-2 hover:text-gray-900">Edit</a>
            </span>
            <span class="float-right">
                <form action="/blog/{{$post->slug}}" method="POST">
                @csrf 
                @method('delete')

                <button class="pr-3 text-red-500" type="submit">Delete

                </button>

                </form>
            </span>
            @endif
        </div>
    </div>
    @endforeach
@endsection

