<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <center>
    <h3>Cliente: {{$data->name}}</h3>

    <h3>Direccion: {{$data->rec_address}}</h3>

    <h3>Telefono: {{$data->phone}}</h3>

    <h2>Producto: {{$data->product->title}}</h2>

    <h2>Precio: {{$data->product->price}}</h2>

    <img height="250" src="products/{{$data->product->image}}">

  </center>
</body>
</html>