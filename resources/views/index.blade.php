@extends('layouts.app')

@section('content')
    <div class="grid grid-cols-1 m-auto background-image">
        <div class="flex pt-10 text-gray-100">
            <div class="block w-4/5 pt-4 pb-16 m-auto text-center sm:m-auto">
                <h1 class="sm:text-white text-5xl uppercase font-bold text-shadow-md pb=14">Do you want to be a developer</h1>
                <a href="/blog" class="px-4 py-2 text-xl font-bold text-center uppercase bg-gray-700 text-gray-50">Read More....
                </a>
            </div>
            
        </div>
    </div>
    <div class="w-4/5 grid-cols-2 gap-20 mx-auto border-b border-gray-200 sm:grid py-15">
        <div>
            <img src="https://cdn.pixabay.com/photo/2021/08/14/14/51/alps-6545561_1280.jpg" width="700" alt="">
        </div>
        <div class="block w-4/5 m-auto text-left sm:m-auto">
            <h2 class="text-3xl font-extrabold text-gray-600">
                Struggling to be a better developper? 
            </h2>
            <p class="py-8 text-gray-500 text-l">
                lorem ipsum dummey text lorem ipsum dummey text lorem ipsum dummey text lorem ipsum dummey text lorem ipsum dummey text lorem ipsum dummey text 
            </p>
            <p class="font-extrabold text-gray-600 text-l pb-9">
            lorem ipsum dummey text lorem ipsum dummey text lorem ipsum dummey text lorem ipsum dummey text lorem ipsum dummey text lorem ipsum dummey text lorem ipsum dummey text lorem ipsum dummey text lorem ipsum dummey text lorem ipsum dummey text lorem ipsum dummey text lorem ipsum dummey text 
            </p>
            <a href="/blog" class="px-8 py-3 font-extrabold text-gray-100 uppercase bg-blue-500 text-s rounded-3xl">
                Find Out More....
            </a>
        </div>
    </div>
    <div class="text-center text-white bg-black p-15">
        <h2 class="pb-5 text-2xl text-l">
            I am expert in ....
        </h2>
        <span class="block py-1 text-4xl font-extrabold">
            UX Design
        </span>
        <span class="block py-1 text-4xl font-extrabold">
            Project Management
        </span>
        <span class="block py-1 text-4xl font-extrabold">
            Digital Strategy
        </span>
        <span class="block py-1 text-4xl font-extrabold">
            Backend Development
        </span>
    </div>
    <div class="text-center py-15">
        <span class="text-gray-400 uppercase text-s">
            Blog
        </span>
        <h2 class="py-8 text-4xl font-bold">
            Recent Posts
        </h2>
        <p class="w-4/5 m-auto text-gray-500">
        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
        </p>
    </div>
    <div class="w-4/5 grid-cols-2 m-auto sm:grid">
        <div class="flex pt-10 text-gray-100 bg-yellow-700">
            <div class="block w-4/5 pt-4 pb-16 m-auto sm:m-auto">
                <span class="text-xs uppercase">PHP</span>
                <h3 class="py-10 text-xl font-bold">
                It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using
                </h3>
                <a href="" class="px-5 py-3 text-xs font-extrabold text-gray-100 uppercase border-2 border-gray-100 bg-transperent rounded-3xl"> Find Out More...</a>
            </div>
        </div>
        <div>
            <img src="https://cdn.pixabay.com/photo/2021/08/14/14/51/alps-6545561_1280.jpg" width="700" alt="">
        </div>
    </div>
@endsection