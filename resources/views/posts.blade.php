@extends('layouts.main')


@section('container')

<h1 class="mb-4 font-bold text-2xl text-center mt-3">{{ $title }}</h1>


 <form action="/posts">
    @if (request('category'))
     <input type="hidden" name="category" value="{{ request('category') }}" >
    @endif
    @if (request('author'))
     <input type="hidden" name="author" value="{{ request('author') }}" >
    @endif
         <div class="p-8">
            <div class="w-9/12 bg-white mx-auto flex items-center rounded-lg shadow-xl focus:ring-indigo-500 sm:w-3/4">
                <input name="search"
                    type="search"
                    placeholder="Search"
                    autoComplete="off"
                    class="rounded-lg w-full py-4 px-4 text-gray-700 leading-tight focus:outline-none" 
                    id="search" 
                     value="{{ request('search') }}" />
                <button class="py-4 px-5 flex justify-end bg-slate-700 rounded-r-lg" type="submit" ><span class=" text-white">
                <i class="fa-solid fa-magnifying-glass"></i>
                </span>
         
        </button>
            </div>
        </div>
        
            
      </form>

<section class="bg-white dark:bg-gray-900">
    <div class="container">
        <div class="flex flex-wrap w-3/4 gap-6 mt-8 mx-auto justify-center ">
      @if ($posts->count())
       <div class="w-full bg-slate-200  flex-row m-auto justify-center shadow-lg rounded-lg">
            <div class="flex flex-wrap">
               
                
                 @if($posts[0]->image)
          
                <img class="w-screen rounded-lg mx-auto"  src="{{ asset('storage/' . $posts[0]->image) }}" alt="{{ $posts[0]->category->name }}">
            
                @else
                <img class="w-screen rounded-lg mx-auto " src="https://source.unsplash.com/800x300?{{ $posts[0]->category->name }}" alt="{{ $posts[0]->category->name }}">
                @endif
                
                     <article class=" mx-auto mb-4 text-center p-5">
                        
                        <h2 class="text-blue-600 font-bold text-xl mb-2"><a href="/posts/{{ $posts[0]->slug }}">{{ $posts[0]->title }}</a></h2>

                        <p> <small>By <a href="/posts?author={{ $posts[0]->author->username }}" class="text-blue-500 font-bold">{{ $posts[0]->author->name }}</a> in <a href="/posts?category={{ $posts[0]->category->slug }}" class="font-semibold text-blue-400">{{ $posts[0]->category->name }}</a> {{ $posts[0]->created_at->diffForHumans() }}</small></p>
                         
                       <p class="mb-5">{{ $posts[0]->excerpt }}</p>

                           <a href="/posts/{{ $posts[0]->slug }}" class=" bg-blue-600 text-white rounded-lg px-3 py-2 font-bold shadow-lg">Read More</a>
                     </article>
                
              </div>
            </div>
         
     


@foreach ($posts->skip(1) as $post)

          <div class="w-96 flex-row m-auto justify-center shadow-lg rounded-lg bg-slate-200">
            <div class="flex flex-wrap">
                 <div class="absolute backdrop-blur-sm bg-white/30 rounded-lg text-white p-3"><a href="/posts?category={{ $post->category->slug }}">{{ $post->category->name  }}</a></div>
               
                 @if($post->image)
          
                <img class=" w-screen rounded-lg"  src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->name }}">
            
                @else
                 <img class=" w-screen h-56 rounded-lg  " src="https://source.unsplash.com/700x400?{{ $post->category->name }}" alt="{{ $post->category->name }}">
                @endif
                
                     <article class="mb-4 mx-auto text-center p-5">
                         
                        <h2 class="text-blue-600 font-bold text-xl mb-2"><a href="/posts/{{ $post->slug }}">{{ $post->title }}</a></h2>

                        <p><small>By <a href="/posts?author={{ $post->author->username }}" class="text-blue-500 font-bold">{{ $post->author->name }}</a> {{ $post->created_at->diffForHumans() }} </small>
                        </p>
                       

                       <p class="mb-5">{{ $post->excerpt }}</p>

                           <a href="/posts/{{ $post->slug }}" class=" bg-blue-600 text-white rounded-lg px-3 py-2 font-bold shadow-lg ">Read More</a>
                     </article>
                
              </div>
            </div>
          
@endforeach
        </div>
     </div>
</section>
        @else
            
       <p>No Post Found.</p>
       
      @endif
    <div class="m-10">
      {{ $posts->links() }}
    </div>
@endsection



