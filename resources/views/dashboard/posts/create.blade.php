@extends('dashboard.layouts.main')

@section('container')
     <h1 class="font-bold text-center mt-4">Create New Posts</h1>
 
 <!-- component -->
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.js" defer></script>

<div class="container max-w-full mx-auto md:py-24 px-6">
  <div class="max-w-sm mx-auto px-6">
    <div class="relative flex flex-wrap">
        <div class="w-full relative">
            <div class="md:mt-6">
                    
                <form method="post" action="/dashboard/posts" enctype="multipart/form-data"  >
                    @csrf
                    <div class="mx-auto max-w-lg">
                        <div class="py-1">
                            <span class="block text-sm font-medium text-gray-700">Title</span>
                                <input placeholder="" type="text"class="text-md block px-3 py-2 rounded-lg w-full bg-white border border-gray-300 placeholder-slate-900 shadow-md focus:placeholder-gray-500 focus:bg-white focus:border-gray-300 focus:outline-none @error('title') border-red-300 @enderror" id="title" name="title" required autofocus value="{{ old('title') }}">
                                @error('title')
								<p class="text-red-500 text-sm">
									{{ $message }}
								</p>
							@enderror
                        </div>
                        <div class="py-1">
                            <span class="block text-sm font-medium text-gray-700">Slug</span>
                                <input placeholder="" type="text" class="text-md block px-3 py-2 rounded-lg w-full bg-white border border-gray-300 placeholder-slate-900 shadow-md focus:placeholder-gray-500 focus:bg-white focus:border-gray-300 focus:outline-none @error('slug') border-red-300 @enderror" id="slug" name="slug" required value="{{ old('slug') }}">
                                @error('slug')
								<p class="text-red-500 text-sm">
									{{ $message }}
								</p>
							@enderror
                        </div>
                        <div class="py-1 ">
                             <label for="category" class="block text-sm font-medium
                               text-gray-700">Category</label>
                                <select id="category" name="category_id"   autocomplete="country-name" class="text-md block px-3 py-2 rounded-lg w-full bg-white border border-gray-300 placeholder-slate-900 shadow-md focus:placeholder-gray-500 focus:bg-white focus:border-gray-300 focus:outline-none">
                                @foreach ($categories as $category )
                                @if(old('category_id') == $category->id)
                                  <option value="{{ $category->id }}" selected>{{ $category->name }}</option> 
                                  @else
                                      <option value="{{ $category->id }}">{{ $category->name }}</option>
                                  @endif
                                @endforeach
                                </select>
                        </div>
                        <div class="py-1 ">

                         <form class="flex items-center space-x-6">
                            <p class="block text-sm font-medium
                               text-gray-700">Post Image</p>
                            <label class="block">
                                <img class="img-preview w-1/3 mt-3">
                                <span class="sr-only">Choose profile photo</span>
                                <input type="file" name="image" id="image" class="block w-full text-sm text-slate-500
                                file:mr-4 file:py-2 file:px-4
                                file:rounded-full file:border-0
                                file:text-sm file:font-semibold
                                file:bg-violet-50 file:text-violet-700
                                hover:file:bg-violet-100
                                @error('image') border-red-300 @enderror" onchange="previewImage()"/>
                            </label>
                            @error('image')
								<p class="text-red-500 text-sm">
									{{ $message }}
								</p>
							@enderror
                            </form>

                        </div>
                        <div class="py-1">
                            <label for="body" class="block text-sm font-medium">Body</label>
                             @error('body')
								<p class="text-red-500 text-sm">
									{{ $message }}
								</p>
							@enderror
                                <input id="body" type="hidden" name="body" value="{{ old('body') }}">
                                    <trix-editor input="body"></trix-editor>
                       
                            <button type="submit" name="submit" class="mt-5 text-lg font-semibold bg-gray-800 w-full text-white rounded-lg px-6 py-3 block shadow-xl hover:text-white hover:bg-black" >
                                Create Post
                            </button>
                        
                </form>
            </div>
        </div>
    </div>
  </div>
</div>

  {{-- <script src="https://unpkg.com/flowbite@1.4.0/dist/flowbite.js"></script> --}}

<script>
   const title = document.querySelector("#title");
        const slug = document.querySelector("#slug");

        title.addEventListener("keyup", function() {
            let preslug = title.value;
            preslug = preslug.replace(/ /g,"-");
            slug.value = preslug.toLowerCase();
        });

   document.addEventListener('trix-file-accept', function(e){
       e.preventDefault();
   });


   function previewImage(){
        const image = document.querySelector('#image');
        const imgPreview = document.querySelector('.img-preview');

        imgPreview.style.display = 'block';

        const ofReader = new FileReader();
        ofReader.readAsDataURL(image.files[0]);

        ofReader.onload = function(oFREvent) {
            imgPreview.src = oFREvent.target.result;
        }
   }
  
</script>
@endsection