<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>{{$product->name}}</title>
    <link rel="stylesheet" href="/css/app.css">
  </head>
  <body>
    <img src="{{ asset('storage/' . $product->fotopath) }}" alt="">
    <h1>{{$product->name}}</h1>
    <p>{{$product->cost}}</p>
    <p>{{$product->profit_margin}}</p>
    <p>{{$product->getPrice()}}</p>
    <p>{{$category->name}}</p>
    <p>Propiedades:</p>
    <ul>
      @foreach ($properties as $property)
        <li>{{$property->name}}</li>
      @endforeach
    </ul>
    <form action="/productos/{{$product->id}}" method="post">
      {{ csrf_field() }}
      {{method_field('delete')}}
      <button type="submit">Borrar</button>
    </form>
    <form action="/productos/{{$product->id}}/edit" method="get">
      {{ csrf_field() }}
      <button type="submit">modificar</button>
    </form>
  </body>
</html>
