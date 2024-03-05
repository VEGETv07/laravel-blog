@props(['blogs'])
{{-- <div> --}}
    @foreach ($blogs as $blog)
        <div class="w-1/6 border  rounded-lg p-5 bg-white shadow-md">
            <h2 class="text-xl font-medium pb-2">{{$blog['title']}}</h2>
            <p>{{$blog['shortDesciption']}}</p>
            <a href={{route('showBlog',$blog['id'])}} class="underline text-cyan-800">Read more</a>
        </div>
    @endforeach
{{-- </div> --}}