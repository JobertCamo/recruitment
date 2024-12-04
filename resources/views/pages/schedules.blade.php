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

    <div class="overflow-x-auto bg-white shadow-[rgba(17,_17,_26,_0.1)_0px_0px_16px] rounded-xl">
        <table class="table-auto border-collapse border border-gray-300 w-full text-center">
          <thead class="bg-red-500 text-white">
            <tr>
              <th class="bg-white text-black border border-gray-300 px-4 py-2">Scheduled Date</th>
              <th class="border border-gray-300 px-4 py-4">Starting Time</th>
              <th class="border border-gray-300 px-4 py-4">Ending Time</th>
              <th class="border border-gray-300 px-4 py-4">Applicant Name</th>
              <th class="border border-gray-300 px-4 py-4">Applied Position</th>
              <th class="border border-gray-300 px-4 py-4">Interviewer Name</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="relative overflow-visible border border-gray-300 px-4 py-2">
                02-12-2022
                <div class="absolute -left-10">sssssss</div>
              </td>
              <td class="border border-gray-300 px-4 py-8">10:00 am</td>
              <td class="border border-gray-300 px-4 py-8">11:30 am</td>
              <td class="border border-gray-300 px-4 py-8">Candidate 1</td>
              <td class="border border-gray-300 px-4 py-8">Research Associate</td>
              <td class="border border-gray-300 px-4 py-8">John Foe</td>
            </tr>
            <!-- Repeat rows for more data -->
          </tbody>
        </table>
      </div>
      
    
</x-layouts.layout>