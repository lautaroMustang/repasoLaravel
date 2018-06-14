<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="/css/app.css">
  </head>
  <body>
    <ul>
      @foreach ($products as $product)
        <li>{{$product->name}}</li>
      @endforeach
    </ul>

  </body>
</html>
