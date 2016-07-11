<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    @foreach ($students as $student)
      <h2>{{$student->name}} <small>{{$student->id}}</small></h2>
    @endforeach
  </body>
</html>
