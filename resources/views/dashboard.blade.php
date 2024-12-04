<x-layouts.layout>
    @slot('head1')
      Home
    @endslot
    @slot('head2')
      Dashboard
    @endslot
    @slot('head3')
      
    @endslot
    {{-- BREADCRUMBS NEED TO REDO --}}

    {{-- 1ST CARD --}}
    <div class="grid grid-cols-2 gap-4  md:grid-cols-4">
        <div class="shadow-[rgba(17,_17,_26,_0.1)_0px_0px_16px] w-full lg:w-full h-24 lg:h-36 rounded-xl bg-green-200">1</div>
        <div class="shadow-[rgba(17,_17,_26,_0.1)_0px_0px_16px] w-full lg:w-full h-24 lg:h-36 rounded-xl bg-green-200">1</div>
        <div class="shadow-[rgba(17,_17,_26,_0.1)_0px_0px_16px] w-full lg:w-full h-24 lg:h-36 rounded-xl bg-green-200">1</div>
        <div class="shadow-[rgba(17,_17,_26,_0.1)_0px_0px_16px] w-full lg:w-full h-24 lg:h-36 rounded-xl bg-green-200">1</div>
    </div>
    {{-- 1ST CARD --}}

    {{-- 2ND CARD --}}
    <div class="grid gap-4 md:grid-cols-2 lg:grid-cols-6">
        <div class="shadow-[rgba(17,_17,_26,_0.1)_0px_0px_16px] w-full h-60 rounded-xl lg:col-span-4 lg:h-80 bg-violet-200">1</div>
        <div class="shadow-[rgba(17,_17,_26,_0.1)_0px_0px_16px] w-full h-60 rounded-xl lg:col-span-2 lg:h-80 bg-violet-200">2</div>
    </div>
    {{-- 2ND CARD --}}

    {{-- 3RD CARD --}}
    <div class="grid gap-4 md:grid-cols-3 ">
        <div class="shadow-[rgba(17,_17,_26,_0.1)_0px_0px_16px] w-full h-48 lg:h-56 rounded-xl bg-green-200">1</div>
        <div class="shadow-[rgba(17,_17,_26,_0.1)_0px_0px_16px] w-full h-48 lg:h-56 rounded-xl bg-green-200">1</div>
        <div class="shadow-[rgba(17,_17,_26,_0.1)_0px_0px_16px] w-full h-48 lg:h-56 rounded-xl bg-green-200">1</div>
    </div>
    {{-- 3RD CARD --}}

    {{-- FOOTER --}}
    <div class="text-center bg-amber-200 py-3">
        HRGWA
    </div>
</x-layouts.layout>