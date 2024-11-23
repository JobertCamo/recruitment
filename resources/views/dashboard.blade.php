<x-layouts.layout>
    <nav class="flex py-1" aria-label="Breadcrumb">
        <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
          <li class="inline-flex items-center">
            <a href="#" class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-blue-600 dark:text-gray-400 dark:hover:text-white">
              <svg class="w-3 h-3 me-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                <path d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z"/>
              </svg>
              Home
            </a>
          </li>
          <li>
            <div class="flex items-center">
              <svg class="rtl:rotate-180 w-3 h-3 text-gray-400 mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
              </svg>
              <a href="#" class="ms-1 text-sm font-medium text-gray-700 hover:text-blue-600 md:ms-2 dark:text-gray-400 dark:hover:text-white">Applicants</a>
            </div>
          </li>
          <li aria-current="page">
            <div class="flex items-center">
              <svg class="rtl:rotate-180 w-3 h-3 text-gray-400 mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
              </svg>
              <span class="ms-1 text-sm font-medium text-gray-500 md:ms-2 dark:text-gray-400">Priority</span>
            </div>
          </li>
        </ol>
      </nav>
    {{-- BREADCRUMBS NEED TO REDO --}}

    {{-- 1ST CARD --}}
    <div class="grid grid-cols-2 gap-4  md:grid-cols-4">
        <div class="shadow-[rgba(17,_17,_26,_0.1)_0px_0px_16px] w-full lg:w-full h-24 lg:h-36 rounded-xl bg-green-200">1</div>
        <div class="shadow-[rgba(17,_17,_26,_0.1)_0px_0px_16px] w-full lg:w-full h-24 lg:h-36 rounded-xl bg-green-200">1</div>
        <div class="shadow-[rgba(17,_17,_26,_0.1)_0px_0px_16px] w-full lg:w-full h-24 lg:h-36 rounded-xl bg-green-200">1</div>
        <div class="shadow-[rgba(17,_17,_26,_0.1)_0px_0px_16px] w-full lg:w-full h-24 lg:h-36 rounded-xl bg-green-200">1</div>
    </div>
    {{-- 1ST CARD --}}

    {{-- 2ND CARD --}}
    <div class="grid gap-4 md:grid-cols-2">
        <div class="shadow-[rgba(17,_17,_26,_0.1)_0px_0px_16px] w-full h-60 rounded-xl lg:h-80 bg-violet-200">1</div>
        <div class="shadow-[rgba(17,_17,_26,_0.1)_0px_0px_16px] w-full h-60 rounded-xl lg:h-80 bg-violet-200">2</div>
    </div>
    {{-- 2ND CARD --}}

    {{-- 3RD CARD --}}
    <div class="grid gap-4 md:grid-cols-3 ">
        <div class="shadow-[rgba(17,_17,_26,_0.1)_0px_0px_16px] w-full h-48 lg:h-56 rounded-xl bg-green-200">1</div>
        <div class="shadow-[rgba(17,_17,_26,_0.1)_0px_0px_16px] w-full h-48 lg:h-56 rounded-xl bg-green-200">1</div>
        <div class="shadow-[rgba(17,_17,_26,_0.1)_0px_0px_16px] w-full h-48 lg:h-56 rounded-xl bg-green-200">1</div>
    </div>
    {{-- 3RD CARD --}}

    {{-- FOOTER --}}
    <div class="text-center bg-amber-200 py-3">
        HRGWA
    </div>
</x-layouts.layout>