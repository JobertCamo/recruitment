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
<body class="bg-blue-50">
    <div>
        
        {{-- APpform --}}
        <div class=" h-screen flex justify-center items-center ">
            <div class=" h-auto lg:h-[600px] w-auto lg:w-[60%] rounded-xl flex overflow-hidden  shadow-[0px_4px_16px_rgba(17,17,26,0.1),_0px_8px_24px_rgba(17,17,26,0.1),_0px_16px_56px_rgba(17,17,26,0.1)]">
                <div class="bg-amber-400 w-80 hidden  md:block">
                    <img src="{{ asset('images/ssss.png') }}" alt="">
                </div>
                <livewire:jobpost.appform :title="$job->title" :requirements="$job->requirements" />
            </div>
        </div>
        {{-- APpform --}}
    </div>
    
    @livewireScripts
</body>
</html>