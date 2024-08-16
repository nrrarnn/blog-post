@extends('dashboard.layouts.main')

@section('container')


<h1 class="p-5 font-bold text-2xl ">Welcome back, {{ auth()->user()->name }}</h1>
    
<a href="/posts" class="font-semibold ml-5 bg-sky-300 p-2 rounded-lg shadow-lg">back to post</a>
        
    
@endsection