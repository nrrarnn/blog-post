@extends('layouts.main')

@section('container')
   
@if (session()->has('success'))
		

<div class="text-slate-900 w-96 mx-auto  px-6 py-4 border-0 rounded relative  mt-10 bg-blue-200" id="alert">
  <span class="inline-block align-middle mr-8">
   {{ session('success') }}
  </span>
  <button class="absolute bg-transparent text-2xl font-semibold leading-none right-0 top-0 mt-4 mr-6 outline-none focus:outline-none" id="button">
    <span>×</span>
  </button>
</div>
@endif

@if (session()->has('loginError'))
		

<div class="text-slate-900 w-96 mx-auto  px-6 py-4 border-0 rounded relative  mt-10 bg-red-200" id="alert">
  <span class="inline-block align-middle mr-8">
   {{ session('loginError') }}
  </span>
  <button class="absolute bg-transparent text-2xl font-semibold leading-none right-0 top-0 mt-4 mr-6 outline-none focus:outline-none" id="button">
    <span>×</span>
  </button>
</div>
@endif
<div class=" sm:flex sm:flex-row  justify-center bg-transparent mt-10">
	<div class="flex justify-center self-center  z-10 ">
		<div class="p-12 bg-sky-100 mx-auto rounded-3xl w-96 shadow-xl">
			<div class="mb-7 text-center">
				<h3 class="font-bold text-2xl text-gray-900">Sign In </h3>
				  <p class="text-gray-400">Don't have an account? <a href="/register"
						class="text-sm text-blue-700 hover:text-blue-700">Sign Up</a>
					</p>
			</div> 
			<form action="/login" method="post">
			@csrf
				<div class="space-y-6">
					<div class="">
						<input class=" w-full text-sm  px-4 py-3 bg-white focus:bg-gray-100 border  border-gray-200 rounded-lg focus:outline-none focus:border-blue-400 @error('email') border-red-500 @enderror" type="email" name="email" id="email" placeholder="Email" value="{{ old('email') }}" autofocus required>
							@error('email')
								<p class="text-red-500 text-sm">
									{{ $message }}
								</p>
							@enderror
        </div>
				<div class="space-y-6">
					<div class="">
						<input class=" w-full text-sm  px-4 py-3 bg-white focus:bg-gray-100 border  border-gray-200 rounded-lg focus:outline-none focus:border-blue-400 @error('password') border-red-500 @enderror" type="password" name="password" id="password"  placeholder="Password" value="{{ old('password') }}">
							@error('password')
								<p class="text-red-500 text-sm">
									{{ $message }}
								</p>
							@enderror
        </div>
				<div>
					<button type="submit" class="w-full flex justify-center bg-blue-700  hover:bg-blue-700 text-gray-100 p-3  rounded-lg tracking-wide font-semibold  cursor-pointer transition ease-in duration-500">
            Sign in
          </button>
				</div>
			</form>
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
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.js"></script>
@endsection