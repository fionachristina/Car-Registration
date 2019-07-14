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

    <title>Car</title>
</head>
<body>
    
    <div class="container">
    <div class="card mx-xl-5">

    <!-- Card body -->
    <div class="card-body">
        
        <div class="row">
            <form class="form-group" action="{{ route('cars') }}" method="POST">
            <p class="h4 text-center py-4">Enter Car Details</p>
                @csrf
                <label>Make: </label>
                <input class="form-control" id="make" class="@error('make') is-invalid @enderror" type="text" name="make"><br>
                @error('make')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <label>Model: </label>
                <input class="form-control" id="model" class="@error('model') is-invalid @enderror" type="text" name="model"><br>
                @error('model')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <label>Manufacture Date: </label>
                <input class="form-control" id="produced" class="@error('produced') is-invalid @enderror" type="date" name="produced"><br>
                @error('produced')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <button class="btn btn-info" type="submit">Add Car</button>
            </form>
        </div>
        </div>
                    </div>
    
        <h1>Cars Available</h1><br>
        <div class="row">
            
            @foreach ($allcars as $cars)
            <div class="card" style="width:300px">
                <div class="card-body">
                    <h3 class="card-title">{{$cars->make}}</h3>
                    <h3 class="card-title">{{$cars->model}}</h3>
                    <h3 class="card-title">{{$cars->produced_on}}</h3>
                    <form action="{{route('car',$cars->id)}}" method="POST">
                        @csrf
                        <input type="hidden" value="{{$cars->id}}">
                        <button type="submit" class="btn btn-info">more details</button>
                    </form>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</body>
</html>