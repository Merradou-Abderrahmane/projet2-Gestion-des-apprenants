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
    <div>
        <input type="text" placeholder="Search" id="search-input">
    </div>
    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>PromotionName</th>
            </tr>
        </thead>
        <tbody id="results">
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
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <script src="{{ asset('js/main.js') }}"></script>
</body>
</html>