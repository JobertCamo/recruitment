<?php

use Livewire\Volt\Component;
use Illuminate\Validation\Rules\File;
use Livewire\WithFileUploads;

new class extends Component {
    use WithFileUploads;

    public $title;
    public $salary;
    public $location;
    public $schedule;
    public $recruitment_period;
    public $exp_need;
    public $job_type;
    public $photo;
    public $description;
    public $requirements;
    public $tags;

    public function submit()
    {
        $data = $this->validate([
            'title' => ['required', 'string'],
            'salary' => ['required', 'string'],
            'location' => ['required', 'string'],
            'schedule' => ['required', 'string'],
            'recruitment_period' => ['required', 'string'],
            'exp_need' => ['required', 'string'],
            'job_type' => ['required', 'string'],
            'photo' => ['required', File::types(['jpeg,png'])],
            'description' => ['required', 'string'],
            'requirements' => ['required', 'string'],
            'tags' => ['required', 'string'],

        ]);

        // $this->authorize('create', Job::class);

        $photo = $this->photo->store('job_images', 'public');
        $data['photo'] = $photo;
        $job = Auth::user()->jobs()->create(Arr::except($data, 'tags'));

        if(!empty($data['tags']))
        {
            foreach (explode(',', strtolower($data['tags'])) as $requirement) {
                $job->tag(trim($requirement));
            }
        }

        $this->reset();
        $this->dispatch('success-notif');
    }
}; ?>

<div class="bg-white p-4 rounded-md">
    <x-notification on="success-notif" >
        <x-alert title="Job Posted!" positive solid />
    </x-notification>
    <form class="flex flex-col justify-center items-center space-y-4" @click.away="notif = false" wire:submit="submit">
        <div class="grid grid-cols-2 gap-3 items-center">
            <x-input label="Job Title" wire:model="title" errorless />
            <x-input label="Salary" wire:model="salary" errorless/>
            <div class="flex gap-3 items-center">
                <x-native-select
                    label="Job Type"
                    placeholder="Select"
                    wire:model="job_type"
                    errorless
                    :options="['WFH', 'Onsite']"
                />
                <x-native-select
                    label="Schedule"
                    wire:model="schedule"
                    errorless
                    placeholder="Select"
                    :options="['Full-Time', 'Part-Time', 'Internship']"
                />
            </div>
            <x-input label="Recuitment Period" placeholder="ex. March 1, 2024 - March 20, 2024" wire:model="recruitment_period" errorless/>
            <x-input label="Experience needed" wire:model="exp_need" errorless/>
            <x-native-select
                    label="Location"
                    wire:model="location"
                    errorless
                    placeholder="Select"
                    :options="['Quezon City', 'Pasig City']"
                />
            <x-input label="Tags" wire:model="tags" errorless/>
            <x-input type="file" label="Photo" wire:model="photo" errorless/>
        </div>
        <div class="w-full flex items-center gap-3 space-x-2 ">
            <x-textarea label="Description" placeholder="write description" class="" wire:model="description" errorless/>
            <x-textarea label="Requiments" placeholder="separated by comma ','" class="" wire:model="requirements" errorless/>
        </div>
        <div class="w-full">
            <x-button type="submit" label="Publish" class="w-full"  />
        </div>
    </form>
</div>