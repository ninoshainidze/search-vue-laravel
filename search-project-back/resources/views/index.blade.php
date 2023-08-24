<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet"/>
</head>
<body class="antialiased">
<div>
    <form action="{{ route('search.buildings') }}" method="GET">
        <input type="text" name="name" placeholder="Name"
               value="{{ isset($_GET['name']) ?  $_GET['name'] : ''}}"/>
        <input type=" number" name="bedroom" placeholder="Bedroom"
               value="{{ isset($_GET['bedroom']) ?  $_GET['bedroom'] : ''}}"/>
        <input type="number" name="bathroom" placeholder="Bathroom"
               value="{{ isset($_GET['bathroom']) ?  $_GET['bathroom'] : ''}}"/>
        <input type="number" name="storey" placeholder="Storey"
               value="{{ isset($_GET['storey']) ?  $_GET['storey'] : ''}}"/>
        <input type="number" name="garage" placeholder="Garage"
               value="{{ isset($_GET['garage']) ?  $_GET['garage'] : ''}}"/>
        <input type="number" name="min_price" placeholder="Min price"
               value="{{ isset($_GET['min_price']) ?  $_GET['min_price'] : ''}}"/>
        <input type="number" name="max_price" placeholder="Max price"
               value="{{ isset($_GET['max_price']) ?  $_GET['max_price'] : ''}}"/>
        <button type="submit">Search</button>
    </form>

    @if(isset($data) && $data->isNotEmpty())
        @foreach ($data as $item)
            <div class="item-list">
                <p>{{ $item->name }}</p>
            </div>
        @endforeach
    @else
        <div>
            <h2>No result found</h2>
        </div>
    @endif
</div>
</body>
</html>
