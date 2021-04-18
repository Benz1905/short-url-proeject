<h1>Create Short URL Page</h1>

<form action="/save" method="post">
    @csrf
    <p>
        <label for="student_no">Past Long URL</label>
        <input type ="text" name="long_url" id="long_url">
    </p>
    <p>
        <a href="/"><button type="submit">Create Short URL</button></a>
    </p>
</form>
