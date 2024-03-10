@extends('layout.defaults')
@section('title', 'Blog')
@section('content')
    
<section class="flex gap-4 flex-wrap justify-center pt-4 pb-4 bg-slate-100">
    @foreach ($blogs as $blog)
        <div class="w-1/6 border border-slate-950 rounded-lg p-5 bg-white shadow-md  flex flex-col justify-between">
            <div class="py-2">
                <h2 class="text-xl font-medium pb-2">{{$blog->title}}</h2>
                <p>{{$blog->description}}</p>
                <a href={{route('showBlog', ['id' => $blog->id])}} class="underline text-cyan-800">Read more</a>
            </div>
            <div class="py-2">
                <a href="{{route('update', ['id'=> $blog->id])}}" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 cursor-pointer dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">UPDATE</a>
                <a href="{{route('delete', ['id'=> $blog->id])}}" class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 cursor-pointer dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">DELETE</a>
            </div>
        </div>
    @endforeach
</section>

@endsection