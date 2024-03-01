@extends('layout.defaults')
@section('title', 'Blog')
@section('content')
    
<section class="flex gap-4 flex-wrap justify-center pt-4 pb-4 bg-slate-100">
    @foreach ($blogs as $blog)
        <div class="w-1/6 border border-slate-950 rounded-lg p-5 bg-white shadow-md">
            <h2 class="text-xl font-medium pb-2">{{$blog['title']}}</h2>
            <p>{{$blog['shortDesciption']}}</p>
            <a href={{route('showBlog',$blog['id'])}} class="underline text-cyan-800">Read more</a>
        </div>
    @endforeach
</section>

@endsection