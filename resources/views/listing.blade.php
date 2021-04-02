<h1>hello again</h1>
<table class="table table-striped">
    <thead>
    <tr>
        <th>#</th>
        <th>Short URL</th>
        <th>Long URL</th>
        <th>Time created</th>

    </tr>
    </thead>
    <tbody>
    @if(!$shorturls->isEmpty())
        @foreach($shorturls as $index=>$shorturl)
            <tr>
                <td>{{$index+1}}</td>
                <td>{{$shorturl->shortURL}}</td>
                <td>{{$shorturl->longURL}}</td>
                <td>{{$shorturl->create_at}}</td>
                <td>{{$shorturl->update_at}}</td>
                <td>

                </td>
            </tr>
        @endforeach
    @endif
    </tbody>
</table>
<p>
    <a href="/new"><button>Create Short URL</button></a>
</p>
