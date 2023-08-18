<x-app-layout>
    <x-slot name="header">
        <div class="container flex justify-between">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight m-2">
                {{ __('Dashboard') }}
            </h2>
            <a class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded float-left" href="{{route('activities.create')}}">Add
                Activity</a>
        </div>


    </x-slot>

    <div class="py-12">

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">

                <div>
                    @if($errors->any())
        
                    <ul>
                        @foreach($errors->all() as $error)
                        <li>
                            {{$error}}
                        </li>
                        @endforeach
                    </ul>@endif
                </div>

                <table class="table-fixed">
                    <thead>
                        <tr>
                            <th class="w-1/4 px-4 py-2">Title</th>
                            <th class="w-1/2 px-4 py-2">Description</th>
                            <th class="w-1/8 px-4 py-2">Time</th>
                            <th class="w-1/4 px-4 py-2">Action</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($activities as $activity)
                            
                     
                        <tr>
                            <td class="border px-4 py-2">{{$activity->title}}</td>
                            <td class="border px-4 py-2">{{$activity->description}}</td>
                            <td class="border px-4 py-2">{{$activity->schedule}}</td>
                            <td class="border px-4 py-2 flex justify-around ">
                                <a class="bg-green-500 hover:bg-green-700 text-white font-semibold p-2 rounded "
                                    href="{{route('activities.mark', ['id' => $activity->id])}}">Done</a>
                                <a class="bg-blue-500 hover:bg-blue-700 text-white font-semibold p-2 rounded"
                                href="{{route('activities.remove', ['activity' => $activity])}}">Remove</a>

                            </td>

                        </tr>
                        @endforeach
                    </tbody>
                </table>



            </div>
        </div>
    </div>
</x-app-layout>
