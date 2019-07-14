<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
    @foreach ($particularcar as $car)
    <div class="card" style="width:400px">
        <div class="card-body">
            <h4 class="card-title">{{$car->make}}</h4>
            <h4 class="card-title">{{$car->model}}</h4>
            <h4 class="card-title">{{$car->produced_on}}</h4>
            <a href="{{route('allcars')}}"><button type="submit" class="btn btn-primary">Home</button></a>
        </div>
    </div>
    @endforeach
</body>
</html>