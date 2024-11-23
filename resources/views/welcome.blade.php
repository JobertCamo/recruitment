<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <wireui:scripts />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="flex transition-all ease-linear duration-300" x-data="{sb:false, sb2:true}">

    <button class="z-10 block lg:hidden fixed top-4 left-0 pl-3" href="" @click="sb = true" x-show="!sb"><x-icon name="bars-3" /></button>
    {{-- <button class="z-10 fixed top-16 -left-2 h-10 pl-3 bg-gray-900 rounded-full" href="" @click="sb2 = true" x-show="!sb2">></button> --}}

    {{-- MOBILE SIDEBAR --}}
    <div class="fixed z-10 bg-gray-900 h-screen text-white w-72 md:static  lg:hidden overflow-y-scroll" x-show="sb"
        x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="-translate-x-72"
        x-transition:enter-end="translate-x-0" 
        x-transition:leave="transition ease-in duration-300 "
        x-transition:leave-start="translate-x-0" 
        x-transition:leave-end="-translate-x-72" 
        x-cloak>
        <div class="  relative text-center ">
            <div class="py-4 bg-gray-800 flex items-center justify-center gap-3">
                <img src="https://hr2.gwamerchandise.com/img/gwamlogo.png" width="70px" alt="" class="rounded-full">
                HRGWA
            </div>
            <button class="absolute top-0 right-0" href="" @click="sb = false"><x-icon name="x-circle" /></button>
        </div>
        <div class=" pl-6 py-3 text-xl font-bold">Menu</div>
        <hr class=" h-0.5 border-t-0 bg-neutral-100 dark:bg-white/10" />
        <div class="mt-4 px-4 py-4 grid gap-3">
            <div class="flex justify-between items-center px-3 py-3 rounded-md hover:bg-gray-800">
                <div class="flex items-center gap-1">
                    <x-icon name="squares-2x2" />
                    Dashboard
                </div>
                <div>Sign</div>
            </div>
            <div class=" px-3 py-3 rounded-md hover:bg-gray-800" x-data="{dropdown1:false}">
                <div class="flex justify-between items-center">
                    <button @click="dropdown1=true" @click.away="dropdown1=false" class="flex items-center gap-1">
                        <x-icon name="user-group" />
                        Applicants Lists
                    </button>
                    
                    <div class="rounded-full bg-red-500 px-2">5</div>
                </div>
                
                {{-- DROPDOWN --}}
                    <div x-show="dropdown1" x-transition x-cloak class="mt-2 flex gap-1 flex-col  rounded-md">
                        <div class="px-3 py-1 rounded-md hover:bg-gray-900 text-sm">Priority Applicants</div>
                        <div class="px-3 py-1 rounded-md hover:bg-gray-900 text-sm">All Applicants</div>
                    </div>
                {{-- DROPDOWN --}}
            </div>
            
            <div class=" px-3 py-3 rounded-md hover:bg-gray-800" x-data="{dropdown2:false}">
                <div class="flex justify-between items-center">
                    <button @click="dropdown2=true" @click.away="dropdown2=false" class="flex items-center gap-1">
                        <x-icon name="calendar-days" />
                        Schedules
                    </button>
                    
                    <div class="rounded-full bg-red-500 px-2">5</div>
                </div>
                
                {{-- DROPDOWN --}}
                    <div x-show="dropdown2" x-transition x-cloak class="flex gap-1 flex-col px-3 py-3 rounded-md">
                        <div>Member Lists</div>
                        <div>Member Lists</div>
                        <div>Member Lists</div>
                    </div>
                {{-- DROPDOWN --}}
            </div>
            <div class="px-3 py-3 rounded-md hover:bg-gray-800">
                <div class="flex items-center gap-1">
                    <x-icon name="rectangle-stack" />
                    Task Management
                </div>
            </div>
            <div class="px-3 py-3 rounded-md hover:bg-gray-800">
                <div class="flex items-center gap-1">
                    <x-icon name="briefcase" />
                    Offboarding
                </div>
            </div>

            <div class="mt-12 px-3 py-3 rounded-md hover:bg-gray-800">
                <div>Profile</div>
            </div>
            <div class="px-3 py-3 rounded-md hover:bg-gray-800">
                <div>Logout</div>
            </div>
        </div>

    </div>
    {{-- MOBILE SIDEBAR --}}

    {{-- LARGE SCREEN SIDEBAR --}}
    <div :class="!sb2 ? 'w-0' : 'w-80'" class="fixed transition-all duration-300 z-10 bg-gray-900 h-screen text-white hidden lg:block md:static overflow-y-scroll" 
        
        x-cloak>
        <div class="  relative text-center ">
            <div class="py-4 bg-gray-800 flex items-center justify-center gap-3">
                <img src="https://hr2.gwamerchandise.com/img/gwamlogo.png" width="70px" alt="" class="rounded-full">
                HRGWA
            {{-- <button class="absolute top-0 right-5" href="" @click="sb2 = false">x</button> --}}

            </div>
        </div>
        <div class=" pl-6 py-3 text-xl font-bold">Menu</div>
        <hr class=" h-0.5 border-t-0 bg-neutral-100 dark:bg-white/10" />
        <div class="mt-4 px-4 py-4 grid gap-3">
            <div class="flex justify-between items-center px-3 py-3 rounded-md hover:bg-gray-800">
                <div class="flex items-center gap-1">
                    <x-icon name="squares-2x2" />
                    Dashboard
                </div>
                <div>Sign</div>
            </div>
            <div class=" px-3 py-3 rounded-md hover:bg-gray-800" x-data="{dropdown1:false}">
                <div class="flex justify-between items-center">
                    <button @click="dropdown1=true" @click.away="dropdown1=false" class="flex items-center gap-1">
                        <x-icon name="user-group" />
                        Applicants Lists
                    </button>
                    
                    <div class="rounded-full bg-red-500 px-2">5</div>
                </div>
                
                {{-- DROPDOWN --}}
                    <div x-show="dropdown1" x-transition x-cloak class="mt-2 flex gap-1 flex-col  rounded-md">
                        <div class="px-3 py-1 rounded-md hover:bg-gray-900 text-sm">Priority Applicants</div>
                        <div class="px-3 py-1 rounded-md hover:bg-gray-900 text-sm">All Applicants</div>
                    </div>
                {{-- DROPDOWN --}}
            </div>
            
            <div class=" px-3 py-3 rounded-md hover:bg-gray-800" x-data="{dropdown2:false}">
                <div class="flex justify-between items-center">
                    <button @click="dropdown2=true" @click.away="dropdown2=false" class="flex items-center gap-1">
                        <x-icon name="calendar-days" />
                        Schedules
                    </button>
                    
                    <div class="rounded-full bg-red-500 px-2">5</div>
                </div>
                
                {{-- DROPDOWN --}}
                    <div x-show="dropdown2" x-transition x-cloak class="flex gap-1 flex-col px-3 py-3 rounded-md">
                        <div class="px-3 py-1 rounded-md hover:bg-gray-900 text-sm">Member Lists</div>
                        <div class="px-3 py-1 rounded-md hover:bg-gray-900 text-sm">Member Lists</div>
                        <div class="px-3 py-1 rounded-md hover:bg-gray-900 text-sm">Member Lists</div>
                    </div>
                {{-- DROPDOWN --}}
            </div>
            <div class="px-3 py-3 rounded-md hover:bg-gray-800">
                <div class="flex items-center gap-1">
                    <x-icon name="rectangle-stack" />
                    Task Management
                </div>
            </div>
            <div class="px-3 py-3 rounded-md hover:bg-gray-800">
                <div class="flex items-center gap-1">
                    <x-icon name="briefcase" />
                    Offboarding
                </div>
            </div>

            <div class="mt-12 px-3 py-3 rounded-md hover:bg-gray-800">
                <div>Profile</div>
            </div>
            <div class="px-3 py-3 rounded-md hover:bg-gray-800">
                <div>Logout</div>
            </div>
        </div>

    </div>
    {{-- LARGE SCREEN SIDEBAR --}}

    {{-- CONTAINER --}}
    <div class=" w-full h-screen flex flex-col overflow-auto">
        {{-- NAV BAR --}}
        <div class="w-full h-12 flex justify-between bg-white lg:flex lg:items-center lg:justify-between px-4 py-4 lg:px-5 sticky top-0 shadow-[rgba(0,_0,_0,_0.10)_0px_3px_8px]">
            <div class="relative hidden lg:flex items-center">
                <button :class="!sb2 ? 'rotate-90' : 'rotate-270'" class=" pr-2 mr-2 transition-all duration-300  rounded-full text-black text-center" href="" @click="!sb2 ? sb2 = true : sb2 = false"><x-icon name="bars-3" /></button>
                <input type="text" class="bg-black/10 outline-none px-1 py-1" placeholder="Search...">
                <x-icon name="magnifying-glass" class="absolute right-1 w-5" />
            </div>

            {{-- <div class="hidden ml-48 md:block relative overflow-hidden rounded-xl">
                <input type="text" class="rounded-xl h-7 w-60" placeholder="Search Something">
                <div class="absolute top-0 w-8 h-full right-0 bg-red-500 grid justify-center items-center">
                    <x-icon name="magnifying-glass" class="" />
                </div>
            </div> --}}
            <div>
                &nbsp;
            </div>
            <div class="ml-10 lg:hidden">
                HRGWA
            </div>
            <div class="relative flex justify-center items-center space-x-3 " x-data="{notif: false}">
                <button class="">
                    <x-icon name="bell-alert"  color="gray" @click="notif = true" />
                </button>
                {{-- NOTIFICATION CONTAINER --}}
                <div x-show="notif" x-cloak @click.away="notif = false" x-transition class="overflow-auto grid gap-3 p-3 absolute -bottom-80 lg:-bottom-73 -left-64 lg:-left-64  h-72 lg:h-80 w-72 lg:w-80 rounded-md bg-red-300">
                    <div class="w-full h-16 bg-green-500 flex justify-center items-center gap-2 px-2">
                        <x-avatar sm src="https://avatarfiles.alphacoders.com/364/364538.png" />
                        <div>
                            <div class="text-sm font-bold">Notification Title</div>
                            <div class="text-[10px] lg:text-[11px]">Lorem ipsum dolor sit amet consectetur adipisicing elit. .....</div>
                        </div>
                    </div>
                    <div class="w-full h-16 bg-green-500 flex justify-center items-center gap-2 px-2">
                        <x-avatar sm src="https://avatarfiles.alphacoders.com/364/364538.png" />
                        <div>
                            <div class="text-sm font-bold">Notification Title</div>
                            <div class="text-[10px] lg:text-[11px]">Lorem ipsum dolor sit amet consectetur adipisicing elit. .....</div>
                        </div>
                    </div>
                    <div class="w-full h-16 bg-green-500 flex justify-center items-center gap-2 px-2">
                        <x-avatar sm src="https://avatarfiles.alphacoders.com/364/364538.png" />
                        <div>
                            <div class="text-sm font-bold">Notification Title</div>
                            <div class="text-[10px] lg:text-[11px]">Lorem ipsum dolor sit amet consectetur adipisicing elit. .....</div>
                        </div>
                    </div>
                    <div class="w-full h-16 bg-green-500 flex justify-center items-center gap-2 px-2">
                        <x-avatar sm src="https://avatarfiles.alphacoders.com/364/364538.png" />
                        <div>
                            <div class="text-sm font-bold">Notification Title</div>
                            <div class="text-[10px] lg:text-[11px]">Lorem ipsum dolor sit amet consectetur adipisicing elit. .....</div>
                        </div>
                    </div>
                    <div class="w-full h-16 bg-green-500 flex justify-center items-center gap-2 px-2">
                        <x-avatar sm src="https://avatarfiles.alphacoders.com/364/364538.png" />
                        <div>
                            <div class="text-sm font-bold">Notification Title</div>
                            <div class="text-[10px] lg:text-[11px]">Lorem ipsum dolor sit amet consectetur adipisicing elit. .....</div>
                        </div>
                    </div>
                    <div class="w-full h-16 bg-green-500 flex justify-center items-center gap-2 px-2">
                        <x-avatar sm src="https://avatarfiles.alphacoders.com/364/364538.png" />
                        <div>
                            <div class="text-sm font-bold">Notification Title</div>
                            <div class="text-[10px] lg:text-[11px]">Lorem ipsum dolor sit amet consectetur adipisicing elit. .....</div>
                        </div>
                    </div>
                </div>
                {{-- NOTIFICATION CONTAINER --}}
                <button class="">
                    <x-icon name="question-mark-circle"  color="gray" class="" />
                </button>
                <button class="hidden lg:block">
                    <x-avatar sm src="https://avatarfiles.alphacoders.com/364/364538.png" class="bg-gray-600" />
                </button>
                
            </div>
            
        </div>
        {{-- NAV BAR --}}

        {{-- CONTENT AREA --}}
        <div class="w-full p-4 space-y-4 bg-[#f8fcfc]">

            {{-- BREADCRUMBS NEED TO REDO --}}
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
            {{-- FOOTER --}}

        </div>
        {{-- CONTENT AREA --}}
    </div>
</body>
</html>