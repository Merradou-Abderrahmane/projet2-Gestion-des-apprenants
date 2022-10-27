<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Modifier Apprenant</title>
</head>

<body>
    <form action="/student/update/{{ $student->id }}" method="POST">
        @csrf
        Prénom <input type="text" name="first_name" value="{{$student->firstName}}"><br> <br>
        Nom    <input type="text" name="last_name" value="{{$student->lastName}}"><br> <br> 
        Email  <input type="text" name="email" value="{{$student->email}}"><br> <br>
        {{-- <input type="text" value="{{$id}}"  name="id"> --}}
        <button type="submit">edit</button>
    </form>


</body>

</html>