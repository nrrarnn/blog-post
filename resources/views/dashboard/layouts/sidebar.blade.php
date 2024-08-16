<!-- Sidebar -->
      <div class="fixed flex flex-col top-14 left-0 w-14 hover:w-64 md:w-64 bg-sky-500 h-full text-white transition-all duration-300 border-none z-10 sidebar">
        <div class="overflow-y-auto overflow-x-hidden flex flex-col justify-between flex-grow">
          <ul class="flex flex-col py-4 space-y-1">
            
            <li>
              <a href="/dashboard" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-sky-600  text-white-600 hover:text-white-800 border-l-4 border-transparent hover:border-sky-700  pr-6 {{ Request::is('dashboard') ? 'bg-sky-600' : '' }}">
                <span class="inline-flex justify-center items-center ml-4">
                  <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path></svg>
                </span>
                <span class="ml-2 text-sm tracking-wide truncate">Dashboard</span>
              </a>
            </li>
            <li>
              <a href="/dashboard/posts" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-sky-600 dark:hover:bg-gray-600 text-white-600 hover:text-white-800 border-l-4 border-transparent hover:border-sky-700 dark:hover:border-gray-800 pr-6 {{ Request::is('dashboard/posts*') ? 'bg-sky-600' : '' }}">
                <span class="inline-flex justify-center items-center ml-4">
                  <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4"></path></svg>
                </span>
                <span class="ml-2 text-sm tracking-wide truncate">My Posts</span>
                
              </a>
            </li>
            @can('admin')
            <li>
               <h1 class="mt-3 ml-5 font-bold text-slate-200 ">administrator</h1>
            </li>
            <li>
              <a href="/dashboard/categories" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-sky-600 dark:hover:bg-gray-600 text-white-600 hover:text-white-800 border-l-4 border-transparent hover:border-sky-700 dark:hover:border-gray-800 pr-6 {{ Request::is('dashboard/categories*') ? 'bg-sky-600' : '' }}">
                <span class="inline-flex justify-center items-center ml-4">
                  <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4"></path></svg>
                </span>
                <span class="ml-2 text-sm tracking-wide truncate">Post Categories</span>
              </a>
            </li>
            @endcan
          </ul>

        
          
        </div>
      </div>
      <!-- ./Sidebar -->
    