<form action="{{ route('tasks.update', $task) }}" method="post">

    {{ csrf_field() }}

    {{ method_field('PUT') }}

    <textarea name="title">{{ $task->title }}</textarea>

    <BR>
    <input type="submit">

</form>