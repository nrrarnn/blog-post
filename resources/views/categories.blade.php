@extends('layouts.main')


@section('container')

<h1 class="mb-4 mt-4 font-bold text-2xl text-center">Post Categories</h1>

  <div class="lg:max-w-3xl w-3/4 mt-5 mx-auto flex flex-wrap">
@foreach ($categories as $category)
      <div class="mb-5">
       
        <div class="absolute  text-white lg:text-2xl font-bold px-24 py-14 lg:px-64 lg:py-40 text-shadow-lg"><a href="/posts?category={{ $category->slug }}" class="text-shadow-lg"  >{{ $category->name }}</a></div>
          <img src="https://source.unsplash.com/1000x500?{{ $category->name }}" alt="{{ $category->name }}" class="rounded-lg">
        
      </div>
  

@endforeach
     </div>

@endsection


