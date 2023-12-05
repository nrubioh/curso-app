<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create</title>
</head>
<body>
    <h1>New create view created by Controller</h1>
    <p><a href="{{route ('gamesIndex')}}"> Link to index/games </a></p>
    <h2>Welcome to GamesList</h2>
        <h2>Form to upload games</h2>
        <form action="{{route('gamesUpdateVideogame')}}" method="POST"> 
            @csrf {{-- token --}}
            
            <input type="hidden" name="update_game_id" value="{{$game_update_html->id}}">

            <input type="text" placeholder="Video Game Name" name="name_game" value="{{$game_update_html->name}}">
                
            @error('name_game')
                {{$message}}
            @enderror
            
            <select name="category_id" id="">  
                @foreach ($category_update_html as $item)
                    <option value="{{$item->id}}" 
                        @if ($item->id == $game_update_html->category_id) selected @endif>{{$item->name}} </option>
                @endforeach
            </select>
            <input type="submit" value="Send">
        </form>
</body>
</html>