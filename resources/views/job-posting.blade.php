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
            <div class="space-y-1 text-center lg:text-start z-10 md:z-auto">
                <div class="text-2xl lg:text-4xl font-bold">Find your dream job</div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero, veritatis placeat totam </p>
            </div>
            <div class=" md:block ">
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
                    <div class="grid grid-cols-2 space-y-1">
                        <x-radio warning sm id="rounded-md" wire:model="model3" rounded="base" label="Full-Time" value="md" xl />
                        <x-radio warning sm id="rounded-md2" wire:model="model3" rounded="base" label="Part-Time" value="md" xl />
                        <x-radio warning sm id="rounded-md3" wire:model="model3" rounded="base" label="Internship" value="md" xl />
                        <x-radio warning sm id="rounded-md4" wire:model="model3" rounded="base" label="Volunteer" value="md" xl />
                    </div>
                </div>
                <div class=" space-y-1 border-b-[1px] border-b-gray-300/50 py-6">
                    <div class="font-bold">On Site / WFH</div>
                    <div class="grid grid-cols-2 space-y-1">
                        <x-radio warning sm id="rounded-" wire:model="model4" rounded="base" label="Onsite" value="md" xl />
                        <x-radio warning sm id="rounded-2" wire:model="model4" rounded="base" label="WFH" value="md" xl />
                        <x-radio warning sm id="rounded-3" wire:model="model4" rounded="base" label="Hybrid" value="md" xl />

                    </div>
                </div>
                <div class=" space-y-1 border-b-[1px] border-b-gray-300/50 py-6">
                    <div class="font-bold">Job Category</div>
                    <div class="grid grid-cols-2 space-y-1">
                        <x-radio warning sm id="rounded" wire:model="model5" rounded="base" label="Urgent" value="md" xl />
                        <x-radio warning sm id="rounded2" wire:model="model5" rounded="base" label="Urge" value="md" xl />
                        <x-radio warning sm id="rounded3" wire:model="model5" rounded="base" label="urg" value="md" xl />
                    </div>
                </div>
            </div>
            {{-- Sidebar --}}

            {{-- Job Lists --}}
            <div class="w-full px-1 pb-2 space-y-4 h-screen overflow-auto">
                <div class="flex justify-between gap-2 items-center bg-white sticky top-0 z-10">
                    <x-input icon="magnifying-glass" placeholder="Search something ex. job or places" />
                    <x-button amber>Find&nbsp;Jobs</x-button>
                </div>
                <div class="flex justify-between items-center">
                    <div>250 Job results</div>
                    <div class=" gap-3 hidden lg:flex">
                        <x-button  slate label="Web Dev" rounded />
                        <x-button  slate label="Software dev" rounded />
                        <x-button  slate label="Senior Dev" rounded />
                        <x-button  slate label="Farmer" rounded />
                        <x-button  slate label="Welder" rounded />
                        <x-button  slate label="Sewer" rounded />
                    </div>
                </div>
                <div class="space-y-7 lg:space-y-6 relative rounded-md py-4 px-4 h-64 md:h-40 lg:h-44 shadow-[rgba(0,_0,_0,_0.24)_0px_3px_8px]">
                    <div class="flex justify-between items-center flex-col md:flex-row">
                        <div class="flex gap-2">
                            <x-avatar lg rounded="md" src="https://img.stablecog.com/insecure/1024w/aHR0cHM6Ly9iLnN0YWJsZWNvZy5jb20vNmYwNjdmZGUtNDAyMy00OTBiLTllODEtYTlkYjhlZmE3MmI4LmpwZWc.webp" />
                            <div>
                                <div class="font-bold"><a wire:navigate href="/a">Software Developer</a></div>
                                <ul class="flex gap-2 text-[12px] lg:text-sm">
                                    <li>WFH</li>
                                    <li>•</li>
                                    <li>Full-Time</li>
                                    <li>•</li>
                                    <li>40,000 PHP - 50,000 PHP</li>
                                </ul>
                            </div>
                        </div>
                        <div class="text-end absolute bottom-0 px-3 py-3 flex justify-between w-full md:px-0 md:py-0 md:block md:w-auto md:static">
                            <div class="flex items-center gap-1 font-bold"><x-icon solid color="red" name="map-pin" /> Quezon City</div>
                            <p class="text-sm text-gray-400">2 mins ago</p>
                        </div>
                    </div>
                    <div class="text-wrap text-gray-500 w-auto lg:w-4/6">
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Delectus iure tempore quod itaque ipsam,
                            molestias esse obcaecati expedita quibusdam..</p>
                    </div>
                </div>
                <div class="space-y-7 lg:space-y-6 relative rounded-md py-4 px-4 h-64 md:h-40 lg:h-44 shadow-[rgba(0,_0,_0,_0.24)_0px_3px_8px]">
                    <div class="flex justify-between items-center flex-col md:flex-row">
                        <div class="flex gap-2">
                            <x-avatar lg rounded="md" src="https://img.stablecog.com/insecure/1024w/aHR0cHM6Ly9iLnN0YWJsZWNvZy5jb20vNmYwNjdmZGUtNDAyMy00OTBiLTllODEtYTlkYjhlZmE3MmI4LmpwZWc.webp" />
                            <div>
                                <div class="font-bold"><a wire:navigate href="/a">Senior Software Developer</a></div>
                                <ul class="flex gap-2 text-[12px] lg:text-sm">
                                    <li>WFH</li>
                                    <li>•</li>
                                    <li>Full-Time</li>
                                    <li>•</li>
                                    <li>40,000 PHP - 50,000 PHP</li>
                                </ul>
                            </div>
                        </div>
                        <div class="text-end absolute bottom-0 px-3 py-3 flex justify-between w-full md:px-0 md:py-0 md:block md:w-auto md:static">
                            <div class="flex items-center gap-1 font-bold"><x-icon solid color="red" name="map-pin" /> Quezon City</div>
                            <p class="text-sm text-gray-400">2 mins ago</p>
                        </div>
                    </div>
                    <div class="text-wrap text-gray-500 w-auto lg:w-4/6">
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Delectus iure tempore quod itaque ipsam,
                            molestias esse obcaecati expedita quibusdam..</p>
                    </div>
                </div>
                <div class="space-y-7 lg:space-y-6 relative rounded-md py-4 px-4 h-64 md:h-40 lg:h-44 shadow-[rgba(0,_0,_0,_0.24)_0px_3px_8px]">
                    <div class="flex justify-between items-center flex-col md:flex-row">
                        <div class="flex gap-2">
                            <x-avatar lg rounded="md" src="https://img.stablecog.com/insecure/1024w/aHR0cHM6Ly9iLnN0YWJsZWNvZy5jb20vNmYwNjdmZGUtNDAyMy00OTBiLTllODEtYTlkYjhlZmE3MmI4LmpwZWc.webp" />
                            <div>
                                <div class="font-bold"><a wire:navigate href="/a">Senior Software Developer</a></div>
                                <ul class="flex gap-2 text-[12px] lg:text-sm">
                                    <li>WFH</li>
                                    <li>•</li>
                                    <li>Full-Time</li>
                                    <li>•</li>
                                    <li>40,000 PHP - 50,000 PHP</li>
                                </ul>
                            </div>
                        </div>
                        <div class="text-end absolute bottom-0 px-3 py-3 flex justify-between w-full md:px-0 md:py-0 md:block md:w-auto md:static">
                            <div class="flex items-center gap-1 font-bold"><x-icon solid color="red" name="map-pin" /> Quezon City</div>
                            <p class="text-sm text-gray-400">2 mins ago</p>
                        </div>
                    </div>
                    <div class="text-wrap text-gray-500 w-auto lg:w-4/6">
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Delectus iure tempore quod itaque ipsam,
                            molestias esse obcaecati expedita quibusdam..</p>
                    </div>
                </div>
                <div class="space-y-7 lg:space-y-6 relative rounded-md py-4 px-4 h-64 md:h-40 lg:h-44 shadow-[rgba(0,_0,_0,_0.24)_0px_3px_8px]">
                    <div class="flex justify-between items-center flex-col md:flex-row">
                        <div class="flex gap-2">
                            <x-avatar lg rounded="md" src="https://img.stablecog.com/insecure/1024w/aHR0cHM6Ly9iLnN0YWJsZWNvZy5jb20vNmYwNjdmZGUtNDAyMy00OTBiLTllODEtYTlkYjhlZmE3MmI4LmpwZWc.webp" />
                            <div>
                                <div class="font-bold"><a wire:navigate href="/a">Senior Software Developer</a></div>
                                <ul class="flex gap-2 text-[12px] lg:text-sm">
                                    <li>WFH</li>
                                    <li>•</li>
                                    <li>Full-Time</li>
                                    <li>•</li>
                                    <li>40,000 PHP - 50,000 PHP</li>
                                </ul>
                            </div>
                        </div>
                        <div class="text-end absolute bottom-0 px-3 py-3 flex justify-between w-full md:px-0 md:py-0 md:block md:w-auto md:static">
                            <div class="flex items-center gap-1 font-bold"><x-icon solid color="red" name="map-pin" /> Quezon City</div>
                            <p class="text-sm text-gray-400">2 mins ago</p>
                        </div>
                    </div>
                    <div class="text-wrap text-gray-500 w-auto lg:w-4/6">
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Delectus iure tempore quod itaque ipsam,
                            molestias esse obcaecati expedita quibusdam..</p>
                    </div>
                </div>
                <div class="space-y-7 lg:space-y-6 relative rounded-md py-4 px-4 h-64 md:h-40 lg:h-44 shadow-[rgba(0,_0,_0,_0.24)_0px_3px_8px]">
                    <div class="flex justify-between items-center flex-col md:flex-row">
                        <div class="flex gap-2">
                            <x-avatar lg rounded="md" src="https://img.stablecog.com/insecure/1024w/aHR0cHM6Ly9iLnN0YWJsZWNvZy5jb20vNmYwNjdmZGUtNDAyMy00OTBiLTllODEtYTlkYjhlZmE3MmI4LmpwZWc.webp" />
                            <div>
                                <div class="font-bold"><a wire:navigate href="/a">Senior Software Developer</a></div>
                                <ul class="flex gap-2 text-[12px] lg:text-sm">
                                    <li>WFH</li>
                                    <li>•</li>
                                    <li>Full-Time</li>
                                    <li>•</li>
                                    <li>40,000 PHP - 50,000 PHP</li>
                                </ul>
                            </div>
                        </div>
                        <div class="text-end absolute bottom-0 px-3 py-3 flex justify-between w-full md:px-0 md:py-0 md:block md:w-auto md:static">
                            <div class="flex items-center gap-1 font-bold"><x-icon solid color="red" name="map-pin" /> Quezon City</div>
                            <p class="text-sm text-gray-400">2 mins ago</p>
                        </div>
                    </div>
                    <div class="text-wrap text-gray-500 w-auto lg:w-4/6">
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Delectus iure tempore quod itaque ipsam,
                            molestias esse obcaecati expedita quibusdam..</p>
                    </div>
                </div>
                <div class="space-y-7 lg:space-y-6 relative rounded-md py-4 px-4 h-64 md:h-40 lg:h-44 shadow-[rgba(0,_0,_0,_0.24)_0px_3px_8px]">
                    <div class="flex justify-between items-center flex-col md:flex-row">
                        <div class="flex gap-2">
                            <x-avatar lg rounded="md" src="https://img.stablecog.com/insecure/1024w/aHR0cHM6Ly9iLnN0YWJsZWNvZy5jb20vNmYwNjdmZGUtNDAyMy00OTBiLTllODEtYTlkYjhlZmE3MmI4LmpwZWc.webp" />
                            <div>
                                <div class="font-bold"><a wire:navigate href="/a">Senior Software Developer</a></div>
                                <ul class="flex gap-2 text-[12px] lg:text-sm">
                                    <li>WFH</li>
                                    <li>•</li>
                                    <li>Full-Time</li>
                                    <li>•</li>
                                    <li>40,000 PHP - 50,000 PHP</li>
                                </ul>
                            </div>
                        </div>
                        <div class="text-end absolute bottom-0 px-3 py-3 flex justify-between w-full md:px-0 md:py-0 md:block md:w-auto md:static">
                            <div class="flex items-center gap-1 font-bold"><x-icon solid color="red" name="map-pin" /> Quezon City</div>
                            <p class="text-sm text-gray-400">2 mins ago</p>
                        </div>
                    </div>
                    <div class="text-wrap text-gray-500 w-auto lg:w-4/6">
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Delectus iure tempore quod itaque ipsam,
                            molestias esse obcaecati expedita quibusdam..</p>
                    </div>
                </div>
                <div class="space-y-7 lg:space-y-6 relative rounded-md py-4 px-4 h-64 md:h-40 lg:h-44 shadow-[rgba(0,_0,_0,_0.24)_0px_3px_8px]">
                    <div class="flex justify-between items-center flex-col md:flex-row">
                        <div class="flex gap-2">
                            <x-avatar lg rounded="md" src="https://img.stablecog.com/insecure/1024w/aHR0cHM6Ly9iLnN0YWJsZWNvZy5jb20vNmYwNjdmZGUtNDAyMy00OTBiLTllODEtYTlkYjhlZmE3MmI4LmpwZWc.webp" />
                            <div>
                                <div class="font-bold"><a wire:navigate href="/a">Senior Software Developer</a></div>
                                <ul class="flex gap-2 text-[12px] lg:text-sm">
                                    <li>WFH</li>
                                    <li>•</li>
                                    <li>Full-Time</li>
                                    <li>•</li>
                                    <li>40,000 PHP - 50,000 PHP</li>
                                </ul>
                            </div>
                        </div>
                        <div class="text-end absolute bottom-0 px-3 py-3 flex justify-between w-full md:px-0 md:py-0 md:block md:w-auto md:static">
                            <div class="flex items-center gap-1 font-bold"><x-icon solid color="red" name="map-pin" /> Quezon City</div>
                            <p class="text-sm text-gray-400">2 mins ago</p>
                        </div>
                    </div>
                    <div class="text-wrap text-gray-500 w-auto lg:w-4/6">
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Delectus iure tempore quod itaque ipsam,
                            molestias esse obcaecati expedita quibusdam..</p>
                    </div>
                </div>
                <div class="space-y-7 lg:space-y-6 relative rounded-md py-4 px-4 h-64 md:h-40 lg:h-44 shadow-[rgba(0,_0,_0,_0.24)_0px_3px_8px]">
                    <div class="flex justify-between items-center flex-col md:flex-row">
                        <div class="flex gap-2">
                            <x-avatar lg rounded="md" src="https://img.stablecog.com/insecure/1024w/aHR0cHM6Ly9iLnN0YWJsZWNvZy5jb20vNmYwNjdmZGUtNDAyMy00OTBiLTllODEtYTlkYjhlZmE3MmI4LmpwZWc.webp" />
                            <div>
                                <div class="font-bold"><a wire:navigate href="/a">Senior Software Developer</a></div>
                                <ul class="flex gap-2 text-[12px] lg:text-sm">
                                    <li>WFH</li>
                                    <li>•</li>
                                    <li>Full-Time</li>
                                    <li>•</li>
                                    <li>40,000 PHP - 50,000 PHP</li>
                                </ul>
                            </div>
                        </div>
                        <div class="text-end absolute bottom-0 px-3 py-3 flex justify-between w-full md:px-0 md:py-0 md:block md:w-auto md:static">
                            <div class="flex items-center gap-1 font-bold"><x-icon solid color="red" name="map-pin" /> Quezon City</div>
                            <p class="text-sm text-gray-400">2 mins ago</p>
                        </div>
                    </div>
                    <div class="text-wrap text-gray-500 w-auto lg:w-4/6">
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Delectus iure tempore quod itaque ipsam,
                            molestias esse obcaecati expedita quibusdam..</p>
                    </div>
                </div>
            </div>
            {{-- Job Lists --}}
        </div>
        {{-- Content --}}
    </div>
    
    @livewireScripts
</body>
</html>