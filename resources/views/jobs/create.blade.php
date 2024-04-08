<x-layout>
    <x-slot:heading>
        Create Job
    </x-slot:heading>
    <!--
  This example requires some changes to your config:

  ```
  // tailwind.config.js
  module.exports = {
    // ...
    plugins: [
      // ...
      require('@tailwindcss/forms'),
    ],
  }
  ```
-->
    <form method="POST" action="/jobs">
        @csrf
        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">
                <h2 class="text-base font-semibold leading-7 text-gray-900">Create a new job</h2>

                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="sm:col-span-4">
                        <label for="title" class="block text-sm font-medium leading-6 text-gray-900">Title</label>
                        <div class="mt-2">
                            <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                                <input type="text" name="title" id="title" class="block flex-1 border-0 bg-transparent py-1.5 px-3 pl-3 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" placeholder="Enter job title..." required>
                            </div>
                            @error('title')
                            <div class="text-sm text-red-500 mt-2 italic">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="sm:col-span-4">
                        <label for="salary" class="block text-sm font-medium leading-6 text-gray-900">Salary</label>
                        <div class="mt-2">
                            <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                                <input type="number" name="salary" id="salary" class="block flex-1 border-0 bg-transparent py-1.5 px-3 px-3 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" placeholder="Enter job salary..." required>
                            </div>
                            @error('salary')
                                <div class="text-sm text-red-500 mt-2 italic">{{ $message }}</div>
                            @enderror
                            <div class="py-4">
                                <label for="currency" class="block text-sm font-medium leading-6 text-gray-900 py-3">
                                    Currency
                                </label>
                                <select name="currency" id="currency" class="outline-none border border-gray-300 rounded-md px-2 py-1">
                                    <option value="USD">USD</option>
                                    <option value="EUR">EUR</option>
                                    <option value="RON">RON</option>
                                </select>
                            </div>

                        </div>
                    </div>
                    {{--<div>
                        @if($errors->any())
                            <ul>
                                @foreach($errors->all() as $error)
                                    <strong>
                                        <li class="text-red-500 italic">{{ $error }}</li>
                                    </strong>
                                @endforeach
                            </ul>
                        @endif
                    </div>--}}
                </div>
            </div>


        </div>


        <div class="mt-6 flex items-center justify-end gap-x-6">
            <button type="button" class="text-sm font-semibold leading-6 text-gray-900">Cancel</button>
            <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
        </div>
    </form>

</x-layout>
