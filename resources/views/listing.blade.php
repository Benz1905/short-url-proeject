{{--<h1>hello again</h1>--}}
{{--<table class="table table-striped">--}}
{{--    <thead>--}}
{{--    <tr>--}}
{{--        <th>#</th>--}}
{{--        <th>Short URL</th>--}}
{{--        <th>Long URL</th>--}}
{{--        <th>Time created</th>--}}

{{--    </tr>--}}
{{--    </thead>--}}
{{--    <tbody>--}}
{{--    @if(!$shorturls->isEmpty())--}}
{{--        @foreach($shorturls as $index=>$shorturl)--}}
{{--            <tr>--}}
{{--                <td>{{$index+1}}</td>--}}
{{--                <td>{{$shorturl->shortURL}}</td>--}}
{{--                <td>{{$shorturl->longURL}}</td>--}}
{{--                <td>{{$shorturl->create_at}}</td>--}}
{{--                <td>{{$shorturl->update_at}}</td>--}}
{{--                <td>--}}

{{--                </td>--}}
{{--            </tr>--}}
{{--        @endforeach--}}
{{--    @endif--}}
{{--    </tbody>--}}
{{--</table>--}}

@if($message = Session::get('success'))
    <p>{{$message}}</p>
@endif

<p>Your Quota Remaining {{count($shorturls)}}/10 </p>
@if(!$shorturls->isEmpty())
    <table>
        <tr>
            <td>long URL</td>
            <td>Short URL</td>
            <td>create</td>
        </tr>
        @foreach($shorturls as $shorturl)
            <tr>
                <td>{{$shorturl->longURL}}</td>
                <td><a herf = "/gt/{{$shorturl->shortURL}}" target="_blank">{{$shorturl->shortURL}}</a></td>
                <td>{{$shorturl->created_at}}</td>
            </tr>
        @endforeach
    </table>
@endif
<p>
    <a href="/new"><button>Create Short URL</button></a>
</p>
