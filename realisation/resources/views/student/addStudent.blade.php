<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ajouter Apprenant</title>
</head>

<body>
    <form action="/student/add" method="POST">
        @csrf
        Prénom <input type="text" name="first_name"><br> <br>
        Nom    <input type="text" name="last_name"><br> <br> 
        Email  <input type="text" name="email"><br> <br>
        <input type="text" value="{{$id}}"  name="id">
        <button type="submit">add</button>
    </form>
</body>

</html>