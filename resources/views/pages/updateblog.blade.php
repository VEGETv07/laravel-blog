@extends('layout.defaults')
@section('content')
<div class="p-10">
    <form method="POST" action="{{ url('validate') }}" class="py-5">
      @csrf
      <div>
        <input type="hidden" value="{{$blog->id}}" name="id">
        <label for="title" class="block text-gray-700 font-semibold mb-2 ">Title</label>
        <input type="text" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-indigo-500" name="title" id="title" value="{{$blog->title}}">
      </div>
      <div>
        <label for="description" class="block text-gray-700 font-semibold mb-2">Description</label>
        <input type="text" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-indigo-500"" name="description" id="description" value="{{$blog->description}}">
      </div>
            <div class="mb-4">
                <label for="content" class="block text-gray-700 font-semibold mb-2">Content</label>
                <textarea id="content" name="content" rows="4"
                    class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-indigo-500"
                    placeholder="Enter your content here..." >{{ $blog->content}}</textarea>
            </div>
            @if ($errors->any())
              <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
              </div>
            @endif
            <button type="submit"
                class="w-full bg-indigo-500 text-white py-2 px-4 rounded-md hover:bg-indigo-600 focus:outline-none focus:bg-indigo-600">UPDATE BLOG</button>
      </form>
</div>

@endsection