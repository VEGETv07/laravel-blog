@extends('layout.defaults')
@section('title', 'Blog')
@section('content')
    
<section class="flex gap-4 flex-wrap justify-center pt-4 pb-4 bg-slate-100">
<div>
    <h2>{{$blog['title']}}</h2>
    <p>{{$blog['content']}}</p>
</div>
</section>

@endsection