    <!-- New Task Form -->
<form method='POST' action="{{ route('tasks.store')}}">
    @csrf

    <!-- Task Name -->
    <label for="task-name">Task</label>

    <div class="inline-flex">
        <input type="text" name="task-name" id="task-name" class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
    
    <!-- Add Task Button -->
        <button type="submit" class="btn btn-red">
            <i class="fa fa-plus"></i> Add Task
        </button>           
    </div>
</form>
