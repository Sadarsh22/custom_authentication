<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login page</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>

<body>
    <div style="width: 50%; margin:5% auto">
        @if (session('error'))
        <div class="alert alert-danger">{{ session('error') }}</div>
        @endif
        <form action="{{url('loginUser')}}" method="post">
            @csrf
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
            <button type="submit" class="btn btn-primary">log in</button>
        </form>
    </div>
</body>

</html>