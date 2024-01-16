@props([
'task' => (object)[
    'id' => null,
    'name' => null,
    'description' => null
],
'routename',
'method'
])

<form id="new_task" action="{{ route($routename , ['task' => $task->id]) }}" method="POST">
    @csrf
    @method("$method")
    <div class="grid grid-cols-8">
        <div class="col-span-3 inline-block h-16 ">
            <label for="name">Task Name:</label>
            <input class="border border-gray-200 @error('name') border-red-600 @enderror" type="input" name="name" value="{{ $task->name, old('name') }}" />
            @error('name')
            <div class="alert alert-danger text-red-600">{{ $message }}</div>
            @enderror
        </div>
        <div class="col-span-3 inline-block h-16">
            <label for="description">Task Description:</label>
            <input class="border border-gray-200 @error('description') border-red-600 @enderror" type="text" name="description" value="{{ $task->description, old('description'), }}" />
            @error('description')
            <div class="alert alert-danger text-red-600">{{ $message }}</div>
            @enderror
        </div>
        <div class="col-span-2 inline-block h-16">
            <button class="float-right px-3 py-2 text-sm font-medium text-center text-white bg-blue-500 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300" type="submit">Submit</button>
        </div>
    </div>
</form>