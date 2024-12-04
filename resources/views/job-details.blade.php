<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <wireui:scripts />
    @livewireStyles
    
</head>
<body>
    <div>
        <nav class="bg-white  px-3 grid grid-cols-3  h-12 border-b-[1px] border-gray-400/40">
            <div class="flex gap-1 items-center">
                <img src="https://avatarfiles.alphacoders.com/364/364538.png" alt="" width="30px" class="rounded-full hidden lg:block">
                <h1>HRGWA</h1>
            </div>
            <div class="flex justify-center items-center gap-3 md:gap-6 font-bold ">
                <a href="/jobpost" class="h-12 flex items-center {{ request()->is('jobpost') ? 'text-amber-500 border-b-[2px] border-amber-500' : 'text-gray-500' }}">Find&nbsp;Jobs</a>
                <a href="/about" class="h-12 flex items-center {{ request()->is('about') ? 'text-amber-500 border-b-[2px] border-amber-500' : 'text-gray-500' }}">About&nbsp;Us</a>
            </div>
            <div class="flex justify-end items-center">
                <a href="">&nbsp;</a>
            </div>
        </nav>
        {{-- banner --}}
        <div class="bg-[#f8fcfc] px-10 h-44 flex justify-center lg:justify-between items-center overflow-hidden border-b-[1px] border-gray-400/10 relative">
            <div class="space-y-1 text-center lg:text-start">
                <div class="text-2xl lg:text-4xl font-bold">Find your dream job</div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero, veritatis placeat totam </p>
            </div>
            <div class="hidden md:block">
                <img src="{{ asset('images/Auth.png') }}" class="absolute opacity-70 md:opacity-100 top-0 left-0 md:left-auto md:-right-16 md:-top-10" alt="">

            </div>
        </div>
        {{-- banner --}}
        {{-- Content --}}
        <div class="flex gap-2 px-2 lg:px-9 py-2 mt-3">
            {{-- Sidebar --}}
            <div class="bg-white w-80  hidden md:flex md:flex-col   px-4 rounded-md shadow-[0px_0px_0px_1px_rgba(0,0,0,0.06),0px_1px_1px_-0.5px_rgba(0,0,0,0.06),0px_3px_3px_-1.5px_rgba(0,0,0,0.06),_0px_6px_6px_-3px_rgba(0,0,0,0.06),0px_12px_12px_-6px_rgba(0,0,0,0.06),0px_24px_24px_-12px_rgba(0,0,0,0.06)]">
                <div class="border-b-[1px] border-b-gray-300/50 py-2 mt-1 font-bold">
                    Filter
                </div>
                <div class=" space-y-1 border-b-[1px] border-b-gray-300/50 py-6">
                    <div class="font-bold">Date Post</div>
                    <x-native-select
                        placeholder="Anytime"
                        :options="['This Week', 'This Month', 'This Year']"
                    />
                </div>
                <div class=" space-y-1 border-b-[1px] border-b-gray-300/50 py-6">
                    <div class="font-bold">Job Type</div>
                    <div class="grid grid-cols-2">
                        <x-radio sm id="rounded-md" wire:model="model3" rounded="base" label="Full-Time" value="md" xl />
                        <x-radio sm id="rounded-md2" wire:model="model3" rounded="base" label="Part-Time" value="md" xl />
                        <x-radio sm id="rounded-md3" wire:model="model3" rounded="base" label="Internship" value="md" xl />
                        <x-radio sm id="rounded-md4" wire:model="model3" rounded="base" label="Volunteer" value="md" xl />
                    </div>
                </div>
                <div class=" space-y-1 border-b-[1px] border-b-gray-300/50 py-6">
                    <div class="font-bold">On Site / WFH</div>
                    <div class="grid grid-cols-2">
                        <x-radio sm id="rounded-" wire:model="model3" rounded="base" label="Onsite" value="md" xl />
                        <x-radio sm id="rounded-2" wire:model="model3" rounded="base" label="WFH" value="md" xl />
                        <x-radio sm id="rounded-3" wire:model="model3" rounded="base" label="Hybrid" value="md" xl />

                    </div>
                </div>
                <div class=" space-y-1 border-b-[1px] border-b-gray-300/50 py-6">
                    <div class="font-bold">Job Category</div>
                    <div class="grid grid-cols-2">
                        <x-radio sm id="rounded" wire:model="model3" rounded="base" label="Urgent" value="md" xl />
                        <x-radio sm id="rounded2" wire:model="model3" rounded="base" label="Urge" value="md" xl />
                        <x-radio sm id="rounded3" wire:model="model3" rounded="base" label="urg" value="md" xl />
                    </div>
                </div>
            </div>
            {{-- Sidebar --}}

            {{-- Job Result --}}
            <div class=" w-full flex justify-between flex-col md:flex-row gap-2 h-auto md:h-[650px]">
                <div class="bg-white rounded-md flex-1 px-5 py-4 space-y-5 shadow-[0px_0px_0px_1px_rgba(0,0,0,0.06),0px_1px_1px_-0.5px_rgba(0,0,0,0.06),0px_3px_3px_-1.5px_rgba(0,0,0,0.06),_0px_6px_6px_-3px_rgba(0,0,0,0.06),0px_12px_12px_-6px_rgba(0,0,0,0.06),0px_24px_24px_-12px_rgba(0,0,0,0.06)]">
                    <div class="space-y-3">
                        <div class="flex justify-between items-center">
                            <div class="font-bold">Header</div>
                            <x-button wire:navigate href="/jobpost" label="Back" white icon="arrow-left" />
                        </div>
                        <div class="bg-gray-400 h-32 rounded-md bg-no-repeat bg-cover bg-center bg-[url('https://st4.depositphotos.com/1719108/25361/i/600/depositphotos_253610436-stock-photo-cartoon-scene-pirate-ship-sailing.jpg')] shadow-[0px_0px_0px_1px_rgba(0,0,0,0.06),0px_1px_1px_-0.5px_rgba(0,0,0,0.06),0px_3px_3px_-1.5px_rgba(0,0,0,0.06),_0px_6px_6px_-3px_rgba(0,0,0,0.06),0px_12px_12px_-6px_rgba(0,0,0,0.06),0px_24px_24px_-12px_rgba(0,0,0,0.06)]">
                            
                        </div>
                    </div>
                    <div>
                        <div class="font-bold">Job Title</div>
                        <div class="text-3xl">Software Developer</div>
                    </div>
                    <div class="space-y-2">
                        <div class="font-bold">Job Description</div>
                        <p class="text-gray-500">Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit, ab eius. Velit, 
                            voluptatibus natus corrupti consectetur, itaque doloremque corporis obcaecati provident quaerat, expedita veniam soluta eius quo recusandae voluptate? Veniam.</p>
                    </div>
                    <div>
                        <div class="font-bold">Requirements</div>
                        <ul class="text-gray-500">
                            <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit, ab eius. Velit, voluptatibus</li>
                            <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit, ab eius. Velit, voluptatibus</li>
                            <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit, ab eius. Velit, voluptatibus</li>
                        </ul>
                    </div>
                </div>
                <div class="bg-white w-auto lg:w-72 px-4 py-5 space-y-3 flex flex-col justify-between shadow-[0px_0px_0px_1px_rgba(0,0,0,0.06),0px_1px_1px_-0.5px_rgba(0,0,0,0.06),0px_3px_3px_-1.5px_rgba(0,0,0,0.06),_0px_6px_6px_-3px_rgba(0,0,0,0.06),0px_12px_12px_-6px_rgba(0,0,0,0.06),0px_24px_24px_-12px_rgba(0,0,0,0.06)]">
                    <div class="space-y-5">
                        <div class="font-bold">Job Details</div>
                        <div>
                            <div class="text-[12px] text-[#455A64]">Job Creation Date</div>
                            <p>March 30, 2024</p>
                        </div>
                        <div>
                            <div class="text-[12px] text-[#455A64]">Recruitment Period</div>
                            <p>March 30, 2024 - April 30, 2024</p>
                        </div>
                        <div>
                            <div class="text-[12px] text-[#455A64]">Job Type</div>
                            <p>Full Time</p>
                        </div>
                        <div>
                            <div class="text-[12px] text-[#455A64]">Experiences</div>
                            <p>4+ years</p>
                        </div>
                        <div>
                            <div class="text-[12px] text-[#455A64]">Location</div>
                            <p>Quezon City</p>
                        </div>
                        <div>
                            <div class="text-[12px] text-[#455A64]">Salary</div>
                            <p>25,000 PHP</p>
                        </div>
                    </div>
                    <div class="text-center">
                        <x-button href="/app" label="Apply Now" amber class="w-full" />
                    </div>
                </div>
            </div>
            {{-- Job Result --}}
        </div>
        {{-- Content --}}
    </div>
    
    @livewireScripts
</body>
</html>