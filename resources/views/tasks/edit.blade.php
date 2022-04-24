<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('ToDo List') }}
        </h2>
    </x-slot>
        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
            <form class="form bg-white p-6 border-1" method='POST' action="{{ route('tasks.update', ['task'=>$task->id])}}">
                @csrf
                @method('PUT')
                <div>
                    <label clas="text-sm" for="task-name">Task Name</label>
                    <input class="text-lg border-1" type="text" value="{{ $task->name }}"id="task-name" name="task-name">
                    @error('task-name')
                        <div class=form-error>
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div>
                    <button class="border-1" type="submit">Submit</button>
                </div>
            </form>
        </div>
</x-app-layout> 