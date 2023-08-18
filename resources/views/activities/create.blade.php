<x-app-layout>
    <x-slot name="header">
        <div class="container flex justify-between">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight m-2">
                {{ __('Create Activity') }}
            </h2>
            <a class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded float-left" href="{{route('dashboard')}}">Go
                Back</a>
        </div>


    </x-slot>

    <div class="py-12">

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg flex flex-center">

                <form action="{{route('activities.store')}}"  method="POST" class="w-full max-w-lg p-4" id="add-activity-form">

                    @csrf
                    
                    <div class="container w-2/4 ">

                        <div>
                            <div>
                                <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Title</label>
                                <input type="text" name="title" id="title" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Title" required>
                            </div>
                        </div>
                    </div>
                    <div class="container">

                        <div>
                            <div>
                                <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description</label>
                                <input type="text" name="description" id="description" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Description" required>
                            </div>
                        </div>
                        
                    </div>
                    <div class="container">
                       
                        <div class="flex">
                           
                            <div>
                                <label for="schedule" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Time</label>

                                    <input type="time" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" name="schedule" id="schedule">
                            
                                    <input type="hidden" id="status" name="status" value="not done">
                            </div>
                        </div>
                        
                    </div>

                    <div class="container">
                        <input class="text-white mt-4 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="submit" value="Save Activity" >
                    </div>
                
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
