<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>{{$product->name}}</title>
    <link rel="stylesheet" href="/css/app.css">
  </head>
  <body>
    <h1>{{$product->name}}</h1>
    <p>{{$product->cost}}</p>
    <p>{{$product->profit_margin}}</p>
    <p>{{$product->getPrice()}}</p>
  </body>
</html>
