<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>registration page</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>

<body>
    <div style="width: 50%; margin:5% auto">
        <form action="{{url('registerUser')}}" method="post">
            @csrf
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Full Name</label>
                <input type="text" class="form-control" name="name" id="name" value="{{old('name')}}" aria-describedby="emailHelp">
            </div>
            @error('name')
            <div class="alert alert-danger">{{$message}}</div>
            @enderror
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" name="email" id="email" value="{{old('email')}}" aria-describedby="emailHelp">
            </div>
            @error('email')
            <div class="alert alert-danger">{{$message}}</div>
            @enderror
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" name="password" id="password">
            </div>
            @error('password')
            <div class="alert alert-danger">{{$message}}</div>
            @enderror
            <button type="submit" class="btn btn-primary">Register</button>
            <a href="{{url('login')}}"><button type="button" class="btn btn-primary">Log In</button></a>
        </form>
    </div>
</body>

</html>