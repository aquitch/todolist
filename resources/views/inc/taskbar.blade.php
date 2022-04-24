<div class="panel-body">
        <!-- Display Validation Errors -->

 
        <!-- New Task Form -->
        <form class="form-horizontal" method='POST' action="{{ route('tasks.store')}}">
            @csrf
 
            <!-- Task Name -->
            <div class="form-group">
                <label for="task-name" class="col-sm-3 control-label">Task</label>
 
                <div class="col-sm-6">
                    <input type="text" name="task-name" id="task-name" class="form-control">
                </div>
                
            </div>
            
 
            <!-- Add Task Button -->
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-red">
                        <i class="fa fa-plus"></i> Add Task
                    </button>
                </div>
            </div>
        </form>
    </div>