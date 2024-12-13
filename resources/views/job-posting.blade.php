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
            <div class="space-y-1 text-center lg:text-start z-20 lg:z-auto">
                <div class="text-2xl lg:text-4xl font-bold ">Find your dream job</div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero, veritatis placeat totam </p>
            </div>
            <div class=" md:block ">
                <img src="{{ asset('images/Auth.png') }}" class="absolute opacity-70 lg:opacity-100 top-0 left-0 lg:left-auto lg:-right-16 lg:-top-10" alt="">
            </div>
        </div>
        {{-- banner --}}
        {{-- Content --}}
        <livewire:jobpost.jobposting />
        {{-- Content --}}
    </div>
    
    @livewireScripts
</body>
</html>