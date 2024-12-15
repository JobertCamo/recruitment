<?php

use App\Models\Job;
use Illuminate\Support\Arr;
use Livewire\Volt\Component;
use Livewire\WithPagination;

new class extends Component {
    use WithPagination;
    
    public function with(): Array
    {
        $jobs = Job::latest()->paginate(9);
        return [
            'jobs' => $jobs,
        ];
    }
}; ?>

<div>
    <div class="grid md:grid-cols-3 gap-7 w-auto px-5 py-4 max-h-[780px] overflow-auto">
        @foreach ($jobs as $job)
    
        
        <div class="z-0 bg-white space-y-5 relative rounded-md py-4 px-4 h-64 shadow-[rgba(0,_0,_0,_0.24)_0px_3px_8px]">
            <div class="flex justify-between items-center flex-col md:flex-row">
                <div class="flex gap-2">
                    <x-avatar lg rounded="md" label="{{ $job->user->role }}" positive/>
                    <div>
                        <div class="font-bold"><a wire:navigate href="/r/{{ $job->id }}" >{{ $job->title }}</a></div>
                        <ul class="flex gap-2 text-[12px] ">
                            <li>{{ $job->job_type }}</li>
                            <li>•</li>
                            <li>{{ $job->schedule }}</li>
                            <li>•</li>
                            <li>{{ $job->salary }}</li>
                        </ul>
                    </div>
                </div>
                <div class="text-end absolute bottom-0 left-0 px-3 py-3 flex justify-between w-full ">
                    <div class="flex items-center gap-1 font-bold"><x-icon solid color="red" name="map-pin" />{{ $job->location }}</div>
                    <a href="/r/{{ $job->id }}" class="text-sm text-gray-400"><x-mini-button  black rounded icon="pencil" /></a>
                </div>
            </div>
            <div class="text-wrap text-gray-500 w-auto ">
                <p>{{ Str::limit($job->description, 121) }}</p>
            </div>
        </div>
        @endforeach
        
        
    </div>
    <div class="px-5 pb-3">
        {{ $jobs->links() }}
    </div>
    

</div>
