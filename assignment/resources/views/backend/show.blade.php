<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Address</th>
      <th scope="col">Hành động</th>
    </tr>
  </thead>
  <tbody>
      @foreach ($dulieu as $inra)
    <tr>
      <td>{{$inra->id}}</td>
      <td>{{$inra->name}}</td>
      <td>{{$inra->address}}</td>
      <td><a href="{{route('editdata')}}"><input type="button" value="Sửa"></a></td>
    </tr>
    @endforeach
  </tbody>
</table>
</body>
</html>