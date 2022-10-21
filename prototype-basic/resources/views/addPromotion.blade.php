<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Promotion</title>
</head>
<body>
    <form action="add" method="POST">
        @csrf
        promotion Name : <input type="text" name="promotionName"><br>
        <button type="submit"></button>
    </form>
</body>
</html>