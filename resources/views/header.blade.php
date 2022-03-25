<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Header</title>
</head>
<body>

<style>
    li {
        list-style-type: none;
        padding: 5px;
    }
    a {
        text-decoration: none;
    }
</style>
    <div class="d-flex" style="displey:flex;">
        <ul class="d-flex" style="display:flex; padding:5x">
            <li><a href="{{ URL::to('/') }}">Home</a></li>
            <li><a href=" {{ route('about.us')}}">About</a></li>
            <li><a href="#">Home</a></li>
            <li><a href="#">Home</a></li>
            <li><a href="#">Home</a></li>
            <li><a href="#">Home</a></li>

        </ul>
    </div>
</body>
</html>