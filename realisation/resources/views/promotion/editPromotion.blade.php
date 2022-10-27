<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Promotions</title>
</head>
<body>
    <div>
        <input type="text" placeholder="Search" id="search-input">
        <div id="results">

        </div>
    </div>
    <form action="/update/{{ $promotion->id }}" method="POST">
        @csrf
        {{-- @method('PUT') --}}
        {{-- <input type="hidden" name="id" value="{{$promotion->id}}"> --}}
        Nom de la promotion : <input type="text" name="promotionName" value="{{$promotion->promotionName}}">
        <button type="submit">Update</button> <br> <br>
        {{-- Student --}}
            <a href={{url("student/addStudent/")."/".$promotion->id}} >Ajouter Apprenant</a>
            {{-- <button type="button"  class="btn btn-info add-new"><i class="fa fa-plus"></i> Ajouter apprenant</button> --}}
        @foreach ($students as $student)
        <tr>
            {{-- <td>{{$student->id}}</td> --}}
            {{-- <td>{{$student->firstName}}</td> --}}
            <td>{{$student->lastName}}</td>
            {{-- <td>{{$student->email}}</td> --}}
            <td>
                <a href={{"/student/ /".$student['id']}}>Delete</a>
                <a href={{"/student/edit/".$student['id']}}>Edit</a> <br> <br>
            </td>
        </tr>
    @endforeach

    </form>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <script src="{{ asset('js/student.js') }}"></script></body>
</html>