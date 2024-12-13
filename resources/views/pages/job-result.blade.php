<x-layouts.layout>
    @slot('head1')
      Home
    @endslot
    @slot('head2')
      Job
    @endslot
    @slot('head3')
      Details
    @endslot
    <div class="space-y-7" x-data="{subnav: 'details'}">
        <div class="grid gap-4 md:gap-0 md:flex md:flex-row md:justify-between ">
            <div class="flex items-center gap-4">
                <x-mini-button rounded  lg secondary icon="arrow-left" interaction="primary" href="/create" wire:navigate/>
                <div class="space-y-2">
                    <div class="text-sm text-gray-500">Details</div>
                    <div class="text-4xl">{{ $job->title }}</div>
                    <div class="text-md text-gray-500">{{ $job->job_type . ' • ' . $job->schedule }}</div>
                </div>
            </div>
            <x-button label="Edit Post" secondary icon="cog-6-tooth" right-icon="arrow-down" class="h-10" />
        </div>
        <div class="md:px-4">
            <div  class="flex items-center gap-5 h-8 border-b-2 border-gray-200">
                <button @click="subnav = 'details'" :class="subnav === 'details' ? 'border-b-2 border-blue-500 font-bold' : 'text-gray-500'" class="transition-all duration-100 h-8 text-md flex items-center ">Details</span></button>
                <button @click="subnav = 'candidates'" :class="subnav === 'candidates' ? 'border-b-2 border-blue-500 font-bold' : 'text-gray-500'" class="transition-all duration-100 h-8 text-md flex items-center ">Candidates</span></button>
            </div>
        </div>
        <div class=" w-full flex justify-between flex-col md:flex-row gap-4 h-auto md:h-[650px]">
            <div class="bg-white rounded-md flex-1 px-5 py-4 space-y-5 shadow-[0px_0px_0px_1px_rgba(0,0,0,0.06),0px_1px_1px_-0.5px_rgba(0,0,0,0.06),0px_3px_3px_-1.5px_rgba(0,0,0,0.06),_0px_6px_6px_-3px_rgba(0,0,0,0.06),0px_12px_12px_-6px_rgba(0,0,0,0.06),0px_24px_24px_-12px_rgba(0,0,0,0.06)]">
                <div class="space-y-3">
                    <div class="flex justify-between items-center">
                        <div class="font-bold">Header</div>
                        <div>
                            <x-button wire:navigate href="/jobpost" label="back" white />
                        </div>
                    </div>
                    <div class=" h-36 rounded-md bg-no-repeat bg-cover bg-center flex justify-center items-center overflow-hidden shadow-[0px_0px_0px_1px_rgba(0,0,0,0.06),0px_1px_1px_-0.5px_rgba(0,0,0,0.06),0px_3px_3px_-1.5px_rgba(0,0,0,0.06),_0px_6px_6px_-3px_rgba(0,0,0,0.06),0px_12px_12px_-6px_rgba(0,0,0,0.06),0px_24px_24px_-12px_rgba(0,0,0,0.06)]">
                        <img src="{{ asset('storage/'. $job->photo) }}" alt="" width="100%">
                    </div>
                </div>
                <div>
                    <div class="font-bold">Job Title</div>
                    <div class="text-3xl">{{ $job->title }}</div>
                </div>
                <div class="space-y-2">
                    <div class="font-bold">Job Description</div>
                    <p class="text-gray-500">{{ $job->description }}</p>
                </div>
                <div>
                    <div class="font-bold">Requirements</div>
                    <div class="text-gray-500">
                        @foreach (explode(',', $job->requirements) as $requirement)
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
                        <p>{{ $job->created_at->format('F d, Y') }}</p>
                    </div>
                    <div>
                        <div class="text-[12px] text-[#455A64]">Recruitment Period</div>
                        <p>{{ $job->recruitment_period }}</p>
                    </div>
                    <div>
                        <div class="text-[12px] text-[#455A64]">Job Type</div>
                        <p>{{ $job->job_type }}</p>
                    </div>
                    <div>
                        <div class="text-[12px] text-[#455A64]">Schedule</div>
                        <p>{{ $job->schedule }}</p>
                    </div>
                    <div>
                        <div class="text-[12px] text-[#455A64]">Experiences</div>
                        <p>{{ $job->exp_need }}</p>
                    </div>
                    <div>
                        <div class="text-[12px] text-[#455A64]">Location</div>
                        <p>{{ $job->location }}</p>
                    </div>
                    <div>
                        <div class="text-[12px] text-[#455A64]">Salary</div>
                        <p>{{ $job->salary }}</p>
                    </div>
                </div>
                <div class="text-center">
                    <x-button href="/app" label="Apply Now" amber class="w-full" />
                </div>
            </div>
        </div>
    </div>

    
    
</x-layouts.layout>