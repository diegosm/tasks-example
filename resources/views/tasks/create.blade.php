<form action="{{ route('tasks.store') }}" method="post">

    {{ csrf_field() }}

    <textarea name="title"></textarea>

    <BR>
    <input type="submit">

</form>