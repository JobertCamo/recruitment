<?php

use Livewire\Volt\Component;

new class extends Component {
    public $tae = 'taes';
}; ?>

<div x-data="{
    activeTab: 'passed',
    setTab(tab) {
        this.activeTab = tab;
        // Update the URL without refreshing the page
        history.pushState({}, '', `/${tab}`);
    }
}"
x-init="
    // On page load, check the URL path and set the active tab based on it
    activeTab = window.location.pathname.split('/').pop() || 'passed';
">

<!-- Navigation Tabs -->
<div class="flex gap-4 p-4 border-b">
    <button @click="setTab('tae/' + @this.tae)" 
        :class="activeTab === 'applicant' ? 'text-blue-500 font-bold border-b-2 border-blue-500' : 'text-gray-500'"
        class="px-4 py-2">
        Applicants
    </button>
    <button @click="setTab('tae/priority')" 
        :class="activeTab === 'priority' ? 'text-blue-500 font-bold border-b-2 border-blue-500' : 'text-gray-500'"
        class="px-4 py-2">
        Priority Applicants
    </button>
    <button @click="setTab('passed')" 
        :class="activeTab === 'passed' ? 'text-blue-500 font-bold border-b-2 border-blue-500' : 'text-gray-500'"
        class="px-4 py-2">
        Passed Applicants
    </button>
    <button @click="setTab('failed')" 
        :class="activeTab === 'failed' ? 'text-blue-500 font-bold border-b-2 border-blue-500' : 'text-gray-500'"
        class="px-4 py-2">
        Failed Applicants
    </button>
</div>

<!-- Content for Each Tab -->
<div class="p-4">
    <div x-show="activeTab === 'tae/taes'">
        <h2 class="text-xl font-bold">List of Applicants</h2>
        <p>Details about all applicants will go here...</p>
    </div>
    <div x-show="activeTab === 'priority'">
        <h2 class="text-xl font-bold">Priority Applicants</h2>
        <p>Details about priority applicants will go here...</p>
    </div>
    <div x-show="activeTab === 'passed'">
        <h2 class="text-xl font-bold">Passed Applicants</h2>
        <p>Details about passed applicants will go here...</p>
    </div>
    <div x-show="activeTab === 'failed'">
        <h2 class="text-xl font-bold">Failed Applicants</h2>
        <p>Details about failed applicants will go here...</p>
    </div>
</div>
</div>


