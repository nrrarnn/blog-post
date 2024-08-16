@extends('layouts.main')

@section('container')
<form action="/register" method="post">
	@csrf
<div class="relative mt-10 min-h-screen  sm:flex sm:flex-row  justify-center bg-transparent rounded-3xl shadow-xl">
	<div class="flex justify-center self-center  z-10 ">
		<div class="p-12 bg-sky-100 mx-auto rounded-3xl w-96 shadow-xl">
			<div class="mb-7 text-center">
				<h3 class="font-bold text-2xl text-gray-900">Sign Up</h3>
			</div> 
					<div class="space-y-6">
						<div class="">
							<input class=" w-full text-sm  px-4 py-3 bg-white focus:bg-gray-100 border  border-gray-200 rounded-lg focus:outline-none focus:border-blue-400 @error('name') border-red-500 @enderror" type="text" placeholder="Name" name="name" id="name" value="{{ old('name') }}" required>
							@error('name')
								<p class="text-red-500 text-sm">
									{{ $message }}
								</p>
							@enderror
			
            </div>
						
					<div class="space-y-6">
						<div class="">
							<input class=" w-full text-sm  px-4 py-3 bg-white focus:bg-gray-100 border  border-gray-200 rounded-lg focus:outline-none focus:border-blue-400 @error('username') border-red-500 @enderror" type="text" name="username" placeholder="Username" id="username" value="{{ old('username') }}" required>
								@error('username')
								<p class="text-red-500 text-sm">
									{{ $message }}
								</p>
							@enderror
            </div>
				
					<div class="space-y-6">
						<div class="">
							<input class=" w-full text-sm  px-4 py-3 bg-white focus:bg-gray-100 border  border-gray-200 rounded-lg focus:outline-none focus:border-blue-400 @error('email') border-red-500 @enderror" type="email" name="email" placeholder="Email" id="email" value="{{ old('email') }}" required>
								@error('email')
								<p class="text-red-500 text-sm">
									{{ $message }}
								</p>
							@enderror
            </div>
				
					<div>
					<div class="space-y-6">
						<div class="">
							<input class=" w-full text-sm  px-4 py-3 bg-white focus:bg-gray-100 border  border-gray-200 rounded-lg focus:outline-none focus:border-blue-400 @error('password') border-red-500 @enderror" name="password" type="password" placeholder="Password" id="password" value="{{ old('password') }}" required>
								@error('password')
								<p class="text-red-500 text-sm">
									{{ $message }}
								</p>
							@enderror
            </div>
					
					<div>
						<button type="submit" class="w-full flex justify-center bg-blue-700  hover:bg-blue-700 text-gray-100 p-3  rounded-lg tracking-wide font-semibold  cursor-pointer transition ease-in duration-500">
                Sign Up
              </button>
							<p class="text-gray-400 text-center">Already Sign In? <a href="/login"
						class="text-sm text-blue-700 hover:text-blue-700">Sign In</a></p>
					</div>
					</div>
					</div>
					</div>	
	 		</div>
	  </div>
	</div>
</form>


<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.js"></script>
    
@endsection