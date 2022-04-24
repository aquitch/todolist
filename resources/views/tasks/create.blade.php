<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('ToDo List') }}
        </h2>
    </x-slot>

        <form class="form bg-white p-6 border-1" method='POST' action="{{ route('tasks.store')}}">
            @csrf
            <div>
                <label clas="text-sm" for="task-name">Task Name</label>
                <input class="text-lg border-1" type="text" value="{{ old('task-name') }}"id="task-name" name="task-name">
                @error('task-name')
                    <div class=form-error>
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div>
                <label clas="text-sm" for="task-content">Content</label>
                <input class="text-lg border-1" type="text" value="{{ old('task-content') }}" id="task-content" name="task-content">
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
</x-app-layout>