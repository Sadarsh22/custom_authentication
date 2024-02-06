<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <title>dashboard</title>
</head>

<body>
    <h1>Welcome! Login Successfull</h1>
    <table class="table table-striped">
        <tr>
            <td>
                <h2>hello {{session('name')}} welcome back!</h2>
            </td>
            <td>
                <a href="{{url('logout')}}"><button type="button">LogOut</button></a>
            </td>
        </tr>
    </table>

</html>