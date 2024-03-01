@extends('layout.defaults')
@section('title', 'Our website')
@section('content')
    
<section class="flex  bg-slate-200 items-center">
    <div class="px-10 flex-1">
        <h1 class="font-bold text-4xl  pb-3 pl-5 text-amber-900">Welcome to our website</h1>
        <p class="text-lg text-slate-900">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum ratione molestias error exercitationem voluptatum iure vel atque facilis sapiente, voluptates, numquam et ab velit similique. Unde consequatur rem quam soluta! Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi, est a nihil sit officia dignissimos ratione eligendi, obcaecati deserunt, modi quia quisquam ea sed dolore sapiente nobis blanditiis cum ab.</p>
    </div>
    <div class="flex-1 p-10">
        <img src="image.jpg" alt="" class="w-full rounded-xl">
    </div>
</section>

@endsection