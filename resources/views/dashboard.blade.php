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
        <div class="flex flex-col justify-between shadow-[rgba(17,_17,_26,_0.1)_0px_0px_16px] w-full lg:w-full h-24 lg:h-36 rounded-sm bg-gradient-to-t from-sky-600/70 to-cyan-500 relative overflow-hidden">
            <div class="absolute bg-white/20 w-36 h-36 -top-[120px] md:-top-[70px] -right-5 rotate-45"></div>
            <div class="absolute bg-white/20 w-32 h-32 -bottom-[90px] -left-5 rotate-45"></div>
            <div class="absolute bg-white/20 w-32 h-32 -bottom-[90px] -left-5 rotate-12"></div>
            <div class="p-2 lg:p-4 grid gap-2">
                <div class="flex items-center gap-2 ">
                    <x-icon name="folder"  color="white" class="w-5 h-5"/>
                    <div class="text-white font-bold text-xs lg:text-md">Total Applicants</div>
                </div>
                <div class="text-white text-xs lg:text-lg">2123</div>
            </div>
            <div class="pb-1 lg:pb-2 px-4 lg:space-y-2">
                <div class="flex justify-between">
                    <div class="text-white font-bold text-[10px] lg:text-xs">Priority</div>
                    <div class="text-white font-bold text-xs s lg:text-md">111</div>
                </div>
                <div class="flex justify-between">
                    <div class="text-white font-bold text-[10px] lg:text-xs">Non Priority</div>
                    <div class="text-white font-bold text-xs s lg:text-md">111</div>
                </div>
            </div>
        </div>
        <div class="flex flex-col justify-between shadow-[rgba(17,_17,_26,_0.1)_0px_0px_16px] w-full lg:w-full h-24 lg:h-36 rounded-sm bg-green-200 bg-gradient-to-t from-violet-600/80 to-violet-500/70 relative overflow-hidden">
            <div class="absolute bg-white/10 w-36 h-36 -top-[120px] md:-top-[70px] -right-5 rotate-45 rounded-full"></div>
            <div class="absolute bg-white/10 w-32 h-32 -bottom-[90px] -left-5 rotate-45 rounded-full"></div>
            <div class="absolute bg-white/10 w-24 h-24 -bottom-[20px] left-10 rotate-12 rounded-full"></div>
            <div class="p-2 lg:p-4 grid gap-2">
                <div class="flex items-center gap-2 ">
                    <x-icon name="check-circle"  color="white" class="w-5 h-5"/>
                    <div class="text-white font-bold text-xs lg:text-md">Passed Applicants</div>
                </div>
                <div class="text-white text-xs lg:text-lg">2123</div>
            </div>
            <div class="pb-1 lg:pb-2 px-4 lg:space-y-2">
                <div class="flex justify-between items-center">
                    <div class="text-white font-bold text-[10px] lg:text-xs">Priority</div>
                    <div class="text-white font-bold text-[10px]  lg:text-[12px] border-[2px] border-white h-8 w-8 md:h-10 md:w-10 rounded-full flex justify-center items-center">100%</div>
                </div>
                
            </div>
        </div>
        <div class="flex flex-col justify-between shadow-[rgba(17,_17,_26,_0.1)_0px_0px_16px] w-full lg:w-full h-24 lg:h-36 rounded-sm bg-green-200 bg-gradient-to-t from-rose-700 to-rose-400 relative overflow-hidden">
            <div class="w-0 h-0 border-l-[50px] border-l-transparent border-b-[75px] border-b-white/20 rotate-12 bottom-0 right-0 border-r-[50px] border-r-transparent absolute"></div>
            <div class="w-0 h-0 border-l-[50px] border-l-transparent border-b-[75px] border-b-white/10 rotate-6 top-0 left-0 border-r-[50px] border-r-transparent absolute"></div>
            <div class="absolute bg-white/10 w-36 h-36 -top-[120px] md:-top-[70px] -right-5 rotate-45 rounded-full"></div>
            <div class="p-2 lg:p-4 grid gap-2">
                <div class="flex items-center gap-2 ">
                    <x-icon name="information-circle"  color="white" class="w-5 h-5"/>
                    <div class="text-white font-bold text-xs lg:text-md">Failed Applicants</div>
                </div>
                <div class="text-white text-xs lg:text-lg">2123</div>
            </div>
            <div class="pb-1 lg:pb-2 px-4 lg:space-y-2">
                <div class="flex justify-between items-center">
                    <div class="text-white font-bold text-[10px] lg:text-xs">Priority</div>
                    <div class="text-white font-bold text-[10px]  lg:text-[12px] border-[2px] border-white h-8 w-8 md:h-10 md:w-10 rounded-full flex justify-center items-center">100%</div>
                </div>
                
            </div>
        </div>
        <div class="flex flex-col justify-between shadow-[rgba(17,_17,_26,_0.1)_0px_0px_16px] w-full lg:w-full h-24 lg:h-36 rounded-sm bg-gradient-to-b from-teal-500 to-teal-700/90 relative overflow-hidden">
            <div class="absolute bg-white/10 w-24 h-24 -top-5 -left-5 rotate-12 rounded-full"></div>
            <div class="w-0 h-0 border-l-[50px] border-l-transparent border-b-[75px] border-b-white/10 rotate-6 bottom-0 right-10 border-r-[50px] border-r-transparent absolute"></div>
            <div class="absolute bg-white/20 w-36 h-36 -top-[120px] md:-top-[70px] -right-5 rotate-45"></div>
            <div class="p-2 lg:p-4 grid gap-2">
                <div class="flex items-center gap-2 ">
                    <x-icon name="clock"  color="white" class="w-5 h-5"/>
                    <div class="text-white font-bold text-xs lg:text-md">Scheduled Applicants</div>
                </div>
                <div class="text-white text-xs lg:text-lg">2123</div>
            </div>
            <div class="pb-1 lg:pb-2 px-4 lg:space-y-2">
                <div class="flex justify-between items-center">
                    <div class="text-white font-bold text-[10px] lg:text-xs">Priority</div>
                    <div class="text-white font-bold text-[10px]  lg:text-[12px] border-[2px] border-white h-8 w-8 md:h-10 md:w-10 rounded-full flex justify-center items-center">100%</div>
                </div>
                
            </div>
        </div>
    </div>
    {{-- 1ST CARD --}}

    {{-- CHART --}}
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    {{-- CHART --}}

    {{-- 2ND CARD --}}
    <div class="grid gap-4 md:grid-cols-2 lg:grid-cols-4">
        <div class="flex flex-col  justify-center items-center shadow-[rgba(17,_17,_26,_0.1)_0px_0px_16px] h-60  rounded-xl lg:col-span-2 min-w-[300px] lg:h-80 xl:h-96 p-3 lg:py-4">
            <div class="w-full text-center">STATUSSSSSSS</div>
            <canvas class=" " id="myChart"></canvas>
        </div>
        <div class="flex flex-col  justify-center items-center shadow-[rgba(17,_17,_26,_0.1)_0px_0px_16px] h-60  rounded-xl lg:col-span-2 min-w-[300px] lg:h-80 xl:h-96 p-3 lg:py-4">
            <div class="w-full text-center">STATUSSSSSSS</div>
            <canvas class=" " id="myChart2"></canvas>
        </div>
    </div>
    {{-- 2ND CARD --}}

    {{-- 3RD CARD --}}
    <div class="grid gap-4 md:grid-cols-3 ">
        <div class="flex justify-center items-center gap-3 shadow-[rgba(17,_17,_26,_0.1)_0px_0px_16px] w-full h-28 lg:h-36 rounded-xl bg-white">
          <div class="flex justify-center items-center bg-amber-400 w-16 h-16 rounded-full">
            <x-icon name="user-group" solid color="white" class="w-10 h-10"/>
          </div>
          <div class=" grid">
            <div class="font-bold">Employees</div>
            <p class="text-sm text-gray-500">Together, we achieve greatness.</p>
          </div>
        </div>
        <div class="flex justify-center items-center gap-3 shadow-[rgba(17,_17,_26,_0.1)_0px_0px_16px] w-full h-28 lg:h-36 rounded-xl bg-white">
          <div class="flex justify-center items-center bg-amber-400 w-16 h-16 rounded-full">
            <x-icon name="user-group" solid color="white" class="w-10 h-10"/>
          </div>
          <div class=" grid">
            <div class="font-bold">Employees</div>
            <p class="text-sm text-gray-500">Together, we achieve greatness.</p>
          </div>
        </div>
        <div class="flex justify-center items-center gap-3 shadow-[rgba(17,_17,_26,_0.1)_0px_0px_16px] w-full h-28 lg:h-36 rounded-xl bg-white">
          <div class="flex justify-center items-center bg-amber-400 w-16 h-16 rounded-full">
            <x-icon name="user-group" solid color="white" class="w-10 h-10"/>
          </div>
          <div class=" grid">
            <div class="font-bold">Employees</div>
            <p class="text-sm text-gray-500">Together, we achieve greatness.</p>
          </div>
        </div>
    </div>
    {{-- 3RD CARD --}}

    {{-- FOOTER --}}
    <div class="text-center bg-white py-3 shadow-[rgba(17,_17,_26,_0.1)_0px_0px_16px]">
        HRGWA
    </div>
    {{-- CHART --}}
    <script>
        const ctx = document.getElementById('myChart');
      
      new Chart(ctx, {
        type: 'bar',
        data: {
          labels: ['January', 'February', 'March', 'April', 'May', 'June'],
          datasets: [{
            label: 'Sample',
            data: [12, 19, 6, 15, 2, 13],
            backgroundColor:[
              'rgba(255, 99, 132)',
              'rgba(54, 162, 235)',
              'rgba(255, 206, 86)',
              'rgba(75, 192, 192)',
              'rgba(153, 102, 255)',
              'rgba(255, 159, 64)',
          ],
            borderWidth: 1
          }]
        },
        options: {
          aspectRatio: 2,
          scales: {
            y: {
              beginAtZero: true
            }
          }
        }
      });


      const ctx2 = document.getElementById('myChart2');
      
      new Chart(ctx2, {
        type: 'line',
        data: {
          labels: ['January', 'February', 'March', 'April', 'May', 'June'],
          datasets: [{
            label: 'Sample',
            data: [12, 19, 6, 15, 2, 13],
            
            borderWidth: 1
          }]
        },
        options: {
          aspectRatio: 2,
          scales: {
            y: {
              beginAtZero: true
            }
          },
          animations: {
      tension: {
        duration: 1000,
        easing: 'linear',
        from: 1,
        to: 0,
        loop: true
      }
    },
        }
      });
    </script>
    {{-- CHART --}}
</x-layouts.layout>