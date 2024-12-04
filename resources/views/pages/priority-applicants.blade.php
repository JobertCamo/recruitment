<x-layouts.layout>
    @slot('head1')
      Home
    @endslot
    @slot('head2')
      Applicants
    @endslot
    @slot('head3')
      Priority
    @endslot

    <div class="space-y-4" x-data="{subnav: 'applicants'}">
        <div class="shadow-[rgba(17,_17,_26,_0.1)_0px_0px_16px] w-full bg-white py-4 px-5 space-y-3 rounded-md" >
            <div class="mt-3 mb-2 flex justify-between items-center">
                <div x-cloak x-show="subnav === 'applicants'" class="text-xl lg:text-2xl font-bold">List of Applicants</div>
                <div x-cloak x-show="subnav === 'priority'" class="text-xl lg:text-2xl font-bold">Priority Applicants</div>
                <div x-cloak x-show="subnav === 'passed'" class="text-xl lg:text-2xl font-bold">Passed Applicants</div>
                <div x-cloak x-show="subnav === 'failed'" class="text-xl lg:text-2xl font-bold">Failed Applicants</div>
                <x-button label="Add Applicant" class=" lg:py-3 " />
            </div>
            <div>
                <div  class="flex items-center gap-5 h-8 border-b-2 border-gray-200">
                    <button @click="subnav = 'applicants'" :class="subnav === 'applicants' ? 'border-b-2 border-blue-500 text-blue-500' : 'text-gray-500'" class="h-8 text-[12px] flex items-center">Applicant <span class="hidden md:block">&nbsp; Lists </span></button>
                    <button @click="subnav = 'priority'" :class="subnav === 'priority' ? 'border-b-2 border-blue-500 text-blue-500' : 'text-gray-500'" class="h-8 text-[12px] flex items-center">Priority <span class="hidden md:block">&nbsp; Applicants </span></button>
                    <button @click="subnav = 'passed'" :class="subnav === 'passed' ? 'border-b-2 border-blue-500 text-blue-500' : 'text-gray-500'" class="h-8 text-[12px] flex items-center">Passed <span class="hidden md:block">&nbsp; Applicants </span></button>
                    <button @click="subnav = 'failed'" :class="subnav === 'failed' ? 'border-b-2 border-blue-500 text-blue-500' : 'text-gray-500'" class="h-8 text-[12px] flex items-center">Failed <span class="hidden md:block">&nbsp; Applicants </span></button>
                </div>
            </div>
            <div class=" flex justify-between items-center lg:grid lg:grid-cols-6 space-x-3 ">
                <div class="grid  space-y-2 lg:col-span-4">
                    <x-input placeholder="search something" icon="magnifying-glass" />
                </div>
                <div class=" lg:col-span-1">
                    <x-native-select
                        placeholder="Filter"
                        :options="['Active', 'Pending', 'Stuck', 'Done']"
                    />
                </div>
                <div class="hidden lg:block lg:col-span-1 bg-red-500">
                    <x-button label="add" />
                </div>
            </div>
        </div>
        <div x-show="subnav === 'applicants'" x-cloak>
            <livewire:applicants.applicant-lists  />
        </div>
        <div x-show="subnav === 'priority'" x-cloak>
            <livewire:applicants.priority  />
        </div>
        <div x-show="subnav === 'passed'" x-cloak>
            <livewire:applicants.passed  />
        </div>
        <div x-show="subnav === 'failed'" x-cloak>
            <livewire:applicants.failed  />
        </div>
    </div>

</x-layouts.layout>