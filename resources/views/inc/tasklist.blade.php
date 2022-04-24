@if (count($tasks) > 0)
                        <div>
                            <div>
                                <h1>Current Tasks</h1>
                            </div>
                
                            <div class="panel-default">
                                <table class="table">
                
                                    <!-- Table Headings 
                                    <thead>
                                        <th>Task</th>
                                        <th>&nbsp;</th>
                                    </thead>-->
                
                                    <!-- Table Body -->
                                    <tbody>
                                        @foreach ($tasks as $task)
                                            <tr>
                                                <!-- Task Name -->
                                                <td>
                                                    <div class="p-6 bg-indigo-50 border-b border-gray-200"><a href="{{ route('tasks.show', ['task'=>$task['id']]) }}"> {{$task['name']}} </a></div>
                                                </td>
                                                <td>
                                                    <tr>
                                                        <!-- Delete and Edit Buttons -->
                                                        <td>
                                                            <form>
                                                                @csrf
                                                                <button type="submit" class="btn btn-red" formaction="{{ route('tasks.destroy', $task['id']) }}" formmethod="POST">
                                                                @method('DELETE')
                                                                <i class="fa fa-trash"></i> Delete
                                                                </button>
                                                                <button type="submit" class="btn btn-yellow" formaction="{{ route('tasks.edit', $task['id']) }}" formmethod="GET">
                                                                <i class="fa fa-pencil"></i> Edit
                                                                </button>
                                                            </form>
                                                        </td>
                                                    </tr>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>