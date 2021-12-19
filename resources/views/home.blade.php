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
        }

        .card{
            text-align: center;
            background-color: aquamarine;
        }

        button{
            width: 10rem;
            background-color: gray;
            color: white;
        }


    </style>
</head>
<body>
    <form action="product" method="get">
        <input type="text" name="search" id="">
        <input type="submit" value="Search">
    </form>
    @foreach ($menu as $key)
        <h2>{{$key[0]->category}}</h2>
        <div class="container">
            @foreach($key->slice(0, 3) as $item)
                <a href={{"product?search=".preg_replace('/\s+/', '+', $item->name)}} class="card">
                <h4>{{$item->name}}</h4>
                <img src={{$item->image}} alt="" width="300" height="300">
                </a>
            @endforeach
        </div>
        <a href={{"category/".$key[0]->category}}><button>see all</button></a>
    @endforeach
</body>
</html>