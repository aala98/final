 <!-- Desktop sidebar -->
 <aside
 class="z-20 hidden w-64 overflow-y-auto bg-white dark:bg-gray-800 md:block flex-shrink-0"
>
 <div class="py-4 text-gray-500 dark:text-gray-400">
   <a
     class="ml-6 text-lg font-bold text-gray-800 dark:text-gray-200"
     href="#"
   >
     {{ Auth::user()->hasRole('$role->name')}}
   </a>
   <ul class="mt-6">
     <li class="relative px-6 py-3">
       <span
         class="absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg"
         aria-hidden="true"
       ></span>
       <a
         class="inline-flex items-center w-full text-sm font-semibold text-gray-800 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200 dark:text-gray-100"
         href="index.html"
       >
         <svg
           class="w-5 h-5"
           aria-hidden="true"
           fill="none"
           stroke-linecap="round"
           stroke-linejoin="round"
           stroke-width="2"
           viewBox="0 0 24 24"
           stroke="currentColor"
         >
           <path
             d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"
           ></path>
         </svg>
         <span class="ml-4">Accueil</span>
       </a>
     </li>
   </ul>
   <ul>



     <li class="relative px-6 py-3">
       <a
         class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
         href="modals.html"
       >
         <svg
           class="w-5 h-5"
           aria-hidden="true"
           fill="none"
           stroke-linecap="round"
           stroke-linejoin="round"
           stroke-width="2"
           viewBox="0 0 24 24"
           stroke="currentColor"
         >
           <path
             d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z"
           ></path>
         </svg>
         <span class="ml-4">les rendez-vous pour ce jour</span>
       </a>
     </li>
     <li class="relative px-6 py-3">
        <a
          class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
          href=""
        >
          <svg
            class="w-5 h-5"
            aria-hidden="true"
            fill="none"
            stroke-linecap="round"
            stroke-linejoin="round"
            stroke-width="2"
            viewBox="0 0 24 24"
            stroke="currentColor"
          >
            <path
              d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"
            ></path>
          </svg>
          <span class="ml-4">Gestion des Client</span>
        </a>
      </li>

      <li class="relative px-6 py-3">
        <a
          class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
          {{-- href="{{ route('systemCalendar') }}" --}}
        >
          <svg
            class="w-5 h-5"
            aria-hidden="true"
            fill="none"
            stroke-linecap="round"
            stroke-linejoin="round"
            stroke-width="2"
            viewBox="0 0 24 24"
            stroke="currentColor"
          >
            <path
              d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"
            ></path>
          </svg>
          <span class="ml-4">Calendar</span>
        </a>
      </li>
     <li class="relative px-6 py-3">
       <button
         class="inline-flex items-center justify-between w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
         @click="togglePagesMenu"
         aria-haspopup="true"
       >
         <span class="inline-flex items-center">
           <svg
             class="w-5 h-5"
             aria-hidden="true"
             fill="none"
             stroke-linecap="round"
             stroke-linejoin="round"
             stroke-width="2"
             viewBox="0 0 24 24"
             stroke="currentColor"
           >
             <path
               d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z"
             ></path>
           </svg>
           <span class="ml-4">Pages</span>
         </span>
         <svg
           class="w-4 h-4"
           aria-hidden="true"
           fill="currentColor"
           viewBox="0 0 20 20"
         >
           <path
             fill-rule="evenodd"
             d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
             clip-rule="evenodd"
           ></path>
         </svg>
       </button>
       <template x-if="isPagesMenuOpen">
         <ul
           x-transition:enter="transition-all ease-in-out duration-300"
           x-transition:enter-start="opacity-25 max-h-0"
           x-transition:enter-end="opacity-100 max-h-xl"
           x-transition:leave="transition-all ease-in-out duration-300"
           x-transition:leave-start="opacity-100 max-h-xl"
           x-transition:leave-end="opacity-0 max-h-0"
           class="p-2 mt-2 space-y-2 overflow-hidden text-sm font-medium text-gray-500 rounded-md shadow-inner bg-gray-50 dark:text-gray-400 dark:bg-gray-900"
           aria-label="submenu"
         >
           <li
             class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
           >
             <a class="w-full" href="pages/login.html">Login</a>
           </li>
           <li
             class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
           >
             <a class="w-full" href="pages/create-account.html">
               Create account
             </a>
           </li>
           <li
             class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
           >
             <a class="w-full" href="pages/forgot-password.html">
               Forgot password
             </a>
           </li>
           <li
             class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
           >
             <a class="w-full" href="pages/404.html">404</a>
           </li>
           <li
             class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
           >
             <a class="w-full" href="pages/blank.html">Blank</a>
           </li>
         </ul>
       </template>
     </li>
   </ul>
   <div class="inline-block mr-2 mt-2">
    <a href="">
    <button type="button" class="focus:outline-none text-gray-600 text-sm py-2.5 px-5 rounded-md border border-gray-600 hover:bg-gray-50 flex items-center">
        <svg class="w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 9l3 3m0 0l-3 3m3-3H8m13 0a9 9 0 11-18 0 9 9 0 0118 0z"></path>
        </svg>

        Create Client

    </button>
</a>
 </div>
</aside>
<!-- Mobile sidebar -->

