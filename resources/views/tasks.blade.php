<x-layout>

    <x-slot:title>My Tasks</x-slot:title>

    <x-slot:content>

        @if (count($tasks) > 0)

        @foreach ($tasks as $task)
        <div class="p-2 m-2 w-full bg-white border border-gray-200 rounded-lg shadow">
            <div class="grid grid-cols-6">
                <div class="col-span-5 flex items-center">
                    <div>
                        <h5>{{ $task->name }}</h5>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{ $task->description }}</p>
                    </div>
                </div>
                <div class="flex items-center">

                    <!-- complete button -->
                    <div class="mr-1">
                        <form name="task_complete" action="{{ route( 'task.complete', ['id' => $task->id] ) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <button class="items-center px-3 py-2 text-sm font-medium text-center text-white bg-green-500 rounded-lg hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300">
                                Mark As Done
                            </button>
                        </form>
                    </div>

                    <!-- edit button -->
                    <div>
                        <form name="task_edit" action="{{ route( 'task.edit', ['task' => $task->id] ) }}" method="GET">
                            @csrf
                            <button class="items-center px-3 py-2 text-sm font-medium text-center text-white bg-orange-500 rounded-lg hover:bg-orange-800 focus:ring-4 focus:outline-none focus:ring-orange-300">
                                Edit
                            </button>
                        </form>
                    </div>

                </div>
            </div>
        </div>
        @endforeach

        @else
        <p>No tasks to display</p>
        @endif

    </x-slot:content>

    <x-slot:additional_content>

        <!-- form to add new task -->
        <div class="w-full lg:w-3/4 bg-gray-50 rounded-xl m-auto">
            <div class="bg-white rounded shadow px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                <h2 class="font-bold text-l">Add A New task</h2>

                <!-- form -->
                <x-task_form routename="task.store" method="POST"></x-task_form>
            </div>
        </div>

    </x-slot:additional_content>

</x-layout>