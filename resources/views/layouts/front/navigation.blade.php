 <!-- Header -->
 <header class="absolute inset-x-0 top-0 z-50">

   <nav x-data="{ open: false }" class="bg-white shadow">
     <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
       <div class="relative flex h-16 justify-between">
         <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
           <!-- Mobile menu button -->
           <button type="button" class="relative inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-gray-100 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500" aria-controls="mobile-menu" @click="open = !open" aria-expanded="true" x-bind:aria-expanded="open.toString()">
             <span class="absolute -inset-0.5"></span>
             <span class="sr-only">Open main menu</span>
             <svg x-description="Icon when menu is closed." x-state:on="Menu open" x-state:off="Menu closed" class="h-6 w-6 hidden" :class="{ 'hidden': open, 'block': !(open) }" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
               <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"></path>
             </svg>
             <svg x-description="Icon when menu is open." x-state:on="Menu open" x-state:off="Menu closed" class="h-6 w-6 block" :class="{ 'block': open, 'hidden': !(open) }" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
               <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"></path>
             </svg>
           </button>
         </div>
         <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-start">
           <div class="flex flex-shrink-0 items-center">
             <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=lime&amp;shade=600" alt="Your Company">
           </div>
           <div class="hidden sm:ml-6 sm:flex sm:space-x-8">
             <!-- Current: "border-indigo-500 text-gray-900", Default: "border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700" -->
             <a href="{{ URL('/') }}" class="inline-flex items-center px-1 pt-1 text-l font-semibold text-gray-900 hover:border-lime-600 hover:text-lime-600">Home</a>
             <a href="{{ URL('/adopt') }}" class="inline-flex items-center border-b-2 border-transparent px-1 pt-1 text-l font-semibold text-gray-900 hover:border-lime-600 hover:text-lime-600">Adopt</a>
             <a href="{{ URL('/donate') }}" class="inline-flex items-center border-b-2 border-transparent px-1 pt-1 text-l font-semibold text-gray-900 hover:border-lime-800 hover:text-lime-600">Donate</a>
             <a href="{{ URL('/howwework') }}" class="inline-flex items-center border-b-2 border-transparent px-1 pt-1 text-l font-semibold text-gray-900 hover:border-lime-600 hover:text-lime-600">How we work</a>
             <a href="{{ URL('/stories') }}" class="inline-flex items-center border-b-2 border-transparent px-1 pt-1 text-l font-semibold text-gray-900 hover:border-lime-600 hover:text-lime-600">Success Stories</a>
             {{-- <a href="{{ URL('/faq') }}" class="inline-flex items-center border-b-2 border-transparent px-1 pt-1 text-l font-semibold text-gray-900 hover:border-lime-600 hover:text-lime-600">FAQ</a> --}}
             <a href="{{ URL('/message') }}" class="inline-flex items-center border-b-2 border-transparent px-1 pt-1 text-l font-semibold text-gray-900 hover:border-lime-600 hover:text-lime-600">Contact us</a>
             <a href="{{ URL('/aboutus') }}" class="inline-flex items-center border-b-2 border-transparent px-1 pt-1 text-l font-semibold text-gray-900 hover:border-lime-600 hover:text-lime-600">About us</a>

           </div>
         </div>

       </div>
     </div>

     <div x-description="Mobile menu, show/hide based on menu state." class="sm:hidden" id="mobile-menu" x-show="open">
       <div class="space-y-1 pb-4 pt-2">
         <!-- Current: "bg-indigo-50 border-indigo-500 text-indigo-700", Default: "border-transparent text-gray-500 hover:bg-gray-50 hover:border-gray-300 hover:text-gray-700" -->
         <a href="{{ URL('/') }}" class="block border-l-4 border-lime-500 py-2 pl-3 pr-4 text-base font-medium text-gray-900">Home</a>
         <a href="{{ URL('/adopt') }}" class="block border-l-4 border-transparent py-2 pl-3 pr-4 text-base font-medium text-gray-900 hover:border-lime-300 hover:border-lime-600 hover:text-lime-600">Adopt</a>
         <a href="{{ URL('/donate') }}" class="block border-l-4 border-transparent py-2 pl-3 pr-4 text-base font-medium text-gray-900 hover:border-lime-300 hover:border-lime-600 hover:text-lime-600">Donate</a>
         <a href="{{ URL('/howwework') }}" class="block border-l-4 border-transparent py-2 pl-3 pr-4 text-base font-medium text-gray-900 hover:border-lime-300 hover:border-lime-600 hover:text-lime-600">How we work</a>
         <a href="{{ URL('/stories') }}" class="inline-flex items-center border-b-2 border-transparent px-1 pt-1 text-sm font-medium text-gray-900 hover:border-lime-300 hover:text-lime-600">Success Stories</a>
         {{-- <a href="{{ URL('/faq') }}" class="inline-flex items-center border-b-2 border-transparent px-1 pt-1 text-sm font-medium text-gray-900 hover:border-lime-300 hover:text-lime-600">FAQ</a> --}}
         <a href="{{ URL('/message') }}" class="inline-flex items-center border-b-2 border-transparent px-1 pt-1 text-sm font-medium text-gray-900 hover:border-lime-300 hover:text-lime-600">Contact us</a>
         <a href="{{ URL('/aboutus') }}" class="inline-flex items-center border-b-2 border-transparent px-1 pt-1 text-sm font-medium text-gray-900 hover:border-lime-300 hover:text-lime-600">About us</a>

       </div>
     </div>
   </nav>

 </header>
