<?php

use Livewire\Volt\Component;

new class extends Component {
    //
}; ?>

<div class="relative overflow-x-auto shadow-[rgba(17,_17,_26,_0.1)_0px_0px_16px] sm:rounded-lg lg:px-3">
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
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <td class="w-4 p-4">
                    <div class="flex items-center">
                        <input id="checkbox-table-search-1" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label for="checkbox-table-search-1" class="sr-only">checkbox</label>
                    </div>
                </td>
                <th scope="row" class="px-3 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    Danny Guzman
                </th>
                <td class="px-3 py-4">
                    johndoe@gmail.com
                </td>
                <td class="px-3 py-4">
                    0992838282
                </td>
                <td class="px-3 py-4">
                    Filipino
                </td>
                <td class="px-3 py-4">
                    Finnancial Manager
                </td>
                <td class="px-3 py-4">
                    Web dev
                </td>
                <td class="flex items-center px-3 py-4">
                    <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                    <a href="#" class="font-medium text-red-600 dark:text-red-500 hover:underline ms-3">Remove</a>
                </td>
            </tr>
            
            
        </tbody>
    </table>
</div>
