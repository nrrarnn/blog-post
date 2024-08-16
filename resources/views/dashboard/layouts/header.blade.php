<!-- Header -->
      <div class="fixed w-full flex items-center justify-between h-14 text-white z-10">
        <div class="flex items-center justify-start md:justify-center pl-3 w-14 md:w-64 h-14 bg-sky-400 dark:bg-gray-800 border-none">
          <span class="hidden md:block font-bold">ADMIN</span>
        </div>
        <div class="flex justify-end items-center h-14 bg-sky-400 dark:bg-gray-800 header-right">
         
          <ul class="flex items-center">
            <li>
              <form action="/logout" method="post">
                          @csrf
                       <button type="submit"> <div @click= "openSort=!openSort" x-show="sortType != 'Logout'" class="flex flex-row items-start rounded-lg bg-transparent p-2 hover:bg-sky-500 pr-4">   
                        <div class="">
                          <p class="font-semibold"><i class="fa-solid fa-right-to-bracket"></i> Logout</p>
                        </div>
                        </div>
                     </button> </form>
            </li>
          </ul>
        </div>
      </div>
      <!-- ./Header -->