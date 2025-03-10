<x-layout>
    <x-slot:heading>CREATE JOB</x-slot:heading>
    <form method="POST" action="/jobs">
      @csrf
       
        <div class="space-y-12">
          <div class="border-b border-gray-900/10 pb-12">
            <h2 class="text-base/7 font-semibold text-gray-900">Form to create a job</h2>
            <p class="mt-1 text-sm/6 text-gray-600">We just need a handful of details from  you.</p>
      
            <div class="sm:col-span-4 mt-5">
              <label for="title" class="block text-sm font-medium text-gray-900">Title</label>
              <div class="mt-2">
                  <div class="flex items-center rounded-md bg-white outline-1 outline-gray-300">
                      <input type="text" name="title" id="title" 
                             class="block min-w-0 grow py-1.5 px-1 pr-3 text-base text-gray-900 
                                    placeholder:text-gray-400 focus:outline-indigo-600 sm:text-sm/6">
                  </div>
              </div>
          </div>
          
              <div class="sm:col-span-4">
                <label for="salary" class="block text-sm font-medium mt-4 text-gray-900">Salary</label>
                <div class="mt-2">
                    <div class="flex items-center rounded-md bg-white outline-1 outline-gray-300">
                        <input type="text" name="salary" id="salary" 
                               class="block min-w-0 grow py-1.5 px-1 pr-3 text-base text-gray-900 
                                      placeholder:text-gray-400 focus:outline-indigo-600 sm:text-sm/6">
                    </div>
                </div>
            </div>
            
            </div>
          </div>
        </div>
      
        <div class="mt-6 flex items-center justify-end gap-x-6">
          <button type="button" class="text-sm/6 font-semibold text-gray-900">Cancel</button>
          <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
        </div>
      </form>      
</x-layout> 