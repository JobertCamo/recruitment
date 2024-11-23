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
@livewireScripts
<body class="flex transition-all ease-linear duration-300 bg-[#f8fcfc]"  x-data="{sb:false, sb2:true}">

    <button class="z-10 block lg:hidden fixed top-4 left-0 pl-3" href="" @click="sb = true" x-show="!sb"><x-icon name="bars-3" /></button>
    {{-- <button class="z-10 fixed top-16 -left-2 h-10 pl-3 bg-gray-900 rounded-full" href="" @click="sb2 = true" x-show="!sb2">></button> --}}

    {{-- MOBILE SIDEBAR --}}
    <div class="fixed z-10 bg-gray-900 h-screen text-white w-72 md:static lg:hidden overflow-y-scroll" x-show="sb"
        x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="-translate-x-72"
        x-transition:enter-end="translate-x-0" 
        x-transition:leave="transition ease-in duration-300 "
        x-transition:leave-start="translate-x-0" 
        x-transition:leave-end="-translate-x-72" 
        x-cloak>
        <div class="  relative text-center ">
            <div class="py-4  flex items-center pl-4 gap-3">
                <img src="https://hr2.gwamerchandise.com/img/gwamlogo.png" width="70px" alt="" class="rounded-full">
                <div class="text-3xl font-bold">HRGWA</div>
            </div>
            <button class="absolute top-0 right-0" href="" @click="sb = false"><x-icon name="x-circle" /></button>
        </div>
        <div class=" pl-6 mt-4 text-[11px] text-[gray]">MAIN MENU</div>
        {{-- <hr class=" h-0.5 border-t-0 bg-neutral-100 dark:bg-white/10" /> --}}
        <div class="mt-4 px-4  grid gap-3">
            <div class="flex justify-between items-center px-3 py-3 rounded-md hover:bg-gray-800">
                <a href="/" class="flex items-center gap-1">
                    <x-icon name="squares-2x2" />
                    Dashboard
                </a>
                <div>Sign</div>
            </div>
            <div class=" px-3 py-3 rounded-md hover:bg-gray-800" x-data="{dropdown1:false}">
                <div class="flex justify-between items-center">
                    <a wire:navigate href="/priority-applicant" @click="dropdown1=true" @click.away="dropdown1=false" class="flex items-center gap-1">
                        <x-icon name="user-group" />
                        Priority Applicants
                    </a>
                    
                    <div class="rounded-full bg-red-500 px-2">5</div>
                </div>
                
                {{-- DROPDOWN --}}
                    {{-- <div x-show="dropdown1" x-transition x-cloak class="mt-2 flex gap-1 flex-col  rounded-md">
                        <a wire:navigate href="/priority-applicant" class="px-3 py-1 rounded-md hover:bg-gray-900 text-sm">Priority Applicants</a>
                        <a wire:navigate href="/applicants" class="px-3 py-1 rounded-md hover:bg-gray-900 text-sm">All Applicants</a>
                    </div> --}}
                {{-- DROPDOWN --}}
            </div>
            <div class=" px-3 py-3 rounded-md hover:bg-gray-800" x-data="{dropdown1:false}">
                <div class="flex justify-between items-center">
                    <a wire:navigate href="/applicants" @click="dropdown1=true" @click.away="dropdown1=false" class="flex items-center gap-1">
                        <x-icon name="user-group" />
                        Applicants Lists
                    </a>
                    
                    <div class="rounded-full bg-red-500 px-2">5</div>
                </div>
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
    <div  :class="!sb2 ? 'w-0' : 'w-72'" class="fixed transition-all duration-300 z-10 bg-gray-900 h-screen text-white hidden lg:block md:static overflow-y-scroll" 
        
    x-cloak>
        <div class="  relative text-center ">
            <div class="py-4  flex items-center pl-3 gap-3">
                <img src="https://hr2.gwamerchandise.com/img/gwamlogo.png" width="70px" alt="" class="rounded-full">
                <div class="text-3xl font-bold">HRGWA</div>
            {{-- <button class="absolute top-0 right-5" href="" @click="sb2 = false">x</button> --}}

            </div>
        </div>
        <div class=" pl-6 mt-4 text-[11px] text-[gray]">MAIN MENU</div>
        {{-- <hr class=" h-0.5 border-t-0 bg-neutral-100 dark:bg-white/10" /> --}}
        <div class="   grid gap-3 ">
            <div class="{{ request()->is('/') ? 'bg-[#f8fcfc] text-black hover:bg-none' : '' }} flex justify-between items-center px-3 py-3 rounded-l-full hover:bg-[#f8fcfc] hover:text-black" >
                <a wire:navigate href="/" class="flex items-center gap-4 px-2">
                    <x-icon name="squares-2x2" />
                    Dashboard
                </a>
                {{-- <div>Sign</div> --}}
            </div>
            <div class=" px-3 py-3    {{ request()->is('priority-applicant') ? 'bg-[#f8fcfc] text-black rounded-l-full' : '' }} rounded-l-full hover:bg-[#f8fcfc] hover:text-black" x-data="{dropdown1:false}">
                <div class="flex justify-between items-center ">
                    <a wire:navigate href="/priority-applicant" @click="dropdown1=true" @click.away="dropdown1=false" class=" flex items-center gap-4 px-2">
                        <x-icon name="user-group" />
                        Priority Applicants
                    </a>
                    
                    {{-- <div class="rounded-full bg-red-500 px-2">5</div> --}}
                </div>
                
                {{-- DROPDOWN --}}
                    {{-- <div x-show="dropdown1" x-transition x-cloak class="mt-2 flex gap-1 flex-col  rounded-md">
                        <a wire:navigate href="/priority-applicant" class="px-3 py-1 rounded-md hover:bg-gray-900 text-sm">Priority Applicants</a>
                        <a wire:navigate href="/applicants" class="px-3 py-1 rounded-md hover:bg-gray-900 text-sm">All Applicants</a>
                    </div> --}}
                {{-- DROPDOWN --}}
            </div>
            
            <div class=" px-3 py-3    {{ request()->is('applicants') ? 'bg-[#f8fcfc] text-black rounded-l-full' : '' }} rounded-l-full hover:bg-[#f8fcfc] hover:text-black" x-data="{dropdown1:false}">
                <div class="flex justify-between items-center ">
                    <a wire:navigate href="/applicants" @click="dropdown1=true" @click.away="dropdown1=false" class=" flex items-center gap-4 px-2">
                        <x-icon name="user-group" />
                        Applicants Lists
                    </a>
                    {{-- <div class="rounded-full bg-red-500 px-2">5</div> --}}
                </div>
            </div>
            
            <div class=" px-3 py-3    {{ request()->is('task-management') ? 'bg-[#f8fcfc] text-black rounded-l-full' : '' }} rounded-l-full hover:bg-[#f8fcfc] hover:text-black" x-data="{dropdown1:false}">
                <div class="flex justify-between items-center ">
                    <a wire:navigate href="/task" @click="dropdown1=true" @click.away="dropdown1=false" class=" flex items-center gap-4 px-2">
                        <x-icon name="rectangle-stack" />
                        Task Management
                    </a>
                </div>
            </div>
            <div class=" px-3 py-3    {{ request()->is('task-management') ? 'bg-[#f8fcfc] text-black rounded-l-full' : '' }} rounded-l-full hover:bg-[#f8fcfc] hover:text-black" x-data="{dropdown1:false}">
                <div class="flex justify-between items-center ">
                    <a wire:navigate href="/task" @click="dropdown1=true" @click.away="dropdown1=false" class=" flex items-center gap-4 px-2">
                        <x-icon name="briefcase" />
                        Offboarding
                    </a>
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
                <input type="text" class="bg-[#f8fcfc] border border-blue-900/50 outline-blue-900/50 px-1 py-1 rounded-md" placeholder="Search...">
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
            <div class="relative flex justify-center items-center space-x-3 " x-cloak x-data="{notif: false}">
                <button class="">
                    <x-icon name="bell-alert"  color="gray" @click="notif = true" />
                </button>
                {{-- NOTIFICATION CONTAINER --}}
                <template x-if="true">
                    <div x-show="notif" x-cloak @click.away="notif = false" x-transition class="overflow-auto grid gap-3 p-3 absolute -bottom-80 lg:-bottom-73 -left-64 lg:-left-64  h-72 lg:h-80 w-72 lg:w-80 rounded-md bg-white shadow-[rgba(0,_0,_0,_0.24)_0px_3px_8px]">
                        <div class="w-full h-16 bg-green-500 flex justify-center items-center gap-2 px-2" >
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
                </template>
                {{-- NOTIFICATION CONTAINER --}}
                <button class="">
                    <x-icon name="question-mark-circle"  color="gray" class="" />
                </button>
                <button class="hidden lg:flex lg:items-center">
                    <x-avatar sm src="https://avatarfiles.alphacoders.com/364/364538.png" class="bg-gray-600" />
                </button>
                
            </div>
            
        </div>
        {{-- NAV BAR --}}

        {{-- CONTENT AREA --}}
        <div class="w-full p-4 space-y-4 ">
           {{ $slot }}
        </div>
        {{-- CONTENT AREA --}}
    </div>
</body>
</html>