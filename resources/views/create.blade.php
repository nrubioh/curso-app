<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Games Create</title>
</head>
<body>
    <h1>Create View</h1>
    <p><a href="{{route ('gamesIndex')}}"> Link to index </a></p>
    
    <h2>Form to upload games</h2>
        <form action="{{route('gamesStoreVideogame')}}" method="POST"> 
            @csrf {{-- token --}}

            <input type="text" placeholder="Video Game Name" name="name_game">
            @error('name_game')
                {{$message}}
            @enderror
            <select name="category_id" id="">  
                @foreach ($category_list_html as $item)
                <option value="{{$item->id}}">{{$item->name}}</option>
                @endforeach
            </select>
            <input type="submit" value="Send">
        </form>
</body>
</html>