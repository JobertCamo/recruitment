<!-- component -->
<!doctype html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="//unpkg.com/alpinejs" defer></script>
</head>

<body x-data="{sidebarOpen: false}">
  <!-- Add custom scrollbar styles -->
  <style>
    /* Customize scrollbar width */
    .scrollbar::-webkit-scrollbar {
      width: 4px;
    }

    /* Customize scrollbar track */
    .scrollbar::-webkit-scrollbar-track {
      background: #cae9ff;
    }

    /* Customize scrollbar thumb */
    .scrollbar::-webkit-scrollbar-thumb {
      background: #5fa8d3;
      border-radius: 4px;
    }

    /* Customize scrollbar thumb on hover */
    .scrollbar::-webkit-scrollbar-thumb:hover {
      background: #1b4965;
    }

    [x-cloak] {
      display: none !important;
    }
  </style>

  <!-- Sidebar -->
  <aside :class="sidebarOpen ? 'w-1' : 'w-72'"
    class="relative bg-slate-200 h-screen p-5 transition-all duration-300 flex flex-col text-md font-semibold overflow-hidden">
    <!-- Toggle button -->
    <button @click="sidebarOpen = !sidebarOpen"
      class="absolute -right-3 top-9 cursor-pointer rounded-full border-2 border-black bg-white p-1">
      <!-- SVG icon -->
      <svg :class="sidebarOpen ? 'rotate-270' : 'rotate-90'" class="h-6 w-6 transform transition-transform duration-300"
        fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
      </svg>
    </button>
    <!-- Sidebar header -->
    <div class="inline-block py-2 mb-2 overflow-hidden">
      <h1 class=" text-black transition-opacity duration-300 font-bold text-2xl"  x-cloak>
        ABC Corp.</h1>
      <p class="text-black transition-opacity duration-300 font-medium text-md"  x-cloak>
        Co description. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum laudantium quidem
        at ea quas voluptates, sequi voluptas dicta aperiam, ducimus aut atque quis ullam adipisci nobis provident,
        quo officia. Repudiandae?
      </p>
    </div>
    <!-- Sidebar menu -->
    <ul class="flex flex-col space-y-1 overflow-y-auto overflow-x-hidden scrollbar">
      <li  class="group">
        <a href="#"
          class="flex items-center space-x-2 py-2 px-4 rounded-md text-black hover:bg-sky-300 transition-colors duration-300">
          <!-- Icon -->
          <span>🏠</span>
          <!-- Text -->
          <span  x-cloak>Home</span>
        </a>
        <hr class="border-t border-black"  x-cloak />
        <!-- Nested Menu Example (conditionally show based on sidebar state) -->
        <ul  x-transition:enter="transition ease-out duration-200"
          x-transition:enter-start="opacity-0 transform scale-95"
          x-transition:enter-end="opacity-100 transform scale-100" x-transition:leave="transition ease-in duration-150"
          x-transition:leave-start="opacity-100 transform scale-100"
          x-transition:leave-end="opacity-0 transform scale-95" x-cloak>
          <li>
            <a href="#"
              class="flex items-center space-x-2 py-2 px-8 rounded-md text-black hover:bg-sky-300 transition-colors duration-300">
              <span>🔍</span>
              <span>Submenu 1</span>
            </a>
          </li>
          <!-- Additional nested items -->
        </ul>
      </li>
      <hr class="border-t border-black"  x-cloak />
      <!-- Additional main menu items -->
      <li x-show="sidebarOpen || !sidebarOpen" class="group">
        <a href="#"
          class="flex items-center space-x-2 py-2 px-4 rounded-md text-black hover:bg-sky-300 transition-colors duration-300">
          <!-- Icon -->
          <!-- <span>🏠</span> -->
          <!-- Text -->
          <span x-show="sidebarOpen" x-cloak>Users</span>
        </a>

      </li>
      <hr class="border-t border-black"  x-cloak />
      <li x-show="sidebarOpen || !sidebarOpen" class="group">
        <a href="#"
          class="flex items-center space-x-2 py-2 px-4 rounded-md text-black hover:bg-sky-300 transition-colors duration-300">
          <!-- Icon -->
          <!-- <span>🏠</span> -->
          <!-- Text -->
          <span  x-cloak>Tasks</span>
        </a>

      </li>
      <!-- adding dummy data for checking the scrolls of sidebar -->
      <hr class="border-t border-black"  x-cloak />
      <li x-show="sidebarOpen || !sidebarOpen" class="group">
        <a href="#"
          class="flex items-center space-x-2 py-2 px-4 rounded-md text-black hover:bg-sky-300 transition-colors duration-300">
          <!-- Icon -->
          <!-- <span>🏠</span> -->
          <!-- Text -->
          <span  x-cloak>Tasks</span>
        </a>

      </li>
      <!-- adding dummy data for checking the scrolls of sidebar -->
      <hr class="border-t border-black"  x-cloak />
      <li x-show="sidebarOpen || !sidebarOpen" class="group">
        <a href="#"
          class="flex items-center space-x-2 py-2 px-4 rounded-md text-black hover:bg-sky-300 transition-colors duration-300">
          <!-- Icon -->
          <!-- <span>🏠</span> -->
          <!-- Text -->
          <span  x-cloak>Tasks</span>
        </a>

      </li>
      <!-- adding dummy data for checking the scrolls of sidebar -->
      <hr class="border-t border-black" x-show="sidebarOpen" x-cloak />
      <li x-show="sidebarOpen || !sidebarOpen" class="group">
        <a href="#"
          class="flex items-center space-x-2 py-2 px-4 rounded-md text-black hover:bg-sky-300 transition-colors duration-300">
          <!-- Icon -->
          <!-- <span>🏠</span> -->
          <!-- Text -->
          <span  x-cloak>Tasks</span>
        </a>

      </li>
      <!-- adding dummy data for checking the scrolls of sidebar -->
      <hr class="border-t border-black"  x-cloak />
      <li x-show="sidebarOpen || !sidebarOpen" class="group">
        <a href="#"
          class="flex items-center space-x-2 py-2 px-4 rounded-md text-black hover:bg-sky-300 transition-colors duration-300">
          <!-- Icon -->
          <!-- <span>🏠</span> -->
          <!-- Text -->
          <span  x-cloak>Tasks</span>
        </a>

      </li>
      <hr class="border-t border-black"  x-cloak />
      <li x-show="sidebarOpen || !sidebarOpen" class="group">
        <a href="#"
          class="flex items-center space-x-2 py-2 px-4 rounded-md text-black hover:bg-sky-300 transition-colors duration-300">
          <!-- Icon -->
          <!-- <span>🏠</span> -->
          <!-- Text -->
          <span  x-cloak>Tasks</span>
        </a>

      </li>
      <hr class="border-t border-black"  x-cloak />
      <li x-show="sidebarOpen || !sidebarOpen" class="group">
        <a href="#"
          class="flex items-center space-x-2 py-2 px-4 rounded-md text-black hover:bg-sky-300 transition-colors duration-300">
          <!-- Icon -->
          <!-- <span>🏠</span> -->
          <!-- Text -->
          <span  x-cloak>Tasks</span>
        </a>

      </li>
      <hr class="border-t border-black"  x-cloak />
      <li x-show="sidebarOpen || !sidebarOpen" class="group">
        <a href="#"
          class="flex items-center space-x-2 py-2 px-4 rounded-md text-black hover:bg-sky-300 transition-colors duration-300">
          <!-- Icon -->
          <!-- <span>🏠</span> -->
          <!-- Text -->
          <span  x-cloak>Tasks</span>
        </a>

      </li>
      <hr class="border-t border-black"  x-cloak />
      <li x-show="sidebarOpen || !sidebarOpen" class="group">
        <a href="#"
          class="flex items-center space-x-2 py-2 px-4 rounded-md text-black hover:bg-sky-300 transition-colors duration-300">
          <!-- Icon -->
          <!-- <span>🏠</span> -->
          <!-- Text -->
          <span  x-cloak>Tasks</span>
        </a>

      </li>
      <hr class="border-t border-black"  x-cloak />

      <!-- adding dummy data for checking the scrolls of sidebar -->
    </ul>
    <!-- Sidebar Footer -->
    <div class="mt-auto py-4 px-2 bg-mint-green-400 rounded-lg shadow-sm"  x-cloak>
      <!-- User Profile -->
      <div class="flex items-center space-x-3">
        <!-- Profile Picture -->
        <img class="h-10 w-10 rounded-full object-cover"
          src="profile-icon.png"
          alt="User Name">
        <!-- User Name -->
        <span class="text-black ">User Name</span>
      </div>
      <div class="hidden md:flex flex-wrap justify-end font-normal gap-2">
        <a href="#" class="rounded-full bg-white shadow-md px-2 py-1 text-black">Tag 1</a>
        <a href="#" class="rounded-full bg-white shadow-md px-2 py-1 text-black">Tag 2</a>
        <a href="#" class="rounded-full bg-white shadow-md px-2 py-1 text-black">Tag 1</a>

        <!-- Add more tags as needed -->
      </div>
      <hr class=" mt-2 border-t border-black" x-show="sidebarOpen" x-cloak />
      <!-- Logout Button -->
      <button
        class="mt-1 w-full bg-blue-600 text-black py-2 px-4 rounded hover:bg-sky-300 focus:outline-none focus:bg-sky-300 transition-colors duration-300">
        Logout
      </button>
    </div>

  </aside>
  <!-- Sidebar -->

</body>

</html>