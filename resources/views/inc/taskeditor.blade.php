<form method='POST' action="{{ route('tasks.update', ['task'=>$task->id])}}">
    @csrf
    @method('PUT')
    <div>
        
        <label for="task-name">Task Name</label>
        <div class="inline-flex">
        <input class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"type="text" value="{{ $task->name }}"id="task-name" name="task-name">
        @error('task-name')
            <div class=form-error>
                {{ $message }}
            </div>
        @enderror
        <button class="btn btn-yellow"type="submit">
            <i class="fa fa-plus"></i> Submit
        </button>
        </div>
        
    </div>
 </form>