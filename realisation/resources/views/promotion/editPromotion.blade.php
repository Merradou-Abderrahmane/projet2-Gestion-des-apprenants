<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Promotions</title>
</head>
<body>
    <form action="/update/{{ $promotion->id }}" method="POST">
        @csrf
        {{-- @method('PUT') --}}
        {{-- <input type="hidden" name="id" value="{{$promotion->id}}"> --}}
        promotion Name :<input type="text" name="promotionName" value="{{$promotion->promotionName}}">
        <button type="submit">Update</button>
        {{-- Student --}}
        @foreach ($students as $student)
        <tr>
            {{-- <td>{{$student->id}}</td> --}}
            <td>{{$student->firstName}}</td>
            <td>{{$student->lastName}}</td>
            <td>{{$student->email}}</td>
            <td>
                {{-- <a href={{"delete/".$promotion['id']}}>Delete</a>
                <a href={{"edit/".$promotion['id']}}>Edit</a> --}}
            </td>
        </tr>
    @endforeach

    </form>
</body>
</html>