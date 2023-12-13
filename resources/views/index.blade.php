{{-- THE LIST IS HERE! --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
</head>
<body>
    <h1>New index view created by function index in -> 'class GamesController'</h1>
    <p><a href="{{route ('gamesCreate')}}">Link to /games/create </a></p>
    <h2>Welcome to GamesList</h2>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>NAME</th>
                <th>CATEGORY-ID</th>
                <th>CREATED</th>
                <th>ACTIVE</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($video_game_list_html as $item) {{-- fn index in GamesController --}}
                <tr style="text-align: center">  
                    <td>{{ $item->id }}</td>
                    <td><a href="{{route('gamesView',$item->id)}}">{{$item->name}}</a></td>
                    <td>{{ $item->category_id }}</td>
                    <td>{{ $item->created_at }}</td>
                    <td>
                        @if ( $item->active )
                            <span style="color: rgb(32, 203, 32)">ACTIVE</span>
                        @else
                            <span style="color: red">INACTIVE</span>
                        @endif
                    </td>
                </tr>
            @empty
                <tr style="text-align: center">
                    <td>There are not games currently</td>
                </tr>
            @endforelse
        </tbody>
    </table>
{{-- old forelse --
    @forelse ($video_game_list_html as $item)
        <ul>
            <li>{{ $item }}</li>
        </ul>
    @empty
        <li>There are not games currently</li>
    @endforelse 
--}}
</body>
</html>