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
    </form>
</body>
</html>