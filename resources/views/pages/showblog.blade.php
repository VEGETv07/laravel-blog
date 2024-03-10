@extends('layout.defaults')
@section('title', 'Blog')
@section('content')
    
<section class="space-y-3 pt-4 pb-4 bg-slate-100 p-32">
    <a href={{route('blog')}} class="inline-flex gap-1 items-center hover:underline"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
        <path stroke-linecap="round" stroke-linejoin="round" d="m11.25 9-3 3m0 0 3 3m-3-3h7.5M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
      </svg>
       <span>Return</span></a>
<div  class="flex gap-4 flex-wrap justify-center  bg-slate-100 ">
    <div class="p-8 border border-slate-900 rounded-lg">
        <h2 class="text-3xl font-semibold text-slate-600 border-b border-slate-800 pb-2">{{$blog->title}}</h2>
        
        <p class="text-lg pt-6">{{$blog->content}}</p>
    </div>
</div>
</section>

@endsection