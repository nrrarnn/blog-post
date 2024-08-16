<nav class="bg-gray-800">
  <div class="mx-auto w-full px-2 sm:px-5 lg:px-8">
    <div class="block flex h-16 items-center justify-end">
      <div class="absolute  flex items-center sm:hidden">
        <!-- Mobile menu button-->
        <button type="button" class="menu inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white " aria-controls="mobile-menu" aria-expanded="true">
          <span class="sr-only">Open main menu</span>
        
          <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
          </svg>
        
          <svg class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
          </svg>
        </button>
      </div>
      <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-start">
        <div class="flex flex-shrink-0 items-center">
          <p class="text-white text-2xl font-bold">N <span class="text-blue-500">R</span> </p>
        
          
                       
        </div>
        <div class="hidden sm:ml-6 sm:block">
          <div class="flex items-center ">
            <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                
                <ul>
                  <li><a href="/" class="hover:bg-gray-900
                text-white px-3 py-2 rounded-md text-sm font-medium {{ ($active === 'home') ? 'bg-gray-900' : '' }}" aria-current="page">Home</a></li>
              </ul>
                
                <ul><li><a href="/about" class="text-white hover:bg-gray-900 hover:text-white px-3 py-2 rounded-md text-sm font-medium {{ ($active === 'about') ? 'bg-gray-900' : '' }}" >About</a></li></ul>
                
              <ul><li> <a href="/posts" class="text-white hover:bg-gray-900 hover:text-white px-3 py-2 rounded-md text-sm font-medium {{ ($active === 'posts') ? 'bg-gray-900' : '' }}" >Blog</a></li></ul>
              
              <ul>
                <li> <a href="/categories" class="text-white hover:bg-gray-900 hover:text-white px-3 py-2 rounded-md text-sm font-medium {{ ($active === 'categories') ? 'bg-gray-900' : '' }}" >Categories</a></li>
              </ul>

              
              <ul class="absolute right-3">

                  @auth
                            
                <li @click.away="openSort = false" class="relative" x-data="{ openSort: false,sortType:'Welcome back, {{ auth()->user()->name }}' }">
                    <button @click="openSort = !openSort" class="click flex  text-white bg-gray-200 items-center justify-start w-72  py-2 mt-2 text-sm font-semibold text-left bg-transparent rounded-lg ">
                      <span x-text="sortType"></span>
                        <svg fill="currentColor" viewBox="0 0 20 20" :class="{'rotate-180': openSort, 'rotate-0': !openSort}" class="w-4 h-4  transition-transform duration-200 transform "><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    </button>
                    <div x-show="openSort" x-transition:enter="transition opacity-0 ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75 opacity-0" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="absolute z-50 w-full  origin-top-right">
                    <div class=" px-2 pt-2 pb-2 bg-white rounded-md shadow-lg dark-mode:bg-gray-700">
                      <div class=" flex flex-col">
                       
                        <a @click="openSort= !openSort" x-show="sortType != 'My Dashboard'" class="flex flex-row items-start rounded-lg bg-transparent p-2 hover:bg-gray-200 " href="/dashboard">       
                        <div class="">
                          <p class="font-semibold"><i class="fa-light fa-table-columns"></i> My Dashboard</p>
                          </div>
                        </a>
                    
                        <form action="/logout" method="post">
                          @csrf
                       <button type="submit"> <div @click= "openSort=!openSort" x-show="sortType != 'Logout'" class="flex flex-row items-start rounded-lg bg-transparent p-2 hover:bg-gray-200 ">   
                        <div class="">
                          <p class="font-semibold"><i class="fa-solid fa-right-to-bracket"></i> Logout</p>
                        </div>
                        </div>
                     </button> </form>
                      </div>
                    </div>
                  </div>
              </li>           
              <script src="//unpkg.com/alpinejs" defer></script>

                @else 
                            
                 <li> <a href="/login" class="text-gray-300 hover:bg-gray-900 hover:text-white px-3 py-2 rounded-md text-sm font-medium" ><i class="fa-solid fa-right-to-bracket"></i> Login</a></li>
                        
                @endauth
                        
                </ul>   
         
          </div>
        </div>
      </div>
     
        
      </div>
    </div>
  </div>

  <!-- Mobile menu, show/hide based on menu state. -->
  <div class="close hidden" id="mobile-menu">

                        
    <div class="space-y-1 px-2 pt-2 pb-3">
      @auth
                            
                <li @click.away="openSort = false" class="block" x-data="{ openSort: false,sortType:'Welcome back, {{ auth()->user()->name }}' }">
                    <button @click="openSort = !openSort" class="click flex  text-white bg-gray-200 items-center justify-start w-72  py-2 mt-2 text-sm font-semibold text-left bg-transparent rounded-lg ">
                      <span x-text="sortType"></span>
                        <svg fill="currentColor" viewBox="0 0 20 20" :class="{'rotate-180': openSort, 'rotate-0': !openSort}" class="w-4 h-4  transition-transform duration-200 transform "><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    </button>
                    <div x-show="openSort" x-transition:enter="transition opacity-0 ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75 opacity-0" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="absolute z-50 w-96  origin-top-right">
                    <div class=" px-2 pt-2 pb-2 bg-white rounded-md shadow-lg dark-mode:bg-gray-700">
                      <div class=" flex flex-col">
                       
                        <a @click="openSort= !openSort" x-show="sortType != 'My Dashboard'" class="flex flex-row items-start rounded-lg bg-transparent p-2 hover:bg-gray-200 " href="/dashboard">       
                        <div class="">
                          <p class="font-semibold"><i class="fa-light fa-table-columns"></i> My Dashboard</p>
                          </div>
                        </a>
                    
                        <form action="/logout" method="post">
                          @csrf
                       <button type="submit"> <div @click= "openSort=!openSort" x-show="sortType != 'Logout'" class="flex flex-row items-start rounded-lg bg-transparent p-2 hover:bg-gray-200 ">   
                        <div class="">
                          <p class="font-semibold"><i class="fa-solid fa-right-to-bracket"></i> Logout</p>
                        </div>
                        </div>
                     </button> 
                    </form>
                      </div>
                    </div>
                  </div>
              </li>           
              <script src="//unpkg.com/alpinejs" defer></script>

                @else 
                            
                 <li> <a href="/login" class="text-gray-300 hover:bg-gray-900 hover:text-white px-3 py-2 rounded-md text-sm font-medium" ><i class="fa-solid fa-right-to-bracket"></i> Login</a></li>
                        
                @endauth
                        
      <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
      <a href="/" class=" text-white block px-3 py-2 rounded-md text-base font-medium hover:bg-gray-900 {{ ($active === 'home') ? 'bg-gray-900' : '' }}" >Home</a>

      <a href="/about" class="text-gray-300 hover:bg-gray-900 hover:text-white block px-3 py-2 rounded-md text-base font-medium {{ ($active === 'about') ? 'bg-gray-900' : '' }}">About</a>

      <a href="/posts" class="text-gray-300 hover:bg-gray-900 hover:text-white block px-3 py-2 rounded-md text-base font-medium {{ ($active === 'posts') ? 'bg-gray-900' : '' }}">Blog</a>

      <a href="/categories" class="text-gray-300 hover:bg-gray-900 hover:text-white block px-3 py-2 rounded-md text-base font-medium {{ ($active === 'categories') ? 'bg-gray-900' : '' }}">Category</a>

      
    </div>
  </div>
</nav>

 <script>
menu = document.querySelector('.menu');
mobileMenu = document.querySelector('#mobile-menu');


menu.addEventListener("click", function(){
  mobileMenu.classList.toggle('hidden');
});



</script>