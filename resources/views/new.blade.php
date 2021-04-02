<h1>Create Short URL Page</h1>

<form action="/" method="post">
    @csrf
    <p>
        <label for="student_no">Past Long URL</label>
        <input type ="text" name="longURL" id="longURL">
    </p>
    <p>
        <a href="/"><button>Create Short URL</button></a>
    </p>
</form>
