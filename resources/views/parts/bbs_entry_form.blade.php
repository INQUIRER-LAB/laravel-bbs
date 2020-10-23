@if ($errors->any())
<div class="errors">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<form method="POST" action="{{ url('create') }}">
    @csrf

    <div>
        <label>Name</label><br />
        <input type="text" name="author" value="名無し" placeholder="お名前" />
    </div>

    <div>
        <label>Title</label><br />
        <input type="text" name="title" placeholder="タイトル" />
    </div>

    <div>
        <label>Body</label><br />
        <textarea name="body"></textarea>
    </div>

    <input class='btn btn-primary' type="submit" value="投稿">
</form>