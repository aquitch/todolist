<form method='POST' action="{{ route('tasks.update', ['task'=>$task->id])}}">
    @csrf
    @method('PUT')
    <div>
        
        <label for="task-name">Task Name</label>
        <div class="inline-flex">
        <input type="text" value="{{ $task->name }}"id="task-name" name="task-name">
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