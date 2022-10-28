{{-- {{$promotions}} --}}
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Gestion de promotion</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="{{asset('css/style.css')}}">
{{-- <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script> --}}
{{-- <script>
$(document).ready(function(){
	$('[data-toggle="tooltip"]').tooltip();
});
</script> --}}
</head>
<body>
    <h1 id="add-title">👨🏻‍🎓 Gestion des apprenants</h1>

<div class="container-xl">
    <div class="table-responsive">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-8"><h2>Gestion des apprenants <b> Solicode</b></h2></div>
                    <div class="col-sm-4">
                        <div class="search-box">
                            <i class="material-icons">&#xE8B6;</i>
                            <input type="text" class="form-control" id="search-input" placeholder="Search&hellip;">
                        </div>
                    </div>
                </div>
            </div>
            <table class="table table-striped table-hover table-bordered">
                <thead>
                    <tr>
                        <th>Nom de promotion </th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody id="results">
                    @foreach ($promotions as $promotion)
                    <tr>
                        <td>{{$promotion->promotionName}}</td>
                        <td>
                            <a href={{"edit/".$promotion['id']}}  class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                            <a href={{"delete/".$promotion['id']}} class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="clearfix">
                {{-- <div class="hint-text">Showing <b>5</b> out of <b>25</b> entries</div> --}}
                <a href={{url("add/")}} ><i class="fa-regular fa-square-plus"></i>+ Ajouter Promotion </a>
            </div>
        </div>
    </div>  
</div>   
<script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
<script src="{{ asset('js/main.js') }}"></script>
</body>
</html>