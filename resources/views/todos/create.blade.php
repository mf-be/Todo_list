<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create</title>
</head>
<body>
<form method="post" action="{{route('todos.store')}}">
@csrf

    <label for="todo">todo:</label><br>>
    <input type="text" id="todo" name="todo"><br>
    <label for="Kada">Kada:</label><br>>
    <input type="text" id="Kada" name="Kada"><br>
    <label for="Kolicina">Kolicina:</label><br>>
    <input type="text" id="Kolicina" name="Kolicina"><br>

    <input type="submit" value="Unesi">

</form>
</body>
</html>