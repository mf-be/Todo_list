<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
</head>
<body>
<form action="{{route('todos.update', $editid->id)}}" method="post">
@method ('PUT')
@csrf

    <label for="todo">ToDo:</label><br>>
    <input type="text" id="todo" name="todo" value="{{$editid->todo}}"><br>
    <label for="Kada">Kada:</label><br>>
    <input type="text" id="Kada" name="Kada" value="{{$editid->Kada}}"><br>
    <label for="Kolicina">Kolicina:</label><br>>
    <input type="text" id="Kolicina" name="Kolicina" value="{{$editid->Kolicina}}"><br>

    <input type="submit" value="Ažuriraj">

</form>
<form action="{{route('todos.destroy', $editid->id)}}" method="post">
@method('DELETE')
@csrf
<input type="submit" value="Izbriši">
</form>
</body>
</html>