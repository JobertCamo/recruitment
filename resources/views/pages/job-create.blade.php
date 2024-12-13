<x-layouts.layout>
    @slot('head1')
      Home
    @endslot
    @slot('head2')
      Job
    @endslot
    @slot('head3')
      Create
    @endslot
    <div class="bg-white px-5 py-4 rounded-md flex justify-between items-center shadow-[rgba(17,_17,_26,_0.1)_0px_0px_16px]" >
      <div class="space-y-1">
        <div class="text-2xl">Post a Job</div>
        <p class="text-sm text-gray-400">Add a job to post in public</p>
      </div>
      <a href="/jobpost" >View Post</a>
    </div>
    <div class="bg-white    shadow-[rgba(17,_17,_26,_0.1)_0px_0px_16px]" x-data="{notif: false}">
      <div class="bg-white z-10 px-5 py-3 border-b-[1px] border-gray-400/20 flex justify-between items-center sticky top-0">
        <div class="bg-green-300 py-1 px-2 rounded-full text-sm text-green-700">Published Job</div>
        <x-button label="Post" @click=" notif = true " />
      </div>
      {{-- Data --}}
      <livewire:jobs.data />
      {{-- Data --}}
      {{-- NOTIF --}}
      <div x-show="notif" x-cloak class="px-2 md:px-0 transition-all duration-300 flex h-screen w-full bg-black/20 absolute top-0 left-0 z-50  justify-center items-center">
        <livewire:jobs.job-create />
      </div>
      {{-- NOTIF --}}
    </div>

    
    
</x-layouts.layout>