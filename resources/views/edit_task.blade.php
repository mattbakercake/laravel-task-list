<x-layout>

    <x-slot:title>Edit Task</x-slot:title>

    <x-slot:content>

        <!-- form -->
        <x-task_form :task="$task" routename="task.update" method="PUT"></x-task_form>

    </x-slot:content>

</x-layout>