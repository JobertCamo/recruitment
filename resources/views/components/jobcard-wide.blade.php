@props(['job'])
@php
use Carbon\Carbon;
    $date = $job->created_at;
    $date = Carbon::parse($date);
@endphp
<div wire:key="{{ $job->id }}" class="space-y-5 lg:space-y-4 relative rounded-md py-4 px-4 h-64 md:h-40 lg:h-44 shadow-[rgba(0,_0,_0,_0.24)_0px_3px_8px] cursor-pointer transition duration-300 ease-in-out hover:ring-2 hover:ring-amber-500" @click="details = true" wire:click="resu('{{ $job->id }}')">
    <div class="flex justify-between  flex-col md:flex-row">
        <div class="flex gap-2">
            <x-avatar lg rounded="md" src="https://img.stablecog.com/insecure/1024w/aHR0cHM6Ly9iLnN0YWJsZWNvZy5jb20vNmYwNjdmZGUtNDAyMy00OTBiLTllODEtYTlkYjhlZmE3MmI4LmpwZWc.webp" />
            <div>
                <div class="font-bold"><a >{{ $job->title }}</a></div>
                <ul class="flex gap-2 text-[12px] lg:text-sm">
                    <li>{{ $job->job_type }}</li>
                    <li>•</li>
                    <li>{{ $job->schedule }}</li>
                    <li>•</li>
                    <li>{{ $job->salary }}</li>
                </ul>
            </div>
        </div>
        <div class="text-end absolute bottom-0 right-0 px-3 py-3 flex justify-between w-full md:px-0 md:py-0 md:block md:w-auto md:static">
            <div class="flex items-center gap-1 font-bold"><x-icon solid color="red" name="map-pin" /> {{ $job->location }}</div>
            <p class="text-sm text-gray-400 static md:absolute md:bottom-5 md:right-5">Posted {{ $date->diffForHumans() }}</p>
        </div>
    </div>
    <div class="text-wrap text-gray-500  w-auto lg:w-4/6">
        <p>{{ Str::limit($job->description, 200) }}</p>
    </div>
</div>