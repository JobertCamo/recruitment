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
    <div class="bg-white px-5 py-4 rounded-md flex justify-between items-center shadow-[rgba(17,_17,_26,_0.1)_0px_0px_16px]">
      <div class="space-y-1">
        <div class="text-2xl">Post a Job</div>
        <p class="text-sm text-gray-400">Add a job to post in public</p>
      </div>
      <a href="" >View Post</a>
    </div>
    <div class="bg-white    shadow-[rgba(17,_17,_26,_0.1)_0px_0px_16px]">
      <div class="bg-white z-10 px-5 py-3 border-b-[1px] border-gray-400/20 flex justify-between items-center sticky top-0">
        <div class="bg-green-300 py-1 px-2 rounded-full text-sm text-green-700">Published Job</div>
        <x-button label="Post" />
      </div>
      <div class="grid md:grid-cols-3 gap-7 w-auto px-5 py-4 max-h-[780px] overflow-auto">
        <div class="z-0 bg-white space-y-7 relative rounded-md py-4 px-4 h-64 shadow-[rgba(0,_0,_0,_0.24)_0px_3px_8px]">
          <div class="flex justify-between items-center flex-col md:flex-row">
              <div class="flex gap-2">
                  <x-avatar lg rounded="md" src="https://img.stablecog.com/insecure/1024w/aHR0cHM6Ly9iLnN0YWJsZWNvZy5jb20vNmYwNjdmZGUtNDAyMy00OTBiLTllODEtYTlkYjhlZmE3MmI4LmpwZWc.webp" />
                  <div>
                      <div class="font-bold"><a wire:navigate href="/a">Senior Software Developer</a></div>
                      <ul class="flex gap-2 text-[12px] ">
                          <li>WFH</li>
                          <li>•</li>
                          <li>Full-Time</li>
                          <li>•</li>
                          <li>40,000 PHP - 50,000 PHP</li>
                      </ul>
                  </div>
              </div>
              <div class="text-end absolute bottom-0 left-0 px-3 py-3 flex justify-between w-full ">
                  <div class="flex items-center gap-1 font-bold"><x-icon solid color="red" name="map-pin" /> Quezon City</div>
                  <p class="text-sm text-gray-400"><x-mini-button black rounded icon="pencil" /></p>
              </div>
          </div>
          <div class="text-wrap text-gray-500 w-auto ">
              <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Delectus iure tempore quod itaque ipsam,
                  molestias esse obcaecati expedita quibusdam..</p>
          </div>
        </div>
        <div class="z-0 bg-white space-y-7 relative rounded-md py-4 px-4 h-64 shadow-[rgba(0,_0,_0,_0.24)_0px_3px_8px]">
          <div class="flex justify-between items-center flex-col md:flex-row">
              <div class="flex gap-2">
                  <x-avatar lg rounded="md" src="https://img.stablecog.com/insecure/1024w/aHR0cHM6Ly9iLnN0YWJsZWNvZy5jb20vNmYwNjdmZGUtNDAyMy00OTBiLTllODEtYTlkYjhlZmE3MmI4LmpwZWc.webp" />
                  <div>
                      <div class="font-bold"><a wire:navigate href="/a">Senior Software Developer</a></div>
                      <ul class="flex gap-2 text-[12px] ">
                          <li>WFH</li>
                          <li>•</li>
                          <li>Full-Time</li>
                          <li>•</li>
                          <li>40,000 PHP - 50,000 PHP</li>
                      </ul>
                  </div>
              </div>
              <div class="text-end absolute bottom-0 left-0 px-3 py-3 flex justify-between w-full ">
                  <div class="flex items-center gap-1 font-bold"><x-icon solid color="red" name="map-pin" /> Quezon City</div>
                  <p class="text-sm text-gray-400"><x-mini-button black rounded icon="pencil" /></p>
              </div>
          </div>
          <div class="text-wrap text-gray-500 w-auto ">
              <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Delectus iure tempore quod itaque ipsam,
                  molestias esse obcaecati expedita quibusdam..</p>
          </div>
        </div>
        <div class="z-0 bg-white space-y-7 relative rounded-md py-4 px-4 h-64 shadow-[rgba(0,_0,_0,_0.24)_0px_3px_8px]">
          <div class="flex justify-between items-center flex-col md:flex-row">
              <div class="flex gap-2">
                  <x-avatar lg rounded="md" src="https://img.stablecog.com/insecure/1024w/aHR0cHM6Ly9iLnN0YWJsZWNvZy5jb20vNmYwNjdmZGUtNDAyMy00OTBiLTllODEtYTlkYjhlZmE3MmI4LmpwZWc.webp" />
                  <div>
                      <div class="font-bold"><a wire:navigate href="/a">Senior Software Developer</a></div>
                      <ul class="flex gap-2 text-[12px] ">
                          <li>WFH</li>
                          <li>•</li>
                          <li>Full-Time</li>
                          <li>•</li>
                          <li>40,000 PHP - 50,000 PHP</li>
                      </ul>
                  </div>
              </div>
              <div class="text-end absolute bottom-0 left-0 px-3 py-3 flex justify-between w-full ">
                  <div class="flex items-center gap-1 font-bold"><x-icon solid color="red" name="map-pin" /> Quezon City</div>
                  <p class="text-sm text-gray-400"><x-mini-button black rounded icon="pencil" /></p>
              </div>
          </div>
          <div class="text-wrap text-gray-500 w-auto ">
              <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Delectus iure tempore quod itaque ipsam,
                  molestias esse obcaecati expedita quibusdam..</p>
          </div>
        </div>
        <div class="z-0 bg-white space-y-7 relative rounded-md py-4 px-4 h-64 shadow-[rgba(0,_0,_0,_0.24)_0px_3px_8px]">
          <div class="flex justify-between items-center flex-col md:flex-row">
              <div class="flex gap-2">
                  <x-avatar lg rounded="md" src="https://img.stablecog.com/insecure/1024w/aHR0cHM6Ly9iLnN0YWJsZWNvZy5jb20vNmYwNjdmZGUtNDAyMy00OTBiLTllODEtYTlkYjhlZmE3MmI4LmpwZWc.webp" />
                  <div>
                      <div class="font-bold"><a wire:navigate href="/a">Senior Software Developer</a></div>
                      <ul class="flex gap-2 text-[12px] ">
                          <li>WFH</li>
                          <li>•</li>
                          <li>Full-Time</li>
                          <li>•</li>
                          <li>40,000 PHP - 50,000 PHP</li>
                      </ul>
                  </div>
              </div>
              <div class="text-end absolute bottom-0 left-0 px-3 py-3 flex justify-between w-full ">
                  <div class="flex items-center gap-1 font-bold"><x-icon solid color="red" name="map-pin" /> Quezon City</div>
                  <p class="text-sm text-gray-400"><x-mini-button black rounded icon="pencil" /></p>
              </div>
          </div>
          <div class="text-wrap text-gray-500 w-auto ">
              <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Delectus iure tempore quod itaque ipsam,
                  molestias esse obcaecati expedita quibusdam..</p>
          </div>
        </div>
        <div class="z-0 bg-white space-y-7 relative rounded-md py-4 px-4 h-64 shadow-[rgba(0,_0,_0,_0.24)_0px_3px_8px]">
          <div class="flex justify-between items-center flex-col md:flex-row">
              <div class="flex gap-2">
                  <x-avatar lg rounded="md" src="https://img.stablecog.com/insecure/1024w/aHR0cHM6Ly9iLnN0YWJsZWNvZy5jb20vNmYwNjdmZGUtNDAyMy00OTBiLTllODEtYTlkYjhlZmE3MmI4LmpwZWc.webp" />
                  <div>
                      <div class="font-bold"><a wire:navigate href="/a">Senior Software Developer</a></div>
                      <ul class="flex gap-2 text-[12px] ">
                          <li>WFH</li>
                          <li>•</li>
                          <li>Full-Time</li>
                          <li>•</li>
                          <li>40,000 PHP - 50,000 PHP</li>
                      </ul>
                  </div>
              </div>
              <div class="text-end absolute bottom-0 left-0 px-3 py-3 flex justify-between w-full ">
                  <div class="flex items-center gap-1 font-bold"><x-icon solid color="red" name="map-pin" /> Quezon City</div>
                  <p class="text-sm text-gray-400"><x-mini-button black rounded icon="pencil" /></p>
              </div>
          </div>
          <div class="text-wrap text-gray-500 w-auto ">
              <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Delectus iure tempore quod itaque ipsam,
                  molestias esse obcaecati expedita quibusdam..</p>
          </div>
        </div>
        <div class="z-0 bg-white space-y-7 relative rounded-md py-4 px-4 h-64 shadow-[rgba(0,_0,_0,_0.24)_0px_3px_8px]">
          <div class="flex justify-between items-center flex-col md:flex-row">
              <div class="flex gap-2">
                  <x-avatar lg rounded="md" src="https://img.stablecog.com/insecure/1024w/aHR0cHM6Ly9iLnN0YWJsZWNvZy5jb20vNmYwNjdmZGUtNDAyMy00OTBiLTllODEtYTlkYjhlZmE3MmI4LmpwZWc.webp" />
                  <div>
                      <div class="font-bold"><a wire:navigate href="/a">Senior Software Developer</a></div>
                      <ul class="flex gap-2 text-[12px] ">
                          <li>WFH</li>
                          <li>•</li>
                          <li>Full-Time</li>
                          <li>•</li>
                          <li>40,000 PHP - 50,000 PHP</li>
                      </ul>
                  </div>
              </div>
              <div class="text-end absolute bottom-0 left-0 px-3 py-3 flex justify-between w-full ">
                  <div class="flex items-center gap-1 font-bold"><x-icon solid color="red" name="map-pin" /> Quezon City</div>
                  <p class="text-sm text-gray-400"><x-mini-button black rounded icon="pencil" /></p>
              </div>
          </div>
          <div class="text-wrap text-gray-500 w-auto ">
              <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Delectus iure tempore quod itaque ipsam,
                  molestias esse obcaecati expedita quibusdam..</p>
          </div>
        </div>
        <div class="z-0 bg-white space-y-7 relative rounded-md py-4 px-4 h-64 shadow-[rgba(0,_0,_0,_0.24)_0px_3px_8px]">
          <div class="flex justify-between items-center flex-col md:flex-row">
              <div class="flex gap-2">
                  <x-avatar lg rounded="md" src="https://img.stablecog.com/insecure/1024w/aHR0cHM6Ly9iLnN0YWJsZWNvZy5jb20vNmYwNjdmZGUtNDAyMy00OTBiLTllODEtYTlkYjhlZmE3MmI4LmpwZWc.webp" />
                  <div>
                      <div class="font-bold"><a wire:navigate href="/a">Senior Software Developer</a></div>
                      <ul class="flex gap-2 text-[12px] ">
                          <li>WFH</li>
                          <li>•</li>
                          <li>Full-Time</li>
                          <li>•</li>
                          <li>40,000 PHP - 50,000 PHP</li>
                      </ul>
                  </div>
              </div>
              <div class="text-end absolute bottom-0 left-0 px-3 py-3 flex justify-between w-full ">
                  <div class="flex items-center gap-1 font-bold"><x-icon solid color="red" name="map-pin" /> Quezon City</div>
                  <p class="text-sm text-gray-400"><x-mini-button black rounded icon="pencil" /></p>
              </div>
          </div>
          <div class="text-wrap text-gray-500 w-auto ">
              <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Delectus iure tempore quod itaque ipsam,
                  molestias esse obcaecati expedita quibusdam..</p>
          </div>
        </div>
        <div class="z-0 bg-white space-y-7 relative rounded-md py-4 px-4 h-64 shadow-[rgba(0,_0,_0,_0.24)_0px_3px_8px]">
          <div class="flex justify-between items-center flex-col md:flex-row">
              <div class="flex gap-2">
                  <x-avatar lg rounded="md" src="https://img.stablecog.com/insecure/1024w/aHR0cHM6Ly9iLnN0YWJsZWNvZy5jb20vNmYwNjdmZGUtNDAyMy00OTBiLTllODEtYTlkYjhlZmE3MmI4LmpwZWc.webp" />
                  <div>
                      <div class="font-bold"><a wire:navigate href="/a">Senior Software Developer</a></div>
                      <ul class="flex gap-2 text-[12px] ">
                          <li>WFH</li>
                          <li>•</li>
                          <li>Full-Time</li>
                          <li>•</li>
                          <li>40,000 PHP - 50,000 PHP</li>
                      </ul>
                  </div>
              </div>
              <div class="text-end absolute bottom-0 left-0 px-3 py-3 flex justify-between w-full ">
                  <div class="flex items-center gap-1 font-bold"><x-icon solid color="red" name="map-pin" /> Quezon City</div>
                  <p class="text-sm text-gray-400"><x-mini-button black rounded icon="pencil" /></p>
              </div>
          </div>
          <div class="text-wrap text-gray-500 w-auto ">
              <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Delectus iure tempore quod itaque ipsam,
                  molestias esse obcaecati expedita quibusdam..</p>
          </div>
        </div>
        <div class="z-0 bg-white space-y-7 relative rounded-md py-4 px-4 h-64 shadow-[rgba(0,_0,_0,_0.24)_0px_3px_8px]">
          <div class="flex justify-between items-center flex-col md:flex-row">
              <div class="flex gap-2">
                  <x-avatar lg rounded="md" src="https://img.stablecog.com/insecure/1024w/aHR0cHM6Ly9iLnN0YWJsZWNvZy5jb20vNmYwNjdmZGUtNDAyMy00OTBiLTllODEtYTlkYjhlZmE3MmI4LmpwZWc.webp" />
                  <div>
                      <div class="font-bold"><a wire:navigate href="/a">Senior Software Developer</a></div>
                      <ul class="flex gap-2 text-[12px] ">
                          <li>WFH</li>
                          <li>•</li>
                          <li>Full-Time</li>
                          <li>•</li>
                          <li>40,000 PHP - 50,000 PHP</li>
                      </ul>
                  </div>
              </div>
              <div class="text-end absolute bottom-0 left-0 px-3 py-3 flex justify-between w-full ">
                  <div class="flex items-center gap-1 font-bold"><x-icon solid color="red" name="map-pin" /> Quezon City</div>
                  <p class="text-sm text-gray-400"><x-mini-button black rounded icon="pencil" /></p>
              </div>
          </div>
          <div class="text-wrap text-gray-500 w-auto ">
              <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Delectus iure tempore quod itaque ipsam,
                  molestias esse obcaecati expedita quibusdam..</p>
          </div>
        </div>
        <div class="z-0 bg-white space-y-7 relative rounded-md py-4 px-4 h-64 shadow-[rgba(0,_0,_0,_0.24)_0px_3px_8px]">
          <div class="flex justify-between items-center flex-col md:flex-row">
              <div class="flex gap-2">
                  <x-avatar lg rounded="md" src="https://img.stablecog.com/insecure/1024w/aHR0cHM6Ly9iLnN0YWJsZWNvZy5jb20vNmYwNjdmZGUtNDAyMy00OTBiLTllODEtYTlkYjhlZmE3MmI4LmpwZWc.webp" />
                  <div>
                      <div class="font-bold"><a wire:navigate href="/a">Senior Software Developer</a></div>
                      <ul class="flex gap-2 text-[12px] ">
                          <li>WFH</li>
                          <li>•</li>
                          <li>Full-Time</li>
                          <li>•</li>
                          <li>40,000 PHP - 50,000 PHP</li>
                      </ul>
                  </div>
              </div>
              <div class="text-end absolute bottom-0 left-0 px-3 py-3 flex justify-between w-full ">
                  <div class="flex items-center gap-1 font-bold"><x-icon solid color="red" name="map-pin" /> Quezon City</div>
                  <p class="text-sm text-gray-400"><x-mini-button black rounded icon="pencil" /></p>
              </div>
          </div>
          <div class="text-wrap text-gray-500 w-auto ">
              <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Delectus iure tempore quod itaque ipsam,
                  molestias esse obcaecati expedita quibusdam..</p>
          </div>
        </div>
        <div class="z-0 bg-white space-y-7 relative rounded-md py-4 px-4 h-64 shadow-[rgba(0,_0,_0,_0.24)_0px_3px_8px]">
          <div class="flex justify-between items-center flex-col md:flex-row">
              <div class="flex gap-2">
                  <x-avatar lg rounded="md" src="https://img.stablecog.com/insecure/1024w/aHR0cHM6Ly9iLnN0YWJsZWNvZy5jb20vNmYwNjdmZGUtNDAyMy00OTBiLTllODEtYTlkYjhlZmE3MmI4LmpwZWc.webp" />
                  <div>
                      <div class="font-bold"><a wire:navigate href="/a">Senior Software Developer</a></div>
                      <ul class="flex gap-2 text-[12px] ">
                          <li>WFH</li>
                          <li>•</li>
                          <li>Full-Time</li>
                          <li>•</li>
                          <li>40,000 PHP - 50,000 PHP</li>
                      </ul>
                  </div>
              </div>
              <div class="text-end absolute bottom-0 left-0 px-3 py-3 flex justify-between w-full ">
                  <div class="flex items-center gap-1 font-bold"><x-icon solid color="red" name="map-pin" /> Quezon City</div>
                  <p class="text-sm text-gray-400"><x-mini-button black rounded icon="pencil" /></p>
              </div>
          </div>
          <div class="text-wrap text-gray-500 w-auto ">
              <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Delectus iure tempore quod itaque ipsam,
                  molestias esse obcaecati expedita quibusdam..</p>
          </div>
        </div>
        <div class="z-0 bg-white space-y-7 relative rounded-md py-4 px-4 h-64 shadow-[rgba(0,_0,_0,_0.24)_0px_3px_8px]">
          <div class="flex justify-between items-center flex-col md:flex-row">
              <div class="flex gap-2">
                  <x-avatar lg rounded="md" src="https://img.stablecog.com/insecure/1024w/aHR0cHM6Ly9iLnN0YWJsZWNvZy5jb20vNmYwNjdmZGUtNDAyMy00OTBiLTllODEtYTlkYjhlZmE3MmI4LmpwZWc.webp" />
                  <div>
                      <div class="font-bold"><a wire:navigate href="/a">Senior Software Developer</a></div>
                      <ul class="flex gap-2 text-[12px] ">
                          <li>WFH</li>
                          <li>•</li>
                          <li>Full-Time</li>
                          <li>•</li>
                          <li>40,000 PHP - 50,000 PHP</li>
                      </ul>
                  </div>
              </div>
              <div class="text-end absolute bottom-0 left-0 px-3 py-3 flex justify-between w-full ">
                  <div class="flex items-center gap-1 font-bold"><x-icon solid color="red" name="map-pin" /> Quezon City</div>
                  <p class="text-sm text-gray-400"><x-mini-button black rounded icon="pencil" /></p>
              </div>
          </div>
          <div class="text-wrap text-gray-500 w-auto ">
              <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Delectus iure tempore quod itaque ipsam,
                  molestias esse obcaecati expedita quibusdam..</p>
          </div>
        </div>
        <div class="z-0 bg-white space-y-7 relative rounded-md py-4 px-4 h-64 shadow-[rgba(0,_0,_0,_0.24)_0px_3px_8px]">
          <div class="flex justify-between items-center flex-col md:flex-row">
              <div class="flex gap-2">
                  <x-avatar lg rounded="md" src="https://img.stablecog.com/insecure/1024w/aHR0cHM6Ly9iLnN0YWJsZWNvZy5jb20vNmYwNjdmZGUtNDAyMy00OTBiLTllODEtYTlkYjhlZmE3MmI4LmpwZWc.webp" />
                  <div>
                      <div class="font-bold"><a wire:navigate href="/a">Senior Software Developer</a></div>
                      <ul class="flex gap-2 text-[12px] ">
                          <li>WFH</li>
                          <li>•</li>
                          <li>Full-Time</li>
                          <li>•</li>
                          <li>40,000 PHP - 50,000 PHP</li>
                      </ul>
                  </div>
              </div>
              <div class="text-end absolute bottom-0 left-0 px-3 py-3 flex justify-between w-full ">
                  <div class="flex items-center gap-1 font-bold"><x-icon solid color="red" name="map-pin" /> Quezon City</div>
                  <p class="text-sm text-gray-400"><x-mini-button black rounded icon="pencil" /></p>
              </div>
          </div>
          <div class="text-wrap text-gray-500 w-auto ">
              <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Delectus iure tempore quod itaque ipsam,
                  molestias esse obcaecati expedita quibusdam..</p>
          </div>
        </div>
        <div class="z-0 bg-white space-y-7 relative rounded-md py-4 px-4 h-64 shadow-[rgba(0,_0,_0,_0.24)_0px_3px_8px]">
          <div class="flex justify-between items-center flex-col md:flex-row">
              <div class="flex gap-2">
                  <x-avatar lg rounded="md" src="https://img.stablecog.com/insecure/1024w/aHR0cHM6Ly9iLnN0YWJsZWNvZy5jb20vNmYwNjdmZGUtNDAyMy00OTBiLTllODEtYTlkYjhlZmE3MmI4LmpwZWc.webp" />
                  <div>
                      <div class="font-bold"><a wire:navigate href="/a">Senior Software Developer</a></div>
                      <ul class="flex gap-2 text-[12px] ">
                          <li>WFH</li>
                          <li>•</li>
                          <li>Full-Time</li>
                          <li>•</li>
                          <li>40,000 PHP - 50,000 PHP</li>
                      </ul>
                  </div>
              </div>
              <div class="text-end absolute bottom-0 left-0 px-3 py-3 flex justify-between w-full ">
                  <div class="flex items-center gap-1 font-bold"><x-icon solid color="red" name="map-pin" /> Quezon City</div>
                  <p class="text-sm text-gray-400"><x-mini-button black rounded icon="pencil" /></p>
              </div>
          </div>
          <div class="text-wrap text-gray-500 w-auto ">
              <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Delectus iure tempore quod itaque ipsam,
                  molestias esse obcaecati expedita quibusdam..</p>
          </div>
        </div>
        <div class="z-0 bg-white space-y-7 relative rounded-md py-4 px-4 h-64 shadow-[rgba(0,_0,_0,_0.24)_0px_3px_8px]">
          <div class="flex justify-between items-center flex-col md:flex-row">
              <div class="flex gap-2">
                  <x-avatar lg rounded="md" src="https://img.stablecog.com/insecure/1024w/aHR0cHM6Ly9iLnN0YWJsZWNvZy5jb20vNmYwNjdmZGUtNDAyMy00OTBiLTllODEtYTlkYjhlZmE3MmI4LmpwZWc.webp" />
                  <div>
                      <div class="font-bold"><a wire:navigate href="/a">Senior Software Developer</a></div>
                      <ul class="flex gap-2 text-[12px] ">
                          <li>WFH</li>
                          <li>•</li>
                          <li>Full-Time</li>
                          <li>•</li>
                          <li>40,000 PHP - 50,000 PHP</li>
                      </ul>
                  </div>
              </div>
              <div class="text-end absolute bottom-0 left-0 px-3 py-3 flex justify-between w-full ">
                  <div class="flex items-center gap-1 font-bold"><x-icon solid color="red" name="map-pin" /> Quezon City</div>
                  <p class="text-sm text-gray-400"><x-mini-button black rounded icon="pencil" /></p>
              </div>
          </div>
          <div class="text-wrap text-gray-500 w-auto ">
              <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Delectus iure tempore quod itaque ipsam,
                  molestias esse obcaecati expedita quibusdam..</p>
          </div>
        </div>
        <div class="z-0 bg-white space-y-7 relative rounded-md py-4 px-4 h-64 shadow-[rgba(0,_0,_0,_0.24)_0px_3px_8px]">
          <div class="flex justify-between items-center flex-col md:flex-row">
              <div class="flex gap-2">
                  <x-avatar lg rounded="md" src="https://img.stablecog.com/insecure/1024w/aHR0cHM6Ly9iLnN0YWJsZWNvZy5jb20vNmYwNjdmZGUtNDAyMy00OTBiLTllODEtYTlkYjhlZmE3MmI4LmpwZWc.webp" />
                  <div>
                      <div class="font-bold"><a wire:navigate href="/a">Senior Software Developer</a></div>
                      <ul class="flex gap-2 text-[12px] ">
                          <li>WFH</li>
                          <li>•</li>
                          <li>Full-Time</li>
                          <li>•</li>
                          <li>40,000 PHP - 50,000 PHP</li>
                      </ul>
                  </div>
              </div>
              <div class="text-end absolute bottom-0 left-0 px-3 py-3 flex justify-between w-full ">
                  <div class="flex items-center gap-1 font-bold"><x-icon solid color="red" name="map-pin" /> Quezon City</div>
                  <p class="text-sm text-gray-400"><x-mini-button black rounded icon="pencil" /></p>
              </div>
          </div>
          <div class="text-wrap text-gray-500 w-auto ">
              <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Delectus iure tempore quod itaque ipsam,
                  molestias esse obcaecati expedita quibusdam..</p>
          </div>
        </div>
        <div class="z-0 bg-white space-y-7 relative rounded-md py-4 px-4 h-64 shadow-[rgba(0,_0,_0,_0.24)_0px_3px_8px]">
          <div class="flex justify-between items-center flex-col md:flex-row">
              <div class="flex gap-2">
                  <x-avatar lg rounded="md" src="https://img.stablecog.com/insecure/1024w/aHR0cHM6Ly9iLnN0YWJsZWNvZy5jb20vNmYwNjdmZGUtNDAyMy00OTBiLTllODEtYTlkYjhlZmE3MmI4LmpwZWc.webp" />
                  <div>
                      <div class="font-bold"><a wire:navigate href="/a">Senior Software Developer</a></div>
                      <ul class="flex gap-2 text-[12px] ">
                          <li>WFH</li>
                          <li>•</li>
                          <li>Full-Time</li>
                          <li>•</li>
                          <li>40,000 PHP - 50,000 PHP</li>
                      </ul>
                  </div>
              </div>
              <div class="text-end absolute bottom-0 left-0 px-3 py-3 flex justify-between w-full ">
                  <div class="flex items-center gap-1 font-bold"><x-icon solid color="red" name="map-pin" /> Quezon City</div>
                  <p class="text-sm text-gray-400"><x-mini-button black rounded icon="pencil" /></p>
              </div>
          </div>
          <div class="text-wrap text-gray-500 w-auto ">
              <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Delectus iure tempore quod itaque ipsam,
                  molestias esse obcaecati expedita quibusdam..</p>
          </div>
        </div>
        <div class="z-0 bg-white space-y-7 relative rounded-md py-4 px-4 h-64 shadow-[rgba(0,_0,_0,_0.24)_0px_3px_8px]">
          <div class="flex justify-between items-center flex-col md:flex-row">
              <div class="flex gap-2">
                  <x-avatar lg rounded="md" src="https://img.stablecog.com/insecure/1024w/aHR0cHM6Ly9iLnN0YWJsZWNvZy5jb20vNmYwNjdmZGUtNDAyMy00OTBiLTllODEtYTlkYjhlZmE3MmI4LmpwZWc.webp" />
                  <div>
                      <div class="font-bold"><a wire:navigate href="/a">Senior Software Developer</a></div>
                      <ul class="flex gap-2 text-[12px] ">
                          <li>WFH</li>
                          <li>•</li>
                          <li>Full-Time</li>
                          <li>•</li>
                          <li>40,000 PHP - 50,000 PHP</li>
                      </ul>
                  </div>
              </div>
              <div class="text-end absolute bottom-0 left-0 px-3 py-3 flex justify-between w-full ">
                  <div class="flex items-center gap-1 font-bold"><x-icon solid color="red" name="map-pin" /> Quezon City</div>
                  <p class="text-sm text-gray-400"><x-mini-button black rounded icon="pencil" /></p>
              </div>
          </div>
          <div class="text-wrap text-gray-500 w-auto ">
              <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Delectus iure tempore quod itaque ipsam,
                  molestias esse obcaecati expedita quibusdam..</p>
          </div>
        </div>
        
      </div>
    </div>
    
</x-layouts.layout>