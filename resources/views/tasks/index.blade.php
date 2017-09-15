<a href="{{ route('tasks.create') }}">Add tasks</a><BR>

<ul>
@foreach( $tasks as $task )
    <li>
        {{ $task->title }}
        <BR>
        <button onclick="window.location='{{ route('tasks.edit', $task) }}'" name="edit">Edit</button>
        <form action="{{ route('tasks.delete', $task )}}" method="post">
            {{ csrf_field() }}
            {{ method_field('DELETE') }}
            <input type="submit" value="Delete">
        </form>

    </li>
@endforeach
</ul>