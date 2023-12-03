<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @if($category_html)
        <h1>welcome to {{$name_game_html}}, this game belongs to: {{$category_html}} category.</h1>
    @else
        <h1>welcome to {{$name_game_html}}.
    @endif
        <h2>Today date and hour is:  {{$date_html}}</h2>
</body>
</html>