<?php

use App\Models\Applicant;
use Livewire\Volt\Component;
use Livewire\WithPagination;

new class extends Component {
    use WithPagination;

    public $q = ""; // Search query
    public $sort = ""; // Sort criteria (e.g., 'A-Z', 'Date Applied')
    public $status = ""; // Status filter (e.g., 'Active', 'Pending')

    public function search()
    {
        $query = Applicant::query();

        // Apply search filter
        if (!empty($this->q)) {
            $query->where('first_name', 'LIKE', '%'.$this->q.'%')
                  ->orWhere('middle_name', 'LIKE', '%'.$this->q.'%')
                  ->orWhere('last_name', 'LIKE', '%'.$this->q.'%');
        }

        // Apply status filter
        if (!empty($this->status)) {
            $query->where('status', $this->status);
        }

        // Apply sorting
        if ($this->sort === 'A-Z') {
            $query->orderBy('first_name', 'asc');
        } elseif ($this->sort === 'Date applied') {
            $query->orderBy('created_at', 'desc');
        } else {
            $query->latest(); // Default sorting
        }

        return $query->paginate(10);
    }

    public function with(): array
    {
        return [
            'applicants' => $this->search(),
        ];
    }

}; ?>
<div>
    <div class="px-4  bg-white flex justify-between items-center lg:grid lg:grid-cols-6 space-x-3 ">
        <div class="grid  space-y-2 lg:col-span-4">
            <x-input placeholder="search something" icon="magnifying-glass" wire:model.live="q" />
        </div>
        <div class=" lg:col-span-1">
            <x-native-select
                placeholder="Filter"
                wire:model.live="sort"
                :options="['A-Z', 'Date applied']"
            />
        </div>
        <div class=" lg:col-span-1">
            <x-native-select
                placeholder="Filter"
                wire:model.live="status"
                :options="['Active', 'Pending', 'Stuck', 'Done']"
            />
        </div>
    </div>
    <div class="relative overflow-x-auto  lg:px-3 mt-3 ">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-400 uppercase bg-white dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="p-4">
                        <div class="flex items-center">
                            <input id="checkbox-all-search" type="checkbox" class="w-4 h-4 text-blue-600 bg-white border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="checkbox-all-search" class="sr-only">checkbox</label>
                        </div>
                    </th>
                    <th scope="col" class="px-3 py-3">
                        Name
                    </th>
                    <th scope="col" class="px-3 py-3">
                        Email
                    </th>
                    <th scope="col" class="px-3 py-3">
                        Contact
                    </th>
                    <th scope="col" class="px-3 py-3">
                        Nationality
                    </th>
                    <th scope="col" class="px-3 py-3">
                        Job Position
                    </th>
                    <th scope="col" class="px-3 py-3">
                        Score
                    </th>
                    <th scope="col" class="px-3 py-3">
                        Action
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($applicants as $applicant)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                    <td class="w-4 p-4">
                        <div class="flex items-center">
                            <input id="checkbox-table-search-1" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="checkbox-table-search-1" class="sr-only">checkbox</label>
                        </div>
                    </td>
                    <th scope="row" class="px-3 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{ $applicant->first_name . ' ' . $applicant->last_name }}
                    </th>
                    <td class="px-3 py-4">
                        {{ $applicant->email }}
                    </td>
                    <td class="px-3 py-4">
                        {{ $applicant->contact }}
                    </td>
                    <td class="px-3 py-4">
                        {{ $applicant->nationality }}
                    </td>
                    <td class="px-3 py-4">
                        {{ $applicant->job_position }}
                    </td>
                    <td class="px-3 py-4">
                        {{ $applicant->score . '%'}}
                    </td>
                    <td class="flex items-center px-3 py-4">
                        <a href="#" class="font-medium text-red-600 dark:text-red-500 hover:underline ms-3">Remove</a>
                    </td>
                </tr>
                @endforeach
                
            </tbody>
        </table>
        
    </div>
    <div class="px-5 py-3">
        {{ $applicants->links() }}
    </div>
</div>