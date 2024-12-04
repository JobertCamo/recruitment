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
            <div class=" h-auto md:h-[600px] w-auto md:w-[60%] rounded-xl flex overflow-hidden shadow-2xl shadow-[0px_4px_16px_rgba(17,17,26,0.1),_0px_8px_24px_rgba(17,17,26,0.1),_0px_16px_56px_rgba(17,17,26,0.1)]">
                <div class="bg-amber-400 w-80 hidden md:block">
                    <img src="{{ asset('images/ssss.png') }}" alt="">
                </div>
                <div class="bg-white flex-1 flex flex-col items-center gap-4 px-4 py-4 ">
                    <div class="text-3xl">Hello! Please tell us about yourself</div>
                    <div class="space-y-3">
                        <div class="grid grid-cols-2 gap-3 items-center">
                            <x-input label="Firstname" />
                            <x-input label="Lastname" />
                            <x-input label="Middelname" />
                            <div class="flex items-center gap-4">
                                <x-native-select
                                    label="Gender"
                                    placeholder="Select"
                                    :options="['Male', 'Female', 'Other']"
                                />
                                <div class="">
                                    <label for="" class="text-sm">Birthdate</label>
                                    <input type="date" class="py-1 rounded-md w-24 md:w-auto shadow-[0px_2px_3px_-1px_rgba(0,0,0,0.1),0px_1px_0px_0px_rgba(25,28,33,0.02),0px_0px_0px_1px_rgba(25,28,33,0.08)]">
                                </div>
                            </div>
                        </div>
                        <div>
                            <x-input label="Address" />
                        </div>
                        <div class="grid grid-cols-2 gap-3 items-center">
                            <div class="flex gap-3">
                                <x-input label="Religion" />
                                <x-input label="Civil Status" />
                            </div>
                            <x-input label="Email" />
                            <x-input label="Conctact no." />
                            <x-input label="Nationality" />
                            <x-input label="Resume" />
                            <x-input label="Referred by" corner="Optional"/>
                        </div>
                        
                    </div>
                    <div class="w-full mt-3 flex justify-between items-center gap-10">
                        <x-button amber label="Submit Application" class="flex-1"/>
                        <x-checkbox label="Terms and Condition" />
                    </div>
                </div>
            </div>
        </div>
        {{-- APpform --}}
    </div>
    
    @livewireScripts
</body>
</html>