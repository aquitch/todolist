<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('ToDo List') }}
        </h2>
    </x-slot>

    <form method='POST' action="{{ route('tasks.store')}}">
        @csrf
        <div>
            <label for="task-name">Task Name</label>
            <input type="text" value="{{ old('task-name') }}"id="task-name" name="task-name">
            @error('task-name')
                <div class=form-error>
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div>
            <label for="task-content">Content</label>
            <input type="text" value="{{ old('task-content') }}" id="task-content" name="task-content">
            @error('task-name')
                <div class=form-error>
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div>
            <button class="btn btn-yellow" type="submit">
                <i class="fa fa-plus"></i>Submit
            </button>
        </div>
    </form>
</x-app-layout>