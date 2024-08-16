@extends('dashboard.layouts.main')

@section('container')
 
<div class="flex m-4 ">
      <div class="mx-auto max-w-3xl sm:w-3/4 pt-10 pb-32">
          <h1 class="mb-4 font-bold text-2xl">{{ $post->title }}</h1>  
          <small>
          <a href="/dashboard/posts" class=" py-2 px-2 rounded-lg bg-blue-400 text-white shadow-lg font-semibold">back to my posts</a>
          <a href="/dashboard/posts/{{ $post->slug }}/edit" class=" py-2 px-2 rounded-lg bg-green-400 text-white shadow-lg font-semibold"><i class="fa-solid fa-pencil"></i> Edit</a>
          <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="inline">
                                        @method('delete')
                                        @csrf
                                    <button type="submit" onclick="return confirm('Are you sure?')" class="py-2 px-2 rounded-lg bg-red-400 text-white shadow-lg font-semibold">
                                      
                                       
                                        <span class="relative"><i class="fa-solid fa-trash"></i> Delete</span>
                                    
                                    </button>
                                </form>
          </small>

          @if($post->image)
          
          <img class="mt-5 w-screen rounded-lg"  src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->name }}">
       
          @else
          <img class="mt-5 w-full h-56 rounded-lg  " src="https://source.unsplash.com/700x400?{{ $post->category->name }}" alt="{{ $post->category->name }}">
          @endif
            <article class="mt-3 mb-5">

                {!! $post->body !!}
            </article>
        
      </div>
     
</div>

@endsection