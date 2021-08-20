@extends('layouts.app')

@section('content')
    <div class="w-4/5 m-auto text-left">
        <div class="py-15">
            <h1 class="text-6xl">
                Post Update
            </h1>
        </div>
    </div>

    @if($errors->any())
        <div class="w-4/5 m-auto">
            <ul>
                @foreach($errors->all() as $error)
                    <li class="w-1/5 px-4 py-4 mb-4 bg-red-700 text-gray-50 rounded-2xl">
                        {{$error}}
                    </li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="w-4/5 pt-20 m-auto">
        <form action="/blog/{{$post->slug}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <input type="text" value="{{$post->title}}" name="title" class="block w-full h-20 text-6xl bg-transparent border-b-2 outline-none">
        <textarea name="description" class="block w-full py-20 text-xl bg-transparent border-b-2 outline-none h-60">{{$post->description}}</textarea>

        <!-- -->
        <button type="submit" class="px-8 py-3 text-lg font-extrabold text-gray-100 uppercase bg-blue-500 mt-15 rounded-3xl">Update Post</button>
        </form>
    </div>


@endsection

