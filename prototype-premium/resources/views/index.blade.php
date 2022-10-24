{{-- {{$promotions}} --}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Table to show data</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>PromotionName</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($promotions as $promotion)
                <tr>
                    <td>{{$promotion->id}}</td>
                    <td>{{$promotion->promotionName}}</td>
                    <td>
                        <a href={{"delete/".$promotion['id']}}>Delete</a>
                        <a href={{"edit/".$promotion['id']}}>Edit</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>