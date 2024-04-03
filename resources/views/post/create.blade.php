<form action="{{ route('post.store') }}" method="POST">
    @csrf
    <input type="text" name="name" class="form-control">
    <input type="text" name="description" class="form-control">
    <input type="submit" value="Submit">
</form>
