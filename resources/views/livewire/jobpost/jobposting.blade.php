<?php

use App\Models\Job;
use App\Models\Tag;
use Livewire\Volt\Component;
use Livewire\WithPagination;

new class extends Component {
    use WithPagination;

    public $q = null;
    public $job_type = null;
    public $sched = null;
    public $date_range = null;
    public $res = true;
    public $test;
    public $exp;
    public $min_salary;
    public $max_salary;

    public function resu(Job $job)
    {
        $this->res = false;

        $this->test = [
            'id' => $job->id,
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
    
    // public function search($q)
    // {
    //     $jobs = Job::latest()
    //                 ->Where('schedule', $this->job_type)
    //                 ->Where('job_type', $this->sched)
    //                 ->Where('title', 'LIKE', '%'.$this->q.'%')
    //                 ->paginate(5);
    //     return $jobs;
    // }

    public function tags()
    {
        return Tag::all();
    }

    public function resetFilters()
    {
        $this->reset('q', 'job_type', 'sched', 'date_range', 'exp', 'min_salary', 'max_salary'); // Reset specific properties
        $this->resetPage(); // Reset pagination
    }

    public function updated($property)
    {
        if (in_array($property, ['q', 'job_type', 'sched', 'date_range', 'exp', 'min_salary', 'max_salary'])) {
            $this->resetPage(); // Reset pagination to page 1
        }
    }

    public function search()
    {
        return Job::query()
            ->when($this->q, fn($query) => $query->where('title', 'LIKE', '%' . $this->q . '%')->orwhere('location', 'LIKE', '%' . $this->q . '%'))
            ->when($this->job_type, fn($query) => $query->where('job_type', $this->job_type))
            ->when($this->sched, fn($query) => $query->where('schedule', $this->sched))
            ->when($this->exp, fn($query) => $query->where('exp_need', $this->exp))
            ->when($this->min_salary, fn($query) => $query->where('salary', '>=', $this->min_salary))
            ->when($this->max_salary, fn($query) => $query->where('salary', '<=', $this->max_salary))
            ->when($this->date_range, function ($query) {
                if ($this->date_range === 'This Week') {
                    $query->where('created_at', '>=', now()->subWeek());
                } elseif ($this->date_range === 'This Month') {
                    $query->where('created_at', '>=', now()->subMonth());
                } elseif ($this->date_range === 'This Year') {
                    $query->where('created_at', '>=', now()->subYear());
                }
            })
            ->latest()
            ->paginate(5);
    }


    public function getJob(){
        $jobs = Job::latest()->Paginate(5);
        return $jobs;
    }

    public function with(): Array
    {
        // !empty($this->job_type) ? $jobs = $this->search() : $jobs = $this->getJob();
        $jobs = $this->search();
        return [
            'jobs' => $jobs,
            'tags' => $this->tags(),
        ];

    }
    
}; ?>

<div class="flex gap-2 px-2 lg:px-9 py-2 mt-3" x-data="{details: false}">
    {{-- Sidebar --}}
    <div class=" bg-white min-w-72 hidden lg:flex lg:flex-col   px-4 rounded-md shadow-[0px_0px_0px_1px_rgba(0,0,0,0.06),0px_1px_1px_-0.5px_rgba(0,0,0,0.06),0px_3px_3px_-1.5px_rgba(0,0,0,0.06),_0px_6px_6px_-3px_rgba(0,0,0,0.06),0px_12px_12px_-6px_rgba(0,0,0,0.06),0px_24px_24px_-12px_rgba(0,0,0,0.06)]">
        <div class="flex justify-between border-b-[1px] border-b-gray-300/50 py-2 mt-1 font-bold">
            Filter
            @if ($q || $job_type || $sched || $date_range)
            <button class="font-normal text-red-500 text-sm hover:text-red-700 hidden md:block" wire:click="resetFilters">Reset Filters</button>
            @endif
        </div>
        <div class=" space-y-1 border-b-[1px] border-b-gray-300/50 py-6">
            <div class="font-bold">Date Post</div>
            <x-native-select
                placeholder="Anytime"
                wire:model.live="date_range"
                :options="['This Week', 'This Month', 'This Year']"
            />
        </div>
        <div class=" space-y-1 border-b-[1px] border-b-gray-300/50 py-6">
            <div class="font-bold">Job Type</div>
            <div class="grid grid-cols-2 space-y-1">
                <x-radio warning sm id="rounded-md" wire:model.live="sched" rounded="base" label="Full-Time" value="Full-Time" xl />
                <x-radio warning sm id="rounded-md2" wire:model.live="sched" rounded="base" label="Part-Time" value="Part-Time" xl />
                <x-radio warning sm id="rounded-md3" wire:model.live="sched" rounded="base" label="Internship" value="Internship" xl />
                <x-radio warning sm id="rounded-md4" wire:model.live="sched" rounded="base" label="Volunteer" value="Volunteer" xl />
            </div>
        </div>
        <div class=" space-y-1 border-b-[1px] border-b-gray-300/50 py-6">
            <div class="font-bold">On Site / WFH</div>
            <div class="grid grid-cols-2 space-y-1">
                <x-radio warning sm id="rounded-" wire:model.live="job_type" rounded="base" label="Onsite" value="Onsite" xl />
                <x-radio warning sm id="rounded-2" wire:model.live="job_type" rounded="base" label="WFH" value="WFH" xl />
                <x-radio warning sm id="rounded-3" wire:model.live="job_type" rounded="base" label="Hybrid" value="Hybrid" xl />

            </div>
        </div>
        <div class="space-y-1 border-b-[1px] border-b-gray-300/50 py-6">
            <div class="font-bold">Salary Range</div>
            <div class="flex items-center justify-between">
                <x-input class="max-w-28" label="Min" wire:model.live="min_salary" type="number" placeholder="Min Salary" />
                {{-- <x-icon name="bars-2" />  --}}
                <x-input class="max-w-28" label="Max" wire:model.live="max_salary" type="number" placeholder="Max Salary" />
            </div>
        </div>
        <div class=" space-y-1 border-b-[1px] border-b-gray-300/50 py-6">
            <div class="font-bold">Experience</div>
            <x-native-select
                placeholder="year"
                wire:model.live="exp"
                :options="['1 year', '2 years', '3 years', '4 years']"
            />
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
            <div class="hidden md:block">{{ count($jobs) }} Job results</div>
            <div class=" gap-3 hidden lg:flex lg:w-[70%] overflow-auto no-scrollbar">
                @foreach ($tags as $tag)
                    <x-button  slate label="{{ $tag->name }}" rounded />
                @endforeach
            </div>
            <div class="flex items-center gap-5 lg:hidden">
                <x-native-select
                    class="text-[13px]"
                    placeholder="Job Type"
                    wire:model.live="job_type"
                    :options="['Onsite', 'WFH', 'Hybrid']"
                />
                <x-native-select
                    class="text-[13px]"
                    placeholder="Schedule"
                    wire:model.live="sched"
                    :options="['Full-Time', 'Part-Time', 'Internship']"
                />
                <x-native-select
                    class="text-[13px]"
                    placeholder="Date Post"
                    wire:model.live="date_range"
                    :options="['This Week', 'This Month', 'This Year']"
                />
            </div>
        </div>
        {{-- @foreach ($jobs as $job)
        <x-jobcard-wide :$job/>
        @endforeach --}}

        @forelse ($jobs as $job)
        <x-jobcard-wide :$job/>
        @empty
        <div class="text-center h-32 flex justify-center items-center text-xl">No data found.</div>
        @endforelse

        <div class="px-5 py-3">
            {{ $jobs->links() }}
        </div>
    </div>
    @endif
   

    <x-preloader  />
    @if(isset($test))
    <div on="updated" x-show="details" x-cloak  class=" w-full flex justify-between flex-col md:flex-row gap-2 h-auto md:min-h-[650px]">
        <div class="bg-white rounded-md flex-1 px-5 py-4 space-y-5 shadow-[0px_0px_0px_1px_rgba(0,0,0,0.06),0px_1px_1px_-0.5px_rgba(0,0,0,0.06),0px_3px_3px_-1.5px_rgba(0,0,0,0.06),_0px_6px_6px_-3px_rgba(0,0,0,0.06),0px_12px_12px_-6px_rgba(0,0,0,0.06),0px_24px_24px_-12px_rgba(0,0,0,0.06)]">
            <div class="space-y-3">
                <div class="flex justify-between items-center">
                    <div class="font-bold">Header</div>
                    <x-button wire:navigate href="/" @click="details = false" label="Back" white icon="arrow-left" />
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
                <x-button href="/a/{{ $test['id'] }}" label="Apply Now" amber class="w-full" />
            </div>
        </div>
    </div>
    @endif

    {{-- Job Lists --}}
</div>
