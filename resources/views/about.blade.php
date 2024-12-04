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
<body class="bg-[#f8fcfc]">
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
        {{-- About --}}
        <div class=" mt-5  md:h-[90%] grid gap-4 md:flex md:justify-center md:items-center  px-3 ">
            <div class="bg-white rounded-xl w-full md:w-[460px] px-6 py-4 flex flex-col justify-between gap-5 h-[420px] lg:h-[550px] shadow-[0px_0px_0px_1px_rgba(0,0,0,0.06),0px_1px_1px_-0.5px_rgba(0,0,0,0.06),0px_3px_3px_-1.5px_rgba(0,0,0,0.06),_0px_6px_6px_-3px_rgba(0,0,0,0.06),0px_12px_12px_-6px_rgba(0,0,0,0.06),0px_24px_24px_-12px_rgba(0,0,0,0.06)]">
                <div class="space-y-4">
                    <div class="text-xl text-amber-500">How It Started</div>
                    <div class="text-4xl md:text-5xl font-bold leading-tight md:leading-tight">Our Dream is Global Learning Transformation</div>
                </div>
                <div>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus optio, laudantium officia
                     tempore expedita dolorem sunt cum architecto adipisci repellat molestiae aliquam cumque praesentium, vitae debitis aliquid reprehenderit rerum harum.
                </div>
            </div>

            <div class=" w-full md:w-[460px] h-[420px] lg:h-[550px] flex flex-col gap-4 ">
                <img class="bg-blue-300 h-72 rounded-xl" src="https://images.pexels.com/photos/3184429/pexels-photo-3184429.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="">
                <div class="bg-white flex-1 rounded-xl px-4 py-4 grid grid-cols-2 content-center items-center gap-6 shadow-[0px_0px_0px_1px_rgba(0,0,0,0.06),0px_1px_1px_-0.5px_rgba(0,0,0,0.06),0px_3px_3px_-1.5px_rgba(0,0,0,0.06),_0px_6px_6px_-3px_rgba(0,0,0,0.06),0px_12px_12px_-6px_rgba(0,0,0,0.06),0px_24px_24px_-12px_rgba(0,0,0,0.06)]">
                    <div class="">
                        <div class="text-3xl font-bold">3</div>
                        <div>Years Operating</div>
                    </div>
                    <div class="">
                        <div class="text-3xl font-bold">23</div>
                        <div>Project Challenges</div>
                    </div>
                    <div class="">
                        <div class="text-3xl font-bold">530+</div>
                        <div>Positive Reviews</div>
                    </div>
                    <div class="">
                        <div class="text-3xl font-bold">20k</div>
                        <div>Trusted Clients</div>
                    </div>
                </div>
            </div>            
        </div>
        {{-- About --}}

    </div>
    
    @livewireScripts
</body>
</html>