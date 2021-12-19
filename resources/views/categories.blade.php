<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .container{
            display: flex;
            gap: 1rem;
            flex-wrap: wrap
        }

        .card{
            text-align: center;
            background-color: aquamarine;
        }
    </style>
</head>
<body>
    <h1>{{$menu[0]->category}}</h1>
    <div class="container">
    @foreach ($menu as $meal)
        <div class="card"> 
            <h2>{{$meal->name}}</h2>
            <img src={{$meal->image}} alt="" width="300" height="300">
            <h3>ფასი {{$meal->price}}$</h3>
        </div>
    @endforeach
    </div>
</body>
</html>