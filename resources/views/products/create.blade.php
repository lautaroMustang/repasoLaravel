<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="/css/app.css">
  </head>
  <body>
    <div class="container">
      <h1>Agregar Productos</h1>
      <form class="col-md-5" action="/productos/agregar" method="post">
        {{ csrf_field() }}
        <div class="form-group">
          <label for="name">Nombre</label>
          <input type="text" name="name" id="name" value="{{old('name')}}" class="form-control">
          @if ($errors->has('name'))
            <div class="alert alert-danger">
              <ul>
                @foreach ($errors->get('name') as $error)
                  <li>{{$error}}</li>
                @endforeach
              </ul>
            </div>
          @endif
        </div>
        <div class="form-group">
          <label for="cost">Precio</label>
          <input type="text" name="cost" id="cost" value="{{old('cost')}}" class="form-control">
          @if ($errors->has('cost'))
            <div class="alert alert-danger">
              <ul>
                @foreach ($errors->get('cost') as $error)
                  <li>{{$error}}</li>
                @endforeach
              </ul>
            </div>
          @endif
        </div>
        <div class="form-group">
  				<label for="profit_margin">Ganancias</label>
  				<input type="text" name="profit_margin" id="profit_margin" value="{{old('profit_margin')}}" class="form-control">
          @if ($errors->has('profit_margin'))
            <div class="alert alert-danger">
              <ul>
                @foreach ($errors->get('profit_margin') as $error)
                  <li>{{$error}}</li>
                @endforeach
              </ul>
            </div>
          @endif
  			</div>
        <div class="form-group">
          <label for="category_id">Categoría</label>
          <input type="text" name="category_id" id="category_id" value="{{old('category_id')}}" class="form-control">
          @if ($errors->has('category_id'))
            <div class="alert alert-danger">
              <ul>
                @foreach ($errors->get('category_id') as $error)
                  <li>{{$error}}</li>
                @endforeach
              </ul>
            </div>

          @endif
        </div>
        <div class="form-group">
          <button type="submit" name="button" class="btn btn-primary">Enviar</button>
        </div>
      </form>
    </div>
  </body>
</html>
