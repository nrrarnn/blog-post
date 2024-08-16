@extends('dashboard.layouts.main')

@section('container')
 <h1 class="font-bold text-center mt-4">Post Categories</h1>

 <!-- component -->

    <div class="container mt-4 mx-auto px-4">

        @if (session()->has('success'))
		

         <div class="text-slate-900 w-96 mx-auto px-6 py-4 border-0 rounded relative  mt-10 bg-blue-200" id="alert">
             <span class="inline-block align-middle mr-8">
                {{ session('success') }}
             </span>
             <button class="absolute bg-transparent text-2xl font-semibold leading-none right-0 top-0 mt-4 mr-6 outline-none focus:outline-none" id="button">
                    <span>×</span>
             </button>
                </div>
         @endif

         
        
        <a href="/dashboard/categories/create" class="bg-blue-500 p-2 rounded-lg mb-4 text-white shadow-lg font-semibold">Create new category</a>
            <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
                <div class="inline-block min-w-full shadow rounded-lg overflow-hidden">
                    <table class="min-w-full leading-normal">
                        <thead>
                            <tr>
                              <th
                                    class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    No
                                </th>
                                <th
                                    class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    Category Name
                                </th>
                               
                                <th
                                    class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    Action
                                </th>
                               
                            </tr>
                            
                        </thead>
                        <tbody>
                           @foreach ($categories as $category)
                            <tr>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    <div class="flex items-center">
                                        <div class="flex-shrink-0 w-10 h-10">
                                           {{ $loop->iteration }}
                                        </div>
                                    </div>
                                </td>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    <p class="text-gray-900 whitespace-no-wrap">{{ $category->name }}</p>
                                </td>
                                
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    <a href="/dashboard/categories/{{ $category->slug }}" class="text-gray-900 whitespace-no-wrap ">
                                       <span
                                        class="relative inline-block px-3 py-1 font-semibold text-sky-900 leading-tight ">
                                        <span aria-hidden
                                            class="absolute inset-0 bg-sky-200 opacity-50 rounded-full"></span>
                                        <span class="relative"><i class="fa-regular fa-eye"></i></span>
                                    </span>
                                    </a>
                                    <a href="/dashboard/categories/{{ $category->slug }}/edit" class="text-gray-900 whitespace-no-wrap">
                                       <span
                                        class="relative inline-block px-3 py-1 font-semibold text-green-900 leading-tight">
                                        <span aria-hidden
                                            class="absolute inset-0 bg-green-200 opacity-50 rounded-full"></span>
                                        <span class="relative"><i class="fa-solid fa-pencil"></i></span>
                                    </span>
                                    </a>
                                    <form action="/dashboard/categories/{{ $category->slug }}" method="post" class="inline">
                                        @method('delete')
                                        @csrf
                                    <button type="submit" onclick="return confirm('Are you sure?')" class="text-gray-900 whitespace-no-wrap">
                                       <span
                                        class="relative inline-block px-3 py-1 font-semibold text-red-900 leading-tight">
                                        <span aria-hidden
                                            class="absolute inset-0 bg-red-200 opacity-50 rounded-full"></span>
                                        <span class="relative"><i class="fa-solid fa-trash"></i></span>
                                    </span>
                                    </button>
                                </form>
                                </td>
                               
                            </tr>
                            @endforeach
                            
                        </tbody>
                    </table>
                   
                </div>
            </div>
        </div>
    </div>

    <script>
  alert = document.querySelector('#alert');
	button = document.querySelector('#button');

	button.addEventListener("click", function(){
  alert.classList.toggle('hidden');
})
</script>

@endsection