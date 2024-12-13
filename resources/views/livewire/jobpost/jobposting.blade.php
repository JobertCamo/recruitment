<?php

use App\Models\Job;
use Livewire\Volt\Component;
use Livewire\WithPagination;

new class extends Component {
    use WithPagination;

    public $q = '';
    public $res = true;
    public $test;

    public function resu(Job $job)
    {
        $this->res = false;

        $this->test = [
            'title' => $job->title,
            'description' => $job->description,
            'requirements' => $job->requirements,
            'salary' => $job->salary,
            'location' => $job->location,
            'schedule' => $job->schedule,
            'recruitment_period' => $job->recruitment_period,
            'exp_need' => $job->exp_need,
            'job_type' => $job->job_type,
            'photo' => $job->photo,
            'created_at' => $job->created_at,
        ];
    }
    
    public function search($q)
    {
        $jobs = Job::where('title', 'LIKE', '%'.$this->q.'%')
                    ->orWhere('location', 'LIKE', '%'.$this->q.'%')
                    ->orWhere('schedule', 'LIKE', '%'.$this->q.'%')
                    ->get();
        return $jobs;
    }

    public function getJob(){
        $jobs = Job::latest()->simplePaginate(10);
        return $jobs;
    }

    public function with(): Array
    {
        !empty($this->q) ? $jobs = $this->search($this->q) : $jobs = $this->getJob();
        return [
            'jobs' => $jobs,
        ];

    }
    
}; ?>

<div class="flex gap-2 px-2 lg:px-9 py-2 mt-3" x-data="{details: false}">
    {{-- Sidebar --}}
    <div class=" h-screen bg-white min-w-72 hidden lg:flex lg:flex-col   px-4 rounded-md shadow-[0px_0px_0px_1px_rgba(0,0,0,0.06),0px_1px_1px_-0.5px_rgba(0,0,0,0.06),0px_3px_3px_-1.5px_rgba(0,0,0,0.06),_0px_6px_6px_-3px_rgba(0,0,0,0.06),0px_12px_12px_-6px_rgba(0,0,0,0.06),0px_24px_24px_-12px_rgba(0,0,0,0.06)]">
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

    @if ($res)
        
    <div :class="details ? 'hidden' : 'block' " class="lg:min-w-[998px] xl:min-w-[1312px] min-w-full px-1 pb-2 space-y-4 h-screen overflow-auto">
        <div class="flex justify-between gap-2 items-center bg-white sticky top-0 z-10">
            <x-input icon="magnifying-glass" placeholder="Search something ex. job or places" class="w-full" wire:model.live="q"/>
            <x-button type="submit" wire:click="search" amber>Find&nbsp;Jobs</x-button>
        </div>
        <div class="w-full flex justify-between items-center">
            <div>{{ count($jobs) }} Job results</div>
            <div class=" gap-3 hidden lg:flex">
                <x-button  slate label="Web Dev" rounded />
                <x-button  slate label="Software dev" rounded />
                <x-button  slate label="Senior Dev" rounded />
                <x-button  slate label="Farmer" rounded />
                <x-button  slate label="Welder" rounded />
                <x-button  slate label="Sewer" rounded />
            </div>
        </div>
        @foreach ($jobs as $job)
        <x-jobcard-wide :$job/>
        @endforeach
    </div>
    @endif

    <x-preloader  />
    @if(isset($test))
    <div on="updated" x-show="details" x-cloak  class=" w-full flex justify-between flex-col md:flex-row gap-2 h-auto md:h-[650px]">
        <div class="bg-white rounded-md flex-1 px-5 py-4 space-y-5 shadow-[0px_0px_0px_1px_rgba(0,0,0,0.06),0px_1px_1px_-0.5px_rgba(0,0,0,0.06),0px_3px_3px_-1.5px_rgba(0,0,0,0.06),_0px_6px_6px_-3px_rgba(0,0,0,0.06),0px_12px_12px_-6px_rgba(0,0,0,0.06),0px_24px_24px_-12px_rgba(0,0,0,0.06)]">
            <div class="space-y-3">
                <div class="flex justify-between items-center">
                    <div class="font-bold">Header</div>
                    <x-button wire:navigate href="/jobpost" @click="details = false" label="Back" white icon="arrow-left" />
                </div>
                <div class=" h-36 rounded-md bg-no-repeat bg-cover bg-center flex justify-center items-center overflow-hidden shadow-[0px_0px_0px_1px_rgba(0,0,0,0.06),0px_1px_1px_-0.5px_rgba(0,0,0,0.06),0px_3px_3px_-1.5px_rgba(0,0,0,0.06),_0px_6px_6px_-3px_rgba(0,0,0,0.06),0px_12px_12px_-6px_rgba(0,0,0,0.06),0px_24px_24px_-12px_rgba(0,0,0,0.06)]">
                    <img src="{{ asset('storage/'. $test['photo']) }}" alt="" width="100%">
                </div>
            </div>
            <div>
                <div class="font-bold">Job Title</div>
                <div class="text-3xl">{{ $test['title'] }}</div>
            </div>
            <div class="space-y-2">
                <div class="font-bold">Job Description</div>
                <p class="text-gray-500">{{ $test['description'] }}</p>
            </div>
            <div>
                <div class="font-bold">Requirements</div>
                <div class="text-gray-500">
                    @foreach (explode(',', $test['requirements']) as $requirement)
                          <li> {{ $requirement }}</li>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="bg-white w-auto lg:w-72 px-4 py-5 space-y-3 flex flex-col justify-between shadow-[0px_0px_0px_1px_rgba(0,0,0,0.06),0px_1px_1px_-0.5px_rgba(0,0,0,0.06),0px_3px_3px_-1.5px_rgba(0,0,0,0.06),_0px_6px_6px_-3px_rgba(0,0,0,0.06),0px_12px_12px_-6px_rgba(0,0,0,0.06),0px_24px_24px_-12px_rgba(0,0,0,0.06)]">
            <div class="space-y-5">
                <div class="font-bold">Job Details</div>
                <div>
                    <div class="text-[12px] text-[#455A64]">Job Creation Date</div>
                    <p>{{ $test['created_at']->format('F d, Y')  }}</p>
                </div>
                <div>
                    <div class="text-[12px] text-[#455A64]">Recruitment Period</div>
                    <p>{{ $test['recruitment_period'] }}</p>
                </div>
                <div>
                    <div class="text-[12px] text-[#455A64]">Job Type</div>
                    <p>{{ $test['job_type'] }}</p>
                </div>
                <div>
                    <div class="text-[12px] text-[#455A64]">Experiences</div>
                    <p>{{ $test['exp_need'] }}</p>
                </div>
                <div>
                    <div class="text-[12px] text-[#455A64]">Location</div>
                    <p>{{ $test['location'] }}</p>
                </div>
                <div>
                    <div class="text-[12px] text-[#455A64]">Salary</div>
                    <p>{{ $test['salary'] }}</p>
                </div>
            </div>
            <div class="text-center">
                <x-button href="/app" label="Apply Now" amber class="w-full" />
            </div>
        </div>
    </div>
    @endif

    {{-- Job Lists --}}
</div>
