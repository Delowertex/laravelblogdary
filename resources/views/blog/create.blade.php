@extends('layouts.app')

@section('content')
    <div class="w-4/5 m-auto text-left">
        <div class="py-15">
            <h1 class="text-6xl">
                Post Create
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
        <form action="/blog" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="text" name="title" placeholder="Title...." class="block w-full h-20 text-6xl bg-transparent border-b-2 outline-none">
        <textarea name="description" placeholder="Description..." class="block w-full py-20 text-xl bg-transparent border-b-2 outline-none h-60"></textarea>

        <div class="bg-grey-lighter pt-15">
            <!-- <label for="" class="flex flex-col items-center px-2 py-3 tracking-wide uppercase border shadow-lg cursor-pointer w-44 bg-white-rounded-lg border-blue"> -->
                <!-- <span class="mt-2 text-base leading-normal">
                    Select a file
                </span> -->
                <input type="file" name="image" >
            </label>
        </div>
        <button type="submit" class="px-8 py-3 text-lg font-extrabold text-gray-100 uppercase bg-blue-500 mt-15 rounded-3xl">Submit Post</button>
        </form>
    </div>


@endsection

