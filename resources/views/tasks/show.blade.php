@extends('layout.app')

@section('content')
<div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
    <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">

        <div class="mt-8 bg-white overflow-hidden shadow sm:rounded-lg">

                <div>
                    <h3>
                        {{$task['name']}} <br>
                    </h3>
                    <h5>
                        {{$task['content']}}
                    </h5>
                    <form class="form bg-white p-6 border-1" method='GET' action="{{ route('tasks.edit', $task['id']) }}">
                        @csrf
                        <button class="border-1" type="submit">Edit</button>
                    </form>

                   <form class="form bg-white p-6 border-1" method='POST' action="{{ route('tasks.destroy', $task['id']) }}">
                        @csrf
                        @method('DELETE')
                        <button class="border-1" type="submit">Delete</button>
                    </form>

                </div>
        </div>
    </div>
</div>
@endsection